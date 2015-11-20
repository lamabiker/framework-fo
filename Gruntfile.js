module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
        files: {
          'css/theme.css': 'src/theme/less/theme.less'
        },
        options: {
          sourceMap: true,
          sourceMapFilename: 'css/theme.css.map',
          sourceMapURL: '/css/theme.css.map'
        }
      }
    },
    watch: {
      src: {
        files: ['src/theme/less/**'],
        tasks: ['all']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('all', ['less']);

  grunt.registerTask('default', function () {
    grunt.log.writeln("\nUsage:");
    grunt.log.writeln(" * grunt all");
    grunt.log.writeln(" * grunt watch");
  });
};