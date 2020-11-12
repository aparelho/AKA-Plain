$(document).ready(function () {

    'use strict';
  
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
});
