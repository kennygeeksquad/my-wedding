$(document).ready(function(){

  function adjustHeight(){
    var s = skrollr.init({
render: function(data) {
        smoothScrolling=true;
            //Debugging - Log the current scroll position.
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

    $('article').not('.snow article').each(function(){
      $(this).css('padding-top', height/4);
    })

    s.refresh($('#home'));
  }

  adjustHeight();

})