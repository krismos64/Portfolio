(function ($) {
  "use strict";
  var Resume = {
    initialised: false,
    version: 1.0,
    mobile: false,
    init: function () {
      if (!this.initialised) {
        this.initialised = true;
      } else {
        return;
      }

      // Appel des fonctions
      this.typing();
      this.bottom_top();
      this.loader();
      this.toggle_menu();
      this.copy_right();
      this.port_tab();
      this.counter();
    },

    // Effet de saisie
    typing: function () {
      if ($(".cv_profile_name").length > 0) {
        window.ityped.init(document.querySelector(".cv_profile_name"), {
          strings: ["Christophe", "Développeur web"],
          loop: true,
          typeSpeed: 100,
          backSpeed: 50,
          showCursor: false,
        });
      }
    },

    // Bouton "Retour en haut"
    bottom_top: function () {
      if ($("#button").length > 0) {
        var btn = $("#button");
        var fixed = $(".vld_header_wrapper");
        $(window).scroll(function () {
          if ($(window).scrollTop() > 50) {
            btn.addClass("show");
            fixed.addClass("fixed");
          } else {
            btn.removeClass("show");
            fixed.removeClass("fixed");
          }
        });
        btn.on("click", function (e) {
          e.preventDefault();
          $("html, body").animate({ scrollTop: 0 }, "50");
        });
      }
    },

    // Loader
    loader: function () {
      $(window).on("load", function () {
        $(".loader").fadeOut();
        $(".spinner").delay(2000).fadeOut("slow");
      });
    },

    // Gestion du menu
    toggle_menu: function () {
      var self = this;

      // Fonction pour vérifier la largeur de l'écran
      function checkWidth() {
        var windowSize = $(window).width();

        if (windowSize <= 991) {
          // Mode mobile/tablette : afficher le menu burger
          $(".cv_toggle_btn_mobile").show();
          $(".cv_header_menu").hide();

          // Gestionnaire d'événement pour le menu burger
          $(".cv_toggle_btn_mobile")
            .off("click")
            .on("click", function () {
              $("body").toggleClass("menu-open"); // Ajout/suppression de la classe menu-open sur le body
              $(this).toggleClass("active"); // Ajouter une classe active pour l'animation du burger

              // Afficher ou masquer le menu en fonction de la classe menu-open
              if ($("body").hasClass("menu-open")) {
                $(".cv_header_menu").show();
              } else {
                $(".cv_header_menu").hide();
              }
            });
        } else {
          // Mode desktop : afficher le menu complet et masquer le bouton burger
          $(".cv_toggle_btn_mobile").hide();
          $(".cv_header_menu").show();
          $("body").removeClass("menu-open"); // S'assurer que la classe est retirée du body
          $(".cv_toggle_btn_mobile").removeClass("active"); // Réinitialiser le bouton burger
        }
      }

      // Exécuter au chargement de la page
      checkWidth();

      // Exécuter lors du redimensionnement de la fenêtre
      $(window).resize(function () {
        checkWidth();
      });
    },

    // Copier l'année
    copy_right: function () {
      if ($("#copyYear").length > 0) {
        document.getElementById("copyYear").innerHTML =
          new Date().getFullYear();
      }
    },

    // Onglets du portfolio
    port_tab: function () {
      $(".cv_port_tab li a").on("click", function () {
        var target = $(this).attr("data-rel");
        $(".cv_port_tab li a").removeClass("active");
        $(this).addClass("active");
        $("#" + target)
          .fadeIn("slow")
          .siblings(".cv_tab_pane")
          .hide();
        return false;
      });
    },

    // Compteur
    counter: function () {
      $(".timer").appear(function () {
        $(this).countTo();
      });
    },
  };
  Resume.init();
})(jQuery);

// Gestion des animations au scroll
document.addEventListener("DOMContentLoaded", function () {
  // Éléments à observer
  const elementsToObserve = [
    ".cv_banner_box",
    ".cv_banner_img",
    ".cv_about_img",
    ".cv_about_box",
    ".cv_skill_box", // Ajout des compétences ici
  ];

  // Observer pour les animations
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("appear");
        observer.unobserve(entry.target); // Arrête d'observer après l'apparition
      }
    });
  });

  // Observation de chaque élément
  elementsToObserve.forEach((selector) => {
    const elements = document.querySelectorAll(selector);
    elements.forEach((element) => {
      observer.observe(element);
    });
  });

  // Fonctionnalité de scroll pour le texte débordant dans la galerie
  const galleryItems = document.querySelectorAll(".cv_gallery_text");

  galleryItems.forEach((item) => {
    const contentHeight = item.scrollHeight;
    const containerHeight = item.clientHeight;

    // Vérifier si le texte déborde
    if (contentHeight > containerHeight) {
      item.classList.add("scrollable");

      // Créer une flèche de défilement
      const scrollArrow = document.createElement("div");
      scrollArrow.classList.add("cv_scroll_arrow");
      scrollArrow.innerHTML = "↓";

      item.appendChild(scrollArrow);

      // Défilement lors du clic sur la flèche
      scrollArrow.addEventListener("click", function () {
        item.scrollTop += 50;
      });
    }
  });
});
