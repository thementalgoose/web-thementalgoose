$(document).ready(function(){

  /**
   CONFIGURATION FOR FADING 
   */

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - $("#nav_title").height() - 16
        }, 600, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  $('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
  });
  $('#mainNav').click(function(){
    $(".navbar-collapse").collapse('hide');
  });

  var navChildren = $("#top-menu li").children();
  var aArray = [];
  for (var i = 0; i < navChildren.length; i++) {
      var aChild = navChildren[i];
      var ahref = $(aChild).attr('href');
      if (ahref == undefined || ahref == null) {
      }
      else {
        aArray.push(ahref);
      }
  }
  $(window).scroll(function() {
      var windowPos = $(window).scrollTop();
      var windowHeight = $(window).height();
      var docHeight = $(document).height();
      for (var i = 0; i < aArray.length; i++) {
          var theID = aArray[i];
          var secPosition = $(theID).offset().top;
          secPosition = secPosition - 135;
          var divHeight = $(theID).height();
          divHeight = divHeight + 90;
          if (windowPos >= secPosition && windowPos < (secPosition + divHeight)) {
              $("a[href='" + theID + "']").parent().addClass("active");
          } else {
              $("a[href='" + theID + "']").parent().removeClass("active");
          }
      }
  });
});