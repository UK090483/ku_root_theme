

exports.default = ()=>{

    const { src, dest, series } = require("gulp");
    const { buildCss } = require("./buildCss");
    const { buildJs } = require("./buildJs");
    const { StartBrowserSync } = require("./browserSync");
    
    StartBrowserSync()
}

exports.export = ()=>{
    const { exportTheme } =  require("./export.js");
    return exportTheme();
};
