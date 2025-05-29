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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Sign In</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
            font-family: "Poppins", sans-serif;
        }

        @media (min-width: 344px) {
            body {
                background-color: rgb(177, 206, 207);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .Uno {
                width: 350px;
                background-color: #0a7c84;
                color: black;
                border-radius: 12px;
                padding: 30px 40px;
                box-shadow: 0 20px 35px rgba(0, 0, 1, 0.9)
            }

            .Uno h1 {
                font-size: 36px;
                text-align: center;
            }

            .Uno .inputbox {
                position: relative;
                width: 100%;
                height: 50px;
                margin: 30px 0;
            }

            .inputbox input {
                width: 91%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, 2);
                border-radius: 40px;
                font-size: 16px;
                color: #fff;
                padding: 0px 0px 0px 10px;
                margin-left: 10px;
            }

            .inputbox input::placeholder {
                color: #fff;
            }

            .inputbox i {
                position: absolute;
                right: 20px;
                bottom: 15px;
                transform: translate(-50%);
                font-size: 20px;
            }

            .Uno .rem_forgot {
                display: flex;
                justify-content: space-between;
                font-size: 14.5px;
                margin: -15px 0 15px;
            }

            .rem_forgot label input {
                accent-color: #fff;
                margin-right: 3px;
            }

            .rem_forgot a {
                color: #000000;
                text-decoration: none;
            }

            .rem_forgot_checkbox {
                margin-left: 10px;
            }

            .rem_forgot_password {
                margin-right: 10px;
            }

            .rem_forgot a:hover {
                text-decoration: underline;
            }

            .Uno .btn {
                width: 95.4%;
                height: 45px;
                background: #fff;
                border: none;
                outline: none;
                border-radius: 40px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                cursor: pointer;
                font-size: 16px;
                color: #333;
                font-weight: 600;
                margin-left: 10px;
            }

            .Uno .register-link {
                font-size: 14.5px;
                text-align: center;
                margin: 20px 0 15px;
            }

            .register-link a {
                color: #552795;
                text-decoration: none;
                font-weight: 600;
            }

            .register-link a:hover {
                text-decoration: underline;
            }

            .or {
                text-align: center;
                font-family: 'Courier New', Courier, monospace;
            }
        }
    </style>
</head>

<body>
    <div class="Uno">
        <form action="forgot.php" method="POST">
            <h1 class="SIGN">Forgot Password</h1>
            <div class="inputbox">
                <input type="text" id="username" name="email" placeholder="Username or Gmail" required
                    value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                <i class='bx bxs-user'></i>
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
        </form>

        <?php if ($show_question): ?>
            <div style="margin-top: 20px; color: white;">
                <label for="security_answer"><?php echo htmlspecialchars($question); ?></label>

                <?php if (!empty($_SESSION['recovery_user_id'])): ?>
                    <form action="reset_password.php" method="POST" style="margin-top: 10px;">
                        <div class="inputbox">
                            <input type="text" name="security_answer" required placeholder="Your Answer" class="inputbox"
                                style="width: 100%; margin-top: 10px;">
                        </div>
                        <div class="inputbox">
                            <input type="password" id="new_password" name="new_password" required placeholder="New Password"
                                class="inputbox" style="width: 100%; margin-top: 10px;">
                        </div>
                        <div class="inputbox">
                            <input type="password" id="confirm_password" name="confirm_password" required
                                placeholder="Confirm Password" class="inputbox" style="width: 100%; margin-top: 10px;">
                        </div>

                        <div style="margin-left: 10px; color: white;">
                            <label>
                                <input type="checkbox" id="showPassword" style="margin-right: 5px;">
                                Show Password
                            </label>
                        </div>

                        <input type="submit" name="reset" value="Reset Password" class="btn" style="margin-top: 10px;">
                    </form>

                    <script>
                        document.getElementById('showPassword').addEventListener('change', function () {
                            const passwordFields = [
                                document.getElementById('new_password'),
                                document.getElementById('confirm_password')
                            ];
                            passwordFields.forEach(field => {
                                field.type = this.checked ? 'text' : 'password';
                            });
                        });
                    </script>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    </div>

    <script src="script.js"></script>
</body>

</html>