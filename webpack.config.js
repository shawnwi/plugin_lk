const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const isDevelopment = process.env.NODE_ENV === 'development';

module.exports = {
	mode: 'development',
	entry: './src/js/index.js',
	devtool: 'inline-source-map',
	output: {
		filename: 'main.js',
		path: path.resolve(__dirname, 'dist'),
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				use: [
					{
						loader: 'babel-loader',
						options: {
							presets: ['@babel/preset-env']
						}
					}
				]
			},
			{
				//test: /\.s(a|c)ss$/,
        /*
				use: [
					isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							modules: true,
							sourceMap: isDevelopment
						}
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: isDevelopment
						}
					}
				]
        //*/
			},
      //*
			{
				test: /\.s(a|c)ss$/,
				//exclude: /\.module.(s(a|c)ss)$/,
				use: [
					isDevelopment ? 'style-loader' : MiniCssExtractPlugin.loader,
					'css-loader',
					{
						loader: 'sass-loader',
						options: {
							sourceMap: isDevelopment
						}
					}
				]
			}
      //*/
		]
	},
	plugins: [
		new CleanWebpackPlugin({ cleanStaleWebpackAssets: false }),
		new MiniCssExtractPlugin({
			filename: '[name].css',
			chunkFilename: '[id].css'
		})
	],
	resolve: {
		extensions: ['.js', '.jsx', '.scss']
	}
};
