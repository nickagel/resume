var gulp   = require('gulp')
var concat = require('gulp-concat')
var uglify = require('gulp-uglify')
var ngAnnotate = require('gulp-ng-annotate')

gulp.task('js', function () {
  return gulp.src(["!js/data.json", "!js/roboto.google.font.js", "js/jquery-1.12.4.min.js", "js/waypoints.min.js", 'js/*.js', 'ng/*.js'])
    .pipe(concat("scripts.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest(""))
})