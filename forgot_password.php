<?php
include 'conn.php';
session_start();

$question = '';
$show_question = false;

if (isset($_POST['submit'])) {
    $input = trim($_POST['email'] ?? '');

    if (!empty($input)) {
        $query = "SELECT * FROM users WHERE email = ? OR username = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $input, $input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['recovery_user_id'] = $row['ID'];
            $_SESSION['recovery_answer'] = $row['custom_answer'];
            $question = $row['custom_question'];
            $show_question = true;
        } else {
            $question = "User not found.";
            $show_question = true;
        }
    }
}
?>
