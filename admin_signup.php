<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="./cssfiles/admin.css"> 
</head>
<body>
    <h2>Admin Signup</h2>
    <form action="./phpfiles/admin_register.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Signup</button>
    </form>
    <p>Already have an account? <a href="admin_login.php">Login here</a></p>
</body>
</html>
