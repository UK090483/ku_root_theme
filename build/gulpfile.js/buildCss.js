const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const { browserSyncInstance } = require("./browserSync");
let cleanCSS = require('gulp-clean-css');


const source = "scss/main.scss";
const WhatchSource = "scss/**/*.scss";
const CssDest = "../public/css";

function buildCss() {
  return src(source)
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(dest(CssDest))
    .pipe(browserSyncInstance.stream());
}

watch([WhatchSource], buildCss);

exports.buildCss = buildCss;
