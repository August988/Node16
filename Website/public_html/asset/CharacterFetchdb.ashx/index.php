<?php
header("Content-type: text/plain");
// modifed by simple with love :D
$servername = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$dbname = "nodexyz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];

   
    $sql = "SELECT Apperance about FROM userApperance WHERE Id = '$userId'";
    $result = $conn->query($sql);

    if (!$result->num_rows > 0) {
        echo "http://www.node16.xyz/Asset/BodyColors.ashx?userId=1;http://www.node16.xyz/asset/?id=21351761";
    }
    else {
        $row = $result->fetch_assoc();
        $apperanceJSON = $row['about']; //somehow it's this???
        $apperance = json_decode($apperanceJSON);
        echo $apperance;
        //$total = $apperance["BodyColors"];
        
        //foreach ($apperance["Items"] as $value) {
            //$total += $value;
        //}
        
        //echo $total;
    }
} else {
    echo "http://www.node16.xyz/Asset/BodyColors.ashx?userId=1;http://www.node16.xyz/asset/?id=21351761";
}

$conn->close();
?>