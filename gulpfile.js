var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
gulp.task("default", function(){
  browserSync.init({
        proxy: "localhost/wp"
    });
  gulp.watch("./**/*").on("change", browserSync.reload);
});
