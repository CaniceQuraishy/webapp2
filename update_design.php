<?php include("connection.php"); 
$id=  $_GET['id'];

$query = "SELECT * FROM form where id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
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

    <div class="login-container">
        <div class="box form-box">
            <header>Update Details</header>
            <form action="" method="post">
                <div class ="field input">
                    <label for="username">Username</label>
                    <input type="text" value="<?php echo $result['username']?>" name="username" id="username" autocomplete="off" >
                </div>

                <div class ="field input">
                    <label for="username">Email</label>
                    <input type="email" value="<?php echo $result['email']?>" name="email" id="email" autocomplete="off" >
                </div>
                

                <div class ="field input">
                    <label for="password">Password</label>
                    <input type="password" value="<?php echo $result['password']?>" name="password" id="password" autocomplete="off" >
                </div>

                <div class ="field input">
                    <label for="password">Confrim Password</label>
                    <input type="password" value="<?php echo $result['conpassword']?>" name="conpassword" id="conpassword" autocomplete="off" >
                </div>

                <div class ="field">

                    <input type="submit" class="btn" name="update" value="Update" >
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


        $query = "INSERT INTO form (username,email,password,conpassword) values('$username','$email','$pwd','$cpwd')";
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
        echo"<script>alert('Complete filling in the form first');</script>";
    }
    }
?>