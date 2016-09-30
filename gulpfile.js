var gulp = require('gulp'),
	/* loading tasks */
	sass = require('gulp-sass'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssnano = require('cssnano'),
	watch = require('gulp-watch'),
	livereload = require('gulp-livereload'),

	/* path variables */
	src = './clockworks',
  	sassSrc = './clockworks/sass/',
	dist = './';

// defining tasks
// gulp.task('default', ['sass']);

gulp.task('sass', function () {
	gulp.src( sassSrc + 'style.scss')
    .pipe(
    	sass({
	      /* options */
	      outputStyle: 'expanded',
        sourceComments: 'true'
	    })
    )
    .pipe(postcss([
      /* postcss plugins */
      autoprefixer({
        /* options */
        browsers: ['last 3 version']
      })
    ]))
    .pipe( gulp.dest( dist ) )
		.pipe(livereload())
});

gulp.task('default', function () {
		livereload.listen();
    gulp.watch( sassSrc + "**/*", ['sass']);

});
