import gulp from "gulp";

/* Plugins */
import plumber from "gulp-plumber"
import webpCss from "gulp-webp-css"

/* Configuration */
import path from "../settings/path.js";
import app from "../settings/app.js";

/* CSS Processing */
export default () => {
    return gulp.src(path.styles.src)
        .pipe(plumber(app.plumberCss))
        .pipe(webpCss())
        .pipe(gulp.dest(path.styles.dest));
}