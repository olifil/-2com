(function($) {

  redimensionnement();

  $('#slide1').parallax("50%", 0.1);
  $('#slide2').parallax("50%", 0.5);
  $('#slide3').parallax("50%", 0.7);

  $(".btn-close").css("display", "none");

  var isMenuOpen = false;

  $('.btn-menu').click(function()
  {
      if (isMenuOpen == false)
      {
      //alert('je suis dans le bon cas')
          $("#menu").clearQueue().animate({
              right : '0'
          })
          $("#page").clearQueue().animate({
              "margin-left" : '-290px'
          })

          $(this).fadeOut(200);
          $('.btn-top').fadeOut(200);
          $(".btn-close").fadeIn(300);

          isMenuOpen = true;
      }
  });

  $('.btn-close, #menu a').click(function()
  {
      // Quel est le lien actif
      var actif = $('#menu .active');

      if (isMenuOpen == true)
      {
          if (!$(this).hasClass()) {
            actif.removeClass('active');
            $(this).parent('li').addClass('active');
          }
          $("#menu").clearQueue().animate({
              right : '-240px'
          })
          $("#page").clearQueue().animate({
              "margin-left" : '0px'
          })

          $('.btn-close').fadeOut(200);
          $(".btn-menu").fadeIn(300);
          $(".btn-top").fadeIn(300);

          isMenuOpen = false;
      }
  });

  // Gestion du scroll sur les liens
  $('a[href^="#"]').click(function(event){

  	var the_id = $(this).attr("href");

  	$('html, body').animate({
  		scrollTop:$(the_id).offset().top
  	}, 'slow');
  	return false;
  });

  // En cas de redimensionnement de la fenêtre
    $(window).resize(function(){
        redimensionnement();
    });

  function redimensionnement(){

    var $image = $('img.superbg');
    var image_width = $image.width();
    var image_height = $image.height();

    var over = image_width / image_height;
    var under = image_height / image_width;

    var body_width = $(window).width();
    var body_height = $(window).height();

    if (body_width / body_height >= over) {
      $image.css({
        'width': body_width + 'px',
        'height': Math.ceil(under * body_width) + 'px',
        'left': '0px',
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px'
      });
    }

    else {
      $image.css({
        'width': Math.ceil(over * body_height) + 'px',
        'height': body_height + 'px',
        'top': '0px',
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px'
      });
    }
}

})(jQuery);
