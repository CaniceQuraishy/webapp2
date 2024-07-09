<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="login-container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="conpassword">Confirm Password</label>
                    <input type="password" name="conpassword" id="conpassword" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign Up">
                </div>

                <div class="links">
                    Already a member? <a href="index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];

    if (!empty($username) && !empty($email) && !empty($pwd) && !empty($cpwd)) {
        if ($pwd === $cpwd) {
            $query = "INSERT INTO form (username, email, password, conpassword) VALUES ('$username', '$email', '$pwd', '$cpwd')";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "<script>alert('Data Inserted into DB');</script>";
                // Redirect to avoid duplicate submission on refresh
                header("Location: ".$_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "<script>alert('Data Not Inserted into DB');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    } else {
        echo "<script>alert('Complete filling in the form first');</script>";
    }
}
?>
