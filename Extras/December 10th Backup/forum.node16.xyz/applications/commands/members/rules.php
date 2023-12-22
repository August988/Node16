<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

/*
 * Account Activation Module for TidyBB.
 * Everything that you want to display MUST be in the $content variable.
 */
if (!defined('BASEPATH')) {
    die();
}

$page_title = $LANG['bb']['members']['rules'];
$content = '';

//Breadcrumb
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['forum'],
    SITE_URL . '/forum.php'
);
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['members']['home'],
    SITE_URL . '/members.php'
);
$LAYER->tpl->addBreadcrumb(
    $LANG['bb']['members']['rules'],
    '#',
    true
);
$content .= $LAYER->tpl->breadcrumbs();

$content .= str_replace('%rules%', nl2br($LAYER->data['site_rules']), nl2br($LANG['bb']['members']['rules_message']));

?>