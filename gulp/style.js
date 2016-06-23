var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat')

gulp.task('css', ['preRendered', 'main'], function(){

})

gulp.task('main', function () {
    return gulp.src(["css/style.css", "css/svg.css", "css/timeline.css"])
        .pipe(concat("style.min.css"))
        .pipe(cleanCSS())
        .pipe(gulp.dest(""));
})

gulp.task('preRendered', function () {
    return gulp.src("css/preRender.css")
        .pipe(concat("preRender.min.css"))
        .pipe(cleanCSS())
        .pipe(gulp.dest("css"));
})