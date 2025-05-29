<?php
session_start();
include('conn.php');

$isLoggedIn = isset($_SESSION['ID']);
$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';



if ($isLoggedIn) {
    $user_id = $_SESSION['ID'];
    $query = "SELECT username, email FROM users WHERE ID = ?";
    $stmt = mysqli_prepare($conn, $query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($user = mysqli_fetch_assoc($result)) {
            $username = $user['username'];
            $email = $user['email'];
        }
        mysqli_stmt_close($stmt);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="Design.css" />
  <title>Heaven`s HealthCare</title>
  <style>
    /* Your existing styles */
    @media (min-width: 344px) {
        body {
            background: rgb(177, 206, 207);
            color: black;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            border-radius: 50%;
            height: auto;
            width: 100px;
        }
        main {
            padding: 20px;
        }
        h2 {
            color: darkblue;
            margin-bottom: 15px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .item {
            background: rgb(94, 146, 243);
            padding: 15px;
            text-align: center;
            border-radius: 10px;
        }
        footer {
            background: darkblue;
            color: darkgrey;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
       
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: transparent;
            color: black;
            font-size: 18px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(94, 146, 243);
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
            border-radius: 5px;
        }

        .dropdown-content a, .dropdown-content p {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }

        .dropdown-content a:hover {
            background-color: #f0f0f0;
        }

        
        .logout-button {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: rgb(94, 146, 243);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }
        .logout-button:hover {
            background-color: white;
        }


        
    }
  </style>
</head>
<body>
  <header>
    <div class="Header">
        <img src="/GROUP ACTIVITY/485176591_622755117568334_1373759861774274875_n.jpg" alt="Heaven`s HealthCare" class="logo" />

        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about-us">About Us</a>
            <a href="/contact-us">Contact Us</a>

            <?php if ($isLoggedIn): ?>
                <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn">
                        <?php echo htmlspecialchars($username); ?> ▼
                    </button>
                    <div id="dropdownContent" class="dropdown-content">
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                        <a href="UserProfile.php">View Full Profile</a>
                        <a href="Logout.php">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="SignUp.html">Sign Up</a>
                <a href="Sign_In.html">Sign In</a>
            <?php endif; ?>
        </div>
    </div>
</header>
  <main>
    <h2>MEDICINE FOR KIDS</h2>
    <div class="grid-container">
      <div class="item">Paracetamol</div>
      <div class="item">Ibuprofen</div>
      <div class="item">Amoxicillin</div>
      <div class="item">Cephalexin</div>
    </div>
    <h2>MEDICINE FOR ADULTS</h2>
    <div class="grid-container">
      <div class="item">Acetaminophen</div>
      <div class="item">Antihistamines</div>
      <div class="item">Cetirizine</div>
      <div class="item">Amlodipine</div>
    </div>
    <h2>TYPES OF MEDICINE</h2>
    <div class="grid-container">
      <div class="item">Tablet</div>
      <div class="item">Liquid</div>
      <div class="item">Capsule</div>
      <div class="item">Drops</div>
      <div class="item">Suppositories</div>
      <div class="item">Inhalers</div>
    </div>
  </main>
  <footer>
    <p>&#169; Very Cutesy, Very Demure (Pls get sick so we have work)</p>
  </footer>
</body>

<script>
function toggleDropdown() {
    const dropdown = document.getElementById("dropdownContent");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = "none";
        }
    }
}
</script>
</html>
