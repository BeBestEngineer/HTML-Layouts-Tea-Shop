module.exports = function(grunt) {
  require('time-grunt')(grunt);

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      build:       ['build'],
      source_less: ['source/global_styles_components/collected_styles/**/*.*'],
      source_js:   ['source/global_js_components/collected_scripts/**/*.*']
    },

    concat: {
      options: {
        separator: '\n /*SeparatoR*/ \n'
      },
      layout_styles: {
        src: [
          'source/global_styles_components/**/*.less',
          'source/main_modules/**/*.less',
          'source/other_modules/**/*.less'
        ],
        dest: 'source/global_styles_components/collected_styles/less/layout.less'
      },
      vendor_styles: {
        src: [
          'source/global_third_components/libs/normalize-css/normalize.css',
          'source/global_third_components/frameworks/bootstrap/css/bootstrap.css',
          'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.css',
          'source/global_third_components/libs/noUiSlider/distribute/nouislider.css'
        ],
        dest: 'source/global_styles_components/collected_styles/css/vendor.css'
      },
      layout_scripts: {
        src: ['source/global_js_components/layout_inception.js', 'source/main_modules/**/*.js', 'source/other_modules/**/*.js', 'source/global_js_components/layout_completion.js'],
        dest: 'source/global_js_components/collected_scripts/js/layout.js'
      },
      vendor_scripts: {
        src: [
          'source/global_third_components/libs/jquery/jquery.js',
          'source/global_third_components/frameworks/bootstrap/js/bootstrap.js',
          'source/global_third_components/libs/owl-carousel-1/owl-carousel/owl.carousel.js',
          'source/global_third_components/libs/noUiSlider/distribute/nouislider.js'
        ],
        dest: 'source/global_js_components/collected_scripts/js/vendor.js'
      }
    },

    less: {
      development: {
        options: {
          paths: ['source']
        },
        files: {
          'source/global_styles_components/collected_styles/css/layout.css': ['source/global_styles_components/collected_styles/less/layout.less']
        }
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
        src: 'source/global_styles_components/collected_styles/css/layout.css'
      }
    },

    cmq: {
      style: {
        files: {
          'source/global_styles_components/collected_styles/css/layout.css': ['source/global_styles_components/collected_styles/css/layout.css']
        }
      }
    },

    csscomb: {
      style: {
        expand: true,
        src: ['source/global_styles_components/collected_styles/css/layout.css']
      }
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
          },
          {
            expand: true,
            cwd: "source/global_styles_components/collected_styles/css",
            src: [
              "**/*.css"
            ],
            dest: "build/css"
          },
          {
            expand: true,
            cwd: "source/global_js_components/collected_scripts/js",
            src: [
              "**/*.js"
            ],
            dest: "build/js"
          }
        ]
      }
    },

    replace: {
      path_pages_data: {
        options: {
          patterns: [
            {
              match: /global_pages_data/g,
              replacement: 'pages_data'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
             'build/index.php',
             'build/pages_data/**'
            ]
          }
        ]
      },
      path_data_builders: {
        options: {
          patterns: [
            {
              match: /page_builders/g,
              replacement: 'pages'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/index.php',
              'build/pages/**'
            ]
          }
        ]
      },
      path_pages_other_modules: {
        options: {
          patterns: [
            {
              match: /'other_modules/g,
              replacement: '\'pages_modules/other_modules'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/pages_data/**',
              'build/index.php',
              'build/pages/**',
              'build/pages_modules/**'
            ]
          }
        ]
      },
      path_pages_main_modules: {
        options: {
          patterns: [
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
              'build/pages/**',
            ]
          }
        ]
      },
      fonts: {
        options: {
          patterns: [
            {
              match: /\/tea-shop\/source\/global_third_components\//g,
              replacement: '../'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/css/layout.css'
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
              replacement: '\t\<link rel="stylesheet" href='+ 'css/vendor.min.css' +'>\n\t\<link rel="stylesheet" href=' + 'css/layout.min.css' + '>\n<\/head>'
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
              replacement: '\t\<script src='+ 'js/vendor.min.js' + '></script>\n\t\t\<script src='+ 'js/layout.min.js' +'></script>\n\t<\/body>'
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
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      build: {
        files: {
          'build/css/vendor.min.css': ['build/css/vendor.css'],
          'build/css/layout.min.css': ['build/css/layout.css']
        }
      }
    },

    uglify: {
      build: {
        files: {
          'build/js/vendor.min.js': ['build/js/vendor.js'],
          'build/js/layout.min.js': ['build/js/layout.js']
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

    watch: {
      options: {
        livereload: true
      },
      source_files: {
        files: ['source/**/*.php', 'source/**/*.less'],
        tasks: ['clean', 'concat:layout_styles', 'concat:layout_scripts', 'less:development']
      }
    }
  });

  // Load the plugin that provides tasks.
  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', [
    'clean',
    'concat',
    'less',
    'postcss:main_styles',
    'cmq',
    'csscomb',

    'copy',
    'replace',
    'cssmin',
    'uglify',    
    'imagemin'
  ]);

};
