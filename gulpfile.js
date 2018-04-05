// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var cssnano = require('gulp-cssnano');
var gettext = require('gulp-gettext');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// Compile translations.
gulp.task('po-dist', function() {
    return gulp.src('languages/*.po')
        .pipe(gettext())
        .pipe(gulp.dest('languages'));
});

// Compile Our Sass
gulp.task('sass-dist', function() {
    return gulp.src('assets/source/sass/app.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cssnano({
            mergeLonghand: false,
            zindex: false
        }))
        .pipe(gulp.dest('assets/dist/css'));
});

gulp.task('sass-dev', function() {
    return gulp.src('assets/source/sass/app.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
        .pipe(rename({suffix: '.dev'}))
        .pipe(gulp.dest('assets/dist/css'));
});

// Concatenate & Minify JS
gulp.task('scripts-dist', function() {
    return gulp.src('assets/source/js/*.js')
        .pipe(concat('app.js'))
        .pipe(gulp.dest('assets/dist/js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/source/js/**/*.js', ['scripts-dist']);
    gulp.watch('assets/source/sass/**/*.scss', ['sass-dist', 'sass-dev']);
});

// Default Task
gulp.task('build', ['po-dist', 'sass-dist', 'sass-dev', 'scripts-dist']);
gulp.task('default', ['build', 'watch']);
