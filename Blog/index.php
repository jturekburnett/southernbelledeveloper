<!--Blog Page Index-->
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', FALSE);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

/** Loads the template file*/
require_once('../theme/template.php');
    $TITLE = "Blog";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("../Blog/blog.php", $variables);
?>
