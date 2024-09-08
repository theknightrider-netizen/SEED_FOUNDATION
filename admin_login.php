<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
   <style>
    /* Reset some basic styling */
body, h2, form, div, label, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styling the body */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    padding: 20px;
    margin: 0;
    background-image: url('./images/adminback.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

/* Styling the form container */
form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

/* Styling the heading */
h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Styling form elements */
div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 16px;
}

/* Styling the button */
button {
    width: 100%;
    padding: 12px;
    background-color: rgba(236, 39, 236, 0.867);
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: hsl(291, 84%, 32%);
}

/* Responsive styling */
@media (max-width: 500px) {
    form {
        padding: 20px;
    }

    button {
        font-size: 14px;
    }
}

   </style>
</head>
<body>
    <form action="./phpfiles/admin_log.php" method="POST">
        <h2>Admin Login</h2>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
