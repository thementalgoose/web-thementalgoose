$(document).ready(function(){

  /**
   CONFIGURATION FOR FADING 
   */

  var elements = [{
    type: "fadeInLeft",
    items: [
      "about-title", 
      "about-break",
      "about-break-2",
      "projects-title", 
      "projects-break",
      "education-title", 
      "education-break",
      "contact-title", 
      "contact-break",
      "blog-title", 
      "blog-break"
    ]
  },
  {
    type: "jackInTheBox",
    items: [
      "about-me", 
      "about-info", 
      "about-passion", 
      "about-future"
    ]
  },
  {
    type: "fadeIn",
    items: [
      "about-me-box", 
      "about-info-box", 
      "about-passion-box", 
      "about-future-box",
      "contact-message",
      "profile-download"
    ]
  },
  {
    type: "fadeIn",
    items: [
      "skill-java",
      "skill-android",
      "skill-web",
      "skill-csharp",
      "skill-mean",
      "skill-python",
      "skill-haskell",
      "skill-spring",
      "skill-firebase",
      "skill-java",
      "skill-gradle",
      "skill-azure",
      "skill-git"
    ]
  },{
    type: "fadeIn",
    items: [
      "skill-java-bar",
      "skill-android-bar",
      "skill-web-bar",
      "skill-csharp-bar",
      "skill-mean-bar",
      "skill-python-bar",
      "skill-haskell-bar",
      "skill-spring-bar",
      "skill-firebase-bar",
      "skill-java-bar",
      "skill-gradle-bar",
      "skill-azure-bar",
      "skill-git-bar"
    ]
  },{
    type: "fadeIn",
    items: [
      "experience-roller-2-icon",
      "experience-roller-2-date",
      "experience-roller-1-icon",
      "experience-roller-1-date",
      "experience-uni-icon",
      "experience-uni-date",
      "experience-lutterworth-icon",
      "experience-lutterworth-date",
    ]
  },{
    type: "fadeInRight",
    items: [
      "experience-roller-2",
      "experience-uni"
    ]
  },{
    type: "fadeInLeft",
    items: [
      "experience-roller-1",
      "experience-lutterworth"
    ]
  }, {
    type: "fadeIn",
    items: [
      "project-gal-app-amiwrong",
      "project-gal-app-drivingtutor",
      "project-gal-app-cmai",
      "project-gal-app-schedule",
      "project-gal-web-old",
      "project-gal-web-j21",
      "project-gal-web-flatfinder",
      "project-gal-web-bookmark",
      "project-gal-space-invaders",
      "project-gal-snake",
      "project-gal-java3d",
      "project-gal-spacegame",
      "project-gal-chat-server"
    ]
  }];

  /**
   LOAD MY AGE
   */
  var date = new Date();
  date.setFullYear(1995, 9, 12);
  $("#age").html(calculateAge(date));

  /**
   CURRENT YEAR
   */
  $("#year").html((new Date()).getFullYear());

  /**
   PROJECT
   */
  // var Shuffle = window.Shuffle;

  // window.shuffleInstance = new Shuffle(document.querySelector('.my-grid-with-images'), {
  //   itemSelector: '.js-item',
  //   sizer: '.my-sizer-element',
  // });

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
        console.log("Blog link de-activated");
      }
      else {
        aArray.push(ahref);
      }
  }
  console.log(aArray);
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

  for (var i = 0; i < elements.length; i++) {
    configureEnterance(elements[i].items, elements[i].type);
  }
});

function calculateAge(birthday) { // birthday is a date
  var ageDifMs = Date.now() - birthday.getTime();
  var ageDate = new Date(ageDifMs); // miliseconds from epoch
  return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function configureEnterance(array, importClass) {
  for (var i = 0; i < array.length; i++) {
    $('#' + array[i]).css('opacity', 0);
    $("#" + array[i]).waypoint(function() {
      var delay = $(this.element).attr('data-delay');

      if (!delay || delay == undefined || delay == null) {
        delay = 0;
      }
      var id = this.element.id
      setTimeout(function() {
        $("#" + id).addClass(importClass);
      }, delay);
    }, { offset: '100%'});
  }
}