<?php
function template_files() {
    wp_enqueue_style('template_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'template_files');
?>