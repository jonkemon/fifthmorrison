module.exports = function(grunt) {
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        jshint: {
            files: ['Gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
                options: {
                    globals: {
                        jQuery: true
                    }
                }
        },
        uglify: {
            dist: {
                files: {
                    'dest/js/dependencies.js': [
                        'js/bower_components/angular/angular.js',
                        'js/bootstrap.js',
                        'js/skip-link-focus-fix.js',
                    ]
                }
            }
        },
        compass: {
            options: {
                sassDir: 'sass',
                cssDir: 'css',
                imagesDir: 'images',
                javascriptsDir: 'js',
                fontsDir: 'fonts',
                importPath: 'js/bower_components',
                outputStyle: 'compressed'
            },
            dist: {},
        },
        watch: {
            files: ['sass/*', 'js/*'],
            tasks: ['jshint', 'uglify', 'compass']
        }
    });

    grunt.registerTask('build', ['jshint', 'uglify' ,'compass']);
    grunt.registerTask('default', ['build']);
};