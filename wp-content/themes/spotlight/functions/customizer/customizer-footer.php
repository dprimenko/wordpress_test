<?php

function spotlight_footer_customizer( $wp_customize ) {
    $wp_customize->add_panel('footer_panel', array(
        'priority' => 450,
        'capability' => 'edit_theme_options',
        'title' => 'Footer panel down'
    ));
    
    $wp_customize->add_section('footer_copyright', array(
        'priority' => 400,
        'panel' => 'footer_panel',
        'title' => 'Copyright'
    ));
    
    $wp_customize->add_setting('spotlight_options[footer_copyright]', array(
        'default' => 'Copyright © 2017 - Spotlight Place. Designed by ',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option'
    ));
    
    $wp_customize->add_control('spotlight_options[footer_copyright]', array(
        'type' => 'text',
        'label' => 'Copyright Text',
        'section' => 'footer_copyright'
    ));
    
    $wp_customize->add_setting('spotlight_options[footer_designed_by]', array(
        'default' => 'dpinfo.es',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option'
    ));
    
    $wp_customize->add_control('spotlight_options[footer_designed_by]', array(
        'type' => 'text',
        'label' => 'Designed by',
        'section' => 'footer_copyright'
    ));
    
    $wp_customize->add_setting('spotlight_options[footer_designed_by_link]', array(
        'default' => 'http://dpinfo.es',
        'sanitize_callback' => 'esc_url_raw',
        'type' => 'option'
    ));
    
    $wp_customize->add_control('spotlight_options[footer_designed_by_link]', array(
        'type' => 'text',
        'label' => 'Designed by link',
        'section' => 'footer_copyright'
    ));
}
add_action( 'customize_register', 'spotlight_footer_customizer' );
?>