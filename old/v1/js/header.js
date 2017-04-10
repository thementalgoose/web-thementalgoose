var startingHeight = (window.innerHeight * 50) / 100 - 167;
var finishedScrollingHeight = (window.innerHeight * 80) / 100 - 167;
var smallHeaderSize = 15;
var largeHeaderSize = 40;
var difference = largeHeaderSize - smallHeaderSize;

$(window).scroll(function() {
  if ($(document).scrollTop() < startingHeight) {
    $('.header').removeClass("visible").addClass("transparent");    
    $('#name').css("font-size", largeHeaderSize);
    $('.header_right').css("padding-top", 30 + "px");
    $('#profile_image_home').fadeOut(400);
  } else if ($(document).scrollTop() < finishedScrollingHeight) {
    $('#name').css("font-size", largeHeaderSize - ((($(document).scrollTop() - startingHeight) * difference) / (finishedScrollingHeight - startingHeight)));
    $('.header_right').css("padding-top", 30 - ((($(document).scrollTop() - startingHeight) * 20) / (finishedScrollingHeight - startingHeight)) + "px");
    $('.header').removeClass("visible").addClass("transparent");
    $('#profile_image_home').fadeIn(400);
  } else {
    $('.header').delay(500).removeClass("transparent").addClass("visible");
    $('#name').css("font-size", smallHeaderSize);
    $('.header_right').css("padding-top", 10 + "px");
    $('#profile_image_home').fadeIn(400);
  }
});