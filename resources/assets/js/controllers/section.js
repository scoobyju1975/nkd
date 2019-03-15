NKD.section = {

    init: function () {
        if ($('body[data-check="cms"]').length > 0) {
            NKD.debug('section');
            NKD.section.initSection();
        }
    },

    initSection: function()
    {
        this.sectionUnlockToggle();
        this.hoverSection();
        this.sectionOptionsToggle();
        this.sectionSort();
    },

    sectionUnlockToggle: function()
    {
        $('.js-section-handle').on('click', function(e)
        {
            var $section = $(this).parents('.section'),
                $li = $(this).parent(),
                $section_commander = $section.find('.commander-section');

            $section.toggleClass('active');
            if ($section.hasClass('active'))
            {
                $li.addClass('active');
                $li.find('ul').addClass('show');

                $section.css('min-height', $section_commander.height());

            } else {
                NKD.section.sectionEditClose($section);

                $li.removeClass('active');
                $li.find('ul').removeClass('show');
                $section.find('.nav-cmds li').removeClass('active');

                $section.css('min-height', '');
            }

            return false;
        });
    },

    hoverSection: function()
    {
        $('section').on('mouseenter', function()
        {
            $(this).find('.commander-section').addClass('show');
            $(this).find('.commander-module').addClass('show');

        }).on('mouseleave', function()
        {
            $(this).find('.commander-section').removeClass('show');
            $(this).find('.commander-module').removeClass('show');
        });
    },

    sectionOptionsToggle: function()
    {
        var self = this,
            $commands = $('.js-section-handle').parent().find('a[data-edit]');

        $commands.each(function()
        {
            $(this).off('click');
            $(this).on('click', function(e)
            {
                var $section = $(this).parents('.section'),
                    action = $(this).data('edit'),
                    $list = $(this).parents('.menus').find('li'),
                    $li = $(this).parent();

                $list.not($li).removeClass('active');

                if (!$li.hasClass('active'))
                {
                    self.sectionEditOpen($section, $section.find('.'+action));
                } else {
                    self.sectionEditClose($section);
                }

                $li.toggleClass('active');

                return false;
            });
        });
    },

    sectionEditOpen: function($section, $action)
    {
        var $edit_window = $section.find('.edit-section');

        $edit_window.find('.container').hide();
        $action.show();

        $edit_window.velocity("slideDown", {
            complete: function() {
                $section.css('min-height', $edit_window.height());
            }
        });
    },

    sectionEditClose: function($section)
    {
        var $edit_window = $section.find('.edit-section'),
            $section_commander = $section.find('.commander-section');

        $edit_window.velocity("slideUp", {
            complete: function() {
                $section.css('min-height', $section_commander.height());
            }
        });
    },

    sectionSort: function()
    {
        var $target = $('.js-sort-section'),
            $handle = $('.js-sort-section-handle');

        // consider refactor
        $handle.on('click', function() {
            return false;
        });

        $target.sortable({
            opacity: '0.5',
            handle: $handle,
            cursor: 'move',
            tolerance: 'pointer',
            axis: 'y',
            revert: true,
            update: function(e, ui)
            {
                var $el = $(this),
                    source = $target.attr('data-source'),
                    ajaxData = $el.sortable('serialize', {
                        key: 'order[]'
                    });

                $.ajax({
                    url: source+'/order',
                    type: "PUT",
                    data: ajaxData,
                    dataType: 'json',
                    error: function(request, status, error)
                    {
                        $el.sortable('cancel');
                    }
                });
            }
        });
    }

};