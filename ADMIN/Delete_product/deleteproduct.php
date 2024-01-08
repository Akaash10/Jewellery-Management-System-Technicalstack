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
$sql1 = "DELETE FROM product_details WHERE name='$name' AND duration='$duration'";
if ($conn->query($sql1) === TRUE) {
    echo '<script>alert("Deleted successfully"); window.location.href = "../Admin_panel/adminpage.html";</script>';
    exit();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
?>