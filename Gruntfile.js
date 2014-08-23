module.exports = function (grunt)
{
    grunt.initConfig({
        phplint: {
            options: {
                
            },
            src: []
        },
        jshint: {
            all: ['Gruntfile.js']
        },
        // CSS/LESS lint
        recess: {
            dist: {
                src: ['public/less/main.less', 'public/css/*.css']
            }
        },
        /**
         *  Usage: (Sarting with v0.0.1)
         *      grunt bump - v.0.02
         *      grunt bump:patch - v0.0.3
         *      grunt bump:minor - v0.1.0
         *      grunt bump:major - v1.0.0
         *      grunt bump:prerelease - v1.0.0-1
         *      grunt bump:git
         */
        bump: {
            options: {
                files: ['package.json'],
                updateConfigs: [],
                commit: true,
                commitMessage: "Release v%VERSION%",
                commitFiles: ['package.json', 'composer.json'],
                createTag: true,
                tagName: 'v%VERSION%',
                tagMessage: 'Version %VERSION%',
                push: true,
                pushTo: 'origin',
                gitDescribeOptions: '--tags --always --abbrev=1 --dirty=-d'
            }
        }
        
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-bump');
    grunt.loadNpmTasks('grunt-recess');
    grunt.loadNpmTasks('grunt-phplint');

    grunt.registerTask('default', ['phplint:src', 'jshint', 'recess:dist']);
};
