<?php
$title = "Contact";
$page = "contact";
include("navbar.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Form validation using jQuery
            $("form").submit(function(event) {
                // Prevent form submission
                event.preventDefault();

                // Validate form inputs
                var name = $("#name").val();
                var email = $("#email").val();
                var message = $("#message").val();

                // Simple validation: Check if fields are not empty
                if (name.trim() == "") {
                    alert("Please enter your name.");
                    $("#name").focus();
                    return false;
                }

                if (email.trim() == "") {
                    alert("Please enter your email.");
                    $("#email").focus();
                    return false;
                }

                if (message.trim() == "") {
                    alert("Please enter your message.");
                    $("#message").focus();
                    return false;
                }

                // If all validations pass, submit the form
                this.submit();
            });
        });
    </script>
</head>
<body>
    <section id="contact">
        <!-- Contact Us Form -->
        <div class="contact-container">
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                <div class="contact-left-title">
                    <h2>Get in touch</h2>
                    <hr>
                </div>
                <input type="hidden" name="access_key" value="5a460175-22df-4f15-95a2-acff372a882c">
                <input type="text" name="name" id="name" placeholder="Your Name" class="contact-inputs" required>
                <input type="email" name="email" id="email" placeholder="Your Email" class="contact-inputs" required>
                <textarea name="message" id="message" placeholder="Your message" class="contact-inputs" required></textarea>
                <button type="submit">Submit <img src="Resources/contact_assets/arrow_icon.png" alt="arrow"></button>
            </form>
            <div class="contact-right">
                <img src="Resources/contact_assets/right_img.png" alt="">
            </div>
        </div>
    </section>
</body>
</html>
