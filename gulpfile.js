/*********************************************************************** "ÍNDEX"
# JavaScript
# SCSS
# Watch
# Comandes Gulp
*******************************************************************************/

var gulp   = require('gulp'),        // npm install gulp --save-dev
    concat = require('gulp-concat'), // npm install gulp-concat --save-dev -> Concatenar archivos.
    uglify = require('gulp-uglify'), // npm install gulp-uglify --save-dev -> Minificar archivos.
    sass   = require('gulp-sass');   // npm install gulp-sass --save-dev -> Compilar Sass.


/*
# JavaScript
------------------------------------------------------------------------------*/
gulp.task('js', function() {
  return gulp.src([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
  ])
  .pipe(concat('twbs.js'))
  .pipe(uglify())
  .pipe(gulp.dest('assets/js'));
});


/*
# SCSS
------------------------------------------------------------------------------*/
gulp.task('scss', function() {
  return gulp.src([
    'assets/scss/main.scss',
  ])
  .pipe(concat('twbs.scss'))
  .pipe(sass())
  .pipe(gulp.dest('assets/css'));
});


/*
# Watch
------------------------------------------------------------------------------*/
gulp.task('watch', function() {
    gulp.watch('assets/scss/*.scss', ['scss']);
});


/*
# Comandes Gulp
------------------------------------------------------------------------------*/
// gulp js && gulp scss
// // gulp watch
