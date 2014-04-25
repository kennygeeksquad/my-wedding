$(document).ready(function(){

  function adjustHeight(){
    var s = skrollr.init({
    render: function(data) {
        smoothScrolling=true;
        console.log(data.curTop);
      }
    });

    height = $(window).height();
    
    if (height<=800) {
      height = 800;
    }

    $('section').not('.snow').each(function(){
      $(this).height(height);
    })

    $('section.snow').each(function(){
      $(this).height(height/2);
    })

    $('#message').height(height/1.5);

    $('article').not('.half').each(function(){
      $(this).css('padding-top', height/4);
      $(this).css('height', height/2);
    })

    $('article.half').each(function(){
      $(this).css('padding-top', 20);
      $(this).css('height', height/3);
    })

    $('.middle').css('padding-top', height/4);
    $('.middle').css('padding-bottom', height/4);

    s.refresh($('#home'));
  }

  adjustHeight();

  $(window).on("resize", adjustHeight());

})
