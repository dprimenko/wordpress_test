<?php $spotlight_options=theme_data_setup();
	      $current_options = wp_parse_args(  get_option( 'spotlight_options', array() ), $spotlight_options ); ?>
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
                                        <li><a href="<?php echo $current_options['top_social_facebook'] ?>"><span class="icon-social mdi md-facebook"></span></a></li>
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
                    <?php }?>
                </div>
                
            
                <nav style="width: 100%; background-color: #fafafa;">
                    <div class="nav-fixed-function">
                      <div class="nav-wrapper">
                        <div class="container">
                            <a href="https://wordpress-test-vipsr.c9users.io/"><div class="spotlight-logo brand-logo" style="background-image: url(<?php echo esc_url($current_options['upload_image_logo']); ?>); background-size: <?php echo $current_options['width'].'% '; echo $current_options['height'].'%;'; ?>">
                            </div></a>
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