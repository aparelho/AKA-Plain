$(document).ready(function () {
  $(".news-wrapper").click((e) => {
    const parent = $(e.target).parents(".news-wrapper");
    $(".news-wrapper").not(parent).removeClass("open");
    parent.toggleClass("open");
  });

  $(".menu-trigger").click(() => {
    $(".nav-wrapper").toggleClass("open");
    $("body").toggleClass("no-scroll");
    $(".first-home-wrapper").toggleClass("darken");
    $(".hero-wrapper").toggleClass("displaced");
    $(".featured-products-wrapper").toggleClass("displaced");
    $(".flex-container").toggleClass("displaced");
  });

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 50) {
      $(".headernav").addClass("active");
    } else {
      //remove the background property so it comes transparent again (defined in your css)
      $(".headernav").removeClass("active");
    }
  });

  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  window.addEventListener("resize", () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  });

  if (window.navigator.appVersion.includes("Windows")) {
    $("body").append(`
      <style>
    
        *::-webkit-scrollbar {
          width: 10px;
        }

        *::-webkit-scrollbar-track {
          background: transparent;
        }

        *::-webkit-scrollbar-thumb {
          background-color: #adadad ;
          border-radius: 6px;
        }
        
      </style>
    `);
  }

  setTimeout(() => {
    $(".header").append(`
        <div class="ship-notice"><span class="gratis-frete"> Pré-lançamento</span><br> envios a partir de 22/10/20 </div>
      `);

    document.querySelector(".floating-cart").onclick = () => {
      $("html").addClass("no-scroll-all");
      $("body").addClass("no-scroll-all");
    };

    $(".header > button").click(() => {
      $(".slidecarthq-overlay").removeClass("open");
      $(".slidecarthq").removeClass("open");
      $("html").removeClass("no-scroll-all");
      $("body").removeClass("no-scroll-all");
    });
  }, 2000);

  $(".accordion-row").click((e) => {
    const parent = $(e.target).parents(".accordion-row");
    $(".accordion-row").not(parent).removeClass("open");
    parent.toggleClass("open");
  });

  $("#recover-button").click((e) => {
    $(".recover-pass").addClass("open");
    $("#login-form").addClass("hidden");
  });

  $(".buy-button").click(() => {
    $("html").addClass("no-scroll-all");
    $("body").addClass("no-scroll-all");
  });
});
