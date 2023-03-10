//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const { src, dest, watch, series, parallel, lastRun } = require('gulp');
const loadPlugins = require('gulp-load-plugins');
const $ = loadPlugins();
const pkg = require('./package.json');
const del = require('del');
const conf = pkg["gulp-config"];
const sizes = conf.sizes;
const cssnano = require('cssnano');
const imageminPngquant = require('imagemin-pngquant');
const browserSync = require('browser-sync').create();
const isProd = process.env.NODE_ENV === "production";

//----------------------------------------------------------------------
//  関数定義（WordPress用 テーマ直下に出力、browserSyncのproxyにローカルを設定）
//----------------------------------------------------------------------
function icon(done) {
  for (let size of sizes){
    let width = size[0];
    let height = size[1];
    src('./favicon.png')
    .pipe($.imageResize({
      // width = width,
      // height = height,
      width,
      height,
      crop: true,
      upscale: false
    }))
    .pipe($.rename(`favicon-${width}x${height}.png`))
    .pipe(dest('./images/icon'));
  }
  done();
}

function resize() {
  return src("./src/resize/**")
    .pipe($.imageResize({
      width: 1024,
      height: 768,
      crop: true,
      upscale: false,
    }))
    .pipe(dest("./src/images"));
}

function imagemin() {
  return src('./src/images/**', { since: lastRun(imagemin) })
  .pipe($.imagemin([
    $.imagemin.gifsicle({interlaced: true}),
    $.imagemin.mozjpeg({quality: 75, progressive: true}),
    imageminPngquant({
      quality: [.50, .60],
      speed: 1,
    }),
    $.imagemin.svgo({
      plugins: [
        {removeViewBox: true},
        {cleanupIDs: false}
      ]
    })
  ]))
  .pipe(dest("./images"));
}

function styles() {
  return src('./src/sass/**/!(_)*.scss')
    .pipe($.plumber({
      errorHandler: $.notify.onError('Error: <%= error.message %>')
    }))
    .pipe($.if(!isProd, $.sourcemaps.init()))
    .pipe($.dartSass({
      outputStyle: 'expanded'
    }))
    .pipe($.autoprefixer({
      cascade: true
    }))
    .pipe($.if(!isProd, $.sourcemaps.write('./')))
    .pipe($.if(isProd, $.postcss([cssnano({ autoprefixer: false })])))
    .pipe(dest('./'))
    .pipe($.debug({title: 'scss dest:'}));
}

function scripts() {
  return src('./src/js/**/*.js')
    .pipe($.if(!isProd, $.sourcemaps.init()))
    .pipe($.babel())
    .pipe($.if(!isProd, $.sourcemaps.write('./')))
    .pipe($.if(isProd, $.uglify()))
    .pipe(dest('./js'));
}

function lint() {
  return src(['./src/js/**/*.js', '!./src/js/vendors/*.js'])
    .pipe($.eslint({fix: true}))
    .pipe($.eslint.format())
    .pipe($.eslint.failAfterError())
    .pipe(dest('./src/js'))
}

function extras() {
  return src([
      './src/*.html',
      './src/*.php',
      './src/css/**'
  ], {
    base: 'src'
  }).pipe(dest('./'));
}

function clean() {
  return del([
    './css',
    './images',
    './js',
    './*.html',
    './*.php'
  ]);
}

function startAppServer() {
  browserSync.init({
    proxy : "test.marsdesign.local", // ローカルに合わせる
  });

  watch('./src/sass/**/*.scss', styles);
  watch('./src/js/**/*.js', scripts);
  watch('./src/images/**', imagemin);
  watch(['./src/*.html', './src/*.php', './src/css/**'], extras);
  watch(['./src/sass/**/*.scss',
    './src/js/**/*.js',
    './src/*.html',
    './src/*.php',
    './src/css/**',
    './src/images/**'
  ]).on('change', browserSync.reload);
}

//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
const build = series(clean, parallel(imagemin, extras, styles, series(lint, scripts)));
const serve = series(build, startAppServer);

exports.icon = icon;
exports.resize = resize;
exports.imagemin = imagemin;
exports.styles = styles;
exports.scripts = scripts;
exports.lint = lint;
exports.build = build;
exports.serve = serve;
exports.default = serve;