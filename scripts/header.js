$(document).ready(function() {
  var elementPosition = $('header').offset();
  var elementheight = $("header").height();  
    $(window).scroll(function() {
      if ($(window).scrollTop() > elementPosition.top) {
          $('header').addClass("fixed");
          $("body").css({
            "paddingTop": elementheight
      })
      } else {
          $('header').removeClass("fixed");
          $("body").css({
            "paddingTop": "0"
      })
    }
  });
    if ($(window).scrollTop() >= 80) {
        $('.header').addClass('fixed');
    }
    else {
        $('.header').removeClass('fixed');
    }
});		