<?php
/**Theme Name	: Spotlight Theme
 * Theme Core Functions and Codes
*/

    define('SPOTLIGHT_TEMPLATE_DIR_URI', get_template_directory_uri());
    define('SPOTLIGHT_TEMPLATE_DIR',get_template_directory());
    define('SPOTLIGHT_THEME_FUNCTIONS_PATH', SPOTLIGHT_TEMPLATE_DIR.'/functions');
    
    // Customizer
    require(SPOTLIGHT_THEME_FUNCTIONS_PATH . '/customizer/customizer-heading.php');
    require(SPOTLIGHT_THEME_FUNCTIONS_PATH . '/customizer/customizer-home.php');
    require(SPOTLIGHT_THEME_FUNCTIONS_PATH . '/customizer/customizer-about.php');
    require(SPOTLIGHT_THEME_FUNCTIONS_PATH . '/customizer/customizer-footer.php');
    
    require(SPOTLIGHT_TEMPLATE_DIR . '/includes/widgets/foo_widget.php');
    require(SPOTLIGHT_TEMPLATE_DIR . '/includes/widgets/social_widget.php');
?>

<?php

    function spotlight_setup() {
        require_once('theme_setup_data.php');
    }
    add_action( 'after_setup_theme', 'spotlight_setup' ); 	
    function load_scripts() {
        wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/jquery-3.1.1.min.js');
        wp_enqueue_script('materialize_js', get_template_directory_uri().'/js/materialize.min.js');
        wp_enqueue_script('angular_js', get_template_directory_uri().'/js/angular.min.js');
        wp_enqueue_script('jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
        wp_enqueue_script('grecaptcha', 'https://www.google.com/recaptcha/api.js');
        wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js');
        wp_enqueue_style( 'spotlight_style', get_stylesheet_uri() );
        wp_enqueue_style('materialicons', 'https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css');
        wp_enqueue_style('materialize_style', get_template_directory_uri().'/css/materialize.min.css');
        wp_enqueue_style('source_sans_pro_font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600');
        
    }
    add_action('wp_enqueue_scripts', 'load_scripts');
    
    function spotlight_head_enqueue_styles() {
        $spotlight_options=theme_data_setup(); 
        echo '<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />' . "\n";
    }
    add_action( 'wp_head', 'spotlight_head_enqueue_styles' );
    
    function register_foo_widget() {
        register_widget( 'Foo_Widget' );
    }
    add_action( 'widgets_init', 'register_foo_widget' );
    
    register_nav_menus(array(
        'main_menu',
        'footer_menu'
    ));
?>

