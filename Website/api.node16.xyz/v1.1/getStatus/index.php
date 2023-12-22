<?php
header('Content-Type: application/json');
$response = array(
    'data' => 'OK',
);

$jsonResponse = json_encode($response);
echo $jsonResponse;
?>
