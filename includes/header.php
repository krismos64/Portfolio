<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
    <link
        rel="shortcut icon"
        type="image/ico"
        href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
        rel="stylesheet" />
    <title>Christophe Mostefaoui - <?php echo ucfirst(str_replace('.php', '', $current_page)); ?></title>
    <meta
        name="description"
        content="Portfolio des projets de Christophe Mostefaoui, développeur web. Découvrez mes projets et compétences." />
    <meta
        name="keywords"
        content="Christophe Mostefaoui, krismos, développeur web, portfolio, projets, compétences, front-end, back-end, Symfony," />
</head>

<body>
    <div class="cv_main_wrapper">
        <!-- Podcast container -->
        <?php include 'podcast-popup.php'; ?>

        <!-- Loader -->
        <?php include 'loader.php'; ?>
        <!-- Header Section Start -->
        <div class="cv_header_wrapper">
            <div class="cv_container container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="cv_navbar">
                            <a
                                href="javascript:void(0);"
                                class="cv_toggle_btn cv_toggle_btn_mobile"
                                onclick="toggleMenu()">
                                <!-- SVG du menu burger -->
                                <svg
                                    class="ham hamRotate ham7"
                                    viewBox="0 0 100 100"
                                    width="80">
                                    <path
                                        class="line top"
                                        d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013"></path>
                                    <path class="line middle" d="m 70,50 h -40"></path>
                                    <path
                                        class="line bottom"
                                        d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40"></path>
                                </svg>
                            </a>
                            <!-- Navbar Start -->
                            <div class="cv_header_menu">
                                <div class="cv_menus_wrapper">
                                    <ul class="cv_menus">
                                        <li>
                                            <a class="active" href="index.html" title="Accueil">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="about.html" title="À propos de moi">À propos de moi</a>
                                        </li>
                                        <li>
                                            <a href="portfolio.html" title="Mes projets">Mes projets</a>
                                        </li>
                                        <li>
                                            <a href="strength.html" title="Compétences">Compétences</a>
                                        </li>
                                        <li>
                                            <a href="contact.html" title="Contactez-moi">Contactez-moi</a>
                                        </li>
                                        <li>
                                            <a
                                                href="javascript:void(0);"
                                                onclick="openPopup('6rEa_1e7qm8')"
                                                style="float: right">
                                                <img
                                                    src="assets/images/CandidatureVidéo.png"
                                                    alt="IA Youtube Logo"
                                                    class="img-fluid"
                                                    style="
                              width: 150px;
                              height: 60px;
                              margin-right: 15px;
                            " />
                                                L'IA parle de moi !
                                            </a>
                                        </li>
                                        <li>
                                            <a="javascript:void(0);"
                                                onclick="openPopup('TJXDgX5yApI')"
                                                style="
                            float: right;
                            display: flex;
                            align-items: center;
                            gap: 10px;
                            margin-top: 15px;
                          ">
                                                <div
                                                    style="
                              display: flex;
                              align-items: center;
                              min-width: 150px;
                            ">
                                                    <svg
                                                        class="menu-podcast-icon"
                                                        viewBox="0 0 100 100"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="
                                width: 60px;
                                height: 60px;
                                margin-right: 15px;
                              ">
                                                        <!-- Fond circulaire -->
                                                        <circle cx="50" cy="50" r="48" fill="#1a1f2e" />
                                                        <!-- Microphone -->
                                                        <rect
                                                            x="40"
                                                            y="25"
                                                            width="20"
                                                            height="35"
                                                            rx="10"
                                                            fill="#bd3dff" />
                                                        <rect
                                                            x="42"
                                                            y="27"
                                                            width="16"
                                                            height="31"
                                                            rx="8"
                                                            fill="#d896ff" />
                                                        <!-- Support du micro -->
                                                        <rect
                                                            x="45"
                                                            y="60"
                                                            width="10"
                                                            height="15"
                                                            fill="#bd3dff" />
                                                        <rect
                                                            x="35"
                                                            y="75"
                                                            width="30"
                                                            height="5"
                                                            rx="2"
                                                            fill="#bd3dff" />
                                                        <!-- Ondes sonores animées -->
                                                        <g
                                                            stroke="#00ffcc"
                                                            fill="none"
                                                            stroke-width="2"
                                                            class="menu-waves">
                                                            <path
                                                                class="menu-wave"
                                                                d="M 25,50 Q 35,50 35,50" />
                                                            <path
                                                                class="menu-wave"
                                                                d="M 65,50 Q 75,50 75,50" />
                                                            <path
                                                                class="menu-wave"
                                                                d="M 20,40 Q 30,50 20,60" />
                                                            <path
                                                                class="menu-wave"
                                                                d="M 80,40 Q 70,50 80,60" />
                                                        </g>
                                                    </svg>
                                                    <span>Podcast de candidature</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="cv_header_social">
                                        <h4>Suivez-moi</h4>
                                        <ul>
                                            <li>
                                                <a href="https://github.com/krismos64"><img
                                                        src="assets/images/github-logo.png"
                                                        alt="GitHub Logo" /></a>
                                                <a
                                                    href="https://www.linkedin.com/in/christophemostefaoui"><img
                                                        src="assets/images/in.svg"
                                                        alt="LinkedIn Logo" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->