NKD.commander = {

    editable: [],

	$target_lock: $('.js-module-handle'),
	$target_spacing: $('.js-spacing-handle'),
	$target_save: $('.js-save-handle'),
	$target_publish: $('.js-publish-handle'),
	$target_background: $('.js-background-handle'),
	$target_draggable: $('.js-image-move'),
    $target_editable: $('.js-editable-handle'),

	init: function()
	{
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('commander');
			NKD.commander.initCommander();
		}
	},

	initCommander: function()
	{
		this.moduleUnlockToggle();
		this.moduleOptionsToggle();
        this.moduleContentEdit();
		this.moduleSort();
		this.modulePublish();
		this.moduleSave();
		this.moduleDelete();
		this.staffSort();
	},

	moduleUnlockToggle: function()
	{
		$('.js-module-handle').on('click', function(e)
		{
			var $module = $(this).parents('.module'),
			$li = $(this).parent(),
            $module_commander = $module.find('.commander-module');

			$module.toggleClass('active');
			if ($module.hasClass('active'))
			{
				$li.addClass('active');
				$li.find('ul').addClass('show');

                $module.css('min-height', $module_commander.height());

				// remove swiping in edit mode
				$('.swiper-slide').addClass('swiper-no-swiping stop-swiping');

				$.each(NKD.accordians.accordian, function( i, value ) {
					NKD.accordians.accordian[i].params.noSwiping = true;
				});
				$.each(NKD.slideshows.slideshow, function( i, value ) {
					NKD.slideshows.slideshow[i].params.noSwiping = true;
				});
			} else {
				NKD.commander.moduleEditClose($module);
				$li.removeClass('active');
				$li.find('ul').removeClass('show');
				$module.find('.nav-cmds li').removeClass('active');

                $module.css('min-height', '');

				// reinit swiping in edit mode
				$('.swiper-slide').removeClass('swiper-no-swiping stop-swiping');
				$.each(NKD.accordians.accordian, function( i, value ) {
					NKD.slideshows.slideshow[i].params.noSwiping = false;
				});
				$.each(NKD.slideshows.slideshow, function( i, value ) {
					NKD.slideshows.slideshow[i].params.noSwiping = false;
				});
			}

			return false;
		});
	},

	moduleOptionsToggle: function()
	{
		var self = this,
		$commands = $('.js-module-handle').parent().find('a[data-edit]');

		$commands.each(function()
		{
			$(this).off('click');
			$(this).on('click', function(e)
			{
				var $module = $(this).parents('.module'),
				action = $(this).data('edit'),
				$list = $(this).parents('.menus').find('li'),
				$li = $(this).parent();

				$list.not($li).removeClass('active');

				if (!$li.hasClass('active'))
				{
					self.moduleEditOpen($module, $module.find('.'+action));
				} else {
					self.moduleEditClose($module);
				}

				$li.toggleClass('active');

				return false;
			});
		});
	},

	moduleEditOpen: function($module, $action)
	{
		var $edit_window = $module.find('.edit-module');

		$edit_window.find('.container').hide();
		$action.show();

		$module.find('.video').css('position', 'relative');
		$edit_window.velocity("slideDown", {
			complete: function() {
                $module.css('min-height', $edit_window.height());
			}
		});
	},

	moduleEditClose: function($module)
	{
		var $edit_window = $module.find('.edit-module'),
            $module_commander = $module.find('.commander-module');

		$edit_window.velocity("slideUp", {
			complete: function() {
				$module.find('.video').css('position', '');
                $module.css('min-height', $module_commander.height());
			}
		});
	},

    moduleContentEdit: function()
    {
        var self = this,
        $modules = $('.module');

        $modules.each(function(i, value)
        {
            var $module = $(this),
                $mod = $(this).find('.mod'),
                $editable_button = $(this).find('.js-editable-handle'),
                $content = $module.find("div[contenteditable]"),
                $save_button = $(this).find('.js-save-handle');

			if ($content.length == 0) {
				$editable_button.hide();
			}

            // Drag icon
            $editable_button.on('click', function()
            {
                var $background = $module.find('figure'),
                    $li = $(this).parent();

				console.log('edit on');

				if ($content.length > 0)
				{
					$li.toggleClass('active');
					if ($li.hasClass('active'))
					{
						$content.attr('contenteditable', true);
						NKD.commander.editable[i] = CKEDITOR.inline($content[0]);

						// listen to changes
						NKD.commander.editable[i].on( 'contentDom', function() {
							var editable = NKD.commander.editable[i].editable();

							editable.attachListener(editable, 'click', function() {
								$save_button.addClass('active');
							});
						});

					} else {

						console.log('edit off!');

						$content.attr('contenteditable', false);
						NKD.commander.editable[i].destroy();

						NKD.video.listenPlayButton($module); // reinit play 'click'.
					}
				}

                return false;
            });
        });
    },

	moduleDelete: function()
	{
		$('.js-delete-module').on('click', function(e)
		{
			if (!confirm("Are you sure you want to delete this module?")) {
				return false;
			}

			var $self = $(this),
				$module = $self.parents('.module'),
				$id = $module.data('id');



			$.ajax({
				url: '/admin/module/'+$id+'/delete',
				type: "GET",
				dataType: 'json'
			}).done(function(msg) {
				console.log($module);
				$module.remove();
			});

			return false;
		});
	},

	modulePublish: function()
	{
		$('.js-publish-handle').on('click', function(e)
		{
			var $self = $(this),
				$module = $self.parents('.module'),
				$id = $module.data('id');

			$self.toggleClass('active');

			var value = $(this).hasClass('active') ? 1 : 0;

			$.ajax({
				url: '/admin/module/publish',
				type: "POST",
				data: { id : $id, published : value },
				dataType: 'json',
				error: function(request, status, error)
				{
					$self.toggleClass('active');
				}
			}).done(function(msg) {
				$self.addClass('text-green');
			});

			return false;
		});
	},

	moduleSort: function()
	{
		var $target = $('.js-sort-module'),
			$handle = $('.js-sort-module-handle');

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
	},

	moduleSave: function()
	{
		$('.js-save-handle').on('click', function(e) {

			var $self = $(this),
			$module = $self.parents('.module'),
			$id = $module.data('id'),
			saved = true;

			if ($self.hasClass('active')) {

				// disable editor if its active!
				if ($module.find('.js-editable-handle').parents('li').hasClass('active')) {
					$module.find('.js-editable-handle').trigger("click");
				}

				// save spacing/padding;
				$.ajax({
					url: '/admin/module/padding',
					type: "PUT",
					data: {
						id: $id,
						padding_top: $module.find('.js-spacing')[0].value,
						padding_bottom: $module.find('.js-spacing')[1].value
					},
					async: false,
					dataType: 'json'
				}).error(function (msg) {
					$self.addClass('active');
				}).success(function (msg) {
					$self.removeClass('active');
				});

				// save colours
				$.ajax({
					url: '/admin/module/colours',
					type: "PUT",
					data: {
						id: $id,
						text_colour: $module.find('select[name=text_colour]').val(),
						link_colour: $module.find('select[name=link_colour]').val(),
						bg_colour: $module.find('input[name=bg_colour]').val(),
						bg_gradient_top: $module.find('input[name=bg_gradient_top]').val(),
						bg_gradient_bottom: $module.find('input[name=bg_gradient_bottom]').val(),
						bg_gradient: $module.find('textarea[name=bg_gradient]').val()
					},
					async: false,
					dataType: 'json'
				}).error(function (msg) {
					$self.addClass('active');
				}).success(function (msg) {
					$self.removeClass('active');
				});

				// save content
				$.ajax({
					url: '/admin/module/body',
					type: "PUT",
					data: {
						id: $id,
						body: $module.find('div[contenteditable]').html()
					},
					async: false,
					dataType: 'json'
				}).error(function (msg) {
					$self.addClass('active');
				}).success(function (msg) {
					$self.removeClass('active');
				});

				// save animation
				$.ajax({
					url: '/admin/module/animation',
					type: "PUT",
					data: {
						id: $id,
						module_anim: $module.find('select[name=module_anim]').val(),
						content_anim: $module.find('select[name=content_anim]').val()
					},
					async: false,
					dataType: 'json'
				});
			}

			return false;

		});
	},

	staffSort: function()
	{
		var $target = $('.js-sort-staff'),
			$handle = $('.js-sort-staff-handle');

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