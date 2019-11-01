var browserSync = require("browser-sync").create();
const path = require("path");

function StartBrowserSync() {
  const dir = __dirname.split("/");
  const adress = path.join("localhost:8888", "/hamburg-muss-handeln");
  browserSync.init({
    proxy: adress
  });
}

exports.StartBrowserSync = StartBrowserSync;
exports.browserSyncInstance = browserSync;
