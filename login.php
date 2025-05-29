<?php 
include('conn.php'); 
session_start(); 

$user_id = $_SESSION['ID'] ?? ''; 

if (isset($_POST['submit'])) {

    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo '<script>alert("Please fill in both email and password."); window.location.href = "SignIn.php";</script>';
        exit;
    }

    $query = "SELECT * FROM users WHERE email = ? OR username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {

            $_SESSION['ID'] = $row['ID'];  
            $_SESSION['username'] = $row['username'];   
            $_SESSION['email'] = $row['email'];

                echo '<script>alert("Login Successful."); window.location.href = "index.php ";</script>';
                exit;

            } else {
                echo '<script>alert("Incorrect password."); window.location.href = "SignIn.php";</script>';
                exit;
            }
        } else {
            echo '<script>alert("Email not found."); window.location.href = "SignIn.php";</script>';
            exit;
        }
    } else {
        echo '<script>alert("Database error."); window.location.href = "SignIn.php";</script>';
        exit;
    }
}
?>
