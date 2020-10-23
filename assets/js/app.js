$(document).ready(function () {
  $(".news-wrapper").click((e) => {
    const parent = $(e.target).parents(".news-wrapper");
    $(".news-wrapper").not(parent).removeClass("open");
    parent.toggleClass("open");
  });

  $(".menu-caller").click(() => {
    $(".menu").toggleClass("open");
    $("body").toggleClass("no-scroll");
    $(".first-home-wrapper").toggleClass("darken");
    $(".hero-wrapper").toggleClass("displaced");
    $(".featured-products-wrapper").toggleClass("displaced");
    $(".flex-container").toggleClass("displaced");
  });

  $(".agenda-caller").click(() => {
    $(".menu").addClass("further-open");
    $(".pre-agenda").addClass("open");
  });

  $(".close-menu").click(() => {
    $(".menu").removeClass("open");
    $(".menu").removeClass("further-open");
    $(".pre-agenda").removeClass("open");
  });


  $(".buy-button").click(() => {
    $("html").addClass("no-scroll-all");
    $("body").addClass("no-scroll-all");
  });
});
