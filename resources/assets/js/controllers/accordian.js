NKD.accordians = {

    accordian: [],
    isActive: false,
    container: '.accordian-container',
    containerHeight: null,

    init: function () {
        if ($('.section.accordian').length > 0)
        {
            NKD.debug('accordian');
            NKD.accordians.prepareAccordian();

            $(window).resize(function () {
                $.each(NKD.slideshows.slideshow, function (i, value) {
                    value.stopAutoplay();
                    value.resizeFix();
                });

                NKD.accordians.setAccordianHeight();
            });
        }
    },

    prepareAccordian: function () {
        var $section = $('.section.accordian');

        $section.addClass('swiper-slide');

        $section.wrapAll( "<div class='swiper-wrapper' />");
        $('.swiper-wrapper').wrap("<div class='js-accordian swiper-container' />");

        NKD.accordians.setAccordianHeight();
        NKD.accordians.initAccordian();
    },

    setAccordianHeight: function() {
        var self = this,
            $slideshow = $('.js-accordian');

        $slideshow.each(function () {
            var $slide = $(this).find('.swiper-slide'),
                maxHeight = 0;

            $slide.css('height', ''); // reset

            $slide.each(function() {
                $(this).css('height', $(this).height()); // self consuming shame!
            });

            maxHeight = $(this).find('.swiper-slide-active').length > 0 ? $(this).find('.swiper-slide-active').height() : $(this).find('.swiper-slide').first().height();
            $(this).height(maxHeight); // set container height
        });
    },

    initAccordian: function() {
        var self = this,
            $target = $('.js-accordian');

        $target.each(function (i, value)
        {
            NKD.accordians.accordian[i] = new Swiper($(this)[0], {
                mode: 'horizontal',
                loop: true,
                releaseFormElements: true,
                onSlideChangeEnd: function(swiper, direction)
                {
                    var $buttons = $('.js-accordian-nav'),
                        $target = $buttons.find('a[data-target="'+swiper.activeLoopIndex+'"]');

                    $buttons.find('a').removeClass('active');
                    $target.addClass('active');

                    $('.swiper-slide').css('height', ''); // reset

                    $('.swiper-container').height($('.swiper-slide-active').height()); // temp
                    $('.swiper-wrapper').height($('.swiper-slide-active').height()); // temp
                }
            });
        });

        NKD.accordians.setButtons();
    },

    setButtons: function() {
        var slideshow = NKD.accordians.accordian,
            $buttons = $('.js-accordian-nav').find('.btn, li'),
            listeners = "scroll mousedown DOMMouseScroll mousewheel keyup";

        $buttons.off('click');
        $buttons.on('click',function(e)
        {
            e.preventDefault();

            var $button = $(this),
                target = $button.is("li") ? $button.find('a').data('target') : $button.data('target');

            $("html, body").unbind(listeners);
            $("html, body").bind(listeners, function()
            {
                $('html, body').stop().velocity('stop');
                $button.parents('.content').stop().velocity('stop');
            });

            $button.parents('.content')
                .velocity('stop')
                .velocity("scroll", {
                    duration: 1500,
                    easing: "easeInOutQuad",
                    offset: -($('.masthead').height() + 13),
                    complete: function(elements) {
                        $("html, body").unbind(listeners);
                    }
                });

            $button.addClass('active');
            $buttons.not($button).removeClass('active');
            slideshow[0].swipeTo(target);

            return false;
        });
    }
};