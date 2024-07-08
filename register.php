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
                    <input type="text" name="username" id="username" required>
                </div>

                <div class ="field input">
                    <label for="username">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                

                <div class ="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
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