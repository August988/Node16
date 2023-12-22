<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

define('BASEPATH', 'Forum');
require_once('applications/wrapper.php');

$LAYER->tpl->getTpl('page');

$LAYER->tpl->addParam('page_title', $LANG['error_pages']['404']['header']);
$LAYER->tpl->addParam('content', $LANG['error_pages']['404']['message']);

echo $LAYER->tpl->output();

?>