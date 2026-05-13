const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );
const ImageMinimizerPlugin = require( 'image-minimizer-webpack-plugin' );

module.exports = {
	...defaultConfig,
	entry: {
		index: './src/index.js',
		editor: './src/editor.js',
	},
	plugins: [
		...defaultConfig.plugins,
		new CopyWebpackPlugin( {
			patterns: [
				{
					from: 'src/images',
					to: 'images',
					noErrorOnMissing: true,
				},
			],
		} ),
	],
	optimization: {
		...defaultConfig.optimization,
		minimizer: [
			...( defaultConfig.optimization?.minimizer ?? [] ),
			new ImageMinimizerPlugin( {
				minimizer: {
					implementation: ImageMinimizerPlugin.sharpMinify,
					options: {
						encodeOptions: {
							jpeg: { quality: 85 },
							webp: { quality: 85 },
							png: {},
						},
					},
				},
			} ),
		],
	},
};
