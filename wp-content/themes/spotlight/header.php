<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        <?php 
            wp_title('|', true, 'right');
            bloginfo('name');
        ?>
        </title>
        <?php $spotlight_options=theme_data_setup();
	      $current_options = wp_parse_args(  get_option( 'spotlight_options', array() ), $spotlight_options ); ?>
        <?php wp_head() ?>
        <?php wp_head() ?>
    </head>
    <body>
        
            
            
        