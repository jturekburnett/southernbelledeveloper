<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'twentysixteen';
    wp_enqueue_style( $parent_style, '../../../../style.css' );
    wp_enqueue_style( 'southern-belle-style',
        '../../../../style.css',
        array( $parent_style )
    );
}
?>
