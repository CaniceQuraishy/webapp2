<?php
$title = "Services";
$page = "services";
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section#services {
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .service {
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: left;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .service h2 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        .service p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <section id="services">
        <!-- Content -->
        <h1>Services Offered</h1>
        
        <div class="service">
            <h2>Web Development</h2>
            <p>I have skills in PHP, HTML, CSS, and Bootstrap for creating responsive and attractive websites.</p>
        </div>

        <div class="service">
            <h2>Technical Support and IT</h2>
            <p>Experienced in technical support, IT support, and networking skills including understanding switches and basic cloud infrastructure using tools like Terraform.</p>
        </div>

        <div class="service">
            <h2>Data Analysis and Visualization</h2>
            <p>Completed an online course in data analysis and visualization, with knowledge in Python programming for data science applications.</p>
        </div>

        <div class="service">
            <h2>Mentoring</h2>
            <p>As a SCESA mentor, I guide and mentor youth in various aspects of personal and professional development.</p>
        </div>

    </section>
</body>
</html>
