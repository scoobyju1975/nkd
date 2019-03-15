'use strict';

// Include Gulp
var gulp = require('gulp');
// Include plugins
var uncss = require('gulp-uncss');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');

var plumber = require('gulp-plumber'),
	autoprefixer = require('gulp-autoprefixer'),
	sass = require('gulp-ruby-sass'),
	concat = require('gulp-concat'),
	// jshint = require('gulp-jshint'),
	uglify = require('gulp-uglify'),
	eventstream = require('event-stream');

var task = {};

// UNCSS Task
gulp.task('uncss', function() {
	return gulp.src('css/style.css')
	.pipe(uncss({
		html: ["http:\/\/nkd-dev.bu-s.com","http:\/\/nkd-dev.bu-s.com\/title\/","http:\/\/nkd-dev.bu-s.com\/test-video-post\/","http:\/\/nkd-dev.bu-s.com\/how-company-culture-shapes-employee-motivation\/","http:\/\/nkd-dev.bu-s.com\/newsletter\/","http:\/\/nkd-dev.bu-s.com\/the-millennial-wave-employee-engagement\/","http:\/\/nkd-dev.bu-s.com\/login\/","http:\/\/nkd-dev.bu-s.com\/test-standard-post\/","http:\/\/nkd-dev.bu-s.com\/link-test-post\/","http:\/\/nkd-dev.bu-s.com\/cases\/dublin-airport-authority-performance-matters\/","http:\/\/nkd-dev.bu-s.com\/cases\/dhl-express-certified-international-specialist\/","http:\/\/nkd-dev.bu-s.com\/cases\/dhl-express-certified-international-manager\/","http:\/\/nkd-dev.bu-s.com\/cases\/dhl-global-forwarding\/","http:\/\/nkd-dev.bu-s.com\/cases\/british-airways-being-thoughtful\/","http:\/\/nkd-dev.bu-s.com\/cookies-privacy\/","http:\/\/nkd-dev.bu-s.com\/insights\/","http:\/\/nkd-dev.bu-s.com\/careers\/","http:\/\/nkd-dev.bu-s.com\/contact-us\/","http:\/\/nkd-dev.bu-s.com\/cases\/","http:\/\/nkd-dev.bu-s.com\/our-services\/","http:\/\/nkd-dev.bu-s.com\/about-us\/","http:\/\/nkd-dev.bu-s.com\/","http:\/\/nkd-dev.bu-s.com\/author\/benushersmith\/","http:\/\/nkd-dev.bu-s.com\/author\/paulchamberlain\/","http:\/\/nkd-dev.bu-s.com\/tag\/ability\/","http:\/\/nkd-dev.bu-s.com\/category\/articles\/","http:\/\/nkd-dev.bu-s.com\/category\/blogs\/","http:\/\/nkd-dev.bu-s.com\/tag\/boundaries\/","http:\/\/nkd-dev.bu-s.com\/tag\/branding\/","http:\/\/nkd-dev.bu-s.com\/tag\/capability\/","http:\/\/nkd-dev.bu-s.com\/tag\/ceo\/","http:\/\/nkd-dev.bu-s.com\/tag\/communication\/","http:\/\/nkd-dev.bu-s.com\/tag\/culture\/","http:\/\/nkd-dev.bu-s.com\/tag\/dhl-express\/","http:\/\/nkd-dev.bu-s.com\/tag\/employee\/","http:\/\/nkd-dev.bu-s.com\/tag\/employee-development\/","http:\/\/nkd-dev.bu-s.com\/tag\/employee-engagement\/","http:\/\/nkd-dev.bu-s.com\/tag\/engagement\/","http:\/\/nkd-dev.bu-s.com\/tag\/gender-equality\/","http:\/\/nkd-dev.bu-s.com\/tag\/generation-y\/","http:\/\/nkd-dev.bu-s.com\/tag\/generation-z\/","http:\/\/nkd-dev.bu-s.com\/tag\/leadership\/","http:\/\/nkd-dev.bu-s.com\/tag\/millennials\/","http:\/\/nkd-dev.bu-s.com\/tag\/motivation\/","http:\/\/nkd-dev.bu-s.com\/tag\/people\/","http:\/\/nkd-dev.bu-s.com\/type\/link\/","http:\/\/nkd-dev.bu-s.com\/type\/video\/","http:\/\/nkd-dev.bu-s.com\/tag\/potential\/","http:\/\/nkd-dev.bu-s.com\/tag\/self-confidence\/","http:\/\/nkd-dev.bu-s.com\/tag\/strategy\/","http:\/\/nkd-dev.bu-s.com\/tag\/training\/","http:\/\/nkd-dev.bu-s.com\/category\/uncategorised\/","http:\/\/nkd-dev.bu-s.com\/category\/video\/","http:\/\/nkd-dev.bu-s.com\/category\/white-papers\/","http:\/\/nkd-dev.bu-s.com\/tag\/workplace\/","http:\/\/nkd-dev.bu-s.com\/2016\/07\/","http:\/\/nkd-dev.bu-s.com\/2016\/05\/","http:\/\/nkd-dev.bu-s.com\/?s=.","http:\/\/nkd-dev.bu-s.com\/?s=asdfasdfasdfasdf","http:\/\/nkd-dev.bu-s.com\/asdfasdfasdfasdf"],
		ignore: [
			'.active',			
            '.collapse',
            '.collapse.in',
            '.collapsing',
			'.fade',
			'.fade',
            '.fade.in',
			'.in',
			'.masonry .col.padding-right .image',
			'.mod',
            '.modal.in .modal-dialog',
			'.modal.fade .modal-dialog',
			'.modal-backdrop',
			'.modal-backdrop.in',
			'.modal-backdrop.fade.in',
			'.modal-dialog',
			'.modal-open',
			'.nojs',
            '.velocity-animating',
            'section .js-video-container .vimeo iframe',
            '.section .js-video-container .vimeo iframe',
            '.share-this',
            '.admin-bar .masthead',
            '.admin-bar #skrollr-body',
            '.sticky .posted-on',
            '.bypostauthor',
            '.gallery-caption',
            '.screen-reader-text',
            '.alignleft',
            '.alignright',
            '.aligncenter',
            'blockquote',
            '.masonry .col:nth-child(1)',
            '.masonry .col:nth-child(2)',
            '.masonry .col:nth-child(3)',
            '.masonry .col:nth-child(5)',
            '.masonry .col:nth-child(6)',
            '.masonry .col:nth-child(2n+6)',
            '.masonry .col:nth-child(2n+0)',
            '.masonry .col:nth-child(4n+6)',
            '.masonry .col:nth-child(4n+0)',
            '.mod .formula-horizontal .content .buttons',
            '.mod .formula-horizontal .content .buttons .btn',
            '.mod .formula-horizontal .content .buttons p',
            /\.open/
		]
	}))
	.pipe(rename({suffix: '.clean'}))
	.pipe(gulp.dest('css/'));

});

