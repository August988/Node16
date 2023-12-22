<?php

require("functions.php");
header("content-type:text/plain");
$placeid = (int)$_GET["placeid"];
$ip = $_GET['ip'];
$port = (int)$_GET['port'];
$id = (int)$_GET['id'];
$user = (string)$_GET['user'];
$app = (string)$_GET['app'];

$f1 = str_replace("%user%", $user, file_get_contents("./join.txt"));
$f2 = str_replace("%ip%", $ip, $f1);
$f3 = str_replace("%port%", $port, $f2);
$f4 = str_replace("%id%", $id, $f3);
$f5 = str_replace("%app%", $app, $f4);
echo(sign($f5));
?>
