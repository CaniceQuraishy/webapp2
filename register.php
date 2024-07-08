<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

    <div class="login-container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
                <div class ="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class ="field input">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>
                

                <div class ="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class ="field input">
                    <label for="password">Confrim Password</label>
                    <input type="password" name="conpassword" id="conpassword" autocomplete="off" required>
                </div>

                <div class ="field">

                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>

                <div class="links">
                    Already a member? <a href="index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</html>

<?php 
    if($_POST['submit']){

        $username   = $_POST['username'];
        $email      = $_POST['email'];
        $pwd        = $_POST['password'];
        $cpwd       = $_POST['conpassword'];

        if($username !="" && $email !="" && $pwd !="" && $cpwd !="")
        {


        $query = "INSERT INTO form values('$username','$email','$pwd','$cpwd')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into DB";
        
        }
        else{
            echo "Data Not Inserted into DB";
        }
    }
    else 
    {
        echo"Please fill in the form";
    }
    }
?>