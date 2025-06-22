const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const RemoveEmptyScriptsPlugin = require("webpack-remove-empty-scripts");
const path = require("path");

module.exports = {
  ...defaultConfig,
  entry: {
    "js/screen": path.resolve(__dirname, "assets/src/js/screen.js"),
    "css/screen": path.resolve(__dirname, "assets/src/css/screen.scss"),
    "css/editor": path.resolve(__dirname, "assets/src/css/editor.scss"),
  },
  output: {
    path: path.resolve(__dirname, "assets/build"),
    filename: "[name].js",
  },
  plugins: [
    ...defaultConfig.plugins,
    new RemoveEmptyScriptsPlugin({
      stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
    }),
  ],
};
