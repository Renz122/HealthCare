<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <form action="reg.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>