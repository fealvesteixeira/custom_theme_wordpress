// Declare var to tasks

var gulp = require('gulp');
	sass = require('gulp-ruby-sass');
	autoprefixer = require('gulp-autoprefixer');
	cssnano = require('gulp-cssnano');
	//jshint =  require('gulp-jshint');
	uglify = require('gulp-uglify');
	imagemin = require('gulp-imagemin');
	rename = require('gulp-rename');
	concat = require('gulp-concat');
	notify = require('gulp-notify');
	//cache = require('gulp-cache');
	//livereload = require('gulp-liverolad');
	del = require('del');

// Declare vars  to paths
var basePaths = {

	src: 'assets/src/',
	dest: 'public/assets/'
};

var paths ={
	images: {
		src: basePaths.src + 'images/',
		dest: basePaths.dest + 'images/min/' 
	},
	scripts: {
		src: basePaths.src + 'js/',
		dest: basePaths.dest + 'js/min/'
	},
	styles:{
		src: basePaths.src + 'sass/',
		dest: basePaths.dest + 'css/min'
	},
	sprite:{
		src: basePaths.src + 'sprite/*' 
	}

};

var appFiles = {
	styles: paths.styles.src + '**/*.scss',
	scripts: [paths.scripts.src + 'scripts.js']
};

var vendorFiles = {
	styles: '',
	scripts: ''
};

var spriteConfig = {
	imgName: 'sprite.png',
	cssName: '_sprite.scss',
	imgPath: paths.images.dest + 'sprite.png'
};


gulp.task('style',function(){
	return sass(appFiles.styles)
	.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
	.pipe(rename({suffix: '.min'}))
	.pipe(cssnano())
	.pipe(gulp.dest(paths.styles.dest))
	.pipe(notify({ message: 'Styles task complete' }));
});		

//Default task
gulp.task('default', ['clean'], function(){
	gulp.start('style')
});


gulp.task('watch', function() {
	// Watch .scss files
	gulp.watch(appFiles.styles, ['style']);
});