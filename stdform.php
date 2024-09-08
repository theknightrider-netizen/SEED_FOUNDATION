
<!Doctype Html>
<html>
    <head>
        <title>
            Registration form
    </title>
     </head>
     <link rel="stylesheet" href="./cssfiles/std_.css">
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
    <form method="POST">
    <br>
    <h1 align="center"> FILL THIS FORM TO ENROLL YOURSELF IN SEED FOUNDATION</h1><br><br>
    <h2>
        <label id="lblname">Enter Your Name: 
            <input type="text" id="txtn" name='name' placeholder="Your Name" required>
        </label><br> 
    </h2><br>
    <h2>
        <label id="lblsname">Enter Your School Name: 
            <input type="text" id="txts" name="Schoolname" required>
        </label><br>
    </h2><br>
    <h2><label id="lblstd">Select Your Standard : </label>
    <select name="standard" required>
            <OPTION>STD 4</OPTION>
            <OPTION>STD 5</OPTION>
            <OPTION>STD 6</OPTION>
            <OPTION>STD 7</OPTION>
            <OPTION>STD 8</OPTION>
            <OPTION>STD 9</OPTION>
            <OPTION>STD 10</OPTION>
        </select></h2><br>
    <h2>
        <label id="lblcontact">Enter Contact Number: 
            <input type="text" id="nm" name="Contact" maxlength="10" placeholder="Contact Number">
        </label><br>
    </h2><br><br>
    <input type="reset" id="reset">
    <input type="submit" id="submit">
</form>

       <?php
       include './phpfiles/std.php'
       ?>
     </body>
</html>