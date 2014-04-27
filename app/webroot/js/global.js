$(document).ready(function(){

  function adjustHeight(){
    var s = skrollr.init({
      forceHeight: true
    });

    height = $(window).height();
    width = $(window).width();
    
    if (height<=400) {
      height = 400;
    }

    $('section').not('.snow').each(function(){
      $(this).height(height);
    })

    if (width < 700) {

      $('section.snow').each(function(){
        $(this).height(height);
      })

      $('#message').height(height);

      $('article.half').each(function(){
        $(this).css('height', height/1.5);
      })

      $('article').not('.half').each(function(){
        $(this).css('height', height/1.5);
      })

      $('.middle').css('padding-top', height/8);
      $('.middle').css('padding-bottom', height/8);

    } else {

      $('section.snow').each(function(){
        $(this).height(height/2);
      })

      $('article.half').each(function(){
        $(this).css('padding-top', 20);
        $(this).css('height', height/3);
      })

      $('article').not('.half').each(function(){
        $(this).css('padding-top', height/4);
        $(this).css('height', height/2);
      })

      $('#message').height(height/1.5);

      $('.middle').css('padding-top', height/4);
      $('.middle').css('padding-bottom', height/4);

    }

    s.refresh($('#home'));
  }

  adjustHeight();

  $(window).on("resize", adjustHeight());

  $('#info').click(function(){
    $('#accommodation .opacity').css('background-color', 'rgba(0,0,0,0.8)');
    $('.panel').fadeIn('slow');
    return false;
  });

  $('#accommodation .opacity').click(function(){
    $('#accommodation .opacity').css('background-color', 'rgba(0,0,0,0.3)');
    $('.panel').fadeOut('fast');
  });

  $.fn.scrollTo = function() {
    var element = $(this).data('scroll');
    var scroll = $(element).offset().top;
    $('body').animate({
      scrollTop: scroll
    }, 3000);
  };

  $('a.button').click(function(){
    $(this).scrollTo(this);
  });

})
