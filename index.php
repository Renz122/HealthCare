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
            background-color:rgb(69, 162, 169);
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
            padding: 22px;
            margin: 16px;
            width: 300px;
            box-shadow: 2px 2px 10px #aaa;
            font-family: Arial, sans-serif;
            width: 1000px;
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
            background-color:rgb(69, 162, 169);
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

        .service p{
            font-size: 20px;
            line-height: 1.5;   
        }

    
    </style>
</head>
<body>

<header>
    <span style="display:inline-flex;align-items:center;gap:16px;">
        <img src="485176591_622755117568334_1373759861774274875_n.jpg" 
             alt="Blue medical cross with angel wings and a caduceus symbol in the center, a halo above the cross, surrounded by a golden radiant circle. The text Heavens Healthcare appears below in bold letters, with a calm and caring tone suggesting trust and compassion in a healthcare setting."
             style="height:104px;width:auto;vertical-align:middle;border-radius:10px;">
        <span>
            <h1 style="display:inline;margin:0;vertical-align:middle;padding-right: 75px;">Heaven's Health Care</h1><br>
            <span style="font-size:1.1em;padding-right: 75px;">Your Health, Our Priority</span>
        </span>
    </span>
    
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
        <a href="general-checkup.php" class="service" style="width:300px; text-decoration:none; color:inherit;">
            <div style="text-align:center;margin-bottom:12px;">
                <div class="fade-slider" style="position:relative;width:100%;height:180px;">
                    <img src="Ck4.jpg" alt="General Checkup 1" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:1;transition:opacity 1s;">
                    <img src="Ck2.jpg" alt="General Checkup 2" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                    <img src="Ck3.jpg" alt="General Checkup 3" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                </div>
            </div>
            <h3>General Checkup</h3>
            <p>Routine examinations and health screenings to keep you in top condition.</p>
        </a>
        <a href="pediatrics.php" class="service" style="width:300px; text-decoration:none; color:inherit;">
            <div style="text-align:center;margin-bottom:12px;">
                <div class="fade-slider" style="position:relative;width:100%;height:180px;">
                    <img src="Pd1.jpg" alt="Pediatrics 1" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:1;transition:opacity 1s;">
                    <img src="Pd2.jpg" alt="Pediatrics 2" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                    <img src="Pd3.jpg" alt="Pediatrics 3" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                </div>
            </div>
            <h3>Pediatrics</h3>
            <p>Expert care for infants, children, and adolescents by certified pediatricians.</p>
        </a>
        <a href="diagnostics.php" class="service" style="width:300px; text-decoration:none; color:inherit;">
            <div style="text-align:center;margin-bottom:12px;">
                <div class="fade-slider" style="position:relative;width:100%;height:180px;">
                    <img src="Dg1.jpg" alt="Diagnostics 1" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:1;transition:opacity 1s;">
                    <img src="Dg2.jpg" alt="Diagnostics 2" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                    <img src="Dg3.jpg" alt="Diagnostics 3" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                </div>
            </div>
            <h3>Diagnostics</h3>
            <p>Advanced lab and imaging services for accurate and timely diagnosis.</p>
        </a>
        <a href="vaccinations.php" class="service" style="width:300px; text-decoration:none; color:inherit;">
            <div style="text-align:center;margin-bottom:12px;">
                <div class="fade-slider" style="position:relative;width:100%;height:180px;">
                    <img src="Vc1.jpg" alt="Vaccinations 1" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:1;transition:opacity 1s;">
                    <img src="Vc2.jpg" alt="Vaccinations 2" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                    <img src="Vc3.jpg" alt="Vaccinations 3" class="fade-img" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0;transition:opacity 1s;">
                </div>
            </div>
            <h3>Vaccinations</h3>
            <p>Stay protected with our full range of adult and child immunization services.</p>
        </a>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.fade-slider').forEach(function(slider) {
        let imgs = slider.querySelectorAll('.fade-img');
        let idx = 0;
        setInterval(() => {
            imgs[idx].style.opacity = 0;
            idx = (idx + 1) % imgs.length;
            imgs[idx].style.opacity = 1;
        }, 3000);
    });
});
</script>
<script>
let currentFade = 0;
const fadeImgs = document.querySelectorAll('#fade-slider .fade-img');
setInterval(() => {
    fadeImgs[currentFade].style.opacity = 0;
    currentFade = (currentFade + 1) % fadeImgs.length;
    fadeImgs[currentFade].style.opacity = 1;
}, 3000);
</script>

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
