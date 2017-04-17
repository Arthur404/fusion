var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    del = require('del'),
    cache = require('gulp-cache'),
    autoprefixer = require('gulp-autoprefixer');
    plumber = require('gulp-plumber');
    sourcemaps = require('gulp-sourcemaps');
    notify = require("gulp-notify");

plumberErrorHandler = {
    errorHandler: notify.onError({
        title: 'Gulp',
        message: 'Error: <%= error.message %>'
    })
};

gulp.task('style', function(){
    return gulp.src('sass/style.scss')
        .pipe(plumber(plumberErrorHandler))
        .pipe(sourcemaps.init())
        .pipe(sass().on ('error', sass.logError))
        .pipe(autoprefixer(['last 3 versions'], { cascade: true }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('.'))
        .pipe(notify("Done!"))
});

gulp.task('watch', ['style'], function() {
    gulp.watch('sass/**/*.scss', ['style']);
});

gulp.task('clear', function () {
    return cache.clearAll();
});

gulp.task('default', ['watch']);
