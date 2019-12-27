const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: {
    main: "./src/index.js",
    blockEditor: "./src/block-editor-assets/gutenberg.js"
  },
  output: {
    filename: "[name].bundle.js",
    chunkFilename: "[name].bundle.js",
    publicPath:
      "/" +
      __dirname
        .split(path.sep)
        .splice(3, 4)
        .join("/") +
      "/public/js/",
    path: path.resolve(__dirname, "../public/js")
  },
  mode: "production",
  devtool: "source-map",

  watchOptions: {
    ignored: /node_modules/
  },

  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.s(a|c)ss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: ["file-loader"]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({ filename: "../css/[name].bundle.css" }),
    new BrowserSyncPlugin(
      {
        // browse to http://localhost:3000/ during development
        // host: "localhost",
        // port: 3000,
        files: "../**/*.php",

        // proxy the Webpack Dev Server endpoint
        // (which should be serving on http://localhost:3100/)
        // through BrowserSync
        proxy: "http://localhost:8888/" + __dirname.split(path.sep).reverse()[4]
      },
      // plugin options
      {
        // prevent BrowserSync from reloading the page
        // and let Webpack Dev Server take care of this

        reload: true
      }
    )
  ]
};
