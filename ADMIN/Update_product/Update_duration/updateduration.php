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
$sql1 = "UPDATE product_details SET duration='$duration' WHERE name='$name'";
if ($conn->query($sql1) === TRUE) {
    echo '<script>alert("Duration updated successfully"); window.location.href = "/PROJECT_JEWEL/ADMIN/Admin_panel/adminpage.html";</script>';
    exit();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$conn->close();
?>
