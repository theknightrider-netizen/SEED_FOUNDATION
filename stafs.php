<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer and Staff Application - NGO</title>
    <link rel="stylesheet" href="cssfiles/staff.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="images/seedlogo.jpg" alt="logo">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
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
    </nav>

    <div class="container">
        <h1>Volunteer and Staff Application</h1>
        <p><h4 align="center">please fill out htis form to register yourself in seedfoundation</h4></p><br>

        <form action="./phpfiles/staffapplication.php" method="post" enctype="multipart/form-data" class="application-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="position">Position Applying For:</label>
                <select id="position" name="position" required>
                    <option value="Volunteer">Volunteer</option>
                    <option value="Teaching Staff">Teaching Staff</option>
                    <option value="Administrative Staff">Administrative Staff</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="experience">Previous Experience (Optional):</label>
                <input type="text" id="experience" name="experience" rows="4" placeholder="Describe any relevant experience...">
            </div>

            <div class="form-group">
                <label for="cv">Upload Your CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">Submit Application</button>
            </div>
        </form>
    </div>
</body>
</html>
