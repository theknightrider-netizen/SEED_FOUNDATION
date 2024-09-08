<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./cssfiles/_donation.css">
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

<div class="donation-container">
    <h2>Make a Donation</h2>
    <p>Your generosity can change lives. Every contribution you make helps us continue our mission to support those in need. <span class="highlight">Thank you</span> for your support!</p>
    <form id="donation-form">
        <div class="input-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name">
        </div>
        <div class="input-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email address">
        </div>
        <div class="input-group">
            <label for="amount">Donation Amount (₹)</label>
            <input type="number" id="amount" name="amount" required placeholder="Enter donation amount">
        </div>
        <div class="input-group">
            <label for="payment-method">Payment Method</label>
            <select id="payment-method" name="payment_method" required>
                <option value="gpay">Google Pay</option>
                <option value="phonepe">PhonePe</option>
                <option value="upi">UPI</option>
            </select>
        </div> 
        <button type="button" onclick="payNow()">Donate Now</button> <!-- Trigger UPI Payment -->
    </form>
    <a href="index.php" class="back-link">Back to Home</a>
</div>
<script src="https://js.stripe.com/v3/"></script>

<script>
    function payNow() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var amount = document.getElementById('amount').value;
    var upiId = 'yourupiid@upi'; // Replace this with your actual UPI ID
    var paymentMethod = document.getElementById('payment-method').value;
    
    // Create UPI payment URL
    var upiUrl = `upi://pay?pa=${upiId}&pn=SEED%20Foundation&am=${amount}&cu=INR&tn=Donation`;

    // Open the payment URL in a new tab or window
    if (paymentMethod === 'gpay' || paymentMethod === 'phonepe' || paymentMethod === 'upi') {
        window.open(upiUrl, '_blank'); // Open UPI payment app (Google Pay, PhonePe, etc.) in a new tab/window
    } else {
        alert('Please select a valid UPI payment method.');
    }
}

    var stripe = Stripe('your-publishable-key-here');
    var elements = stripe.elements();

    var form = document.getElementById('donation-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken().then(function(result) {
            if (result.error) {
                // Show error in payment form
                console.error(result.error.message);
            } else {
                // Send the token to your server
                var token = result.token.id;
                // Perform server-side logic here
            }
        });
    });
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $paymentMethod = $_POST['payment_method'];
    $upiId = '9594808819@jupiteraxis'; // Replace with your UPI ID

    if ($paymentMethod === 'upi') {
        $upiUrl = "upi://pay?pa=$upiId&pn=SEED%20Foundation&am=$amount&cu=INR&tn=Donation";
        header("Location: $upiUrl");
        exit();
    } else {
        echo 'Unsupported payment method.';
    }
}
?>

</body>
</html>
