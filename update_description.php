<?php
$servername = "localhost";
$username = "root";
$password = "Achielles@20";
$dbname = "miniproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$duration = $_POST['duration'];
$description=$_POST['description'];
$sql1 = "UPDATE product_details SET description='$description' WHERE name='$name' AND duration='$duration'";
if ($conn->query($sql1) === TRUE) {
    echo '<script>alert("Description updated successfully"); window.location.href = "adminpage.html";</script>';
    exit();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
?>
