<?php
$host = "localhost";
$user = "root";
$pass = ""; // or your password
$db = "Lab_7";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT matric, name, role FROM users";
$result = $conn->query($sql);

echo "<h2>User List</h2><table border='1'>";
echo "<tr><th>Matric No</th><th>Name</th><th>Role</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['matric']}</td><td>{$row['name']}</td><td>{$row['role']}</td></tr>";
}
echo "</table>";

$conn->close();
?>
<link rel="stylesheet" href="style.css">
