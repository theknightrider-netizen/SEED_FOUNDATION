<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Website</title>
    <link rel="stylesheet" href="cssfiles/new.css">
    <script>
        function homebtn(){
            alert("THIS IS HOME PAGE"); 
        }

        // Image slider functionality
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

        setInterval(nextSlide, 3000); // Change image every 3 seconds
    </script>
</head>
<body onload="showSlide(currentSlide)">
    <nav class="navbar">
        <div class="logo">
            <img src="images/seedlogo.jpg" alt="logo">
        </div>
        <ul class="nav-links">
            <li><a onclick="homebtn()" href="newhomepagesample.php">HOME</a></li>
            <li><a href="#">REGISTER</a>
                <ul class="dropdown">
                    <li><a href="stdform.php">Register for Admission</a></li>
                    <li><a href="staff.php">Register for Volunteering/Teaching Staff</a></li>
                </ul>
            </li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="donate.php">DONATE NOW</a></li>
            <li><a href="aboutus.php">ABOUT US</a>
                <ul class="dropdown">
                    <li><a href="aboutus.php#ourmission">Our Mission & Vision</a></li>
                    <li><a href="aboutus.php#ourteam">Our Team/Partners</a></li>
                    <li><a href="aboutus.php#ourhistory">Our History</a></li>
                    <li><a href="aboutus.php#ourpartners">Board Members</a></li>
                </ul>
            </li>
            <li><a href="contactpage.php">CONTACT US</a></li>
        </ul>
    </nav>
    <marquee id="marquee"><h1>WELCOME TO SEED FOUNDATION</h1></marquee><br>
    
    <section id="home" class="hero">
        <img src="images/blackpanther.jpg" alt="image 1" class="hero-image" style="display:block;">
        <img src="images/groot.jpg" alt="image 2" class="hero-image" style="display:none;">
        <img src="images/seedlogo.jpg" alt="image 3" class="hero-image" style="display:none;">
    </section>

    <section id="intro" class="intro-section">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to Seed Foundation, a non-profit organization dedicated to empowering underprivileged communities through education, health, and sustainable development. Our mission is to create lasting change and uplift lives by providing access to essential resources and opportunities.</p>
        </div>
    </section>

    <section id="programs" class="programs-section">
        <div class="container">
            <h2>Our Programs</h2>
            <div class="programs">
                <div class="program">
                    <img src="images/education.jpg" alt="Education Program">
                    <h3>Education</h3>
                    <p>Providing quality education to children and adults to help them achieve their full potential.</p>
                </div>
                <div class="program">
                    <img src="images/health.jpg" alt="Health Program">
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

    <section id="impact" class="impact-section">
        <div class="container">
            <h2>Our Impact</h2>
            <p>We have positively impacted over 10,000 lives through our various programs and initiatives. Join us in making a difference!</p>
            <div class="impact-stats">
                <div class="stat">
                    <h3>10,000+</h3>
                    <p>Lives Improved</p>
                </div>
                <div class="stat">
                    <h3>50+</h3>
                    <p>Programs Implemented</p>
                </div>
                <div class="stat">
                    <h3>30+</h3>
                    <p>Communities Reached</p>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>
