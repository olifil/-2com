/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($){

  var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
  };

  at2com_toggleClass();

  $('.top-left')
    .on('mouseover', function(){
      $(this).siblings('.tooltip').removeClass('hidden').addClass('show');
    })
    .on('mouseout', function(){
      $(this).siblings('.tooltip').removeClass('show').addClass('hidden');
    });

  $('.top-right')
    .on('mouseover', function(){
      $(this).siblings('.tooltip').removeClass('hidden').addClass('show');
    })
    .on('mouseout', function(){
      $(this).siblings('.tooltip').removeClass('show').addClass('hidden');;
    });

  $('.bottom-left')
    .on('mouseover', function(){
      $(this).siblings('.tooltip').removeClass('hidden').addClass('show');
    })
    .on('mouseout', function(){
      $(this).siblings('.tooltip').removeClass('show').addClass('hidden');;
    });

  $('.bottom-right')
    .on('mouseover', function(){
      $(this).siblings('.tooltip').removeClass('hidden').addClass('show');
    })
    .on('mouseout', function(){
      $(this).siblings('.tooltip').removeClass('show').addClass('hidden');;
    });


  $('a[href="#"]').on('click', function(event){
    event.preventDefault();
  })

  // Fonction de contôle de la taille de l'écran
  addEvent(window, "resize", function(event) {
    at2com_toggleClass();
  });

  // Mofication des widgets lg quand la taille est trop petite
  function at2com_toggleClass()
  {
    var width = $(window).width();

    if (width < 768) {
      $('.widget-lg').addClass('widget-lg-transform').removeClass('widget-lg');

      $('.top-left').off('mouseover');
    }
    if (width > 768) {
      $('.widget-lg-transform').addClass('widget-lg').removeClass('widget-lg-transform');
    }
  }

}(jQuery));
