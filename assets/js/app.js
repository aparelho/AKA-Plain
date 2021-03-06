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


  $(".application-caller").click(() => {
    $(".global-wrapper").toggleClass("translated");
    $("#application").toggleClass("visible");
    $(".menu").removeClass("open");
     $(".menu").removeClass("further-open");
    $(".pre-agenda").removeClass("open");
  });

  $(".application-caller").hover(() => {
      $("#application").toggleClass("almost");
    });

  $(".Blackboard").hover(() => {
      $(".blb-intro").toggleClass("almost");
    });

  $(".Blackboard").click(() => {
      $("body").delay(1000).toggleClass("no-scroll");
      $(".blb-intro").toggleClass("full");
      $(".blackboard-container").toggleClass("visible");
      $(".blb-header").delay(500).fadeIn();
    });

  $(".blackboard-dismiss").click(() => {
      $(".blb-header").fadeOut();
      $("body").toggleClass("no-scroll");
      $(".blb-intro").toggleClass("full");
      $(".blackboard-container").toggleClass("visible");      
    });

    $(".collab-expand").click(() => {
      $(".collab-details").addClass("open");
      $(".collab-closer").addClass("available");
    });

    $(".collab-closer").click(() => {
      $(".collab-details").removeClass("open");
       $(".collab-closer").removeClass("available");
    });

    $(".soon-reveal").click(() => {
      $("#soon").addClass("gone");
      $("#soon").delay(3000).fadeOut();
    });

      $(".loading").mouseenter((e) => {
    sessionStorage.setItem('popup', true);
  });

    $(".mobile-loading").delay(1350).fadeOut(250);

    $(".desk-loading").delay(5750).fadeOut(250);

    $(".animation-holder").delay(1350).addClass("ready");

    const popup = sessionStorage.getItem('popup')

  if (popup) {
    $('.loading').css('display', 'none');
  }

});
