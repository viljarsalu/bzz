/*!
 *
 *  Web Starter Kit
 *  Copyright 2014 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */
(function () {
  'use strict';
  /*$('.carousel').carousel({
    interval: 2000
  });*/
  //var _i;
  /* redraw dropdown menu */
  var _dropdown = $('.dropdown');
  var _dropdownMenu = $('.dropdown-menu');
  var _pos = _dropdownMenu.width() - _dropdown.width();
  _pos = _pos / 2;
  _pos = _pos * -1;
  _dropdownMenu.css({ right:_pos});

  _dropdown.bind('mouseover', function(e){
    var _target= $(e.currentTarget);
    _target.addClass('open');
  });
  /*_dropdown.bind('mouseout', function(e){
    var _target= $(e.currentTarget);
    //_target.removeClass('open');
    _i = setTimeout(function(){
      console.log(_target);
      clearTimeout(_i);
    }, 1000);
  });*/
  _dropdownMenu.mouseleave(function(e){
    _dropdown.removeClass('open');
  });
  $('.navbar-right').mouseleave(function(e){
    _dropdown.removeClass('open');
  });
  $('[data-toggle="dropdown"]').bind('click', function(e){
    //console.log( $(e.currentTarget).attr('href') );
    window.location.href = $(e.currentTarget).attr('href');
    e.preventDefault();
  });

  $('.single-item').slick({
      dots: false,
      infinite: false,
      speed: 500,
      slidesToShow: 5,
      slidesToScroll: 1
  });

  // slider, better library
  $(".slider-nav").itemslide({
    swipe_out: true
  }); //initialize itemslide
  $(".slider-nav").on('clickSlide', function(e) {
    console.log("new pos: "+ carousel.getCurrentPos());
  });

  $(window).resize(function () {
      $(".slider-nav").reload();

  }); //Recalculate width and center positions and sizes when window is resized



  /*$('.slider-navigation').slick({
      dots: false,
      infinite: false,
      speed: 500,
      slidesToShow: 15,
      slidesToScroll: 5
  });*/

  /* smooth page scroll [href=#])*/
  /*$('a[href*=#]:not([href="galleryCarousel"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });*/
})();
