<?php
//hook into wordpress to add stylesheets from the parent theme
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

//load stylesheets from parent theme
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
