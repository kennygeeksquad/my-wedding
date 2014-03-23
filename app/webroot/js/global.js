$(document).ready(function(){

  function adjustHeight(){
    var s = skrollr.init();
    height = $(window).height();

    if (height<=800) {
      height = 800;
    }

    $('section').not('.snow').each(function(){
      $(this).height(height);
    })

    $('.content').not('.snow').each(function(){
      $(this).css('padding-top', height/4);
    })

    s.refresh($('#home'));
  }

  adjustHeight();

})