NKD.commander_video = {

	timer : null,

	init: function () {
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('commander video');

			NKD.commander_video.createListeners();
			NKD.commander_video.videoUpload();
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
				$editor = $module.find('.moduleVideoEdit'),
				$items = $editor.find('.item');

			// loop over all attached images
			$items.each(function()
			{
				NKD.commander_video.videoType($(this));
				NKD.commander_video.videoDelete($(this));
				NKD.commander_video.videoLink($(this));
				NKD.commander_video.videoEdit($(this));
			});
		});
	},

	videoEdit: function($item)
	{
		var $target_button = $item.find('.js-edit-video');

		$target_button.off('click');
		$target_button.on('click', function()
		{
			var $module = $item.parents('.module'),
				$edit_panel = $item.find('.video-edit'),
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
				NKD.commander_video.videoSave($item);
			}

			return false;
		});
	},

	videoType: function($item)
	{
		var $module = $item.parents('.module'),
			$editor = $module.find('.moduleVideoEdit'),
			$select = $editor.find('select[name=type]');

		$select.off('change');
		$select.on('change', function()
		{
			var $video = $module.find('video');

			$video.css({top:'', left:''}).removeClass('default width1440 width1280 stretch').addClass(this.value);
			NKD.commander_video.videoSave($item);
		});
	},

	videoLink: function($item)
	{
		var $module = $item.parents('.module'),
			$editor = $module.find('.moduleVideoEdit'),
			$input = $editor.find('input[name=link]'),
			$video = $module.find('video'),
			$play_button = $module.find('.js-play'),
			$save_button = $module.find('.js-save-handle');

		$input.off('keyup');
		$input.keyup(function()
		{
			// clear previous timers
			window.clearTimeout(NKD.commander_video.timer);

			// set save button active.
			$save_button.addClass('active');

			$video.attr('data-link', this.value);
			$play_button.show();

			// save after 2 seconds.
			NKD.commander_video.timer = window.setTimeout(function()
			{
				NKD.commander_video.videoSave($item);
			}, 2000);
		});
	},

	videoDelete: function($item)
	{
		var $module = $item.parents('.module'),
			$editor = $module.find('.moduleVideoEdit'),
			$delete_button = $editor.find('.js-delete-video');

		$delete_button.off('click');
		$delete_button.on('click', function()
		{
			if (!confirm("Are you sure you want to delete this video?")) {
				return false;
			}

			var $video = $module.find('video'),
				video_id = $video.data('id');

			$.ajax({
				url: '/admin/video/'+video_id+'/delete',
				type: "GET",
				dataType: 'json'
			}).done(function(msg)
			{
				$item.remove();
				$module.find('.js-video-container').empty();
				$editor.find('input[name=video]').val(null).prop("disabled", false);
			});

			return false;
		});
	},
	videoSave: function($video)
	{
		var $id = $video.data('id'),
			$module = $video.parents('.module'),
			$editor = $module.find('.moduleVideoEdit'),
			$play_button = $module.find('.js-play');

		// save video
		$.ajax({
			url: '/admin/video/'+$id+'/update',
			type: "PUT",
			data: {
				id : $id,
				path : $editor.find('input[name=path]').val(),
				type : $editor.find('select[name=type]').val(),
				link : $editor.find('input[name=link]').val()
			},
			async: false,
			dataType: 'json'
		}).done(function(data) {
			if (data.link) {
				if ($play_button.length == 0) {
					$(data.link).appendTo($module.find('.content'));
					$module.find('.js-play').show();
				}
			} else {
				$module.find('.js-play-container').remove();
			}
		});

		return false;
	},

	videoUpload: function()
	{
		var self = this,
			$modules = $('.module');

		$modules.each(function()
		{
			var $module = $(this),
				$editor = $module.find('.moduleVideoEdit'),
				$upload_button = $editor.find('input[name="video"]'),
				$progress_bar = $editor.find('.js-video-progress'),
				$video_container = $module.find('.js-video-container'),
				$loop_container = $module.find('.js-video-loop');

			$upload_button.fileupload({
				dropZone: $editor,
				url: '/admin/video/upload',
				type: "POST",
				dataType: 'json',
				before: function()
				{
					$progress_bar.find('.progress-bar').css('width', '0%');
				},
				done: function (e, data)
				{
					$video_container.append(data.result.video);
					$editor.find('input[name="path"]').val(data.result.file);
					$editor.find('input[name=video]').val(null).prop("disabled", true);
					$loop_container.empty().append(data.result.item);


					NKD.commander_video.createListeners();
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