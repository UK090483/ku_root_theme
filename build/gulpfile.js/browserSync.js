const browserSync = require("browser-sync").create();
const { options } = require("./options");

function StartBrowserSync() {
  const adress = options.serveUrl;
  browserSync.init({
    proxy: adress
  });
}

exports.StartBrowserSync = StartBrowserSync;
exports.browserSyncInstance = browserSync;
