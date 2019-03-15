NKD.mobile = {

    init: function () {
        NKD.debug('isotope');
        NKD.mobile.menuDropdown();
    },

    menuDropdown: function() {
        var $body = $('body'),
            $menuCollapse = $('#menu-collapse'),
            $mobileMenu = $('nav.mobile').find('.nav');

        $mobileMenu.collapse({
            toggle: false
        });

        $mobileMenu.collapse('hide');

        $menuCollapse.off('click');
        $menuCollapse.on('click', function()
        {
            $mobileMenu.collapse('toggle');
            return false;
        });

        $mobileMenu.on('hidden.bs.collapse', function () {
            $menuCollapse.find('a').removeClass('active');
            $body.removeClass('no-scroll');
            $mobileMenu.scrollTop(0);
        });

        $mobileMenu.on('show.bs.collapse', function () {
            $menuCollapse.find('a').addClass('active');
            $body.addClass('no-scroll');
        });
    }

};