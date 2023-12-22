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

if ($PGET->g('id')) {
    $MYSQL->bind('id', $PGET->g('id'));
    $query = $MYSQL->query("SELECT * FROM {prefix}reports WHERE id = :id");

    if (!empty($query)) {
        $MYSQL->bind('id', $query['0']['id']);
        $MYSQL->query("DELETE FROM {prefix}reports WHERE id = :id");
        $content .= $LAYER->tpl->entity(
            'success_notice',
            'content',
            $LANG['mod']['reports']['delete']
        );

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
        $LANG['mod']['delete']['delete'],
        $content
    )
);

echo $LAYER->tpl->output();

?>