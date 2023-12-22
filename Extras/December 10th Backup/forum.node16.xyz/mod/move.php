<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

define('BASEPATH', 'Staff');
require_once('../applications/wrapper.php');

if (!$LAYER->perm->check('access_moderation')) {
    redirect(SITE_URL);
}//Checks if user has permission to create a thread.
$LAYER->tpl->getTpl('page');

$content = '';

if ($PGET->g('thread')) {

    $MYSQL->bind('id', $PGET->g('thread'));
    $query = $MYSQL->query("SELECT * FROM {prefix}forum_posts WHERE id = :id");

    if (!empty($query)) {
        if (isset($_POST['move_to'])) {
            $move_to = clean($_POST['move_to']);
            $MYSQL->bindMore(
                array(
                    'origin_node' => $move_to,
                    'id', $query['0']['id']
                )
            );
            $MYSQL->query("UPDATE {prefix}forum_posts SET origin_node = " . $move_to . " WHERE id = ".$query['0']['id']."");
            $MYSQL->bindMore(
                array(
                    'origin_node' => $move_to,
                    'id', $query['0']['id'],
                    'origin_thread' => $query['0']['id']
                )
            );
            $MYSQL->query("UPDATE {prefix}forum_posts SET origin_node = ".$move_to." WHERE origin_thread = ".$query['0']['id']."");
            $notice = $LAYER->tpl->entity(
                'success_notice',
                'content',
                $LANG['mod']['move']['thread_moved']
            );
            $content .= str_replace('%url%', SITE_URL . '/thread.php/' . $query['0']['title_friendly'] . '.' . $query['0']['id'], $notice);
        } else {
            redirect(SITE_URL);
        }
    } else {
        redirect(SITE_URL);
    }

} else {
    redirect(SITE_URL);
}

$LAYER->tpl->addParam(
    array(
        'page_title',
        'content'
    ),
    array(
        $LANG['mod']['move']['move'],
        $content
    )
);

echo $LAYER->tpl->output();

?>
