<?php
session_start();

$host = "localhost";
$username = "nodexyz_dbuser";
$password = "redheadnoob8";
$database = "nodexyz_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("the potatos have failed us: " . $conn->connect_error);
}
?>