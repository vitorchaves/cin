let gulp = require('gulp'),
  watch = require('gulp-watch'),
  sass = require('gulp-sass'),
  htmlmin = require('gulp-htmlmin'),
  imagemin = require('gulp-imagemin'),
  autoprefixer = require('gulp-autoprefixer'),
  uglify = require('gulp-uglify');

gulp.task('sass', () => {
  console.log('running sass and autoprefixer');
  return gulp.src('./dev/assets/sass/style.sass')
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./public/assets/css/'));
})

gulp.task('htmlmin', () => {
  console.log('running htmlmin');
  return gulp.src('./dev/*.php')
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest('./public/'))
})

gulp.task('includescopy', () => {
  console.log('running includescopy');
  return gulp.src('./dev/includes/**')
    .pipe(gulp.dest('./public/includes/'))
})

gulp.task('imagemin', () => {
  console.log('running imagemin');
  return gulp.src('./dev/assets/img/**')
    .pipe(imagemin())
    .pipe(gulp.dest('./public/assets/img/'))
})

gulp.task('copyfonts', () => {
  return gulp.src('./dev/assets/fonts/**')
    .pipe(gulp.dest('./public/assets/fonts/'))
});

gulp.task('uglify', () => {
  return gulp.src('./dev/assets/js/**')
    .pipe(uglify())
    .pipe(gulp.dest('./public/assets/js/'))
});

gulp.task('w', () => {
  return watch('./dev/**',
    gulp.series('htmlmin', 'sass', 'uglify', 'imagemin', 'copyfonts', 'includescopy'))
})