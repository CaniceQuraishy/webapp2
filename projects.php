<?php
$title = "Projects";
$page = "projects";
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section#projects {
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .project {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }
        .project p {
            font-size: 1.2em;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section id="projects">
        <!-- Content -->
        <h1>My Projects</h1>
        
        <div class="project">
            <img src="Resources/calc.jpeg" alt="Project 1">
            <p>Simple Calculator in C++</p>
        </div>
        <div class="project">
            <img src="Resources/catalogues.png" alt="Project 2">
            <p>Supermarket Catalogue in Tinker</p>
        </div>
    </section>
</body>
</html>
