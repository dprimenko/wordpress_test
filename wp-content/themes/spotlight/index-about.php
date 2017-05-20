<?php $spotlight_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'spotlight_options', array() ), $spotlight_options ); 
?>
<div class="container">
    <div class="acontainer" style="background-image: url('<?php echo esc_url($current_options['about_profile_background']); ?>');">
        <div class="aprofile">
            <div class="ameta">
                <div class="aavatar" style="background-image: url('<?php echo esc_url($current_options['about_profile_img']); ?>');"></div>
                <h4>
                    <?php echo $current_options['about_name'];?>
                </h4>
                <div class="aposition"><?php echo $current_options['about_position'];?></div>
                <div class="about-social">
                    <a class="about-social-link" href="https://www.linkedin.com/in/dprimenko/"><span class="mdi mdi-linkedin-box"></span></a>
                    <a class="about-social-link" href="https://github.com/dprimenko"><span class="mdi mdi-github-box"></span></a>
                </div>
            </div>
            <div class="aoverlay"></div>
        </div>
        <div class="aportfolio">
            <h3><?php echo $current_options['about_portfolio_title'];?></h3>
            <span><?php echo $current_options['about_portfolio_description'];?></span><br/><br/><span><i><?php echo $current_options['about_portfolio_extra'];?></i></span>
        </div>
    </div>
</div>
	      
	
