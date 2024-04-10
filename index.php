<?php
use Dotenv\Dotenv;
use Thaldos\HarmonieLimoges\Controllers\IndexController;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$isDebugMode = $_ENV['IS_DEBUG_MODE'] ?? false;
if ($isDebugMode) {
    \ini_set('display_errors', 1);
    \ini_set('display_startup_errors', 1);
    \error_reporting(E_ALL);
}

$indexController = new IndexController();
// $indexController->indexAction();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Harmonie - Гармония</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="dtox" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="dtox-1.0/plugins/bootstrap/bootstrap.min.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="dtox-1.0/plugins/themify-icons/themify-icons.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="dtox-1.0/plugins/slick/slick.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="dtox-1.0/plugins/Venobox/venobox.css">
    <!-- aos -->
    <link rel="stylesheet" href="dtox-1.0/plugins/aos/aos.css">

    <!-- Main Stylesheet -->
    <link href="dtox-1.0/css/style.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/harmonie-limoges.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="dtox-1.0/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="dtox-1.0/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="images/harmonie_logo.png" alt="logo"></a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil<br><span class="nav-link-russian">Дом</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#newsletter-submit">Inscription<br><span class="nav-link-russian">регистр</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">Qui sommes nous ?<br><span class="nav-link-russian">Кто мы ?</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->
    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(dtox-1.0/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1" id="newsletter-submit">
                    <div class="col-lg-12 text-center">
                        <h2>S'inscrire à notre newsletter</h2>
                        <h3>Подписывайтесь на нашу новостную рассылку</h3>
                        <p class="mb-5">Receive updates, news and deals</p>
                    </div>
                    <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                        <form action="#">
                            <div class="input-wrapper position-relative">
                                <input type="email" class="newsletter-form" id="newsletter" placeholder="Enter your email">
                                <button type="submit" value="send" class="btn newsletter-btn">Inscription<br><span class="nav-link-russian">регистр</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation" src="dtox-1.0/images/background-shape/feature-bg-2.png" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation" src="dtox-1.0/images/background-shape/seo-ball-1.png" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation" src="dtox-1.0/images/background-shape/seo-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-4 up-down-animation" src="dtox-1.0/images/background-shape/green-dot.png" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation" src="dtox-1.0/images/background-shape/blue-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-6 up-down-animation" src="dtox-1.0/images/background-shape/seo-ball-1.png" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation" src="dtox-1.0/images/background-shape/yellow-triangle.png"
                alt="">
            <img class="img-fluid hero-bg-8 up-down-animation" src="dtox-1.0/images/background-shape/service-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-9 up-down-animation" src="dtox-1.0/images/background-shape/team-bg-triangle.png"
                alt="">
        </div>
    </section>
    <!-- /hero-area -->
    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Qui sommes nous ?</h2>
                    <h3>Кто мы ?</h3>
                    <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Awesome Design</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Easy Customize</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Bug free Code</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Organized Layouts</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="dtox-1.0/images/background-shape/feature-bg-1.png" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="dtox-1.0/images/background-shape/feature-bg-2.png" alt="bg-shape">
    </section>
    <!-- /feature -->

    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url(dtox-1.0/images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="/">
                        <img class="img-fluid harmonie-logo" src="images/harmonie_logo.png" alt="logo">
                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="/">Accueil<br><span class="nav-link-russian">Дом</span></a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#newsletter-submit">Inscription<br><span class="nav-link-russian">регистр</span></a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#feature">Qui sommes nous ?<br><span class="nav-link-russian">Кто мы ?</span></a></li>
                    </ul>
                </nav>
                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="black" href="https://github.com/Thaldos/harmonie-limoges.com"><i class="ti-github"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="dtox-1.0/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="dtox-1.0/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="dtox-1.0/plugins/slick/slick.min.js"></script>
    <!-- venobox -->
    <script src="dtox-1.0/plugins/Venobox/venobox.min.js"></script>
    <!-- aos -->
    <script src="dtox-1.0/plugins/aos/aos.js"></script>
    <!-- Main Script -->
    <script src="dtox-1.0/js/script.js"></script>

</body>

</html>