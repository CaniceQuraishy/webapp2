<?php
$title = "Resume";
$page = "resume";
include_once("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section#resume {
            padding: 50px 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }
        .resume-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            line-height: 1.6;
        }
        .resume-section {
            margin-bottom: 30px;
        }
        .resume-section h2 {
            font-size: 1.8em;
            color: #4d0071;
            margin-bottom: 10px;
        }
        .resume-section p {
            font-size: 1.2em;
            color: #555;
            margin: 0;
        }
    </style>
</head>
<body>
    <section id="resume">
        <h1>Resume</h1>
        <div class="resume-content">
            <div class="resume-section">
                <h2>Education</h2>
                <p>High School: Grade B in KCSE</p>
                <p>Graffins College: Python Programming Course</p>
            </div>
            <div class="resume-section">
                <h2>Work Experience</h2>
                <p>Anjarwalla and Khanna (Internship)</p>
                <p>Role: Technical Support/IT Support</p>
                <p>Skills gained: Networking, understanding of cloud technologies like Terraform</p>
            </div>
            <div class="resume-section">
                <h2>Courses</h2>
                <p>Online Course: Data Analysis and Visualization</p>
                <p>Online Course: Data Science Fundamentals</p>
            </div>
            <div class="resume-section">
                <h2>Skills</h2>
                <p>Python Programming</p>
                <p>Technical Support</p>
                <p>Networking</p>
                <p>Data Analysis and Visualization</p>
                <p>Cloud Technologies (Terraform)</p>
            </div>
            <div class="resume-section">
                <h2>Goals</h2>
                <p>Win a CTF (Capture The Flag) competition</p>
            </div>
            <div class="resume-section">
                <h2>Approach to Learning</h2>
                <p>Methodical approach to learning and problem-solving</p>
            </div>
        </div>
    </section>
</body>
</html>
