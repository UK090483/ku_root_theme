const { watch } = require("gulp");

exports.default = () => {
  const { src, dest, series } = require("gulp");
  const { buildCss } = require("./buildCss");
  const { buildJs } = require("./buildJs");
  const { StartBrowserSync, browserSyncInstance } = require("./browserSync");
  function reload(e) {
    e();
    browserSyncInstance.reload();
  }
  watch(["../**/*.php"], reload);

  StartBrowserSync();
};

exports.export = () => {
  const { exportTheme } = require("./export.js");
  return exportTheme();
};
