<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $host = "localhost"; 
    $username = "root"; 
    $password_db = "Achielles@20"; 
    $database = "miniproject"; 
    $conn = new mysqli($host, $username, $password_db, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM user_details WHERE mobile_number='$phone' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['role'] = $row['role'];
        
        if ($_SESSION['role'] === 'admin') {
            header('Location: /PROJECT_JEWEL/ADMIN/Admin_panel/adminpage.html');
        }
        else if ($_SESSION['role'] === 'user') {
            header('Location: template.html');
        } 
        else {
            header('Location: /PROJECT_JEWEL/USER/User_register/user_register.html');
        }
    } 
    else {
        echo '<script type="text/javascript">alert("Invalid username or password.");';
        echo 'window.location.href = "/PROJECT_JEWEL/USER/User_login/user_login.html";</script>';
        exit;
    }
    
    $conn->close();
}
?>

