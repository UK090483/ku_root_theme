const { src, dest, watch } = require("gulp");
const eslint = require("gulp-eslint");
const webpackStream = require("webpack-stream");

const { browserSyncInstance } = require("./browserSync");

const { options } = require("./options");

const { _source, _dest, _watch } = options.js;

function buildJs() {
  return src(_source)
    .pipe(
      eslint({
        parserOptions: { ecmaVersion: 6, sourceType: "module" },
        rules: {
          camelcase: 1
        }
      })
    )
    .pipe(eslint.format("codeframe"))
    .pipe(
      webpackStream({
        mode: "production",
        output: {
          filename: "bundle.js"
        }
      })
    )
    .pipe(dest(_dest))
    .on("end", function() {
      browserSyncInstance.reload();
    });
}

watch([_watch], buildJs);

exports.buildJs = buildJs;
