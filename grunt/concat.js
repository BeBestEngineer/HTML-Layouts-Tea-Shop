module.exports = {
	options: {
		separator: '\n /*SeparatoR*/ \n'
	},
	sourceLayoutStyles: {
		src: [
			'source/global_styles_components/*.less',
			'source/main_modules/**/*.less',
			'source/other_modules/**/*.less'
		],
				dest: 'source/global_styles_components/collected_styles/less/layout.less'
	},
	sourceVendorStyles: {
		src: [
			'source/global_third_components/libs/normalize-css/normalize.css',
			'source/global_third_components/frameworks/bootstrap/css/bootstrap.css',
			'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.css',
			'source/global_third_components/libs/noUiSlider/distribute/nouislider.css'
		],
				dest: 'source/global_styles_components/collected_styles/css/vendor.css'
	},
	sourceLayoutScripts: {
		src: ['source/global_js_components/layout_inception.js', 'source/main_modules/**/*.js', 'source/other_modules/**/*.js', 'source/global_js_components/layout_completion.js'],
				dest: 'source/global_js_components/collected_scripts/js/layout.js'
	},
	sourceVendorScripts: {
		src: [
			'source/global_third_components/libs/jquery/jquery.js',
			'source/global_third_components/frameworks/bootstrap/js/bootstrap.js',
			'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.js',
			'source/global_third_components/libs/noUiSlider/distribute/nouislider.js'
		],
				dest: 'source/global_js_components/collected_scripts/js/vendor.js'
	}
};