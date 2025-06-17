<?php
$host = "localhost";
$user = "root";
$pass = ""; // or your password
$db = "Lab_7";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$matric = $_POST['matric'];
$name = $_POST['name'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$sql = "INSERT INTO users (matric, name, password, role) VALUES ('$matric', '$name', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
<link rel="stylesheet" href="style.css">
