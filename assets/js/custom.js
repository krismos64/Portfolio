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

      // Functions Calling
      this.tyipng();
      this.bottom_top();
      this.loader();
      this.toggle_menu();
      this.copy_right();
      this.port_tab();
      this.counter();
    },

    // Typing Effect
    tyipng: function () {
      if ($(".cv_profile_name").length > 0) {
        window.ityped.init(document.querySelector(".cv_profile_name"), {
          strings: ["Christophe", "Developpeur web"],
          loop: true,
          typeSpeed: 100,
          backSpeed: 50,
          showCursor: false,
        });
      }
    },

    // Bottom To Top
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
      jQuery(window).on("load", function () {
        $(".loader").fadeOut();
        $(".spinner").delay(2000).fadeOut("slow");
      });
    },

    // Toggle menu
    toggle_menu: function () {
      $(".cv_toggle_btn, .cv_menu_close").on("click", function () {
        $("body").toggleClass("menu-open");
      });
    },

    // Copy year
    copy_right: function () {
      if ($("#copyYear").length > 0) {
        document.getElementById("copyYear").innerHTML =
          new Date().getFullYear();
      }
    },

    // Portfolio tabs
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

    // Counter
    counter: function () {
      $(".timer").appear(function () {
        $(this).countTo();
      });
    },
  };
  Resume.init();
})(jQuery);

// DOMContentLoaded event handler
document.addEventListener("DOMContentLoaded", function () {
  // Elements to animate on scroll
  const elementsToObserve = [
    ".cv_banner_box",
    ".cv_banner_img",
    ".cv_about_img",
    ".cv_about_box",
    ".cv_skill_box", // Ajoute également les compétences ici
  ];

  // Generic IntersectionObserver for multiple elements
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("appear");
        observer.unobserve(entry.target); // Arrête d'observer après l'apparition
      }
    });
  });

  // Observe each element
  elementsToObserve.forEach((selector) => {
    const elements = document.querySelectorAll(selector);
    elements.forEach((element) => {
      observer.observe(element);
    });
  });

  // Scroll functionality for overflowing text in gallery
  const galleryItems = document.querySelectorAll(".cv_gallery_text");

  galleryItems.forEach((item) => {
    const contentHeight = item.scrollHeight;
    const containerHeight = item.clientHeight;

    // Check if the text overflows
    if (contentHeight > containerHeight) {
      item.classList.add("scrollable");

      // Create scroll arrow
      const scrollArrow = document.createElement("div");
      scrollArrow.classList.add("cv_scroll_arrow");
      scrollArrow.innerHTML = "↓";

      item.appendChild(scrollArrow);

      // Scroll on arrow click
      scrollArrow.addEventListener("click", function () {
        item.scrollTop += 50;
      });
    }
  });
});
