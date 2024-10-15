// Add class JQuery

jQuery(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 60) {
    jQuery("header").addClass("darkHeader one");
  } else {
    jQuery("header").removeClass("darkHeader");
  }
});

// Header footer reuse Code

// function loadHTML(selector, url) {
//   fetch(url)
//     .then((response) => response.text())
//     .then((data) => {
//       document.querySelector(selector).innerHTML = data;
//     })
//     .catch((error) => console.log(error));
// }

// window.onload = function () {
//   loadHTML("header", "header.html");
//   loadHTML("footer", "footer.html");
// };

// lade mehr code
$(document).ready(function () {
  $(".knife-section").hide();
  $(".knife-section").each(function (index, value) {
    if (index < 4) {
      $(this).show();
    }
  });
  if ($(".knife-section:hidden").length) {
    $("#seeMore").show();
  }
  if (!$(".knife-section:hidden").length) {
    $("#seeMore").hide();
  }
});

$("#seeMore").on("click", function () {
  $(".knife-section:hidden").each(function (index, value) {
    if (index < 4) {
      $(this).show();
    }
  });
  if (!$(".knife-section:hidden").length) {
    $("#seeMore").hide();
  }
});

///////////////////

