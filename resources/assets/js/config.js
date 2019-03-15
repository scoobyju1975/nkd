var config = {

    globals: {
        $controller: $(document.body).data("controller"),
        $action: $(document.body).data("action"),

        debug: true, // show console logs for controllers and actions.
        alertFallback: false, // fallback to alert if console isnt supported (IE).

        timer: 400,
        timerAnims: 600,
        timerCascades: 40,

        screenLg: '1400',
        screenMd: '992',
        screenSm: '768',
        screenXs: '480',

        ajaxPool: []
    },

    paths: {
        apiPath: '',
        ajaxPath: ''
    }
};