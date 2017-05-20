                </div>
            </main>
            <footer id="spotlight-footer" ng-controller="FooterController as footerCtrl" class="sticky-footer page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <?php $spotlight_options=theme_data_setup();
	                      $current_options = wp_parse_args(  get_option( 'spotlight_options', array() ), $spotlight_options ); 
	                    ?>
	                    <div class="no-margin-bottom row">
	                        <div class="col s6">
    	                        <span><?php echo $current_options['footer_copyright']; ?></span>
    	                        <a href="<?php echo esc_url_raw($current_options['footer_designed_by_link']); ?>" id="copyright"><?php echo $current_options['footer_designed_by']; ?></a>
	                        </div>
	                    <div class="col s6">
	           
	                    </div>
	                    </div>
                    </div>
              </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <?php if(is_front_page()){ ?>
        <script type="text/javascript">
            var distance = $('.wrapper').offset().top;

            $(window).scroll(function() {
                distance = $('.wrapper').offset().top;
                
                if($(window).scrollTop() >= distance) {
                    $('.intro').addClass("transparent-wrapper");
                    $('#top-wrapper').addClass("sticky-wrapper");
                    <?php if(is_admin_bar_showing()) { ?>
                        $('#top-wrapper').css("top", "32px");
                        $('#content-main').css("margin-top", ($('#top-wrapper').height() + 32));
                    <?php } else {?>
                        $('#content-main').css("margin-top", $('#top-wrapper').height());
                    <?php }?>
                } else if($(window).scrollTop() <= distance) {
                    $('.intro').removeClass("transparent-wrapper");
                    $('#top-wrapper').removeClass("sticky-wrapper");
                    <?php if(is_admin_bar_showing()) {?>$('#top-wrapper').css("top", "0");<?php }?>
                    $('#content-main').css("margin-top", 32);
                    

                }
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.wrapper').css("margin-top", $(window).height());
                $('.gradient-video').css("height", $('.video-presentation').outerHeight( true ));
            });
        </script>
        <script type="text/javascript">
            if ($('#content-main').outerHeight(true) >= 300) {
                $('#spotlight-footer').removeClass("sticky-footer");
            }
        </script>
        <?php }?>
        <?php wp_footer() ?>
    </body>
</html>
