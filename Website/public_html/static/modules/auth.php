<?php 
//made by simple
session_start();

$servername = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$dbname = "nodexyz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$password = $_COOKIES[".SESSION"];
$dbuserpassword = $conn->query("SELECT password FROM users WHERE password = ' . $password . '");
    
if ($dbuserpassword == $password)
{
    echo "true";
    $_GLOBAL["validauth"] = true;
}
else {
    echo "false";
    $_GLOBAL["validauth"] = false;
}
$conn->close();
?>