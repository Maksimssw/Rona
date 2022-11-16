const pathSrc = "../src"; 
const pathDest = "../dist";

export default {
    root: pathDest,
    src: pathSrc,

    html: {
        src: pathSrc + "/pages/*.html",
        dest: pathDest
    },

    styles: {
        src: pathSrc + "/static/styles/*.css",
        watch: pathSrc +  "/static/styles/**/*.css",
        dest: pathDest + "/static/styles"
    },

    script: {
        src: pathSrc + "/static/scripts/**/*.js",
        dest: pathDest + "/static/scripts"
    },

    images: {
        src: pathSrc + "/static/images/**/*.*",
        dest: pathDest + "/static/images"
    },

    icons: {
        src: pathSrc + "/static/icons/**/*.*",
        dest: pathDest + "/static/icons"
    },

    font: {
        src: pathSrc + "/static/fonts/**/*.{eot,ttf,otf,otc,woff,woff2,svg}",
        dest: pathDest + "/static/fonts"
    }
}