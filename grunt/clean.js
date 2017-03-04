module.exports = {
  build:         ['build'],

  sourceLayoutStyles:  ['source/global_styles_components/collected_styles/css/layout.css', 'source/global_styles_components/collected_styles/less/layout.less'],
  sourceVendorStyles:  ['source/global_styles_components/collected-styles/css/vendor.css'],
  sourceLayoutScripts: ['source/global_js_components/collected_scripts/js/layout.js'],
  sourceVendorScripts: ['source/global_js_components/collected_scripts/js/vendor.js'],

  buildLayoutStyles:   ['build/css/layout.css', 'build/css/layout.min.css'],
  buildVendorStyles:   ['build/css/vendor.css', 'build/css/vendor.min.css'],
  buildLayoutScripts:  ['build/js/layout.js', 'build/js/layout.min.js'],
  buildVendorScripts:  ['build/js/vendor.js', 'build/js/vendor.min.js']
};