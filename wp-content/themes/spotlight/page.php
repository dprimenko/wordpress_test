<?php

if ( is_front_page() || is_home()) :
    get_header( 'home' );
else:
    get_header();
    get_template_part('index', 'nav');
endif;
get_template_part('index', 'main');

if(is_page(array('about-creator'))) {
    get_template_part('index', 'about');
}
get_footer();
?>