<?php
$title="Contact";
$page="contact";
include_once("navbar.php");
?>
<html>
<body>
<section id="contact">
<!--Contact Us Form-->
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">

            <div class="contact-left-title">
                <h2>Get in touch</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="5a460175-22df-4f15-95a2-acff372a882c">
            <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required >
            <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required >
            <textarea name="message" placeholder="Your message" class="contact-inputs" required></textarea>
            <button type="submit">Submit<img src="Resources/contact_assets/arrow_icon.png" alt="arrow"></button>
        </form>

        <div class="" class="contact-right">
            <img src="Resources/contact_assets/right_img.png" alt="">           
        </div>
    </div>
    </section>
</body>
</html>