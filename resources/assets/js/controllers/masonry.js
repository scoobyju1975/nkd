NKD.masonry = {
	_getCol: function($item) {
	    var col_id = null;
	    var col = null;

	    if (NKD.responsive.view === 'sm') {
	    	col_id = 'col-sm-';
	    } else {
	    	col_id = 'col-md-';
	    }

		if ($item) {
		 	$item[0].className.split(' ').forEach(function(clazz) {
		 		if (clazz.indexOf(col_id) > -1) {
		 			col = parseInt(clazz.split(col_id)[1], 10);
		 		}
		 	})
		}

		return col;
	},

	init: function() {
		NKD.debug('masonry');

		var _this = this;
    	$(window).resize(function() {
          	var resizeHandler;

			if (!_this.didResize) {
				_this.didResize = true;
				resizeHandler = function() {
					_this.adjustPadding();
				  	return _this.didResize = false;
				};
				return window.setTimeout(resizeHandler, 300);
			}
        });

        this.adjustPadding();
	},

/*
	adjustPadding: function () {
		if (NKD.responsive.view === 'xs') {
			return;
		}
		var that = this;
		var col_count = 0;

		$('.masonry .col').each(function() {
			var $item = $(this);
			col_count = that._getCol($item) + col_count;
			if (col_count !== 12) {
				$item.addClass('padding-right');
			} else {
				col_count = 0; 
				$item.removeClass('padding-right');
			}
		})
	}
*/
}