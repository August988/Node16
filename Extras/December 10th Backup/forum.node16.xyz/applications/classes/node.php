<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Node Display class of Iko
 */
if (!defined('BASEPATH')) {
    die();
}

class TIDY_Node
{

    /*
     * Putting the forum node together.
     * Breadcrumbs feature is to be postponed.
     */
    /*public function threads($id)
    {
        global $MYSQL, $LAYER;

        $MYSQL->bind('id', $id);
        $query = $MYSQL->query("SELECT * FROM {prefix}forum_posts WHERE post_type = 1 AND id = :id");
        $status = $this->thread_new_posts($id);

        $return = '';
        foreach ($query as $post) {
            $user = $LAYER->user($post['post_user']);
            $closed = ($post['post_locked'] == "1") ? $LAYER->tpl->entity('thread_closed') : '';
            $stickied = ($post['post_sticky'] == "1") ? $LAYER->tpl->entity('thread_stickied') : '';
            $post_time = simplify_time($post['post_time'], @$LAYER->sess->data['location']);
            if ($post['label'] != 0 || empty($post['label'])) {
                $MYSQL->bind('id', $post['label']);
                $label_qry = $MYSQL->query("SELECT label FROM {prefix}labels WHERE id = :id");
            }
            $return .= $LAYER->tpl->entity(
                'forum_listings_node_threads_posts',
                array(
                    'thread_name',
                    'user',
                    'user_avatar',
                    'post_time',
                    'latest_post',
                    'status',
                    'label'
                ),
                array(
                    '<a href="' . SITE_URL . '/thread.php/' . $post['title_friendly'] . '.' . $post['id'] . '">' . $post['post_title'] . '</a>' . $closed . $stickied,
                    '<a href="' . SITE_URL . '/members.php/cmd/user/id/' . $user['id'] . '">' . $user['username'] . '</a>',
                    $user['user_avatar'],
                    '<span title="' . $post_time['tooltip'] . '">' . $post_time['time'] . '</span>',
                    $this->latestReply($post['id'], SITE_URL . '/thread.php/' . $post['title_friendly'] . '.' . $post['id']),
                    $status,
                    (empty($label_qry['0']['label'])) ? ('') : ($label_qry['0']['label'])
                )
            );
        }
        return $return;
    }*/

    /*
     * Adding latest reply to the thread.
     */
    public function latestReply($id, $url)
    {
        global $MYSQL, $LAYER, $LANG;

        $id = (int)$id;
        $MYSQL->bind('origin_thread', $id);
        $query = $MYSQL->query("SELECT * FROM {prefix}forum_posts WHERE origin_thread = :origin_thread AND post_type = 2 ORDER BY post_time DESC");
        if (!empty($query)) {

            $q = (count($query) / POST_RESULTS_PER_PAGE);
            $page = ($q > 1) ? '/page/' . ceil($q) . '/' : '';

            $user = $LAYER->user($query['0']['post_user']);
            $post_time = simplify_time($query['0']['post_time'], @$LAYER->sess->data['location']);

            $return = $LAYER->tpl->entity(
                'forum_listings_node_threads_latestreply',
                array(
                    'user_avatar',
                    'post_user',
                    'post_time'
                ),
                array(
                    $user['user_avatar'],
                    '<a href="' . SITE_URL . '/members.php/cmd/user/id/' . $user['id'] . '">' . $user['username'] . '</a>',
                    '<small><a href="' . $url . $page . '#post-' . $query['0']['id'] . '"><span title="' . $post_time['tooltip'] . '">' . $post_time['time'] . '</span></a></small>',
                )
            );

            return $return;

        } else {
            return $LANG['bb']['none'];
        }
    }

    /**
     * Checking if the thread has been read
     *
     */

