var gulp   = require('gulp')
var concat = require('gulp-concat')
var uglify = require('gulp-uglify')
var ngAnnotate = require('gulp-ng-annotate')

gulp.task('js', function () {
  return gulp.src(["js/jquery-1.12.4.min.js", "js/waypoints.min.js", "js/inview.js", "js/timeline.js", 'js/angular-1.5.6.min.js', 'ng/*.js', "js/resume.js", 'js/ga.js'])
    .pipe(concat("scripts.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest(""))
})