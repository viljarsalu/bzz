(function () {
  'use strict';
  $('.slider-navigation').css({
    width: 85 * $('.slider-navigation a').length
  });

  $('#galleryCarousel').carousel({
    interval: 4000
  });

  // handles the carousel thumbnails
  $('[id^=carousel-selector-]').click( function(){
    var id_selector = $(this).attr("id");
    var id = id_selector.substr(id_selector.length -1);
    id = parseInt(id);
    $('#galleryCarousel').carousel(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $(this).addClass('selected');
  });

  // when the carousel slides, auto update
  $('#galleryCarousel').on('slide.bs.carousel', function (e) {
    var id = $('.item.active').data('slide-number');
    id = parseInt(id);
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-'+id+']').addClass('selected');
    //console.log('id:', id, $('[id^=carousel-selector-]') , $('[id=carousel-selector-'+id+']') );
  });

  // carousel intro for front page
  var carouselIntro = $('#carousel-intro');
  $('#carousel-intro .toggle-play').bind('click',function(e){
    if( carouselIntro.hasClass('paused') ) {
      carouselIntro.toggleClass('paused')
        .carousel('cycle');
    } else {
      carouselIntro.carousel('pause')
        .addClass('paused');
    }

  });
  var itemsLength = carouselIntro.find('div.item').length;
   carouselIntro.find('#indicator-data').html(1 + '/' + itemsLength);
   carouselIntro.on('slide.bs.carousel', function(e){
   var _el = $(e.relatedTarget);
   var _index = _el.index() + 1;
   carouselIntro.find('#indicator-data').html(_index + '/' +itemsLength);
   });
})();
