<?php include("connection.php"); 
$id = $_GET['id'];

$query = "SELECT * FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
    <div class="login-container">
        <div class="box form-box">
            <header>Update Details</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" value="<?php echo $result['username']; ?>" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" value="<?php echo $result['email']; ?>" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" value="<?php echo $result['password']; ?>" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="conpassword">Confirm Password</label>
                    <input type="password" value="<?php echo $result['conpassword']; ?>" name="conpassword" id="conpassword" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="update" value="Update">
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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];

    if (!empty($username) && !empty($email) && !empty($pwd) && !empty($cpwd)) {
        if ($pwd === $cpwd) {
            $query = "UPDATE form SET username='$username', email='$email', password='$pwd', conpassword='$cpwd' WHERE id='$id'";
            $data = mysqli_query($conn, $query);

            if ($data) {
                echo "<script>alert('Data Updated in DB');</script>";
                // Redirect to avoid duplicate submission on refresh
                header("Location: display.php");
                exit();
            } else {
                echo "<script>alert('Data Not Updated in DB');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    } else {
        echo "<script>alert('Complete filling in the form first');</script>";
    }
}
?>
