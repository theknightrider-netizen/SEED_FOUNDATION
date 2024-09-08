<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Website</title>
    <link rel="stylesheet" href="./cssfiles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            function homebtn() {
                alert("THIS IS HOME PAGE"); 
            }

            let currentSlide = 0;
            function showSlide(index) {
                const slides = document.querySelectorAll('.hero-image');
                if (index >= slides.length) {
                    currentSlide = 0;
                } else if (index < 0) {
                    currentSlide = slides.length - 1;
                } else {
                    currentSlide = index;
                }
                slides.forEach((slide, i) => {
                    slide.style.display = (i === currentSlide) ? 'block' : 'none';
                });
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            showSlide(currentSlide);
            setInterval(nextSlide, 3500); // Change image every 3.5 seconds

            document.querySelector('.home-btn').addEventListener('click', homebtn);
        });
    </script>

</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/seedlogo.jpg" alt="logo">
        </div>
        <ul class="nav-links">
            <li><a class="home-btn" href="index.php">HOME</a></li>
            <li><a href="#">REGISTER</a>
                <ul class="dropdown">
                    <li><a href="stdform.php">Register for Admission</a></li>
                    <li><a href="stafs.php">Register for Volunteering/Teaching Staff</a></li>
                </ul>
            </li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="donate.php">DONATE NOW</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="contactpage.php">CONTACT US</a></li>
        </ul>
        <div class="login-icons">
            <a href="../seedfoundation/userlogin.php"><i class='fas fa-user' style='font-size:24px; color:white;'></i></a>
        </div>
    </nav>
    <marquee id="marquee"><h1 style="color: black;">WELCOME TO Slum Education and Empowerment Drive: (SEED FOUNDATION)</h1></marquee><br>
    <section id="home" class="hero">
        <img src="images/img1.jpg" alt="image 1" class="hero-image" style="display:block;">
        <img src="images/img2.jpg" alt="image 2" class="hero-image" style="display:none;">
        <img src="images/img3.jpeg" alt="image 3" class="hero-image" style="display:none;">
    </section> 
    <section id="intro" class="intro-section">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to Seed Foundation <b>SLUM EDUCATION AND EMPOWERMENT DRIVE</b>, a non-profit organization dedicated to empowering underprivileged communities through education, health, and sustainable development. Our mission is to create lasting change and uplift lives by providing access to essential resources and opportunities.</p>
        </div>
    </section>
    <section id="programs" class="programs-section">
        <div class="container">
            <h2>Our Programs</h2>
            <div class="programs">
                <div class="program">
                    <img src="images/Qltyedu.jpg" alt="Education Program">
                    <h3>Education</h3>
                    <p>Providing quality education to children and adults to help them achieve their full potential.</p>
                </div>
                <div class="program">
                    <img src="images/health.jpeg" alt="Health Program">
                    <h3>Health</h3>
                    <p>Offering health services and awareness programs to ensure the well-being of our communities.</p>
                </div>
                <div class="program">
                    <img src="images/sustainability.jpg" alt="Sustainability Program">
                    <h3>Sustainability</h3>
                    <p>Promoting sustainable practices and environmental conservation to protect our planet.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
