// Require Gulp as a dependencies
var gulp = require('gulp');
    watch = require('gulp-watch');
    concat = require('gulp-concat');
    image = require('gulp-image');


// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Set in dev environnement bool
var dev = true;

// Variables de chemins
var source = './src'; // dossier de travail
var destination = './dist'; // dossier à livrer
var destinationDev = './dist/dev'; // dossier à pour l'envrionnement de developpement

// Define task
gulp.task('sass', function () {
    return gulp.src(source + '/assets/css/sass/booter.scss')
        .pipe(plugins.sass())
        .pipe(concat('style.css')) // Concatenate to single file
        .pipe(gulp.dest(destinationDev + '/assets/css/'));
});

// Minify css, from destination to destination
// compiled-css --> minifies-compiled-css
gulp.task('minify', function () {
  return gulp.src(destination + '/assets/css/*.css')
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(destination + '/assets/css/'));
});

// Image building
var devImagePath =  "dist/dev/assets/images/**/*";
var imagePath =  "dist/assets/images";
gulp.task('image', function () {
  gulp.src(devImagePath)
    .pipe(image())
    .pipe(gulp.dest(imagePath));
});

gulp.task('default', ['image']);

// Tâche "build"
gulp.task('build', ['sass']);

// Tâche "prod" = Build + minify
gulp.task('prod', ['build',  'minify']);

// Tâche par défaut
gulp.task('default', ['build']);

// Watch
gulp.task('watch', function () {
  gulp.watch(source + '/assets/css/**/*.scss', ['build']);
});
