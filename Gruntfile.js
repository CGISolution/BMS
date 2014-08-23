module.exports = function (grunt)
{
    grunt.initConfig({
        clean: {
            js: [],
            css: ['public/css/main.css', 'public/css/*.min.css']
        },
        phplint: {
            options: {
                
            },
            src: ['app/controllers/*.php', 'app/libraries/*.php', 'app/models/*.php']
        },
        jshint: {
            all: ['Gruntfile.js', 'public/js/*.js', 'app/controllers/*.js']
        },
        // CSS/LESS lint
        recess: {
            dist: {
                src: ['public/less/site.less', 'public/css/*.css']
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
                files: ['composer.json'],
                updateConfigs: [],
                commit: true,
                commitMessage: "Release v%VERSION%",
                commitFiles: ['-a'],
                createTag: true,
                tagName: 'v%VERSION%',
                tagMessage: 'Version %VERSION%',
                push: true,
                pushTo: 'origin',
                gitDescribeOptions: '--tags --always --abbrev=1 --dirty=-d'
            }
        },
        less: {
            dev: {
                options: {
                    paths: ['public/less', 'vendor/twbs/bootstrap/less'],
                    compress: false
                },
                files: {
                    'public/css/main.css': 'public/less/main.less',
                }
            },
            min: {
                options: {
                    paths: ['public/less', 'vendor/twbs/bootstrap/less'],
                    compress: true
                },
                files: {
                    'public/css/main.min.css': 'public/less/main.less',
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-bump');
    grunt.loadNpmTasks('grunt-recess');
    grunt.loadNpmTasks('grunt-phplint');

    grunt.registerTask('default', ['clean:js', 'clean:css', 'phplint:src', 'jshint', 'recess:dist', 'less:dev', 'less:min']);
};
