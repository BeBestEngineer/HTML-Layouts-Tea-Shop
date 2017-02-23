module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      build:         ['build'],

      sourceLayoutStyles:  ['source/global_styles_components/collected_styles/css/layout.css', 'source/global_styles_components/collected_styles/less/layout.less'],
      sourceVendorStyles:  ['source/global_styles_components/collected-styles/css/vendor.css'],
      sourceLayoutScripts: ['source/global_js_components/collected_scripts/js/layout.js'],
      sourceVendorScripts: ['source/global_js_components/collected_scripts/js/vendor.js'],

      buildLayoutStyles:   ['build/css/layout.css', 'build/css/layout.min.css'],
      buildVendorStyles:   ['build/css/vendor.css', 'build/css/vendor.min.css'],
      buildLayoutScripts:  ['build/js/layout.js', 'build/js/layout.min.js'],
      buildVendorScripts:  ['build/js/vendor.js', 'build/js/vendor.min.js']
    },

    concat: {
      options: {
        separator: '\n /*SeparatoR*/ \n'
      },
      layout_styles: {
        src: [
          'source/global_styles_components/*.less',
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
      source: {
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
      buildFonts: {
        files: [
          {
            expand: true,
            cwd: "source/global_third_components",
            src: [
              "fonts/**"
            ],
            dest: "build"
          }
        ]
      },
      buildIcons: {
        files: [
          {
            expand: true,
            cwd: "source",
            src: [
              "icons/**"
            ],
            dest: "build"
          }
        ]
      },
      buildImages: {
        files: [
          {
            expand: true,
            cwd: "source",
            src: [
              "images/**"
            ],
            dest: "build"
          }
        ]
      },
      buildStyles: {
        files: [
          {
            expand: true,
            cwd: "source/global_styles_components/collected_styles/css",
            src: [
              "**/*.css"
            ],
            dest: "build/css"
          }
        ]
      },
      buildScripts: {
        files: [
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
      path_background_image_icons: {
        options: {
          patterns: [
            {
              match: /\/tea-shop\/source\/icons/g,
              replacement: '../icons'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/css/layout.css',
            ]
          }
        ]
      },
      path_background_image_image: {
        options: {
          patterns: [
            {
              match: /\/tea-shop\/source\/images/g,
              replacement: '../images'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/css/layout.css',
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
              'build/*.html'
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
              'build/*.html'
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
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toHome: {
        options: {
          patterns: [
            {
              match: /\?page=home/g,
              replacement: 'home.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toProductsList: {
        options: {
          patterns: [
            {
              match: /\?page=products-list/g,
              replacement: 'products-list.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toProduct: {
        options: {
          patterns: [
            {
              match: /\?page=product/g,
              replacement: 'product.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toShoppingCart: {
        options: {
          patterns: [
            {
              match: /\?page=shopping-cart/g,
              replacement: 'shopping-cart.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toAboutUs: {
        options: {
          patterns: [
            {
              match: /\?page=about-us/g,
              replacement: 'about-us.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toContactUs: {
        options: {
          patterns: [
            {
              match: /\?page=contact-us/g,
              replacement: 'contact-us.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toBlog: {
        options: {
          patterns: [
            {
              match: /\?page=blog"/g,
              replacement: 'blog.html"'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toSinglePost: {
        options: {
          patterns: [
            {
              match: /\?page=blog-single-post/g,
              replacement: 'blog-single-post.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_to404: {
        options: {
          patterns: [
            {
              match: /\?page=404/g,
              replacement: '404.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
            ]
          }
        ]
      },
      htmlLinks_toIndex: {
        options: {
          patterns: [
            {
              match: /home.html/g,
              replacement: 'index.html'
            }
          ]
        },
        files: [
          {
            expand: true,
            src: [
              'build/*.html'
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
      buildStyles: {
        files: {
          'build/css/vendor.min.css': ['build/css/vendor.css'],
          'build/css/layout.min.css': ['build/css/layout.css']
        }
      }
    },

    uglify: {
      buildScripts: {
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

    shell: {
      convertPagesToHTML: {
        cwd: 'source',
        command: [
          'php html-converter.php -p404',
          'php html-converter.php -pabout-us',
          'php html-converter.php -pblog-single-post',
          'php html-converter.php -pblog',
          'php html-converter.php -pcontact-us',
          'php html-converter.php -phome',
          'php html-converter.php -pproduct',
          'php html-converter.php -pproducts-list',
          'php html-converter.php -pshopping-cart'
        ].join('&')
      },
      renamePageToIndex: {
        cwd: 'build',
        command: [
          'mv  home.html  index.html'
        ].join('&')
      }
    },

    watch: {
      options: {
        livereload: true
      },
      styles: {
        files: ['source/**/*.less'],
        tasks: [
          'clean:sourceLayoutStyles', 'clean:buildLayoutStyles',
          'concat:layout_styles',
          'less:source',
          'postcss:main_styles',
          'cmq',
          'csscomb',
          'copy:buildStyles',
          'replace:path_background_image_icons', 'replace:path_background_image_image', 'replace:fonts',
          'cssmin:buildStyles'
        ]
      },
      scripts: {
        files: ['source/**/*.js'],
        tasks: [
          'clean:sourceLayoutScripts', 'clean:buildLayoutScripts',
          'concat:layout_scripts',
          'copy:buildScripts',
          'uglify:buildScripts'
        ]
      }
    }
  });

  // Load the plugin that provides tasks.
  require('load-grunt-tasks')(grunt, {scope: ['devDependencies', 'dependencies']});
  require('time-grunt')(grunt);

  // Default task(s).
  grunt.registerTask('default', [
    'clean',
    'concat',
    'less',
    'postcss:main_styles',
    'cmq',
    'csscomb',
    'copy',
    'shell:convertPagesToHTML',
    'replace',
    'shell:renamePageToIndex',
    'cssmin',
    'uglify',
    'imagemin'
  ]);

};
