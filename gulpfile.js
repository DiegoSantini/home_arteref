const minify = require('gulp-minify');
var gulp = require('gulp');

gulp.task('default', function() {
    gulp.task('compress', function() {
        gulp.src('content/js/*.js')
          .pipe(minify({
              ext:{
                  src:'-debug.js',
                  min:'.js'
              },
              exclude: ['tasks'],
              ignoreFiles: ['.combo.js', '-min.js']
          }))
          .pipe(gulp.dest('dist'))
      });
  });

