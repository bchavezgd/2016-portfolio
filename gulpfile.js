var gulp = require('gulp'),
	/* loading tasks */
	sass = require('gulp-sass'),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssnano = require('cssnano'),
	watch = require('gulp-watch'),

	/* path variables */
	src = './clockworks',
  	sassSrc = './clockworks/sass/**/*',
	dist = './';

// defining tasks
// gulp.task('default', ['sass']);

gulp.task('sass', function () {
	gulp.src( sassSrc )
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
});

gulp.task('default', function () {

    gulp.watch( sassSrc, ['sass']);

});
