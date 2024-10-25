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
    <title>Contactez-moi</title>
    <meta
        name="description"
        content="Portfolio des projets de Christophe Mostefaoui, développeur web full stack en reconversion. Découvrez mes projets et compétences." />
    <meta name="keywords" content="Christophe Mostefaoui, développeur web,
    portfolio, projets, compétences, front-end, back-end"
        </head>

<body>
    <div class="cv_main_wrapper">
        <!-- logo podcast -->
        <div class="podcast-container" onclick="openPopup('TJXDgX5yApI')">
            <svg
                class="podcast-icon"
                viewBox="0 0 100 100"
                xmlns="http://www.w3.org/2000/svg">
                <!-- Fond circulaire -->
                <circle cx="50" cy="50" r="48" fill="#1a1f2e" />

                <!-- Microphone -->
                <rect x="40" y="25" width="20" height="35" rx="10" fill="#bd3dff" />
                <rect x="42" y="27" width="16" height="31" rx="8" fill="#d896ff" />

                <!-- Support du micro -->
                <rect x="45" y="60" width="10" height="15" fill="#bd3dff" />
                <rect x="35" y="75" width="30" height="5" rx="2" fill="#bd3dff" />

                <!-- Ondes sonores animées -->
                <g stroke="#00ffcc" fill="none" stroke-width="2">
                    <path class="sound-wave" d="M 25,50 Q 35,50 35,50" />
                    <path class="sound-wave" d="M 65,50 Q 75,50 75,50" />
                    <path class="sound-wave" d="M 20,40 Q 30,50 20,60" />
                    <path class="sound-wave" d="M 80,40 Q 70,50 80,60" />
                </g>

                <!-- Grille du micro -->
                <g fill="#ffffff">
                    <circle cx="50" cy="35" r="1.5" />
                    <circle cx="50" cy="40" r="1.5" />
                    <circle cx="50" cy="45" r="1.5" />
                    <circle cx="46" cy="37.5" r="1.5" />
                    <circle cx="54" cy="37.5" r="1.5" />
                    <circle cx="46" cy="42.5" r="1.5" />
                    <circle cx="54" cy="42.5" r="1.5" />
                </g>
            </svg>
            <span class="podcast-text">Nouveau ! Ma présentation sous forme d'un podcast généré par l'IA de
                Notebook LM</span>
        </div>

        <!-- Popup Video commune pour les trois liens -->
        <div class="popup-overlay" id="videoPopup">
            <div class="popup-container">
                <button class="close-button" onclick="closePopup()">×</button>
                <div class="video-wrapper">
                    <iframe
                        src=""
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- Fin Popup Video -->

        <!-- logo podcast end-->

        <!-- Loader Start -->
        <div class="loader">
            <div class="spinner">
                <img src="assets/images/loader.gif" alt="loader" class="img-fluid" />
            </div>
        </div>
        <!-- Loader End -->
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
        <!-- Address Section Start -->
        <section class="cv_address_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="cv_address_box">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-1.svg" />
                            </div>
                            <div class="cv_address_text">
                                <h5>Téléphone</h5>
                                <a href="tel:+33679088845">06.79.08.88.45</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="cv_address_box">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-2.svg" />
                            </div>
                            <div class="cv_address_text">
                                <h5>Email</h5>
                                <a href="mailto:christophe.mostefaoui.dev@gmail.com">
                                    christophe.mostefaoui.dev@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="cv_address_box">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-3.svg" />
                            </div>
                            <div class="cv_address_text">
                                <h5>Adresse</h5>
                                <a
                                    href="https://www.google.com/maps?q=4%2C+avenue+Edmond+Rostand%2C+64170+Artix"
                                    target="_blank">
                                    64170 Artix
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Address Section End -->
        <!-- Form Section Start -->
        <section class="cv_form_wrapper">
            <form class="cv_contact_form">
                <div class="cv_container container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="cv_client_heading">
                                <h2>Contactez-moi</h2>
                                <p>
                                    N'hésitez pas à me contacter pour plus de renseignements. Je
                                    serais ravis de m'entretenir avec vous.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- Form Section End -->
        <!-- Footer Section Start -->
        <div class="cv_footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cv_footer_text">
                            <p>
                                Copyright © <span id="copyYear"></span> Portfolio. Christophe
                                Mostefaoui
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/ityped.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        window.embeddedChatbotConfig = {
            chatbotId: "ChVRrroBokwiXkBw4wCcr",
            domain: "www.chatbase.co",
        };
    </script>
    <script
        src="https://www.chatbase.co/embed.min.js"
        chatbotId="ChVRrroBokwiXkBw4wCcr"
        domain="www.chatbase.co"
        defer></script>
</body>

</html>