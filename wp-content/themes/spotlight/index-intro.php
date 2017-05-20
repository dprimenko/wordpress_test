<?php $spotlight_options=theme_data_setup();
	      $current_options = wp_parse_args(  get_option( 'spotlight_options', array() ), $spotlight_options ); ?>
<div class="intro valign-wrapper" style="background-image: url('https://www.walldevil.com/wallpapers/w02/796238-events-lights.jpg'); <?php if ( is_admin_bar_showing() ) { echo 'margin-top: 32px;';} ?>">
            <div class="gradient"></div>
            <div class="welcome valign">
                <img class="welcome-logo" src="<?php echo esc_url($current_options['upload_image_small_logo']); ?>"></img>
                <span class="welcome-title">Spotlight Place</span>
                <div class="download row">
                    <div class="ios col s6">
                        <span class="download-text">iPhone and iPad versions</span>
                        <a href=""><img src="<?php echo get_template_directory_uri().'/img/appstore.svg' ?>"></img></a>
                    </div>
                    <div class="android col s6">
                        <span class="download-text">Phone and Tablet versions</span>
                        <a href=""><img src="<?php echo get_template_directory_uri().'/img/gplay.png' ?>"></img></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="scroll-for-more">
                            <i class="icon">
                            </i>
                            <span>Scroll for more</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <header id="main-header">
                <div id="top-wrapper">
                <?php
                if ($current_options['top_contact_bar']) {?>
                <div id="top-contact-bar">
                    <div class="container">
                        <div class="valign-wrapper no-margin-bottom row">
                            <div class="col l8 hide-on-med-and-down">
                            </div>
                            
                            <div class="col s12 m12 l6">
                                <?php if($current_options['top_social']) {?>
                                    <ul class="top-social">
                                        <?php if($current_options['top_social_twitter'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_twitter'] ?>"><span class="icon-social mdi mdi-twitter"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_facebook'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_facebook'] ?>"><span class="icon-social mdi mdi-facebook"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_youtube'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_youtube'] ?>"><span class="icon-social mdi mdi-youtube-play"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_linkedin'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_linkedin'] ?>"><span class="icon-social mdi mdi-linkedin"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_pinterest'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_pinterest'] ?>"><span class="icon-social mdi mdi-pinterest"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_instagram'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_instagram'] ?>"><span class="icon-social mdi mdi-instagram"></span></a></li>
                                        <?php }?>
                                        <?php if($current_options['top_social_gplus'] != ''){ ?>
                                        <li><a href="<?php echo $current_options['top_social_gplus'] ?>"><span class="icon-social mdi mdi-google-plus"></span></a></li>
                                        <?php }?>
                                    </ul>
                                <?php }?>
                            </div> 
                        </div>
                    </div>
                </div>
                <?php }?>
            
                <nav style="width: 100%; background-color: #fafafa;">
                    <div class="nav-fixed-function">
                      <div class="nav-wrapper">
                        <div class="container">
                            <div class="spotlight-logo brand-logo" style="background-image: url(<?php echo esc_url($current_options['upload_image_logo']); ?>); background-size: <?php echo $current_options['width'].'% '; echo $current_options['height'].'%;'; ?>">
                          </div>
                          <?php 
                            $args = array(
                                'menu' => 'main_menu',
                                'container' => 'ul',
                                'menu_class' => 'right hide-on-med-and-down',
                                'menu_id' => 'nav-mobile',
                                
                            );
                            
                            wp_nav_menu($args);
                            ?>
                        </div>
                      </div>
                    </div>
                </nav>
            </div>
            </header>