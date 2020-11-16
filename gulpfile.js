var gulp         = require('gulp');

var sourcemaps   = require('gulp-sourcemaps');
var sass         = require('gulp-sass');
var rename       = require('gulp-rename');

var streamqueue  = require('streamqueue');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
  
gulp.task('style-admin', function () {
  return gulp.src('assets/sass/admin/style.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(sourcemaps.write(''))
	.pipe(rename({
		basename: "admin",
		suffix: '.min'
	}))
	.pipe(gulp.dest('./'));
});
  
gulp.task('style-public', function () {
  return gulp.src('assets/sass/public/style.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(sourcemaps.write(''))
	.pipe(rename({
		basename: "public",
		suffix: '.min'
	}))
	.pipe(gulp.dest('./'));
});

gulp.task('script-admin', function() {
	return streamqueue({ objectMode: true },
      gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'assets/js/**/*.js'
      ]),
	)
//	.pipe(uglify())
	.pipe(concat('admin.min.js'))
	.pipe(gulp.dest('./'))
});

gulp.task('script-public', function() {
	return streamqueue({ objectMode: true },
      gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'assets/js/**/*.js'
      ]),
	)
//	.pipe(uglify())
	.pipe(concat('public.min.js'))
	.pipe(gulp.dest('./'))
});
 
gulp.task('default', async function () {
  gulp.watch( 'assets/sass/admin/**/*.scss', gulp.series('style-admin') );
  gulp.watch( 'assets/js/admin/**/*.js', gulp.series('script-admin') );
  gulp.watch( 'assets/sass/public/**/*.scss', gulp.series('style-public') );
  gulp.watch( 'assets/js/public/**/*.js', gulp.series('script-public') );
});