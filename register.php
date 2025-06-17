<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>User Registration</h2>
    <form method="POST" action="register_process.php">
        Matric No: <input type="text" name="matric" required><br>
        Name: <input type="text" name="name" required><br>
        Password: <input type="password" name="password" required><br>
        Role:
        <select name="role" required>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
