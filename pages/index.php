<?php
// Inclusion du fichier de configuration
require_once 'includes/config.php';

// Définition du titre de la page
$page_title = "Accueil";

// Inclusion du header
include 'includes/header.php';
?>

<!-- Corps de la page -->
<div class="cv_banner_wrapper">
    <div class="cv_container container-fluid">
        <div class="row">
            <!-- Colonne de gauche avec l'image -->
            <div class="col-xl-6">
                <div class="cv_banner_img">
                    <img src="assets/images/chris4.jpg" alt="Christophe Mostefaoui - Développeur web" class="img-fluid bnr-boy">
                </div>
            </div>

            <!-- Colonne de droite avec le texte de présentation -->
            <div class="col-xl-6">
                <div class="cv_banner_text">
                    <h5>Développeur web</h5>
                    <h1>Bonjour ! <img src="assets/images/hand.svg" alt="Main jaune en train de faire un salut" class="img-fluid"> Je suis</h1>
                    <h1 class="cv_profile_name" id="christophe-mostefaoui">Christophe Mostefaoui</h1>

                    <div class="cv_about_btn_wrapper">
                        <div class="cv_about_btn">
                            <a href="contact.php" class="cv_btn">Me contacter</a>
                        </div>

                        <div class="cv_banner_box">
                            <h4>Développeur web & web mobile</h4>
                            <p>
                                Ma transition professionnelle de la vente de produits informatiques vers le développement web
                                a été motivée par ma passion pour les nouvelles technologies et mon désir de contribuer activement
                                à la création de solutions numériques innovantes. Mon expérience dans la vente m'a permis de
                                développer des compétences essentielles en communication, en gestion du temps, et en résolution
                                de problèmes, des atouts que je suis convaincu de pouvoir mettre à profit en tant que développeur web.
                                N'hésitez pas à questionner mon chatbot en bas à droite pour plus de renseignements !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Blog -->
<div id="blog" class="section">
    <h2>Mes articles Linkedin</h2>
    <div class="blog-grid">
        <!-- Article 1 -->
        <article>
            <img src="/assets/images/IA-moi.png" alt="Christophe parlant à une IA" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/lintelligence-artificielle-peut-elle-me-pr%C3%A9senter-mieux-mostefaoui-zl0yf/?trackingId=LHWgi4I%2F4KG9g52nSgjnNQ%3D%3D">
                    L'intelligence artificielle peut-elle me présenter mieux que moi-même ?
                </a>
            </h3>
            <p>Découvrez mon expérience bluffante avec NotebookLM</p>
        </article>

        <!-- Article 2 -->
        <article>
            <img src="/assets/images/montagne.jpeg" alt="Christophe prêt à gravir une montagne" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/la-reconversion-un-chemin-sem%C3%A9-demb%C3%BBches-mais-une-qui-mostefaoui-rxref/?trackingId=mNPM4pW%2FX%2FibzpDzlQKOyQ%3D%3D">
                    La reconversion, un chemin semé d'embûches, mais une aventure qui en vaut la peine.
                </a>
            </h3>
            <p>Ma reconversion professionnelle vers le développement web est un défi de chaque instant.</p>
        </article>

        <!-- Article 3 -->
        <article>
            <img src="/assets/images/reconversion.png" alt="Christophe avec panneaux de direction pour sa reconversion" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/%C3%A0-la-recherche-dune-alternance-en-d%C3%A9veloppement-web-et-mostefaoui-317qf/?trackingId=qYSuPsVhkaiNTgegmYw5dA%3D%3D">
                    À la recherche d'une alternance en Développement Web et IA
                </a>
            </h3>
            <p>Présentation de ma candidature pour une alternance en concepteur développeur d'applications et IA.</p>
        </article>

        <!-- Article 4 -->
        <article>
            <img src="/assets/images/algo.png" alt="Image d'aperçu de l'article 4" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/mes-d%C3%A9buts-en-algorithmie-une-d%C3%A9couverte-inattendue-mostefaoui-spkef/?trackingId=ILBDTo2isdyDpJsZjJMBOg%3D%3D">
                    Mes Débuts en Algorithmie : Une Découverte Inattendue
                </a>
            </h3>
            <p>Ma découverte de l'importance de l'algorithmie</p>
        </article>

        <!-- Article 5 -->
        <article>
            <img src="/assets/images/alternance.webp" alt="Image candidat de l'article 6" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/vous-cherchez-un-d%C3%A9veloppeur-cr%C3%A9atif-et-passionn%C3%A9-mostefaoui-sx3cc/?trackingId=HElDNGImRqORigdUJkXs9g%3D%3D">
                    Vous cherchez un développeur créatif et passionné ?
                </a>
            </h3>
            <p>À la recherche d'une alternance Concepteur Développeur d'Applications (IA)</p>
        </article>

        <!-- Article 6 -->
        <article>
            <img src="/assets/images/chatbot.png" alt="Christophe un chatbot interactif" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/pulse/nouveau-sur-mon-portfolio-un-chatbot-interactif-pour-nos-mostefaoui-dqdlc/?trackingId=iTCKliZXRTe8ybuXdOiTjw%3D%3D">
                    Un chatbot interactif pour faciliter nos échanges ! 🤖
                </a>
            </h3>
            <p>Je vous présente une nouvelle méthode innovante qui permet aux recruteurs intéressés de mieux me connaître : un chatbot interactif directement intégré à mon portfolio.</p>
        </article>

        <!-- Article 7 -->
        <article>
            <img src="/assets/images/podcast.png" alt="Christophe et le podcast NotebookLM" class="blog-image">
            <h3>
                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7254840621838782464/">
                    Un nouveau format pour se présenter en podcast
                </a>
            </h3>
            <p>Je vous partage un podcast de présentation professionnelle généré par NotebookLM en français directement intégré à mon portfolio.</p>
        </article>
    </div>
</div>

<?php include 'includes/footer.php'; ?>