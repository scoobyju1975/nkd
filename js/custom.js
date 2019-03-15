/* navigation sub-menu display */

$('.nav li > .sub-menu').parent().hover(function() {
  var submenu = $(this).children('.sub-menu');
  if ( $(submenu).is(':hidden') ) {
    $(submenu).slideDown(200);
  } else {
    $(submenu).slideUp(200);
  }
});


/* slide in elements on scroll page */

(function($) {  /**   * Copyright 2012, Digital Fusion   * Licensed under the MIT license.   * http://teamdf.com/jquery-plugins/license/   *   * @author Sam Sehnert   * @desc A small plugin that checks whether elements are within   *     the user visible viewport of a web browser.   *     only accounts for vertical position, not horizontal.   */  $.fn.visible = function(partial) {          var $t            = $(this),          $w            = $(window),          viewTop       = $w.scrollTop(),          viewBottom    = viewTop + $w.height(),          _top          = $t.offset().top,          _bottom       = _top + $t.height(),          compareTop    = partial === true ? _bottom : _top,          compareBottom = partial === true ? _top : _bottom;        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));  };    })(jQuery);var win = $(window);var allMods = $(".ci-module");allMods.each(function(i, el) {  var el = $(el);  if (el.visible(true)) {    el.addClass("already-visible");   } });win.scroll(function(event) {    allMods.each(function(i, el) {    var el = $(el);    if (el.visible(true)) {      el.addClass("come-in");     }   });  });

/* Stats Counter */

$(document).ready(function() {

$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },


  {

    duration: 2500,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
});
});

/* Accordian */

$('.accordion .btn-outline').on('click', function(){
    $('.btn-outline').removeClass('active');
    $(this).addClass('active');
});

function openFirstPanel(){
  $().next().addClass().slideUp();
}

(function($) {
    
  var allPanels = $('.accordion > dd').hide();
  
  openFirstPanel();
    
  $('.accordion > dt > a').click(function() {
      $this = $(this);
      $target =  $this.parent().next();
      
    
      if($target.hasClass('active')){
        $target.removeClass('active').slideUp(); 
      }else{
        allPanels.removeClass('active').slideUp();
        $target.addClass('active').slideDown();
      }
      
    return false;
  });

})(jQuery);

/* service button active */

$(function() {
  $('services-container ul li a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});



/* client logos slider home */

$('.responsive').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

/* swap over how we do it button text */

$("button").on("click", function() {
  var el = $(this);
  if (el.text() == el.data("text-swap")) {
    el.text(el.data("text-original"));
  } else {
    el.data("text-original", el.text());
    el.text(el.data("text-swap"));
  }
});

/* Add indiviual class to flexslider slides for styling purposes */

/*Script for assigning each flexslider slide a unique class*/
(function($){
$(document).ready(function(){
    $('.slides li').each(function(i,el){
        el.id = i+1;
        });
    });
})(jQuery);