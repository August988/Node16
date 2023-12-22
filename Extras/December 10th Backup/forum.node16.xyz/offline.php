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

  if($LAYER->data['site_enable'] == 1) {
    redirect('forum.php');
  }

  $LAYER->tpl->getTpl('page');
  $msg = html_entity_decode($LAYER->data['offline_msg']);
  $LAYER->tpl->addParam(
      array(
          'page_title',
          'content'
      ),
      array(
          'Forum Offline',
          $msg
      )
  );

  echo $LAYER->tpl->output();

?>