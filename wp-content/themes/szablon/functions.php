<?php
/**

* Proper way to enqueue scripts and styles

*/

/**

* Proper way to enqueue scripts and styles

*/


if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*
* Create your own twentysixteen_setup() function to override in a child theme.
*
* @since Twenty Sixteen 1.0
*/
/**

* Proper way to enqueue scripts and styles

*/

function twentysixteen_setup() {

/*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on Twenty Sixteen, use a find and replace
* to change 'twentysixteen' to the name of your theme in all the template files
*/   
load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );

/*
* Enable support for custom logo.
*
* @since Twenty Sixteen 1.2
*/

add_theme_support( 'custom-logo', array(
'height' => 50,
'width' => 50,
'flex-height' => true,
'flex-width' => true,
'header-text' => array( 'site-title', 'site-description' ),

) );

/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );

// This theme uses wp_nav_menu() in two locations.
 register_nav_menus( array(
 'primary' => __( 'Primary Menu', 'twentysixteen' ),
// 'social' => __( 'Social Links Menu', 'twentysixteen' ),
) );


/*
* Switch default core markup for search form, comment form, and comments
* to output valid HTML5.
*/
add_theme_support( 'html5', array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
) );

add_theme_support( 'post-formats', array( 'link', 'gallery' ) );

}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';


add_action('init', 'show_page_excerpt');
function show_page_excerpt() {
    add_post_type_support( 'page', 'excerpt' );
}
