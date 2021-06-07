<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

/* hent parent stylesheet i parenttemaets mappe */
function enqueue_parent_styles()
{
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
}
?>
