<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/b5e2506554.js" crossorigin="anonymous"></script>
    <!-- Link Animate's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="public/css/main.css" rel="stylesheet" />

    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico" />
    <title>About Us | Growth Empire Marketing</title>
</head>
<body>
<?php
// Header
require_once('header.php');
?>
<section class="about_section" style="background: url('public/img/bg-shape-1.png'); background-position: bottom center; background-size: cover">
    <div id="about" style="background-blend-mode: screen; background: url('public/img/team-2.jpg') #6867ab right center;background-size: cover">
        <div class="image"><img src="public/img/team-3.jpg" alt=""></div>
    </div>
    <div class="why_us">
        <h1>We have proven that direct sales marketing <span>works.</span></h1><br>
        But we do more than make it work. As a result-driven firm, we push your campaigns to the max, so you can maximize your performance potential faster and escalate your growth. With our proven techniques, you’ll know exactly how to spend your budget to get the biggest return on your investment, faster
        </p>
    </div>
</section>
<div class="team" style="background: url('public/img/bg-middle.png'); background-position: bottom; background-size: cover; background-repeat: no-repeat">
    <div class="team_text">
        <h4>team member</h4>
        <h1>meet<span> our team</span></h1>
    </div>
    <div class="profile-card">
        <div class="img">
            <img src="public/img/team-19.jpg" alt="Prosper Yolanda Jojwana" style="width: 320px; height: 320px">
        </div>
        <div class="caption">
            <h3>Prosper Yolanda Jojwana</h3>
            <p>Founder</p>
        </div>
    </div>
    <div class="profile-card">
        <div class="img">
            <img src="public/img/team-14.jpg" alt="Growth Empire Marketing Team" style="width: 320px; height: 320px">
        </div>
        <div class="caption">
            <h3>Growth Empire Marketing</h3>
            <p>Team</p>
        </div>
    </div>
</div>

<?php
// Footer
require_once "footer.php";
?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="public/js/script.js"></script>
</body>
</html>
