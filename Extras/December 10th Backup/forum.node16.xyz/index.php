<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

if(!file_exists('applications/config.php')){
    header('Location: install/');
}
define('BASEPATH', 'Forum');
require_once('applications/wrapper.php');

redirect('forum.php');

?>