// MinifyCSS Task
gulp.task('minifycss', function() {
    return gulp.src('css/*.css')
        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(gulp.dest('dist'));
});

// ******************************** //

// JavaScript code
gulp.task('js', task.js = function()
{
    return eventstream.concat(
        gulp.src([
            './resources/assets/js/libraries/bootstrap.min.js',
            './resources/assets/js/libraries/underscore-min.js',
            './resources/assets/js/libraries/waypoints.min.js',
            './resources/assets/js/libraries/waypoints-sticky.min.js',
            './resources/assets/js/libraries/skrollr.min.js',
            './resources/assets/js/libraries/snap.svg-min.js',
            './resources/assets/js/libraries/velocity.min.js',
            './resources/assets/js/libraries/velocity.ui.min.js',
            './resources/assets/js/libraries/spectrum.js',
            './resources/assets/js/libraries/isotope.pkgd.js',
            './resources/assets/js/libraries/idangerous.swiper.min.js',
            './resources/assets/js/libraries/jquery.iframe-transport.js',
            './resources/assets/js/libraries/jquery.fileupload.js',
            './resources/assets/js/libraries/froogaloop.min.js',
            './resources/assets/js/libraries/retina.0.0.2.js',
            './resources/assets/js/libraries/imagesloaded.pkgd.js',
            './resources/assets/js/config.js',
            './resources/assets/js/nkd.js',
            './resources/assets/js/controllers/*.js'
        ])
		.pipe(plumber())
		.pipe(concat('main.js'))
		.pipe(uglify())
		.pipe(gulp.dest('js'))
    );
});

// Sass code
gulp.task('styles', task.styles = function()
{
    return eventstream.concat(
        sass('./resources/assets/sass/nkd.scss', {
            style: 'expanded',
            //style: 'compressed',
            noCache: true
        })
        .pipe(autoprefixer(["last 1 version", "> 1%", "ie 8"], { cascade: true }))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('css'))
    );
});

// Css Libraries
gulp.task('libraries', task.libraries = function()
{
    return eventstream.concat(
        gulp.src(['resources/assets/sass/libraries/**/*.css'])
		.pipe(concat('libs.css'))
		.pipe(gulp.dest('css'))
    );
});

// The default task
gulp.task('default', ['js', 'styles', 'libraries']);