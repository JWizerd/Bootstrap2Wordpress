$(document).ready(function(){
  //cache window object
  var $window = $(window);

  //paralax background effect
  $('section[data-type="background"]').each(function(){

    var $bgObj = $(this); //assign object

    $(window).scroll(function(){
      //scroll background at var speed 

      // the Y position (yPos) is a negative value because we are scrolling up

      var yPos = - ($(window).scrollTop() / $bgObj.data('speed'));

      // Put together our final background position

      var coords = '50% ' + yPos + 'px';

      // move the background 
      $bgObj.css({backgroundPosition: coords});
    }); // end window scroll
  });
});