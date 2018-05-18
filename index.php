<?php
/**
 * Created by PhpStorm.
 * User: e_ahu
 * Date: 5/16/2018
 * Time: 9:11 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>OCC Janitorial</title>
    <meta name="author" content="Jorge Eduardo Ahumada">
    <meta name="description" content="The professional janitorial services your facility requires, serving our local community of Orange County. ">
    <meta name="keywords" content="janitorial, janitorial services, office cleaning, commercial janitorial, orange county ">
    <link rel="icon" type="image/png" href="images/green-cleaning.ico">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/navbar-style.css">
    <link rel="stylesheet" href="css/main-style.css"/>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>

</head>
<body>
<div class="grid-y" id="hero-background">
    <div class="cell large-3 medium-3 small-3">
        <?php
        include "navbar.php"
        ?>
    </div>
    <div  class="cell auto" id="catch-phrase-container">
        <div class="grid-x">
            <div class="cell large-5 large-offset-1 medium-7 medium-offset-1 small-9 small-offset-1">
                <p  id="catch-phrase">
                    The professional janitorial services your facility requires
                </p>
                <div id="call-to-action-container">
                    <a class="button large warning" id="call-to-action" href="#">GET A FREE QUOTE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div id="service-guarantee-container">
        <h1 id="service-guarantee-header">Our Service Guarantee</h1>
        <p id="service-guarantee-text">
            We know you’ll be more than satisfied with our services, in fact;
            we guarantee it. If at any time, you are not completely satisfied with our services,
            we’ll come back and make it right until you’re happy, free of charge.
        </p>
    </div>
</div>


</body>
</html>
