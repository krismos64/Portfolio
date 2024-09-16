/*--------------------- Copyright (c) 2023 -----------------------
[Master Javascript]
Project: Resume html
-------------------------------------------------------------------*/
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
      /*-------------- Resume Functions Calling ---------------------------------------------------
			------------------------------------------------------------------------------------------------*/

      this.tyipng();
      this.bottom_top();
      this.loader();
      this.toggle_menu();
      this.copy_right();
      this.port_tab();
      this.counter();
    },

    /*-------------- Resume Functions Calling ---------------------------------------------------
		--------------------------------------------------------------------------------------------------*/

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

    // loader
    loader: function () {
      jQuery(window).on("load", function () {
        $(".loader").fadeOut();
        $(".spinner").delay(2000).fadeOut("slow");
      });
    },

    // toggle menu
    toggle_menu: function () {
      $(".cv_toggle_btn, .cv_menu_close").on("click", function () {
        $("body").toggleClass("menu-open");
      });
    },

    copy_right: function () {
      if ($("#copyYear").length > 0) {
        document.getElementById("copyYear").innerHTML =
          new Date().getFullYear();
      }
    },

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

    counter: function () {
      $(".timer").appear(function () {
        $(this).countTo();
      });
    },
  };
  Resume.init();
})(jQuery);

document.addEventListener("DOMContentLoaded", function () {
  const bannerBox = document.querySelector(".cv_banner_box");

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        bannerBox.classList.add("appear");
      }
    });
  });

  observer.observe(bannerBox);
});
document.addEventListener("DOMContentLoaded", function () {
  const bannerImg = document.querySelector(".cv_banner_img");

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        bannerImg.classList.add("appear");
      }
    });
  });

  observer.observe(bannerImg);
});
document.addEventListener("DOMContentLoaded", function () {
  const aboutImage = document.querySelector(".cv_about_img");
  const aboutBox = document.querySelector(".cv_about_box");

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("appear");
      }
    });
  });

  observer.observe(aboutImage);
  observer.observe(aboutBox);
});
