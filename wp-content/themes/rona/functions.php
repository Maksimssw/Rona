<?php
    add_action( 'wp_enqueue_scripts', function(){
        wp_enqueue_style( 'global', get_template_directory_uri() .  "/assets/dist/static/styles/global.css");
        wp_enqueue_style( 'swiper-css', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" );
        wp_enqueue_style( 'style',  get_template_directory_uri() . "/assets/dist/static/styles/style.css");

        wp_enqueue_script( 'swiper', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", 'null', true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/dist/static/scripts/main.js',  array('swiper'), 'null', true);
    });

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    add_filter( 'upload_mimes', 'svg_upload_allow' );
    function svg_upload_allow( $mimes ) {
        $mimes['svg']  = 'image/svg+xml';

        return $mimes;
    }
?>