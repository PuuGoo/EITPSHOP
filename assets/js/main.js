$(document).ready(function () {
  $(".header-user svg").click(function () {
    $(".background-opacity").toggleClass("bo-active");
    $(".sign-in").toggleClass("si-active");
  });
  $(".background-opacity").click(function () {
    $(".background-opacity").removeClass("bo-active");
    $(".sign-in").removeClass("si-active");
    $(".register").removeClass("r-active");
    $(".forgot-password").removeClass("fp-active");
    $(".sah-ra-show").removeClass("active");
  });
  $(".btn-register").click(function () {
    $(".sign-in").removeClass("si-active");
    $(".register").toggleClass("r-active");
    $(".forgot-password").removeClass("fp-active");
  });
  $(".btn-back").click(function () {
    $(".sign-in").toggleClass("si-active");
    $(".register").removeClass("r-active");
    $(".forgot-password").removeClass("fp-active");
  });
  $(".ssi-forgot-password").click(function () {
    $(".sign-in").removeClass("si-active");
    $(".register").removeClass("r-active");
    $(".forgot-password").toggleClass("fp-active");
  });
  $(".header-user img").click(function () {
    $(".background-opacity").toggleClass("bo-active");
    $(".sah-ra-show").toggleClass("active");
  });

  // Admin.html
  var heading = document.querySelectorAll(".sma-l-heading");
  var title = document.querySelectorAll(".sma-lh-title");
  var item = document.querySelectorAll(".sma-l-items");
  // var icon = document.querySelectorAll(".sma-lh-right i");
  console.log(heading.length);
  $.each(heading, function (index, ob) {
    $(ob).click(function () {
      if (index !== 0 && index !== heading.length - 1) {
        if ($(ob).find(".sma-lh-right i:nth-child(1)").hasClass("active")) {
          $(ob).find(".sma-lh-right i:nth-child(1)").removeClass("active");
          $(ob).find(".sma-lh-right i:nth-child(2)").toggleClass("active");
          $(ob).toggleClass("active");
          $(title[index]).toggleClass("active");
          $(item[index - 1]).toggleClass("active");
        } else {
          $(ob).find(".sma-lh-right i:nth-child(1)").toggleClass("active");
          $(ob).find(".sma-lh-right i:nth-child(2)").removeClass("active");
          $(ob).removeClass("active");
          $(title[index]).removeClass("active");
          $(item[index - 1]).removeClass("active");
        }
      }

      // if (index % 2 === 0) {
      //   $(ob).removeClass("active");
      //   $(icon[index + 1]).toggleClass("active");
      //   $(heading[index - 1]).toggleClass("active");
      //   $(title[index - 1]).toggleClass("active");
      //   $(item[index - 1]).toggleClass("active");
      // } else if (index % 2 !== 0) {
      //   $(ob).removeClass("active");
      //   $(icon[index - 1]).toggleClass("active");
      //   $(heading[index]).removeClass("active");
      //   $(title[index]).removeClass("active");
      //   $(item[index - 1]).removeClass("active");
      // }
    });
  });
  $(".sah-r-avatar").click(function () {
    $(".sah-ra-show").toggleClass("active");
  });
  $(".sma-rb-t-top .filter").click(function () {
    $(".sma-rb-t-bot").toggleClass("active");
  });
  $(".sma-rb-item label").toggleClass("eh6");

  // Home -> Secondary-Navigation
  $(".sa-m-shop").hover(function () {
    $(".sa-m-content").toggleClass("show");
  });

  // // Login don't reset page
  // $(".ssi-form").on("submit", function(e) {
  //   e.preventDefault();
  // })
$("input[type=checkbox]").click(function () {
  total = 0;
  $("input[type=checkbox]:checked").each(function () {
    total = total + parseInt($(this).val());
  });

  $(".smc-rt-t-price").text("$" + total);
});

});
