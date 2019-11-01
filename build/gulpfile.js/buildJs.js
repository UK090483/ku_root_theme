const { src, dest, watch } = require("gulp");
const babel = require("gulp-babel");
const eslint = require("gulp-eslint");
const webpackStream = require("webpack-stream");
// var webpack = require("webpack");
// var webpackConfig = require("../webpack.config");

const { browserSyncInstance } = require("./browserSync");

const source = "js/app.js";
const WhatchSource = "js/**/*.js";
const JSDest = "../public/js";

function buildJs() {
  return src(source)
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
    .pipe(dest(JSDest))
    //.pipe(browserSyncInstance.stream());
}

watch([WhatchSource], buildJs);

exports.buildJs = buildJs;
