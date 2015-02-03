// untuk taks manager
var gulp    = require('gulp'),
// untuk generate file css agar css mampu berjalan di semua browser dan memudahkan dalam develop css
// mifify css
    sass    = require('gulp-ruby-sass'),
// untuk memasukan/include file
    include = require('gulp-include'),
// untuk minify css dan javascript (termasuk nama variable dan function)
    uglify  = require('gulp-uglify'),
// untuk minify, import, compatibility all browser and remove comment
    minifyCSS = require('gulp-minify-css');

var config = {
    assetPath: __dirname+"/assets",
    publicPath: __dirname+"/app/public",
    bowerDir: __dirname+"/bower_components",
}

// memindahkan semua font ke public
gulp.task('icons', function() { 
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*') 
        .pipe(gulp.dest(config.publicPath+'/fonts')); 
});

// Task Untuk generate custom.scss
gulp.task("sass", function(){
    return gulp.src(config.assetPath + '/sass/custom.scss')
        .pipe(sass({
            style: "compressed",
            compass: true,
            sourcemap: false,
            lineNumbers: true,
            check: true
        }) 
        .on("error", function(error){
            console.log(error.message)
        })) 
        .pipe(gulp.dest(config.assetPath+'/lib_css')); 
});

// untuk import|menggabungkan|minify css
gulp.task('css', function () {
  gulp.src(config.assetPath+'/css/style.css')
    .pipe(minifyCSS({
        compatibility:'*',
        debug:true,
        keepBreaks:false,
        keepSpecialComments:0
    }))
    .pipe(gulp.dest(config.publicPath+'/css'));
});

// Task Untuk Javascript
gulp.task("script", function(){
    gulp.src(config.assetPath+'/js/main.js')
        .pipe(include())
        .pipe(uglify())
        .pipe(gulp.dest(config.publicPath+'/js'));
    gulp.src(config.assetPath+'/js/ie.js')
        .pipe(include())
        .pipe(uglify())
        .pipe(gulp.dest(config.publicPath+'/js'));
});

// Watcher
gulp.task('watch', function(){
    gulp.watch(config.assetPath + '/js/**/*.js', ['script']);
     gulp.watch(config.assetPath + '/sass/**/*.scss', ['sass']); 
     gulp.watch(config.assetPath + '/lib_css/**/*.css', ['css']); 
     gulp.watch(config.assetPath + '/css/**/*.css', ['css']); 
});

// Task Default
gulp.task("default", ['script','css','sass','watch']);
