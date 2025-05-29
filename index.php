<?php
session_start();
$isLoggedIn = isset($_SESSION['ID']);
$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heaven's Healthcare</title>
    <style>
        @media (max-width: 600px) {
            body {
                font-size: 16px;
            }
            .service {
                width: 90%;
            }
            .services {
                flex-direction: column;
                align-items: center;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0a7c84;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #f2f2f2;
            padding: 10px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            margin: 0 15px;
            color: #0a7c84;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: white;
            background-color: #0a7c84;
            padding: 1px;
            border-radius: 4px;
        }

        h2 {
            color: #0a7c84;
            margin-bottom: 10px;
        }

        section {
            padding: 20px;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            width: 250px;
            box-shadow: 2px 2px 8px #aaa;
            font-family: Arial, sans-serif;
        }

        .service ul {
            padding-left: 20px;
            margin-top: 10px;
        }

        .service li {
            margin-bottom: 8px;
        }

        #health-info {
            padding: 20px;
        }

        footer {
            background-color: #0a7c84;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }

        .dropdown {
            display: inline-block;
            position: relative;
        }

        .dropbtn {
            background-color: #0a7c84;
            color: white;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
        }

        .dropbtn:hover {
            background-color: #066368;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f2f2f2;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            text-align: left;
        }

        .dropdown-content p,
        .dropdown-content a {
            margin: 5px 0;
            color: #0a7c84;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #0a7c84;
            color: white;
            padding: 2px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<header>
    <h1>Heaven's Health Care</h1>
    <p>Your Health, Our Priority</p>
</header>

<nav>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#health-info">Health Info</a>
    <a href="#contact">Contact</a>

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
        <a href="SignUp.php">Sign Up</a>
        <a href="SignIn.php">Sign In</a>
    <?php endif; ?>
</nav>

<section id="about">
    <h2>About Us</h2>
    <div class="services">
        <div class="service">
            <p><strong>Heavens Health Care</strong> provides comprehensive medical care with a focus on prevention, wellness, and personalized treatment plans. Our team of experienced doctors and healthcare professionals are dedicated to keeping you and your family healthy.</p>
        </div>
    </div>
</section>

<section id="services">
    <h2>Our Services</h2>
    <div class="services">
        <div class="service"><h3>General Checkup</h3><p>Routine examinations and health screenings to keep you in top condition.</p></div>
        <div class="service"><h3>Pediatrics</h3><p>Expert care for infants, children, and adolescents by certified pediatricians.</p></div>
        <div class="service"><h3>Diagnostics</h3><p>Advanced lab and imaging services for accurate and timely diagnosis.</p></div>
        <div class="service"><h3>Vaccinations</h3><p>Stay protected with our full range of adult and child immunization services.</p></div>
    </div>
</section>

<section id="health-info">
    <h2>Health Info Center</h2>
    <div class="services">
        <div class="service">
            <h3>Healthy Living Tips</h3>
            <ul>
                <li><strong>Exercise regularly:</strong> Aim for at least 30 minutes of physical activity most days.</li>
                <li><strong>Balanced nutrition:</strong> Eat a variety of fruits, vegetables, lean proteins, and whole grains.</li>
                <li><strong>Stress management:</strong> Practice mindfulness, meditation, or breathing techniques.</li>
            </ul>
        </div>
        <div class="service">
            <h3>Managing Diabetes</h3>
            <ul>
                <li><strong>Blood sugar control:</strong> Monitor glucose levels regularly and follow your care plan.</li>
                <li><strong>Medication management:</strong> Take insulin or oral medications as prescribed.</li>
                <li><strong>Lifestyle changes:</strong> Eat a diabetes-friendly diet, stay physically active, and manage stress.</li>
            </ul>
        </div>
        <div class="service">
            <h3>Heart Health</h3>
            <ul>
                <li><strong>Healthy diet:</strong> Reduce saturated fats, limit salt, and eat more fruits and whole grains.</li>
                <li><strong>Stay active:</strong> Aim for at least 150 minutes of moderate exercise each week.</li>
                <li><strong>Early detection:</strong> Get regular blood pressure, cholesterol, and heart screenings.</li>
            </ul>
        </div>
        <div class="service">
            <h3>Vaccination Myths</h3>
            <ul>
                <li><strong>Vaccines are safe:</strong> Extensive testing ensures safety before public use.</li>
                <li><strong>Prevent serious illness:</strong> Vaccines protect against diseases like measles, flu, and COVID-19.</li>
                <li><strong>Community immunity:</strong> Getting vaccinated protects others too.</li>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="services">
        <div class="service">
            <h3>Important Notes</h3>
            <p>Good health involves physical, mental, and social well-being—not just the absence of illness.</p>
            <p>Maintain a healthy weight and protect against diseases with vaccinations and safe food handling.</p>
            <p>Managing stress and getting enough sleep are essential for mental well-being.</p>
            <p>When experiencing health concerns, it's important to consult doctors for treatment.</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <p>Email: contact@heavenshealthcare.com</p>
    <p>Phone: +1 (555) 123-4567</p>
    <p>Address: 123 Wellness Ave, Baliwag City</p>
</section>

<footer>
    <p>&copy; 2025 Heaven's Health Care. All rights reserved.</p>
</footer>

<script>
function toggleDropdown() {
    const content = document.getElementById("dropdownContent");
    content.style.display = content.style.display === "block" ? "none" : "block";
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = "none";
        }
    }
};
</script>

</body>
</html>
