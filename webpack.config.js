const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );
const ImageMinimizerPlugin = require( 'image-minimizer-webpack-plugin' );

module.exports = {
	...defaultConfig,
	entry: {
		index:  [ './src/index.js', './src/index.scss' ],
		editor: [ './src/editor.js', './src/editor.scss' ],
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
				{
					from: 'src/js/lightbox.js',
					to: 'js/lightbox.js',
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
