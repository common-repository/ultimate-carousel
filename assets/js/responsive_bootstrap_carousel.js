;(function ($) {

    /*-----------------------------------------------------------------*/
    /* ANIMATE SLIDER CAPTION
    /* Demo Scripts for Bootstrap Carousel and Animate.css article on SitePoint by Maria Antonietta Perna
    /*-----------------------------------------------------------------*/
    "use strict";
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    //Variables on page load
    var $immortalCarousel = $('.animate_text'),
        $firstAnimatingElems = $immortalCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    //Initialize carousel
    $immortalCarousel.carousel();
    //Animate captions in first slide on page load
    doAnimations($firstAnimatingElems);
    //Other slides to be animated on carousel slide event
    $immortalCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

    /*-----------------------------------------------------------------*/
    /* TOOL TIP
    /*-----------------------------------------------------------------*/
    $('[data-toggle="tooltip"]').tooltip();

    /*-----------------------------------------------------------------*/
    /* MOBILE SWIPE
    /*-----------------------------------------------------------------*/
    //Enable swiping...
    $(".carousel-inner").swipe({
    //Generic swipe handler for all directions
        swipeLeft: function (event, direction, distance, duration, fingerCount) {
            $(this).parent().carousel('next');
        },
        swipeRight: function () {
            $(this).parent().carousel('prev');
        },
    //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold: 0
    });

    /*-----------------------------------------------------------------*/
    /* SIX SHOWS ONE MOVE
    /*-----------------------------------------------------------------*/
    $('.six_shows_one_move .item').each(function(){
        var itemToClone = $(this);
        for (var i=1;i<6;i++) {
            itemToClone = itemToClone.next();
            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
        }
    });

    /*-----------------------------------------------------------------*/
    /* FOUR SHOWS ONE MOVE
    /*-----------------------------------------------------------------*/
    $('.four_shows_one_move .item').each(function(){
        var itemToClone = $(this);
        for (var i=1;i<4;i++) {
            itemToClone = itemToClone.next();
            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
        }
    });

    /*-----------------------------------------------------------------*/
    /* THREE SHOWS ONE MOVE
    /*-----------------------------------------------------------------*/
    $('.three_shows_one_move .item').each(function(){
        var itemToClone = $(this);
        for (var i=1;i<3;i++) {
            itemToClone = itemToClone.next();
            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
        }
    });

    /*-----------------------------------------------------------------*/
    /* TWO SHOWS ONE MOVE
    /*-----------------------------------------------------------------*/
    $('.two_shows_one_move .item').each(function(){
        var itemToClone = $(this);
        for (var i=1;i<2;i++) {
            itemToClone = itemToClone.next();
            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
            .addClass("cloneditem-"+(i))
            .appendTo($(this));
        }
    });
	
    /*-----------------------------------------------------------------*/
    /* FULL SCREEN OPTION
    /*-----------------------------------------------------------------*/
    var $rbc_item = $('.carousel.rbc_full_screen > .carousel-inner > .item'); 
    var $rbc_Height = $(window).height();
    $rbc_item.eq(0).addClass('active');
    $rbc_item.height($rbc_Height); 
    $rbc_item.addClass('rbc_full_s');
    $('.carousel.rbc_full_screen > .carousel-inner > .item > img').each(function() {
      var $src = $(this).attr('src');
      $(this).parent().css({
        'background-image' : 'url(' + $src + ')'
      });
      $(this).remove();
    });
    $(window).on('resize', function (){
      $rbc_Height = $(window).height();
      $rbc_item.height($rbc_Height);
    });


})(jQuery);