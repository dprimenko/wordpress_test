<?php

function spotlight_about_customizer($wp_customize) {
    /* About Section */
    $wp_customize->add_panel('about_panel', array(
        'capability' => 'edit_theme_options',
        'title' => 'About settings',
    ));
    
    $wp_customize->add_section('about_options', array(
    		'priority' => 400,
    		'panel' => 'about_panel',
    		'title' => 'Form'
    ));
    
    $wp_customize->add_setting(
    'spotlight_options[about_name]', 
    array(
        'default' => 'David Primenko',
		'type' => 'option'
	));

	$wp_customize->add_control(
    'spotlight_options[about_name]',
    array(
        'type' => 'text',
        'label' => 'Name',
        'section' => 'about_options',
    ));
    
    $wp_customize->add_setting(
    'spotlight_options[about_position]', 
    array(
        'default' => 'Android & BackEnd Developer',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[about_position]',
    array(
        'type' => 'text',
        'label' => 'Job Position',
        'section' => 'about_options',
    ));
    
    $wp_customize->add_setting(
    'spotlight_options[about_portfolio_title]', 
    array(
        'default' => 'Description',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[about_portfolio_title]',
    array(
        'type' => 'text',
        'label' => 'Title portfolio',
        'section' => 'about_options',
    ));
    
    $wp_customize->add_setting(
    'spotlight_options[about_portfolio_description]', 
    array(
        'default' => 'Cross-Plataform Developer, passionate about the Back End and with intentions to become a Freelance.',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[about_portfolio_description]',
    array(
        'type' => 'text',
        'label' => 'Description portfolio',
        'section' => 'about_options',
    ));
    
    $wp_customize->add_setting(
    'spotlight_options[about_portfolio_extra]', 
    array(
        'default' => 'I love traveling around the world!',
		'type' => 'option'
	
	));

	$wp_customize->add_control(
    'spotlight_options[about_portfolio_extra]',
    array(
        'type' => 'text',
        'label' => 'Description extra portfolio',
        'section' => 'about_options',
    ));
    
    // Profile image
    $wp_customize->add_section('about_images', array(
        'priority' => 410,
        'panel' => 'about_panel',
        'title' => 'About images',
    ));
    
    $wp_customize->add_setting(
		'spotlight_options[about_profile_img]'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
    
    $wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'spotlight_options[about_profile_img]',
			   array(
				   'label'          => 'Upload an Profile Image',
				   'section'        => 'about_images',
				   'priority'   => 50,
			   )
		   )
	);
	
    $wp_customize->add_setting(
		'spotlight_options[about_profile_background]'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
    
    $wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'spotlight_options[about_profile_background]',
			   array(
				   'label'          => 'Upload an Background Image',
				   'section'        => 'about_images',
				   'priority'   => 50,
			   )
		   )
	);
}

add_action( 'customize_register', 'spotlight_about_customizer' );

?>