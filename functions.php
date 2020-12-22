<?php

function add_theme_styles_and_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'add_theme_styles_and_scripts' );
