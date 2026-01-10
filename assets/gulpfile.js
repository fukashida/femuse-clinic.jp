const autoprefixer = require('gulp-autoprefixer')
const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))

function buildStyles(done) {
  gulp
    .src('./scss/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css/'))
  done()
}

function watch(done) {
  gulp.watch('./scss/*.scss', gulp.series(buildStyles))
  done()
}

gulp.task('build', buildStyles)
gulp.task('default', gulp.series('build', watch))
