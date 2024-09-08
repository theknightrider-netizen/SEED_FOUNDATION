<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Events</title>
    <link rel="stylesheet" href="./cssfiles/events.css">
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
    <header class="page-header">
        <h1>Events held in our NGO</h1>
        <p>Join us in our upcoming events and celebrate with us!</p>
    </header>
    <section class="past-events">
        <h2>Past Events</h2>
        <div class="event">
        <h3>Annual Day Celebration</h3>
        <?php
       include "./phpfiles/event_img.php"; 
        // SQL query to fetch all event images and descriptions
        $query = "SELECT image_path, image_description FROM images";

        // Execute the query
        $result = $conn->query($query);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="event-item">';
                echo '<img src="' . htmlspecialchars($row['image_path']) . '" alt="Event Image" class="event-image" style="max-width: 200px; margin: 10px;">';
                echo '<p class="image-description">' . htmlspecialchars($row['image_description']) . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No event images found.</p>";
        }
        $conn->close();
        ?>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; SEED-Foundation. All rights reserved.</p>
    </footer>
</body>
</html>
