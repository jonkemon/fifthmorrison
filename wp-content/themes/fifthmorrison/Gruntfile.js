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
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
        }
    });

    grunt.registerTask('default', ['jshint', 'compass']);
};