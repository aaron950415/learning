const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
module.exports = {
    entry: "./src/index.js",
    output: {
        filename: "[index].[contenthash].js",
    },
    plugins: [
        new HtmlWebpackPlugin({
            title: "My App",
            template: "src/index.html",
        }),
    ],
};
