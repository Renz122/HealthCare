<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'>
    <title>Sign Up</title>
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
                width: 85%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, 2);
                border-radius: 40px;
                font-size: 16px;
                color: #fff;
                padding: 0px 0px 0px 10px;

            }


            .inputbox input::placeholder {
                color: #fff;
            }

            .inputbox input {
                padding-left: 50px;
            }

            .inputbox i {
                position: absolute;
                left: 35px;
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
                margin-top: 20px;

            }

            .SIGN {
                margin-top: 10px;
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
        <form action="user_account.php" method="POST">
            <h1 class="SIGN">Sign Up</h1>
            <div class=border>
                <div class="inputbox">
                    <input type="text" name="username" placeholder="Username" style="padding-left 101px;" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class=border>
                <div class="inputbox">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="bx bxl-gmail"></i>
                </div>
            </div>
            <div class=border>
                <div class="inputbox">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
            <div class=border>
                <div class="inputbox">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

            </div>
            <input type="submit" class="btn" name="register"></input><br><br>
            <p class="or">-----------or-----------</p><br>
            <div class="register-link">
                <p style="color:white;">Already have an Account?</p>
                <div class="Sign-In"><a href="SignIn.php">Sign In</a> </div>
                <br>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>