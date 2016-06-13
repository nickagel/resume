var gulp = require('gulp');
var imagemin = require('gulp-imagemin');

gulp.task('img', ['about', 'career', 'footer', 'nav', 'portfolio', 'skills'], function(){

})

gulp.task('about', function () {
    return gulp.src('images/about/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/about"))
})

gulp.task('career', function () {
    return gulp.src('images/career/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/career"))
})

gulp.task('footer', function () {
    return gulp.src('images/footer/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/footer"))
})

gulp.task('nav', function () {
    return gulp.src('images/nav/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/nav"))
})

gulp.task('portfolio', function () {
    return gulp.src('images/portfolio/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/portfolio"))
})

gulp.task('skills', function () {
    return gulp.src('images/skills/*')
        .pipe(imagemin())
        .pipe(gulp.dest("images/skills"))
})