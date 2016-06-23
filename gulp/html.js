var gulp = require('gulp');
var concat = require('gulp-concat')
var htmlmin = require('gulp-htmlmin');

gulp.task('html', function () {
    return gulp.src(["bin/top.php", "css/preRender.min.css", "bin/topEnd.php", "content/layover.php", "bin/nav.php", "content/about.php", "content/skills.php", "content/career.php", "content/portfolio.php", "content/contact.php", "bin/footer.php"])
        .pipe(concat("index.html"))
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest(""));
})
