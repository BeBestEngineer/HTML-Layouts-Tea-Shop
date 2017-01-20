module.exports = function(grunt) {
  require('time-grunt')(grunt);
    
  var vendor_styles_build_path        = 'build/css/vendor-styles.css';
      vendor_styles_min_build_path    = 'build/css/vendor-styles.min.css';
      vendor_styles_min_load_path     = 'css/vendor-styles.min.css';

      layout_styles_build_path        = 'build/css/layout-styles.css';
      layout_styles_min_build_path    = 'build/css/layout-styles.min.css';
      layout_styles_min_load_path     = 'css/layout-styles.min.css';

      vendor_scripts_build_path       = 'build/js/vendor-scripts.js';
      vendor_scripts_min_build_path   = 'build/js/vendor-scripts.min.js';
      vendor_scripts_min_load_path    = 'js/vendor-scripts.min.js';

      layout_scripts_build_path       = 'build/js/layout-scripts.js';
      layout_scripts_min_build_path   = 'build/js/layout-scripts.min.js';
      layout_scripts_min_load_path    = 'js/layout-scripts.min.js';


  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      build: ["build"]
    },

    copy: {
      build: {
        files: [
          {
            expand: true,
            cwd: "source/global_pages_data",
            src: [
              "**"
            ],
            dest: "build/pages_data"
          },
          {
            expand: true,
            cwd: "source/global_third_components",
            src: [
              "fonts/**"
            ],
            dest: "build"
          },
          {
            expand: true,
            cwd: "source",
            src: [
              "images/**"
            ],
            dest: "build"
          },
          {
            expand: true,
            cwd: "source",
            src: [
              "main_modules/**"
            ],
            dest: "build/pages_modules/"
          },
          {
            expand: true,
            cwd: "source",
            src: [
              "other_modules/**"
            ],
            dest: "build/pages_modules/"
          },
          {
            expand: true,
            cwd: "source/page_builders",
            src: [
              "**"
            ],
            dest: "build/pages"
          },
          {
            expand: true,
            cwd: "source",
            src: [
              "index.php"
            ],
            dest: "build"
          }
        ]
      }
    },

    concat: {
      options: {
        separator: '\n /*SeparatoR*/ \n'
      },
      main_scripts: {
        src: ['source/global_js_components/layout.js'],
        dest: layout_scripts_build_path
      },
      vendor_scripts: {
        src: [
          'source/global_third_components/libs/jquery/jquery.js',
          'source/global_third_components/frameworks/bootstrap/js/bootstrap.js',
          'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.js',
        ],
        dest: vendor_scripts_build_path
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')({ browsers:
            'Chrome >= 52, ' +
            'Edge >= 13, ' +
            'ff >= 48, ' +
            'ie >= 10, ' +
            'Opera >= 38, ' +
            'Safari >= 9, ' +
            'iOS >=9, ' +
            'ChromeAndroid >= 50, ' +
            'UCAndroid >= 0, ' +
            'Android >= 4.4, ' +
            'ExplorerMobile >= 10, ' +
            'iOS >= 9, ' +
            'OperaMobile >= 0, ' +
            ''
          })
        ]
      },
      main_styles: {
        src: layout_styles_build_path
      }
    },

    cmq: {
      style: {
        files: {
          layout_styles_build_path: [layout_styles_build_path]
        }
      }
    },

    csscomb: {
      style: {
        expand: true,
        src: [layout_styles_build_path]
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      build: {
        files: {
          vendor_styles_min_build_path: [vendor_styles_build_path],
          layout_styles_min_build_path: [layout_styles_build_path]
        }
      }
    },

    uglify: {
      build: {
        files: {
          vendor_scripts_min_build_path: [vendor_scripts_build_path],
          layout_scripts_min_build_path: [layout_scripts_build_path]
        }
      }
    },

    imagemin: {
      images: {
        options: {
          optimizationLevel: 3
        },
        files: [{
          expand: true,
          src: ['build/images/**/*.{png,jpg,gif,svg}']
        }]
      }
    },

    replace: {
      paths: {
        options: {
          patterns: [
            {
              match: /global_pages_data/g,
              replacement: 'pages_data'
            },
            {
              match: /page_builders/g,
              replacement: 'pages'
            },
            {
              match: /other_modules/g,
              replacement: 'pages_modules/other_modules'
            },
            {
              match: /main_modules/g,
              replacement: 'pages_modules/main_modules'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
             'build/index.php',
             'build/pages/**',
             'build/pages_data/**',
             'build/pages_modules/**'
            ]
          }
        ]
      },
      fonts: {
        options: {
          patterns: [
            {
              match: /global_third_components\//g,
              replacement: ''
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              layout_styles_build_path
            ]
          }
        ]
      },
      link_tags: {
        options: {
          patterns: [
            {
              match: /\s{2}<link[^>]+>\n/g,
              replacement: ''
            },
            {
              match: /<\/head>/,
              replacement: '\t\<link rel="stylesheet" href='+ vendor_styles_min_load_path +'>\n\t\<link rel="stylesheet" href=' + layout_styles_min_load_path + '>\n<\/head>'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/pages_modules/other_modules/_head_html/_head_html.php'
            ]
          }
        ]
      },
      script_tags: {
        options: {
          patterns: [
            {
              match: /\s{4}<script[^>]+><\/script>\n/g,
              replacement: ''
            },
            {
              match: /<\/body>/,
              replacement: '\t\<script src='+ vendor_scripts_min_load_path + '></script>\n\t\t\<script src='+ layout_scripts_min_load_path +'></script>\n\t<\/body>'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/pages_modules/other_modules/_end_html/_end_html.php'
            ]
          }
        ]
      },
      comments: {
        options: {
          patterns: [
            {
              match: /\s{2}<!--[\d\s\w-]+-->\n/g,
              replacement: ''
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/pages_modules/other_modules/_head_html/_head_html.php',
              'build/pages_modules/other_modules/_end_html/_end_html.php'
            ]
          }
        ]
      }
    }

  });

  // Load the plugin that provides tasks.
  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

  // Default task(s).
  grunt.registerTask('default', [
    'clean',
    'copy',
    'concat',
    'postcss:main_styles',
    'cmq',
    'csscomb',
    'replace',
    'cssmin',
    'uglify',
    'imagemin'
  ]);
};
