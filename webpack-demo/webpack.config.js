const base = require('./webpack.base.js')
const HtmlWebpackPlugin = require("html-webpack-plugin");
module.exports = {
    ...base,
    mode: 'development',
    devtool: 'inline-source-map',
    devServer: {
       contentBase: './dist',
    },
    module: {
        rules: [{
            test:/\.css$/i,
            use:["style-loader","css-loader"]}],
    },
};

