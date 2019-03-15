NKD.commander_padding = {

    init: function () {
        if ($('body[data-check="cms"]').length > 0) {
            NKD.debug('commander padding');
            NKD.commander_padding.createListeners();
        }
    },

    createListeners: function()
    {
        var self = this,
            $modules = $('.module');

        $modules.each(function()
        {
            var $module = $(this);

            NKD.commander_padding.modulePadding($module);
            NKD.commander_padding.moduleTemplate($module);
        });
    },

    modulePadding: function($module)
    {
        var $inputs = $module.find('.js-spacing'),
            $mod = $module.find('.mod'),
            $save_button = $module.find('.js-save-handle');

        $inputs.off('keyup');
        $inputs.keyup(function(event)
        {
            this.value = this.value.replace(/[^0-9\.]/g,'');

            $mod.css('padding-top', $inputs[0].value+'px');
            $mod.css('padding-bottom', $inputs[1].value+'px');

            // set save button active.
            $save_button.addClass('active');

            // Up arrow
            if (event.keyCode == 38) {
                this.value++;
            }

            if (event.keyCode == 40) {
                this.value--;
            }

            // Return key
            if (event.keyCode == 13) {
                $save_button.trigger('click');
            }
        });
    },

    moduleTemplate: function($module)
    {
        var self = this,
            $select = $module.find('select[name=template]'),
            $mod = $module.find('.mod'),
            $save_button = $module.find('.js-save-handle');

        $select.off('change');
        $select.on('change', function()
        {
            $.ajax({
                url: '/admin/module/template',
                type: "POST",
                data: {
                    id: $module.data('id'),
                    template: $(this).val()
                },
                dataType: 'json'
            }).done(function(e, data)
            {
                $mod.empty().append(e.item);
            });

            return false;
        });
    }

};