<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adm</title>
</head>
<body>
<h4>IT MUST BE 740x192 PLEASE!!!! - maddox </h4>
<?php
$servername = "localhost";
$username = "nodexyz_dbadmin";
$password = "redheadnoob8";
$dbname = "nodexyz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newDescription = $_POST["description"];
    $newTitle = $_POST["title"];
    $newAuthor = $_POST["author"];
    $newImage = $_POST["image"];

    $sql = "INSERT INTO blogPosts (image, title, description, author, createdOn) VALUES ('$newImage', '$newTitle', '$newDescription', '$newAuthor', CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
        echo "New blog post added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Image URL: <input type="text" name="image" required><br>
    Title: <textarea name="title" required></textarea><br>
    Description: <textarea name="description" required></textarea><br>
    Author: <input type="text" name="author" required><br>
    <input type="submit" value="Create Blog Post">
</form>

</body>
</html>
