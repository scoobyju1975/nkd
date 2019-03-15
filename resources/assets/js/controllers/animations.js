NKD.animations = {

    waypointArray: [],
    waypointTarget: '.module',

    loaded: false,

    init: function () {
        NKD.debug('animations');

        NKD.animations.moduleWaypoints();
        NKD.animations.contentWaypoints();
        //NKD.animations.isotopeWaypoint();
        NKD.animations.imageWaypoints();

        setTimeout(function() {
            NKD.animations.imageRandomize();
        }, 2000);
    },

    moduleWaypoints: function () {
        var $module = $('.module');
        $module.each(function() {
            var $this = $(this),
                module_anim = $(this).data('anim');

            // module animations
            if (module_anim.length > 0) {
                $this.css('opacity', 0);
                $this.waypoint(function(direction) {
                    if (direction === 'down' && !$this.hasClass('focused')) {
                        $this.velocity(module_anim, {
                            duration: 500,
                            display: 'block',
                            complete: function() {

                                $this.addClass('focused').show().css({
                                    'opacity': 1,
                                    'transform': ''
                                });

                                $.waypoints('refresh'); // fix bug
                            }
                        });
                    }
                }, { offset: '50%' });
            }
        });
    },

    contentWaypoints: function() {
        var $mod = $('.module').find('.mod');
        $mod.each(function() {
            var $this = $(this),
                content_anim = $this.data('anim');

            // content animations
            if (content_anim.length > 0) {
                $this.css('opacity', 0);
                $this.waypoint(function(direction) {
                    if (direction === 'down' && !$this.hasClass('focused')) {

                        $this.velocity(content_anim, {
                            display: 'block',
                            complete: function() {

                                $this.addClass('focused').show().css({
                                    'opacity': 1,
                                    'transform': ''
                                });

                                $.waypoints('refresh'); // fix bug
                            }
                        });
                    }
                }, { offset: '75%' });
            }
        });
    },

    imageWaypoints: function() {
        var $figure = $('.module').find('figure');

        $figure.each(function() {
            var $this = $(this),
                image_anim = $(this).data('anim');

            if (image_anim.length > 0 && !$this.hasClass('disabled')) {
                $this.css('opacity', 0);
                $this.waypoint(function (direction) {
                    if (direction === 'down' && !$this.hasClass('focused')) {

                        setTimeout(function() {

                            $this.velocity(image_anim, {
                                stagger: 80,
                                display: 'block',
                                complete: function () {

                                    $this.addClass('focused').show().css({
                                        'opacity': 1,
                                        'transform': ''
                                    });

                                    $.waypoints('refresh'); // fix bug
                                }
                            });

                        }, 400);
                    }
                }, {offset: '75%'});
            }
        });
    },

    imageRandomize: function() {
        var self = this,
            $target = $('.js-randomize');

        $target.each(function() {
            var $this = $(this),
                $items = $this.find('.item'),
                timer = null;

            setInterval(function() {
                $items.css('opacity', 0);

                var items = $items.get();
                items = _.shuffle(items);

                clearInterval(timer);
                $this.empty().append(items);

                $items.not(':hidden').velocity("transition.slideUpIn", {
                    stagger: 200,
                    duration: 1000,
                    display: 'block',
                    complete: function(elements) {
                        timer = setTimeout(function() {
                            $(elements).velocity("fadeOut", {
                                display: 'block'
                            });
                        }, 4500);
                    }
                });
            }, 5000);
        });
    },

    isotopeWaypoint: function() {
        var $isotope = $('.isotope');

        $isotope.each(function() {
            var $this = $(this),
                $item = $this.find('.item');

            if(!window.location.hash) {
                $item.css('opacity', 0);
                $this.waypoint(function(direction) {
                    if (direction === 'down' && !$this.hasClass('focused')) {
                        $this.addClass('focused');

                        $item.velocity('transition.fadeIn', {
                            stagger: 80,
                            display: 'block',
                            complete: function()
                            {
                                $(this).show().css({
                                    'opacity': 1,
                                    'transform': ''
                                });
                            }
                        });
                    }
                }, { offset: '75%' });
            }
        });
    }
};