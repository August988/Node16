<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "nodexyz_maindb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["txtStatusMessage"];
    $userId = getUserId($conn);
    
    if (!empty($message) && $userId !== false) {
        insertMessage($conn, $userId, $message);
    }
}


$messages = getMessages($conn);

?>