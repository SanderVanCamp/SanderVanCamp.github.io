let gulp = require('gulp'),
  sass = require('gulp-sass'),
  sourcemaps = require('gulp-sourcemaps'),
  cleanCss = require('gulp-clean-css'),
  rename = require('gulp-rename'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create();
var csso = require('gulp-csso');

var fs = require('fs');
var afterLoad = require('after-load');


function sassComponents() {
  return gulp.src('./scss/components/*.scss')
    .pipe(sass())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCss())
    .pipe(csso())
    .pipe(gulp.dest('css'));
}

// Compile sass into CSS & auto-inject into browsers
function styles() {
  return gulp.src([paths.scss.bootstrap, paths.scss.src, paths.scss.aos])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer({
      browsers: [
        'Chrome >= 35',
        'Firefox >= 38',
        'Edge >= 12',
        'Explorer >= 10',
        'iOS >= 8',
        'Safari >= 8',
        'Android 2.3',
        'Android >= 4',
        'Opera >= 12']
    })]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(cleanCss())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(paths.scss.dest))
    .pipe(browserSync.stream())
}

function purify() {

  routesToCheck.forEach(function (route) {
    afterLoad(route.url, function (html) {
      fs.writeFile('renders/' + route.name, html, function (err) {
      });
    });
  })

  return gulp.src(['./css/style.min.css', './css/font.css'])
    .pipe(gulpPurgecss({
      content: ['templates/**/*.twig', 'renders/*.html']
    }))
    .pipe(gulp.dest('./css/'));

}

// Move the javascript files into our js folder
function js() {
  return gulp.src([paths.js.bootstrap, paths.js.aos, paths.js.jquery, paths.js.popper])
    .pipe(gulp.dest(paths.js.dest))
    .pipe(browserSync.stream())
}

// Static Server + watching scss/html files
function serve() {
  gulp.watch(['scss/*.scss', 'scss/components/*/*.scss',  'scss/components/*.scss'], sassComponents)
}

const build = gulp.series(styles, gulp.parallel(js, serve))

exports.styles = styles
exports.js = js
exports.serve = serve
exports.purify = purify
exports.sassComponents = sassComponents

exports.default = build
