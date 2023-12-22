<?php

header('Content-Type: application/json');

$host = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$database = "nodexyz_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    $response['success'] = false;
    $response['message'] = "Connection failed: " . $conn->connect_error;
    echo json_encode($response);
    exit();
}

$sql = "SELECT id, username, joinDate, blurb, about FROM users";
$result = $conn->query($sql);

if ($result === false) {
    $response['success'] = false;
    $response['message'] = "Error executing query: " . $conn->error;
    echo json_encode($response);
    exit();
}

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

$response['success'] = true;
$response['data'] = $data;

echo json_encode($response);

?>
