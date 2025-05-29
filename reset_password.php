<?php
include 'conn.php';
session_start();

if (isset($_POST['reset'])) {
    $user_id = $_SESSION['recovery_user_id'] ?? null;
    $correct_answer = $_SESSION['recovery_answer'] ?? '';
    $provided_answer = trim($_POST['security_answer'] ?? '');
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (!$user_id) {
        echo "<script>alert('Session expired. Please try again.'); window.location.href='forgot_password.php';</script>";
        exit;
    }

    if (strcasecmp(trim($correct_answer), $provided_answer) !== 0) {
        echo "<script>alert('Incorrect security answer.'); window.location.href='forgot_password.php';</script>";
        exit;
    }

    if ($new_password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.location.href='forgot_password.php';</script>";
        exit;
    }

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $query = "UPDATE users SET password = ? WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $hashed_password, $user_id);
    if (mysqli_stmt_execute($stmt)) {
        unset($_SESSION['recovery_user_id'], $_SESSION['recovery_answer']);
        echo "<script>alert('Password reset successful.'); window.location.href='SignIn.php';</script>";
    } else {
        echo "<script>alert('Error updating password.'); window.location.href='forgot_password.php';</script>";
    }
}
?>
