<?php
include 'conn.php';
session_start(); 

if(isset($_POST['register'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $created_at = date('Y-m-d H:i:s');

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        echo '<script>alert("Email already exists! Please use a different email."); window.location.href = "SignUp.php";</script>';
    } 
    else if($password != $confirm_password){
        echo '<script>alert("Passwords do not match. Please try again."); window.location.href = "SignUp.php";</script>';
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashed_password, $created_at);
        
        if(mysqli_stmt_execute($stmt)){
            echo '<script>alert("Registration successful!"); window.location.href = "SignIn.php";</script>';
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
