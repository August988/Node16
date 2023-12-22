<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Add Places - DebugNode16 v1 API</title>
</head>
<body>

<?php
$response = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "nodexyz_dbadmin";
    $password = "redheadnoob8";
    $database = "nodexyz_db";

    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        $response['success'] = false;
        $response['message'] = "Issue on connecting: " . $conn->connect_error;
        $response['alert_type'] = "danger";
    } else {
        $sql = "INSERT INTO games (placeName, ownedBy, placeVisits, placeLikes, placeDislikes, placeImage) VALUES (?, ?, ?, ?, ?, 'http://node16.xyz/debug/static/places/neutral.png')";
        if ($stmt = $conn->prepare($sql)) {
            $placeImage = "http://node16.xyz/debug/static/places/neutral.png";
            $stmt->bind_param("ssiiis", $placeName, $ownedBy, $placeVisits, $placeLikes, $placeDislikes, $placeImage);

            $placeName = $_POST['placeName'];
            $ownedBy = $_POST['ownedBy'];
            $placeVisits = $_POST['placeVisits'];
            $placeLikes = $_POST['placeLikes'];
            $placeDislikes = $_POST['placeDislikes'];

            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = "Place added successfully.";
                $response['alert_type'] = "success";
            } else {
                $response['success'] = false;
                $response['message'] = "Issue adding game: " . $stmt->error;
                $response['alert_type'] = "danger";
            }
            $stmt->close();
        }
        $conn->close();
    }
} else {
    $response['success'] = false;
    $response['message'] = "Wrong request method";
    $response['alert_type'] = "warning";
}

?>

<div class="container mt-5">
    <?php if (!empty($response)): ?>
        <div class="alert alert-<?php echo $response['alert_type']; ?>" role="alert">
            <?php echo $response['message']; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
