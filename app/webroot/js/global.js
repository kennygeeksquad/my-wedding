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

    $('section').each(function(){
      $(this).height(height);
    })

    $('article').each(function(){
      $(this).css('padding-top', height/4);
      $(this).css('height', height/2);
    })

    $('.middle').css('padding-top', height/4);
    $('.middle').css('padding-bottom', height/4);

    s.refresh($('#home'));
  }

  adjustHeight();

  $(window).on("resize", adjustHeight());

})