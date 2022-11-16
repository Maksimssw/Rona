import gulp from "gulp";

/* Configuration */
import path from "../settings/path.js";
import app from "../settings/app.js";


/* Plugins */
import plumber from "gulp-plumber"
import imagemin from "gulp-imagemin"

/* Processing Icons */
export default () => {
    return gulp.src(path.icons.src)
        .pipe(plumber(app.plumberIcons))
        .pipe(imagemin(app.imagemin))
        .pipe(gulp.dest(path.icons.dest));
}
