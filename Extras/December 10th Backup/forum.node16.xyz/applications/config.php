<?php
//===================================//
// TidyBB Project                   //
//-----------------------------------//
// Website: https://www.tidybb.co.uk  //
// Email: info@tidynode.co.uk           //
// Build Series: 1.1                 //
//===================================//

if (!defined('BASEPATH')) {
    die();
}

/*
 * TidyBB Configuration File.
 */
define('MYSQL_HOST', 'localhost');
define('MYSQL_USERNAME', 'nodexyz_laye307');
define('MYSQL_PASSWORD', 't-6Sp-86W6');
define('MYSQL_DATABASE', 'nodexyz_laye307');
define('MYSQL_PREFIX', 'lbha_');
define('MYSQL_PORT', 3306);

/*
 * Local Details
 */
define('SITE_URL', 'https://forum.node16.xyz');//Without the ending "/"
define('SITE_PATH', '/home/nodexyz/forum.node16.xyz'); // Without the ending "/"
define('TidyBB_VERSION', '1.1.6');
define('TIDY_SESSION_TIMEOUT', 31536000);//In seconds.
define('USER_PASSWORD_HASH_COST', 10);

/*
 * Usergroup Details.
 * DO NOT CHANGE IF YOU DON'T KNOW WHAT THIS WILL DO.
 */
define('ADMIN_ID', '4');
define('MOD_ID', '3');
define('BAN_ID', '2');

/*
 * Forum Configuration.
 */
define('THREAD_RESULTS_PER_PAGE', 12);
define('POST_RESULTS_PER_PAGE', 9);

?>
