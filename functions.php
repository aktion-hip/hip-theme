<?php
/**
 * HIP functions and definitions.
 *
 * @package hip
 */

/**
 * Enqueue styles.
 *
 * @return void
 */
if ( ! function_exists( 'hip_styles' ) ) :

function hip_styles() {
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get( 'Version' );
    $version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_register_style(
        'hip-style',
        get_template_directory_uri() . '/assets/css/hip.css',
        array(),
        $version_string
    );

    wp_register_script(
        'hip-style',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $version_string
    );

    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        array(),
        $version_string
    );

    wp_register_script(
        'breakpoints',
        get_template_directory_uri() . '/assets/js/breakpoints.min.js',
        array(),
        $version_string
    );

    wp_register_script(
        'browser',
        get_template_directory_uri() . '/assets/js/browser.min.js',
        array(),
        $version_string
    );

    wp_register_script(
        'jquery.scrolly',
        get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js',
        array(),
        $version_string
    );

    // Enqueue theme stylesheet.
    wp_enqueue_script('browser');
    wp_enqueue_script('breakpoints');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery.scrolly');
    wp_enqueue_script('hip-style');
    wp_enqueue_style('hip-style');

    // Design: HTML5 UP
    wp_enqueue_style(
        'main',
        get_parent_theme_file_uri( 'assets/css/main.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );
    wp_enqueue_style( 
        'noscript',
        get_parent_theme_file_uri( 'assets/css/noscript.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );
    wp_enqueue_style( 
        'fontawesome-all',
        get_parent_theme_file_uri( 'assets/css/fontawesome-all.min.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        'all'
    );

}

endif;

add_action( 'wp_enqueue_scripts', 'hip_styles' );

// Add setting using the Settings API
add_action( 'admin_init', 'wp_hip_settings_api_init' );

function wp_hip_settings_api_init() {
    add_settings_section( 'hip_settings_section', 'HIP Settings', 'hip_settings_section_callback', 'general' );
    add_settings_field( 'hip_settings_site_path', 'Site Path', 'hip_settings_field_callback', 'general', 'hip_settings_section' );
    register_setting( 'general', 'hip_settings_site_path' );

    function hip_settings_section_callback() {
        //echo '<p>Settings for the Hip theme.</p>';
    }
    
    function hip_settings_field_callback() {
        $value = get_option( 'hip_settings_site_path', '' );
        echo "<input type='text' name='hip_settings_site_path' id='hip_settings_site_path' type='text' value='{$value}' />";
        echo "<label for='hip_settings_site_path'>&nbsp;the site's base path (used in the HIP theme)</label>";
    }

}
