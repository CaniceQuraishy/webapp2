<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login">
                </div>

                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    // PHP code for handling login
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        // Include your database connection file
        include("connection.php");

        // Retrieve user inputs
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to fetch user from database
        $query = "SELECT * FROM form WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        // Check if query was successful
        if ($result) {
            // Check if user exists
            if (mysqli_num_rows($result) == 1) {
                // Start session and store user data if login is successful
                session_start();
                $_SESSION['username'] = $username; // Store username in session

                // Redirect user to homepage.php
                header("Location: homepage.php");
                exit();
            } else {
                // Display error message for incorrect credentials
                echo "<script>alert('Incorrect username or password');</script>";
            }
        } else {
            // Display error message for database query error
            echo "<script>alert('Error: Unable to execute query');</script>";
        }

        // Close database connection
        mysqli_close($conn);
    }
    ?>
</body>
</html>
