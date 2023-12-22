<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * User Profile module for TidyBB
 * Everything that you want to display MUST be in the $content variable.
 */

if (!defined('BASEPATH')) {
    die();
}
$content = '';
$page_title = '';
$query      = null;

if ($PGET->g('id')) {
    $id = clean($PGET->g('id'));
    $MYSQL->bind('id', $id);
    $query = $MYSQL->query("SELECT * FROM {prefix}users WHERE id = :id");

    $MYSQL->bind('username', $id);
    $u_query = $MYSQL->query("SELECT * FROM {prefix}users WHERE username = :username");

    $query = (empty($query)) ? $u_query : $query;

    if (!empty($query)) {

        $page_title .= $LANG['bb']['members']['profile_of'] . ' ' . $query['0']['username'];
        $userg = $LAYER->usergroup($query['0']['user_group']);
        $user = $LAYER->user($id);

        if ($LAYER->sess->isLogged && $LAYER->sess->data['id'] != $user['id']) {
            // Inserting a new visitor
            $MYSQL->bindMore(array(
                'profile_owner' => $user['id'],
                'visitor' => $LAYER->sess->data['id']
            ));
            $query = $MYSQL->query('SELECT * FROM  {prefix}user_visitors WHERE profile_owner = :profile_owner AND visitor = :visitor');
            if (empty($query)) {
                $MYSQL->bindMore(array(
                    'profile_owner' => $user['id'],
                    'visitor' => $LAYER->sess->data['id']
                ));
                try {
                    $MYSQL->query('INSERT INTO {prefix}user_visitors (profile_owner, visitor, timestamp) VALUES (:profile_owner, :visitor, UNIX_TIMESTAMP(NOW()))');
                } catch (mysqli_sql_exception $e) {
                    throw new Exception ($LANG['global_form_process']['error_creating_thread']);
                }
            } else {
                $MYSQL->bindMore(array(
                    'profile_owner' => $user['id'],
                    'visitor' => $LAYER->sess->data['id']
                ));
                try {
                    $MYSQL->query('UPDATE {prefix}user_visitors SET timestamp = UNIX_TIMESTAMP(NOW()) WHERE profile_owner = :profile_owner AND visitor = :visitor');
                } catch (mysqli_sql_exception $e) {
                    throw new Exception ($LANG['global_form_process']['error_creating_thread']);
                }

            }

        }
    }
} else {
    if ($LAYER->sess->isLogged) {
        $page_title .= $LANG['bb']['members']['profile_of'] . ' ' . $LAYER->sess->data['username'];
        $userg      = $LAYER->usergroup($LAYER->sess->data['user_group']);
        $user       = $LAYER->user($LAYER->sess->data['id']);
        $query['0'] = $user;
    } else {
        redirect(SITE_URL . '/404.php');
    }
}

