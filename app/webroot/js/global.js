$(document).ready(function(){
  function adjustHeight(){
    var s = skrollr.init();

    height = $(window).height();

    if (height<=800) {
      height = 800;
    }

    $('section').each(function(){
      $(this).height(height);
    })

    s.refresh($('#home'));
  }
})