NKD.section_images = {

	timer : null,

	init: function () {
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('section images');
			NKD.section_images.createListeners();
			NKD.section_images.imageUpload();
		}
	},

	createListeners: function()
	{
		var self = this,
			$section = $('.section');

		$section.each(function()
		{
			var $section = $(this),
				$editor = $section.find('.sectionBackgroundEdit'),
				$images = $editor.find('.item');

			// loop over all attached images
			$images.each(function()
			{
				NKD.section_images.imageEdit($(this));
				NKD.section_images.imageType($(this));
				NKD.section_images.imageDelete($(this));
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
				NKD.section_images.imageSave($image);
			}

			return false;
		});
	},

	imageType: function($image)
	{
		var self = this,
			id = $image.data('id'),
			$section = $image.parents('.section'),
			$editor = $section.find('.sectionBackgroundEdit'),
			$select = $editor.find('select[name=type]');

		$select.off('change');
		$select.on('change', function()
		{
			var $background = $section.find('[data-image-id="'+id+'"]');

			$background.css({top:'', left:''}).removeClass('default stretch repeat custom fixed').addClass(this.value);
			self.imageSave($image);
		});
	},

	imageDelete: function($image)
	{
		var $section = $image.parents('.section'),
			$editor = $section.find('.sectionBackgroundEdit'),
			$delete_button = $editor.find('.js-delete-image');

		$delete_button.off('click');
		$delete_button.on('click', function()
		{
			var $image_id = $image.data('id');

			$.ajax({
				url: '/admin/image/'+$image_id+'/delete',
				type: "GET",
				dataType: 'json'
			}).done(function(msg) {
				$image.remove();
				$section.find('[data-image-id="'+$image_id+'"]').remove();
			});

			return false;
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
				type : $image.find('select[name=type]').val()
			},
			async: false,
			dataType: 'json'
		});

		return false;
	},

	imageUpload: function()
	{
		var self = this,
			$section = $('.section');

		$section.each(function()
		{
			var $section = $(this),
				$id = $section.data('id'),
				$editor = $section.find('.sectionBackgroundEdit'),
				$upload_button = $editor.find('input[name="image"]'),
				$progress_bar = $editor.find('.js-image-progress'),
				$image_container = $section.find('.js-section-images-container'),
				$loop_container = $editor.find('.js-images-loop');

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

					NKD.section_images.createListeners();
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