NKD.commander_images = {

	$target_save: $('.js-save-handle'),
	$target_background: $('.js-background-handle'),
	$target_draggable: $('.js-image-move'),
	$target_edit: $('.js-edit-image'),
	$target_delete: $('.js-delete-image'),

	timer : null,

	init: function () {
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('commander images');
			NKD.commander_images.createListeners();
			NKD.commander_images.imageUpload();
		}
	},

	createListeners: function()
	{
		var self = this,
			$modules = $('.module');

		$modules.each(function()
		{
			var $module = $(this),
				$mod = $(this).find('.mod'),
				$editor = $module.find('.moduleBackgroundEdit'),
				$images = $editor.find('.item');

				// loop over all attached images
				$images.each(function()
				{
					NKD.commander_images.imageEdit($(this));
					NKD.commander_images.imageAnimate($(this));
					NKD.commander_images.imageDraggable($(this));
					NKD.commander_images.imagePosition($(this));
					NKD.commander_images.imageType($(this));
					NKD.commander_images.imageSkrollr($(this));
					NKD.commander_images.imageAnimation($(this));
					NKD.commander_images.imageDelete($(this));
				});
		});
	},

	imageEdit: function($image)
	{
		var $target_button = $image.find('.js-edit-image');

		$target_button.off('click');
		$target_button.on('click', function()
		{
			var $module = $image.parents('.module'),
				$image_id = $image.data('id'),
				$edit_panel = $image.find('.image-edit'),
				$edit_window = $module.find('.edit-module');

			$edit_panel.toggleClass('active');
			if ($edit_panel.hasClass('active'))
			{
				$target_button.parent().addClass('active');

				$edit_panel.velocity("slideDown", {
					complete: function() {
						$module.css('min-height', $edit_window.height());
					}
				});

			} else {
				$edit_panel.velocity("slideUp", {
					complete: function() {
						$target_button.parent().removeClass('active');
						$module.css('min-height', $edit_window.height());
					}
				});

				// save on close
				NKD.commander_images.imageSave($image);
			}

			return false;
		});
	},

	imageAnimate: function($image)
	{
		var $target_button = $image.find('.js-animate-image');

		$target_button.off('click');
		$target_button.on('click', function()
		{
			var $module = $image.parents('.module'),
				$image_id = $image.data('id'),
				$edit_panel = $image.find('.image-animate'),
				$edit_window = $module.find('.edit-module');

			$edit_panel.toggleClass('active');
			if ($edit_panel.hasClass('active'))
			{
				$target_button.parent().addClass('active');

				$edit_panel.velocity("slideDown", {
					complete: function() {
						$module.css('min-height', $edit_window.height());
					}
				});

			} else {
				$edit_panel.velocity("slideUp", {
					complete: function() {
						$target_button.parent().removeClass('active');
						$module.css('min-height', $edit_window.height());
					}
				});

				// save on close
				NKD.commander_images.imageSave($image);
			}

			return false;
		});
	},

	imageDraggable: function($image)
	{
		var $module = $image.parents('.module'),
			$drag_button = $image.find('.js-image-move');

		$drag_button.off('click');
		$drag_button.on('click', function()
		{
			var self = this,
				$li = $(this).parent(),
				$image_id = $image.data('id'),
				$background = $module.find('[data-image-id="'+$image_id+'"]'),
				timer = null;

			$li.toggleClass('active');
			if ($li.hasClass('active'))
			{
				$background.draggable({
					stop: function(event, ui) {

						// clear previous timers
						window.clearTimeout(NKD.commander_images.timer);

						var unit_x = $image.find('select[name=x_unit]').val(),
							unit_y = $image.find('select[name=y_unit]').val(),
							$screen_x = $image.find('input[name=screen_x]'),
							$screen_y = $image.find('input[name=screen_y]'),
							value_x = (unit_x == 'px') ? ui.position.left : Math.floor((ui.position.left/$module.width()) * 100),
							value_y  = (unit_y == 'px') ? ui.position.top : Math.floor((ui.position.top/$module.height()) * 100),
							screen_size = $('body').attr('data-width');

						// set values
						$screen_y.val(value_y);
						$image.find('input[name=y_'+screen_size+']').val(value_y);
						$background.attr('data-y-'+screen_size, value_y);
						$background.css('top', parseInt(value_y)+unit_y);

						$screen_x.val(value_x);
						$image.find('input[name=x_'+screen_size+']').val(value_x);
						$background.attr('data-x-'+screen_size, value_x);
						$background.css('left', parseInt(value_x)+unit_x);

						// save after 2 seconds.
						NKD.commander_images.timer = window.setTimeout(function()
						{
							NKD.commander_images.imageSave($image);
						}, 2000);
					}
				});

			} else {
				$background.draggable('destroy');
			}

			return false;
		});
	},

	imagePosition: function($image)
	{
		var $module = $image.parents('.module'),
			$inputs = $image.find('input[name=screen_y], input[name=screen_x]');

		$inputs.off('keyup');
		$inputs.keyup(function(event)
		{
			// clear previous timers
			window.clearTimeout(NKD.commander_images.timer);

			var $image_id = $image.data('id'),
				unit_x = $image.find('select[name=x_unit]').val(),
				unit_y = $image.find('select[name=y_unit]').val(),
				$background = $module.find('[data-image-id="'+$image_id+'"]'),
				screen_size = $('body').attr('data-width'),
				value = null;

			if ($(this).attr('name') == 'screen_y')
			{
				value = $(this).val() > 0 ? parseInt($(this).val())+unit_y : '';

				if ($(this).val() == 'none') {
					$background.hide().attr('data-y-' + screen_size, 'none');
					$image.find('input[name=y_'+screen_size+']').val('none');
				} else {
					$background.show().attr('data-y-' + screen_size, value);
					$image.find('input[name=y_'+screen_size+']').val($(this).val());
					$background.css('top', value);
				}
			}

			if ($(this).attr('name') == 'screen_x')
			{
				value = $(this).val() > 0 ? parseInt($(this).val())+unit_x : '';
				$image.find('input[name=x_'+screen_size+']').val(value);

				if ($(this).val() == 'none') {
					$background.hide().attr('data-x-' + screen_size, 'none');
					$image.find('input[name=x_'+screen_size+']').val('none');
				} else {
					$background.show().attr('data-x-' + screen_size, value);
					$image.find('input[name=x_'+screen_size+']').val($(this).val());
					$background.css('left', value);
				}
			}

			// Return key
			if (event.keyCode == 13) {
				NKD.commander_images.imageSave($image);

				var inputs = $image.find(':input:visible');
				inputs.eq(inputs.index(this)+ 1).focus();
			}

			// save after 2 seconds.
			NKD.commander_images.timer = window.setTimeout(function()
			{
				NKD.commander_images.imageSave($image);
			}, 2000);
		});
	},

	imageType: function($image)
	{
		var self = this,
			id = $image.data('id'),
			$module = $image.parents('.module'),
			$editor = $module.find('.moduleBackgroundEdit'),
			$select = $editor.find('select[name=type]');

		$select.off('change');
		$select.on('change', function()
		{
			var $background = $module.find('[data-image-id="'+id+'"]');

			$background.css({top:'', left:''}).removeClass('default stretch repeat custom fixed').addClass(this.value);
			self.imageSave($image);
		});
	},

	imageDelete: function($image)
	{
		var $module = $image.parents('.module'),
			$delete_button = $image.find('.js-delete-image');

		$delete_button.off('click');
		$delete_button.on('click', function()
		{
			if (!confirm("Are you sure you want to delete this image?")) {
				return false;
			}

			var $image_id = $image.data('id');

			$.ajax({
				url: '/admin/image/'+$image_id+'/delete',
				type: "GET",
				dataType: 'json'
			}).done(function(msg) {
				$image.remove();
				$module.find('[data-image-id="'+$image_id+'"]').remove();
			});

			return false;
		});
	},

	imageSkrollr: function($image)
	{
		var self = this,
			id = $image.data('id'),
			$module = $image.parents('.module'),
			$editor = $module.find('.moduleBackgroundEdit'),
			$input = $editor.find('textarea[name=skrollr]');

		$input.off('keyup');
		$input.on('keyup', function()
		{
			// clear previous timers
			window.clearTimeout(NKD.commander_images.timer);

			var $background = $module.find('[data-image-id="'+id+'"]');

			// save after 2 seconds.
			NKD.commander_images.timer = window.setTimeout(function()
			{
				NKD.commander_images.imageSave($image);
			}, 2000);
		});
	},

	imageAnimation: function($image)
	{
		var id = $image.data('id'),
			$module = $image.parents('.module'),
			$editor = $module.find('.moduleBackgroundEdit'),
			$select = $editor.find('select[name=animation]');

		$select.off('change');
		$select.on('change', function()
		{
			// clear previous timers
			window.clearTimeout(NKD.commander_images.timer);

			if (this.value.length > 0)
			{
				var $background = $module.find('[data-image-id="'+id+'"]');

				$background.velocity(this.value, {
					display: 'block',
					complete: function () {
						$(this).show().css({
							'opacity': 1,
							'transform': ''
						});
					}
				});
			}

			// save after 2 seconds.
			NKD.commander_images.timer = window.setTimeout(function()
			{
				NKD.commander_images.imageSave($image);
			}, 2000);
		});
	},

	imageSave: function($image)
	{
		// save background
		$.ajax({
			url: '/admin/image/'+$image.data('id')+'/update',
			type: "PUT",
			data: {
				id : $image.data('id'),
				path : $image.find('h6 a').text(),
				type : $image.find('select[name=type]').val(),
				x_unit : $image.find('select[name=x_unit]').val(),
				y_unit : $image.find('select[name=y_unit]').val(),
				x_lg : $image.find('input[name=x_lg]').val(),
				y_lg : $image.find('input[name=y_lg]').val(),
				x_md : $image.find('input[name=x_md]').val(),
				y_md : $image.find('input[name=y_md]').val(),
				x_sm : $image.find('input[name=x_sm]').val(),
				y_sm : $image.find('input[name=y_sm]').val(),
				x_xs : $image.find('input[name=x_xs]').val(),
				y_xs : $image.find('input[name=y_xs]').val(),
				skrollr : $image.find('textarea[name=skrollr]').val(),
				animation : $image.find('select[name=animation]').val()
			},
			async: false,
			dataType: 'json'
		});

		return false;
	},

	imageUpload: function()
	{
		var self = this,
			$modules = $('.module');

		$modules.each(function()
		{
			var $module = $(this),
				$id = $module.data('id'),
				$editor = $module.find('.moduleBackgroundEdit'),
				$upload_button = $module.find('input[name="image"]'),
				$progress_bar = $module.find('.js-image-progress'),
				$image_container = $module.find('.js-images-container'),
				$loop_container = $module.find('.js-images-loop');

			$upload_button.fileupload({
				dropZone: $editor,
				url: '/admin/image/upload',
				type: "POST",
				dataType: 'json',
				beforeSend: function()
				{
					$progress_bar.find('.progress-bar').css('width', '0%');
				},
				done: function (e, data)
				{
					$image_container.append(data.result.image);
					$loop_container.empty().append(data.result.item);

					NKD.commander_images.createListeners();
				},
				progressall: function (e, data)
				{
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$progress_bar.find('.progress-bar').css('width', progress + '%');
				}
			});

		});
	}

};