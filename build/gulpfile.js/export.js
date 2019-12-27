
const { src, dest, task} = require("gulp");
const ignore       = require('gulp-ignore'); 
const rimraf       = require('gulp-rimraf');
const zip          = require('gulp-zip');
const notify       = require('gulp-notify');
const project      = 'jmh-prototype-b';
const runSequence  = require('run-sequence');



const build 			= './buildtheme/'; // Files that you want to package into a zip go here
const buildInclude 	= [
						// include common file types
                        '../../jmh/**/*',
                        '!../../jmh/build/node_modules/**/*',
                        
						// '../**/*.js',
						// '../**/*.svg',
						// '../**/*.ttf',
						// '../**/*.otf',
						// '../**/*.eot',
						// '../**/*.woff',
                        // '../**/*.woff2',
                        // '../**/',
                    

						// // include specific files and folders
						// '../screenshot.png',

						// // exclude files and folders
						// '!node_modules/**/*',
						// '!assets/bower_components/**/*',
						// '!style.css.map',
						// '!assets/js/custom/*',
						// '!assets/css/patrials/*'

					];




function exportTheme() {
    return 	src(buildInclude)
                .pipe(dest(build))
                .pipe(zip(project+'.zip'))
                .pipe(dest('./'))
                .pipe(notify({ message: 'Copy from buildFiles complete', onLast: true }));
}





task('cleanup', function() {
    return 	src(['./assets/bower_components', '**/.sass-cache','**/.DS_Store'], { read: false }) // much faster
                .pipe(ignore('node_modules/**')) //Example of a directory to ignore
                .pipe(rimraf({ force: true }))
                // .pipe(notify({ message: 'Clean task complete', onLast: true }));
});




task('buildFiles', function() {
    return 	src(buildInclude)
                .pipe(dest(build))
                .pipe(notify({ message: 'Copy from buildFiles complete', onLast: true }));
});

task('buildZip', function () {
    // return 	src([build+'/**/', './.jshintrc','./.bowerrc','./.gitignore' ])
    return 	src(build+'/**/')
                .pipe(zip(project+'.zip'))
                .pipe(dest('./'))
                .pipe(notify({ message: 'Zip task complete', onLast: true }));
});


// function exportTheme(cb) {
//     runSequence( 'cleanup','buildFiles', 'buildZip', cb);
// }

exports.exportTheme = exportTheme;


