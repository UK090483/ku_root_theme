const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass");
// const autoprefixer = require("gulp-autoprefixer");
const { browserSyncInstance } = require("./browserSync");
let cleanCSS = require("gulp-clean-css");

const { options } = require("./options");

console.log(options.css);
const { _source, _dest, _watch } = options.css;

function buildCss() {
  return (
    src(_source)
      .pipe(sass().on("error", sass.logError))
      // .pipe(autoprefixer())
      .pipe(cleanCSS({ compatibility: "ie8" }))
      .pipe(dest(_dest))
      .pipe(browserSyncInstance.stream())
  );
}

watch([_watch], buildCss);

exports.buildCss = buildCss;
