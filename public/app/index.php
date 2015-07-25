<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Cherish That</title>
    <meta name="description" content="Cherish That Cakes">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="bower_components/materialize/bin/materialize.css"/>
    <link href="app/styles/material-icons.css" rel="stylesheet">
    <link href="bower_components/mdi/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app/styles/main.css">
</head>
<body>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<header>
    <div class="row" id="header-holder">
        <div class="col s12 m8 l8 offset-l4 offset-m4">
            <a href="/">
                <img src="app/images/cherish-worded.png" class="responsive-img header-logo"/>
            </a>
        </div>
        <div class="col s12 m12 l12" id="menu">
            <nav>
                <ul class="center hide-on-med-and-down">
                    <li class="active"><a href="/about">About Us</a></li>
                    <li><a href="/order-a-cake">Order A Cake</a></li>
                    <li><a href="/wedding-cakes">Wedding Cakes</a>
                    <li><a href="/birthday-cakes">Birthday Cakes</a></li>
                    <li><a href="/flavours">Flavours</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/catering-services">Catering Services</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>

                <ul id="slide-out" class="side-nav">
                    <li class="active"><a href="/about">About Us</a></li>
                    <li><a href="#">Order A Cake</a></li>
                    <li><a href="/wedding-cakes">Wedding Cakes</a>
                    <li><a href="/birthday-cakes">Birthday Cake</a></li>
                    <li><a href="/flavours">Flavours</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/catering-services">Catering Services</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>

                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </nav>
        </div>
    </div>   
</header>
<!-- main content -->
<main>
    <?php
echo $child ?>
</main>

<!-- footer -->
<footer class="page-footer">
    <div class="row no-bottom">
         <div class="container">
            <div class="col s12 l4 m4 pushab white-border">
                <a href="" class="center black-text white-text phone">
                    Give us a Shot   0700 000 000
                </a>

                <p class="black-text white-text office">Office Address</p>
            </div>
            <div class="col s12 l4 m4 white-border">
                <div class="social-media">
                    <div class="col s12 m12 m12">
                        <a class="fb" href="#"><i class="mdi mdi-facebook"></i></a>
                        <a class="tw" href="#"><i class="mdi mdi-twitter"></i></a>
                        <a class="ig" href="#"><i class="mdi mdi-instagram"></i></a>
                    </div>
                </div>
                <a href="https://williwambu.github.io" target="_blank" class="center pink-text design-by">
                    Designed by William
                </a>
            </div>
            <div class="col s12 l4 m4 pushab white-border">
                <a href="#" class="white-text footer-items">Order A cake</a>
                <a href="#" class="white-text footer-items">Catering Services</a>
                <a href="#" class="white-text footer-items">About</a>
                <p class="footer-copyright office">&copy  <script>document.write(new Date().getFullYear())</script> Cherish That All Rights Reserved </p>
            </div>
        </div>
    </div>
</footer>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/materialize/bin/materialize.js"></script>
<script src="app/scripts/main.js"></script>
</body>
</html>
