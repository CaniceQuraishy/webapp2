<?php
$title = "Home";
$page = "home";
include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section#home {
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            color: #555;
            margin: 0 auto 20px;
            max-width: 800px; /* Ensure text doesn't spread too wide */
            line-height: 1.8;
            padding: 0 20px;
        }
        .interests {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .interest {
            flex-basis: 30%;
            text-align: center;
        }
        .interest img {
            width: 100%;
            border-radius: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section id="home">
        <!-- Content -->
        <h1>Welcome to my website</h1>
        <img src="Resources/facecard.png" alt="image">
        <p>
            I am Canice Musa Quraishy, a 19-year-old student currently pursuing my undergraduate studies at Strathmore University with aims of becoming a DevOps Engineer. I am passionate about technology and innovation, striving to make a positive impact through my work.
        </p>

        <br>
        <br>

        <p>
            My interests are:
        </p>

        <div class="interests">
            <div class="interest">
                <p>Gaming 🕹</p>
                <img src="Resources/valorant.jpg" alt="Gaming">
            </div>
            <div class="interest">
                <p>Basketball 🏀</p>
                <img src="Resources/basketball.jpg" alt="Basketball">
            </div>
            <div class="interest">
                <p>Chess ♟️</p>
                <img src="Resources/chess.jpeg" alt="Chess">
            </div>
        </div>
    </section>
</body>
</html>