if (isset($user) && isset($userg) && isset($page_title)) {

    if (isset($_POST['comment_submit'])) {
        $comment_insert = clean($_POST['comment']);
        $MYSQL->bind('comment', $comment_insert);
        $MYSQL->bind('writer', $LAYER->sess->data['id']);
        $MYSQL->bind('profile_owner', $user['id']);
        $MYSQL->query("INSERT INTO {prefix}user_comments (comment, writer, profile_owner, timestamp) VALUES (:comment, :writer, :profile_owner, UNIX_TIMESTAMP(NOW()))");
    }

    //Recent activity protocol
    $recent_activity = '';
    $MYSQL->bind('post_user', $query['0']['id']);
    $query = $MYSQL->query("SELECT * FROM {prefix}forum_posts WHERE post_user = :post_user ORDER BY post_time DESC LIMIT 15");
    foreach ($query as $ac) {
        //User created thread
        if ($ac['post_type'] == "1") {
            $recent_activity .= str_replace(
                array(
                    '%url%',
                    '%title%',
                    '%date%'
                ),
                array(
                    SITE_URL . '/thread.php/' . $ac['title_friendly'] . '.' . $ac['id'],
                    $ac['post_title'],
                    date('F j, Y', $ac['post_time'])
                ),
                $LANG['bb']['members']['posted_thread']
            );
        } else {
            //User replied to thread
            $thread = thread($ac['origin_thread']);
            $recent_activity .= str_replace(
                array(
                    '%url%',
                    '%title%',
                    '%date%'
                ),
                array(
                    SITE_URL . '/thread.php/' . $thread['title_friendly'] . '.' . $thread['id'] . '#post-' . $thread['id'],
                    $thread['post_title'],
                    date('F j, Y', $ac['post_time'])
                ),
                $LANG['bb']['members']['replied_to']
            );
        }
    }

    //Moderation tools
    $mod_tools = '';
    if ($LAYER->perm->check('access_moderation')) {
        if ($user['is_banned'] == "1") {
            $mod_tools .= $LAYER->tpl->entity(
                'mod_tools_profile',
                array(
                    'ban_user',
                    'ban_user_url'
                ),
                array(
                    'Unban User',
                    SITE_URL . '/mod/unban.php/id/' . $id
                ),
                'buttons'
            );
        } else {
            $mod_tools .= $LAYER->tpl->entity(
                'mod_tools_profile',
                array(
                    'ban_user',
                    'ban_user_url'
                ),
                array(
                    'Ban User',
                    SITE_URL . '/mod/ban.php/id/' . $user['id']
                ),
                'buttons'
            );
        }
    }

    //Admin tools
    if ($LAYER->perm->check('access_administration')) {
        $mod_tools .= $LAYER->tpl->entity(
                'admin_tools_profile',
                array(
                    'edit_user',
                    'edit_user_url'
                ),
                array(
                    'Edit User',
                    SITE_URL . '/admin/edit_user.php/id/' . $user['id']
                ),
                'buttons'
            );
    }

    //profile comments
    $comments = '';
    $MYSQL->bind('profile_owner', $user['id']);
    $query = $MYSQL->query("SELECT writer,comment,timestamp FROM {prefix}user_comments WHERE profile_owner = :profile_owner ORDER BY timestamp DESC LIMIT 10");
    foreach ($query as $entry) {

        $writer = $LAYER->user($entry['writer']);
        $comment = $LAYER->lib_parse->parse($entry['comment']);
        $date_temp = simplify_time($entry['timestamp']);
        $date = $date_temp['time'];
        $comments .= $LAYER->tpl->entity(
            'user_profile_comments',
            array(
                'writer',
                'comment',
                'date',
                'avatar',
                'profile_url'
            ),
            array(
                '<a href="' . SITE_URL . '/members.php/cmd/user/id/' . $writer['id'] . '">' . $writer['username_style'] . '</a>',
                $comment,
                $date,
                $writer['user_avatar'],
                SITE_URL . '/members.php/cmd/user/id/' . $user['id']
            )
        );
    }
    $form = '';
    if ($LAYER->sess->isLogged) {
        $form = $LAYER->tpl->entity('user_profile_comments_form', 'comments_action', '');
    }

    //profile visitors
    $visitors = '<div><ul class="visitors_framed">';
    $MYSQL->bind('profile_owner', $user['id']);
    $query = $MYSQL->query("SELECT visitor FROM {prefix}user_visitors WHERE profile_owner = :profile_owner ORDER BY timestamp DESC LIMIT 10");
    foreach ($query as $entry) {
        $visitor = $LAYER->user($entry['visitor']);
        $visitors .= '<li><a href="' . SITE_URL . '/members.php/cmd/user/id/' . $visitor['id'] . '" title="' . $visitor['username'] . '"><img src="' . $visitor['user_avatar'] . '" class="img-thumbnail" style="width:45px;height:45px;" /></a></li>';
    }
    $visitors .= '</ul></div>';

    //profile followers
    $followers = '<div><ul class="visitors_framed">';
    $MYSQL->bind('profile_owner', $user['id']);
    $query = $MYSQL->query("SELECT follower FROM {prefix}user_followers WHERE profile_owner = :profile_owner");
    foreach ($query as $entry) {
        $follower = $LAYER->user($entry['follower']);
        $followers .= '<li><a href="' . SITE_URL . '/members.php/cmd/user/id/' . $follower['id'] . '" title="' . $follower['username'] . '"><img src="' . $follower['user_avatar'] . '" class="img-thumbnail" style="width:45px;height:45px;" /></a></li>';
    }
    $followers .= '</ul></div>';

    //custom profile fields
    $fields = '<ul class="list-group">';
    $MYSQL->bind('profile_owner', $user['id']);
    $query = $MYSQL->query("SELECT * FROM {prefix}profile_field_content WHERE userid = :profile_owner");
    foreach ($query as $field) {
        $MYSQL->bind('fieldid', $field['fieldid']);
        $f_content = html_entity_decode($field['content']);
        $getfield = $MYSQL->query("SELECT * FROM {prefix}profile_fields WHERE id = :fieldid");
        $fields .= '<li class="list-group-item"><h4 class="list-group-item-heading">'.$getfield['0']['title'].'</h4>
    <p class="list-group-item-text">'.$f_content.'</p></li>';
    }
    $fields .= '</ul>';


    //Breadcrumbs
    $LAYER->tpl->addBreadcrumb(
        $LANG['bb']['forum'],
        SITE_URL . '/forum.php'
    );
    $LAYER->tpl->addBreadcrumb(
        $LANG['bb']['members']['home'],
        SITE_URL . '/members.php'
    );
    $LAYER->tpl->addBreadcrumb(
        $LANG['bb']['members']['profile_of'] . ' ' . $user['username'],
        '#',
        true
    );
    $content .= $LAYER->tpl->breadcrumbs();
    $follow = $LAYER->sess->data['id'];
    //user profile
    $content .= $LAYER->tpl->entity(
        'user_profile_page',
        array(
            'follow',
            'id',
            'username',
            'usernamenostyle',
            'user_avatar',
            'usergroup',
            'registered_date',
            'user_signature',
            'about_user',
            'location',
            'flag',
            'gender',
            'age',
            'recent_activity',
            'mod_tools',
            'visitors',
            'followers',
            'comments',
            'profile_fields',
            'form'
        ),
        array(
            $LAYER->sess->data['id'],
            $user['id'],
            $user['username_style'],
            $user['username'],
            $user['user_avatar'],
            $userg['group_name'],
            localized_date($user['date_joined'], @$LAYER->sess->data['location']),
            $LAYER->lib_parse->parse($user['user_signature']),
            $LAYER->lib_parse->parse($user['about_user']),
            $LANG['location'][$user['location']],
            '<img src="'.SITE_URL.'/public/img/flags/' . strtolower($user['location']) . '.png" />',
            gender($user['gender']),
            birthday_to_age($user['user_birthday']),
            $recent_activity,
            $mod_tools,
            $visitors,
            $followers,
            $comments,
            $fields,
            $form
        )
    );

}

?>
