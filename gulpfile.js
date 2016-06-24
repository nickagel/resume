
var gulp = require('gulp')
var fs   = require('fs')
fs.readdirSync(__dirname + '/gulp').forEach(function (task) {
  require('./gulp/' + task)
})

gulp.task('build', ['css', 'js', 'html'])
gulp.task('image-build', ['imgs'])
gulp.task('preRenderBuild',['preRendered'])