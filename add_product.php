<?php
$servername = "localhost";
$username = "akaash";
$password = "Achielles@20";
$dbname = "miniproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];

$query = "SELECT MAX(product_id) FROM add_product";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$nextProductNumber = $row['MAX(product_id)'] + 1;

$sql1 = "INSERT INTO add_product (product_id, name, description, duration) VALUES ($nextProductNumber, '$name', '$description', '$duration')";

if ($conn->query($sql1) === TRUE) {
    echo '<script>alert("Successful");</script>';
    exit();
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>