    public function thread_is_read($thread_id, $user)
    {
        global $MYSQL, $LAYER;
        if (isset($user)) {

            $MYSQL->bind('user_id', $user);
            $MYSQL->bind('thread_id', $thread_id);
            $tracker = $MYSQL->query("SELECT last_visit FROM {prefix}thread_tracking WHERE user_id = :user_id AND thread_id = :thread_id");

            if (!empty($tracker)) {
                $return = array(
                    'status' => true,
                    'last_visit' => $tracker['0']['last_visit']);
            } else {
                $return = array('status' => false);
            }

        } else {
            $return = array('status' => false);
        }

        return $return;
    }

    /**
     * Marking threads as read
     */


    public function thread_mark_read($thread_id)
    {
        global $MYSQL, $LAYER, $LANG;
        if (isset($LAYER->sess->data['id'])) {
            $status = $this->thread_is_read($thread_id, $LAYER->sess->data['id']);

            if ($status['status'] === false) {
                // Create new entry
                $MYSQL->bindMore(
                    array(
                        'user_id' => $LAYER->sess->data['id'],
                        'thread_id' => $thread_id,
                        'last_visit' => time()
                    )
                );

                try {
                    $MYSQL->query("INSERT INTO {prefix}thread_tracking (user_id, thread_id, last_visit) VALUES (:user_id, :thread_id, :last_visit)");
                } catch (mysqli_sql_exception $e) {
                    throw new Exception ($LANG['errors']['thread_tracker_insert']);
                }
            } elseif ($status['status'] === true) {
                // Update
                $MYSQL->bindMore(
                    array(
                        'last_visit' => time(),
                        'user_id' => $LAYER->sess->data['id'],
                        'thread_id' => $thread_id
                    )
                );
                try {
                    $MYSQL->query("UPDATE {prefix}thread_tracking SET last_visit = :last_visit WHERE user_id = :user_id AND thread_id = :thread_id");
                } catch (mysqli_sql_exception $e) {
                    throw new Exception ($LANG['errors']['thread_tracker_update']);
                }
            } else {
                throw new Exception ($LANG['errors']['thread_tracker_insert']);
            }
        }
    }

    public function thread_mark_unread($thread_id, $user, $time)
    {
        global $MYSQL, $LAYER, $LANG;
        $status = $this->thread_is_read($thread_id, $user);

        if ($status['status'] === false) {
            // Create new entry

            $MYSQL->bindMore(
                array(
                    'user_id' => $user,
                    'thread_id' => $thread_id,
                    'last_visit' => $time
                )
            );
            try {
                $MYSQL->query("INSERT INTO {prefix}thread_tracking (user_id, thread_id, last_visit) VALUES (:user_id, :thread_id, :last_visit)");
            } catch (mysqli_sql_exception $e) {
                throw new Exception ($LANG['errors']['thread_tracker_insert']);
            }
        } elseif ($status['status'] === true) {
            // Update

            $MYSQL->bindMore(
                array(
                    'last_visit' => $time,
                    'user_id' => $user,
                    'thread_id' => $thread_id
                )
            );
            try {
                $MYSQL->query("UPDATE {prefix}thread_tracking SET last_visit = :last_visit WHERE user_id = :user_id AND thread_id = :thread_id");
            } catch (mysqli_sql_exception $e) {
                throw new Exception ($LANG['errors']['thread_tracker_update']);
            }
        } else {
            throw new Exception ($LANG['errors']['thread_tracker_insert']);
        }

    }

    public function thread_new_posts($thread_id)
    {
        global $MYSQL, $LAYER, $LANG;
        $return = 'read';
        if (isset($LAYER->sess->data['id'])) {
            $tracker = $this->thread_is_read($thread_id, $LAYER->sess->data['id']);

            $MYSQL->bind('origin_thread', $thread_id);
            $MYSQL->bind('id', $thread_id);
            $query = $MYSQL->query("SELECT post_time FROM {prefix}forum_posts WHERE origin_thread = :origin_thread OR id = :id ORDER BY post_time DESC");
            if (isset($tracker['last_visit'])) {
                if ($query['0']['post_time'] > $tracker['last_visit']) {
                    $return = 'unread';
                }
            }

        }
        return $return;
    }

}

?>