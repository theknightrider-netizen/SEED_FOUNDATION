<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="./cssfiles/_userlogin.css">
    
</head>
<body>
    
    <div class="login-container">
        <h2>User Login</h2>
        <form id="loginForm" action="./phpfiles/login.php" method="POST">
        <div>
            <a href="index.php" class="home-link">Home</a>
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
            <p class="signup-link">Are you Admin <a href="./admin_login.php">login here</a></p>

            
        </form>
    </div>
</body>
</html>
