<?php
// Gutenberg custom stylesheet
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' );

// Disable woocommerce stylesheets
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
/**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'wp_starter'),
    ]);
    /**
     * Display a nav menu with navwalker
     */
    function display_menu($slug, $args = [])
    {
        $args = array_merge(
            array(
                'theme_location' => $slug, // eg 'primary_navigation'
                'menu_class' => 'nav',
                'walker' => new \App\wp_bootstrap4_navwalker(),
            ), $args);
        return wp_nav_menu($args);
    }

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

/**
 * Add custom logo support
 */
    add_theme_support('custom-logo');

    /**
     * Add alignwide/alignfull support
     */
    add_theme_support('align-wide');

    /**
     * Add woocoommerce support
     */
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

/**
 * Add image size
 */
//   add_image_size('gallery_thumb', 300, 300, true);
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="afterline text-center">',
        'after_title' => '</h3>',
    ];
    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

});

add_post_type_support('page', 'excerpt');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);