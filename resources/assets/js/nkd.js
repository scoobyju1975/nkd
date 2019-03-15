if (typeof console === 'undefined' || typeof console.log === 'undefined')
{
    console = {};

    if (config.globals.alertFallback)
    {
        console.log = function(msg) {
            alert(msg);
        };
    } else {
        console.log = function() {};
    }
}

var NKD = NKD || {};

NKD = {

    // executes classes based on action and controller properties
    exec: function(controller, action)
    {
        action = (action === undefined || action === "") ? "init" : action;

        if (controller !== "" && NKD[controller] && typeof NKD[controller][action] == "function")
        {
            NKD[controller][action]();
        }
    },

    // pushes debug messages to console.
    debug: function(msg)
    {
        if (config.globals.debug === true)
        {
            console.log('debug: ' + msg);
        }
    },

    init: function()
    {
        NKD.debug('NKD v1 main');

        var controller = config.globals.$controller,
            action = config.globals.$action;

        NKD.exec("common"); // execute 'global' controller.
        NKD.exec(controller, action); // finally run selected action.
    },

    common:
    {
        init: function()
        {
            // replaces .no-js with js
            $(".no-js").addClass("js").removeClass("no-js");

            NKD.imagesloaded.hideHeader();
            NKD.common.beforeLoad();
        },

        beforeLoad: function()
        {
            var queue = [

                    NKD.responsive.init,
                    NKD.slideshows.init,
                    NKD.accordians.init,
                    //NKD.motionicons.init,
                    NKD.modules.init,
                    NKD.section.init,
                    NKD.section_images.init,
                    NKD.sidebar.init,
                    NKD.utilities.init,
                    NKD.video.init,
                    NKD.isotope.init,
                    NKD.commander.init,
                    NKD.commander_colours.init,
                    NKD.commander_images.init,
                    NKD.commander_padding.init,
                    NKD.commander_video.init,
                    NKD.commander_animation.init,
                    NKD.commander_remote.init,

                    NKD.mobile.init,
                    NKD.snapsvg.init,
                    NKD.skrollr.init,

                    //NKD.imagesloaded.loadOut,
                    NKD.common.afterLoad // run 'after' processes
                ],
                before = $.Deferred().resolve();

            function doSetTimeout(i) {
                setTimeout(function()
                {
                    before = before.then(queue[i]);
                }, i * 10);
            }

            for (var i = 0; i <= queue.length; ++i) {
                doSetTimeout(i);
            }
        },

        afterLoad: function()
        {
            var images = NKD.imagesloaded.scanImages();

            // google maps is quite intense, so delay it.
            setTimeout(function()
            {
                NKD.googlemaps.init();
                $.waypoints('refresh'); // temp - ipad debug

            }, 4000); // 4 seconds to account for slower computers.

            if (images.length > 2) {
                //NKD.imagesloaded.init();
            }

            images.imagesLoaded().always(function(instance)
            {
                window.setTimeout(function() {
                    NKD.imagesloaded.loadOut();
                }, 2000);
            });

            NKD.imagesloaded.placeImages();
            NKD.animations.init();
            NKD.masonry.init();

            $(window).resize(function() {
                NKD.imagesloaded.placeImages();
            });
        }
    }
};