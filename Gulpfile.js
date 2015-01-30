// untuk taks manager
var gulp    = require('gulp'),

// untuk generate file css agar css mampu berjalan di semua browser dan memudahkan dalam develop css
// mifify css
    sass    = require('gulp-ruby-sass'),

// untuk memasukan/include file
    include = require('gulp-include'),

// untuk minify css dan javascript (termasuk nama variable dan function)
    uglify  = require('gulp-uglify');

// Task Untuk Javascript
gulp.task("script", function(){
    gulp.src('assets/js/admin.js')
        .pipe(include())
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

// Watcher
gulp.task('watch', function(){
    gulp.watch('assets/js/**/*.js', ['script']);
});

// Task Default
gulp.task("default", ['script','watch']);
