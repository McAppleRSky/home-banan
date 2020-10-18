<?php

add_action('wp_encqueue_scripts', 'timber_style');

function timber_style(){
    wp_encqueue_style( 'normalize-style', get_template_directory_uri(), 'assets/css/normalize.css' );
    wp_encqueue_style( 'magnific-style', get_template_directory_uri(), 'assets/css/magnific-popup.css' );
    wp_encqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
function theme_add_scripts() {
    //подключам файл стилей темы
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    //подключам js файл стилей темы
    wp_enqueue_script( 'style-name', get_stylesheet_directory_uri() .'/js/example.js', array(), '1.0', true );
}
