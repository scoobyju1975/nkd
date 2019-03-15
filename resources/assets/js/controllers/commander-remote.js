NKD.commander_remote = {

    init: function () {
        if ($('body[data-check="cms"]').length > 0) {
            NKD.debug('commander remote');

            NKD.commander_remote.sectionImageUpload();
        }
    },

    sectionImageUpload: function ()
    {
        var self = this,
            $upload_button = $('#section_image_upload'),
            $container = $upload_button.parents('.container'),
            $progress_bar = $container.find('.js-image-progress'),
            $image_container = $container.find('.js-images-container');

        $upload_button.fileupload({
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
                NKD.commander_images.createListeners();
            },
            progressall: function (e, data)
            {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $progress_bar.find('.progress-bar').css('width', progress + '%');
            }
        });
    }

};