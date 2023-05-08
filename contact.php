<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Growth Empire Marketing</title>

    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/b5e2506554.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="public/css/main.css" rel="stylesheet">
</head>
<body>

<!-- header -->
<?php
// Header
require_once('header.php');
?>
<!-- /header -->

<section style="background: url('public/img/bg-shape-1.png'); background-position: bottom center; background-size: cover">
    <div class="contact-group">
        <div class="contact">
            <h2>Let's Get In Touch</h2>
            <p>Are you ready to finally reach your growth expectations?</p><p>The Growth Empire Marketing team is ready to eliminate your challenges by developing an efficient
                result guaranteed strategy that will help you scale up your business. Our purpose is to help brands across South Africa and the continent succeed.
                Contact us today to see how we will help you reach your business goals.</p>
        </div>
        <div class="contactForm">
            <h2>Send a Message</h2>
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" id="firstName" name="firstName" required autofocus>
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" id="lastName" name="lastName" required>
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="email" id="email" name="email" required>
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                    <input type="textarea" id="message" name="message" required>
                    <span>Write your message here...</span>
                </div>
                <div class="inputBox w100">
                    <input type="submit" value="Send Now!" class="btn">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contactInfo">
    <div class="card">
        <ul class="info">
            <li>
                <span><img src="public/img/location.png"></span>
                <span>68 Westbourne Rd, <br> Port Elizabeth Central,<br> Gqeberha, 6001</span>
            </li>
        </ul>
    </div>
    <div class="card">
        <ul class="info">
            <li>
                <span><img src="public/img/mail.png"></span>
                <span>prosper@growthempiremarketing.co.za</span>
            </li>
        </ul>
    </div>
    <div class="card">
        <ul class="info">
            <li>
                <span><img src="public/img/call.png"></span>
                <span><a href="tel:+27826187427">+27 (0) 82 618 7427</a></span>
            </li>
        </ul>
    </div>
</div>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.249539934155!2d25.601138050708176!3d-33.960425080536034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e7ad244b5c68f27%3A0x46016b5844e65ef3!2s68%20Westbourne%20Rd%2C%20Port%20Elizabeth%20Central%2C%20Gqeberha%2C%206001!5e0!3m2!1sen!2sza!4v1679333130498!5m2!1sen!2sza" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- Footer -->
<?php
// Footer
require_once('footer.php');
?>
<!-- /Footer -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>
