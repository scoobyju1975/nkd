NKD.commander_animation = {

	timer : null,

	init: function () {
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('commander animation');

			NKD.commander_animation.createListeners();
		}
	},

	createListeners: function()
	{
		var self = this,
			$modules = $('.module');

		$modules.each(function()
		{
			var $module = $(this);

			NKD.commander_animation.animationModule($module);
			NKD.commander_animation.animationContent($module);
		});
	},

	animationModule: function($module)
	{
		var id = $module.data('id'),
			$editor = $module.find('.moduleAnimationEdit'),
			$select = $editor.find('select[name=module_anim]'),
			$save_button = $module.find('.js-save-handle');

		$select.off('change');
		$select.on('change', function()
		{
			if (this.value.length > 0)
			{
				$module.velocity(this.value, {
					display: 'block',
					complete: function () {
						$(this).show().css({
							'opacity': 1,
							'transform': ''
						});
					}
				});
			}

			// set save button active.
			$save_button.addClass('active');
		});
	},

	animationContent: function($module)
	{
		var id = $module.data('id'),
			$editor = $module.find('.moduleAnimationEdit'),
			$select = $editor.find('select[name=content_anim]'),
			$save_button = $module.find('.js-save-handle');

		$select.off('change');
		$select.on('change', function()
		{
			var $mod = $module.find('.mod');

			if (this.value.length > 0)
			{
				$mod.velocity(this.value, {
					display: 'block',
					complete:function() {
						$(this).show().css({
							'opacity': 1,
							'transform': ''
						});
					}
				});
			}

			// set save button active.
			$save_button.addClass('active');
		});
	}
};