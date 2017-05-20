<?php

$small_logo = get_template_directory_uri.'/img/small_logo.png';
$default_logo = get_template_directory_uri.'/img/spotlightbanner.jpg';

function theme_data_setup() {
    
    return $theme_options = array(
        
        // Logo & Copyright
        'upload_image_small_logo' => $small_logo,
        'upload_image_logo' => $default_logo,
        'height' => 60,
        'width' => 80,
        'cont_width' => 280,
        'cont_height' => 64,
        'footer_copyright' => '',
        'footer_designed_by' => '',
        'footer_designed_by_link' => '',
        
        
        // Contact bar
        'top_contact_bar' => true,
        'top_social' => true,
        'top_social_facebook' => '',
        'top_social_twitter' => '',
        'top_social_youtube' => '',
        'top_social_linkedin' => '',
        'top_social_instagram' => '',
        'top_social_pinterest' => '',
        'top_social_gplus' => '',
        
        // About me
        'about_profile_img' => '',
        'about_profile_background' => '',
        'about_name' => '',
        'about_position' => '',
        'about_social_github' => '',
        'about_social_linkedin' => '',
        'about_portfolio_title' => '',
        'about_portfolio_description' => '',
        'about_portfolio_extra' => '',
        
    );
}
?>