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

        if ($query['0']['post_locked'] == "0") {

            $MYSQL->bind('id', $PGET->g('thread'));

            if ($MYSQL->query("UPDATE {prefix}forum_posts SET post_locked = 1 WHERE id = :id") > 0) {
                $content .= $LAYER->tpl->entity(
                    'success_notice',
                    'content',
                    str_replace(
                        '%url%',
                        SITE_URL . '/thread.php/' . $query['0']['title_friendly'] . '.' . $query['0']['id'],
                        $LANG['mod']['close']['close_success']
                    )
                );
            } else {
                $content .= $LAYER->tpl->entity(
                    'danger_notice',
                    'content',
                    $LANG['mod']['close']['close_error']
                );
            }

        } else {
            $content .= $LAYER->tpl->entity(
                'danger_notice',
                'content',
                $LANG['mod']['close']['already_closed']
            );
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
        'Close Thread',
        $content
    )
);

echo $LAYER->tpl->output();

?>