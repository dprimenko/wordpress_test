<?php

function spotlight_header_customizer( $wp_customize ) {
/* Header section */
    $wp_customize->add_panel('header_options', array(
        'priority' => 450,
        'capability' => 'edit_theme_options',
        'title' => 'Header settings',
    ));
    
    // Contact bar
    $wp_customize->add_section('header_contact_top', array(
    		'priority' => 400,
    		'panel' => 'header_options',
    		'title' => 'Contact Top Bar'
    ));
    
    $wp_customize->add_setting(
    	'spotlight_options[top_contact_bar]',
    	array(
    	'default' => true,
    	'sanitize_callback' => 'sanitize_text_field',
    	'type' => 'option'
    ));
    
    $wp_customize->add_control(
    	'spotlight_options[top_contact_bar]',
    	array(
    		'type' => 'checkbox',
    		'label' => 'Show top contact bar',
    		'section' => 'header_contact_top'
    ));
    
    $wp_customize->add_section('header_social_bar', array(
        'priority' => 420,
        'panel' => 'header_options',
        'title' => 'Social bar',
    ));
    
    $wp_customize->add_setting(
    	'spotlight_options[top_social]',
    	array(
    	'default' => true,
    	'sanitize_callback' => 'sanitize_text_field',
    	'type' => 'option'
    ));
    
    $wp_customize->add_control(
    	'spotlight_options[top_social]',
    	array(
    		'type' => 'checkbox',
    		'label' => 'Show social bar',
    		'section' => 'header_social_bar'
    ));

    // Facebook link
    $wp_customize->add_setting(
    'spotlight_options[top_social_facebook]', 
    array(
        'default' => 'https://es-es.facebook.com/',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_facebook]',
    array(
        'type' => 'text',
        'label' => 'Facebook',
        'section' => 'header_social_bar',
    )
	);
	
	// Twitter link
	$wp_customize->add_setting(
    'spotlight_options[top_social_twitter]', 
    array(
        'default' => 'https://twitter.com/',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_twitter]',
    array(
        'type' => 'text',
        'label' => 'Twitter',
        'section' => 'header_social_bar',
    )
	);
	
	// Youtube link
	$wp_customize->add_setting(
    'spotlight_options[top_social_youtube]', 
    array(
        'default' => 'https://www.youtube.com/?gl=ES&hl=es',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_youtube]',
    array(
        'type' => 'text',
        'label' => 'Youtube',
        'section' => 'header_social_bar',
    )
	);
	
	// Linkedin link
	$wp_customize->add_setting(
    'spotlight_options[top_social_linkedin]', 
    array(
        'default' => 'https://es.linkedin.com/',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_linkedin]',
    array(
        'type' => 'text',
        'label' => 'Linkedin',
        'section' => 'header_social_bar',
    )
	);
	
	// Instagram link
	$wp_customize->add_setting(
    'spotlight_options[top_social_instagram]', 
    array(
        'default' => 'https://www.instagram.com/?hl=es',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_instagram]',
    array(
        'type' => 'text',
        'label' => 'Instagram',
        'section' => 'header_social_bar',
    )
	);
	
	// Pinterest link
	$wp_customize->add_setting(
    'spotlight_options[top_social_pinterest]', 
    array(
        'default' => 'https://es.pinterest.com/',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_pinterest]',
    array(
        'type' => 'text',
        'label' => 'Pinterest',
        'section' => 'header_social_bar',
    )
	);
	
	// GooglePlus link
	$wp_customize->add_setting(
    'spotlight_options[top_social_gplus]', 
    array(
        'default' => 'https://plus.google.com/',
        
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[top_social_gplus]',
    array(
        'type' => 'text',
        'label' => 'Google +',
        'section' => 'header_social_bar',
    )
	);
    
    // Welcome logo settings
    $wp_customize->add_section('welcome_logo', array(
        'priority' => 410,
        'panel' => 'header_options',
        'title' => 'Header logo',
    ));
    
    $wp_customize->add_setting(
		'spotlight_options[upload_image_small_logo]'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
    
    $wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'spotlight_options[upload_image_small_logo]',
			   array(
				   'label'          => 'Upload a 150x150 for Welcome Logo Image',
				   'section'        => 'header_logo',
				   'default'        => $small_logo,
				   'priority'   => 50,
			   )
		   )
	);
    
    // Header logo settings
    $wp_customize->add_section('header_logo', array(
        'priority' => 410,
        'panel' => 'header_options',
        'title' => 'Header logo',
    ));
    
    $wp_customize->add_setting(
		'spotlight_options[upload_image_logo]'
		, array(
        'default'        => $default_logo,
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
    
    $wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'spotlight_options[upload_image_logo]',
			   array(
				   'label'          => 'Upload a 460x70 for Logo Image',
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Logo width
	
	$wp_customize->add_setting(
    'spotlight_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 80,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'spotlight_options[width]',
    array(
        'type' => 'text',
        'label' => 'Enter Logo Width in %',
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'spotlight_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 60,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'spotlight_options[height]',
    array(
        'type' => 'text',
        'label' => 'Enter Logo Height in %',
        'section' => 'header_logo',
		'priority'   => 410,
    )
	);
}
add_action( 'customize_register', 'spotlight_header_customizer' );
?>