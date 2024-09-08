<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Users Table</title>
    <link rel="stylesheet" href="./cssfiles/_admin.css">
</head>
<body>

    <h2 align="center">Admin Users Table</h2>
    <div class="table-container">
    <table align="center">
        <thead>
            <label>ADMIN INFORMATION</label>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Database connection parameters
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "admin_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the admin_users table
            $sql = "SELECT id, username, email, password FROM admin_users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['password']) . "</td>"; // Displays plain text password (not recommended)
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    </div><br>

    <div class="table-container">
    <table align="center"><label>STUDENT ENROLLMENT DETAILS</label>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>School_Name</th>
                <th>Standard</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $servername = "localhost:3306";
            $username = "root";
            $password = ""; // Update with your actual MySQL password
            $dbname = "students";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT id,name, school_name,standard,contact_number  FROM enrollments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['school_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['standard']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['contact_number']) . "</td>"; 
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    </div><br>

    <div class="table-container">
    <table align="center">
    <label>IMAGES</label>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Image Description</th>
            <th>Actions</th>
            <div align="center">
        <h2>Upload New Image</h2>
        <form action="./phpfiles/upload.php" method="post" enctype="multipart/form-data">
            <label for="file">Select image to upload:</label>
            <input type="file" name="file" id="file" required style="color: aqua;
            background-color:black;">
            <input type="text" name="description" placeholder="Image description" required style="height:2rem;width:10rem;border-radius:2rem;border-color:aqua;">
            <input type="submit" value="Upload Image" name="submit" style="color: aqua;
            background-color:black;
            height:2rem;width:7rem;border-radius:2rem;">
        </form>
    </div><br>
        </tr>
    </thead>
    <tbody>
    <?php
        $servername = "localhost:3306";
        $username = "root";
        $password = ""; // Update with your actual MySQL password
        $dbname = "pictures";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch images from the database
        $sql = "SELECT `id`, `image_path`, `image_description` FROM `images`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            
            $imgData = base64_encode($row['image_path']);
            echo "<td><img src='data:image/jpeg;base64," . $imgData . "' alt='Image' style='max-width: 100px; border-radius: 4px;'></td>";
            
            echo "<td>" . htmlspecialchars($row['image_description']) . "</td>";
            
            echo "<td>
                        <form action='./phpfiles/delete.php' method='post' style='display:inline;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' value='Delete' style='padding: 8px 16px;
            background-color: #ff6666;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px 2px;
            transition: background-color 0.3s ease, transform 0.2s ease;
                            '></form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No images found.</td></tr>";
        }

        $conn->close();
    ?>
    </tbody>
</table>
    </div>

    <div class="table-container">
    <table align="center">
        <thead>
            <label>Donation Details</label>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Database connection parameters
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "donations";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the admin_users table
            $sql = "SELECT `id`, `name`, `email`, `amount`, `Date` FROM `donation`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['amount']) . "</td>"; 
                    echo "<td>" . htmlspecialchars($row['Date']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
    </div><br>

</body>
</html>
