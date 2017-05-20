<main id="content-main">
    <div class="container">
        <div class="post">
                <?php the_post(); ?>
                <h3>
                    <?php 
                        if (is_front_page()) {
                            echo "About app";
                        } else {
                            the_title();
                        }
                    ?>
                </h3>
                <?php
    		        the_content();
    		    ?>
            </div>
    </div>
    <?php if (is_front_page()) { ?>
            <section class="video-presentation">
                <div class="gradient-video">
                </div>
                <a href="">
                    <div class="video-ctrl">
                        <span class="mdi mdi-play-circle-outline"></span>
                        <span class="text">Video presentation</span>
                    </div>
                </a>
            </section>
             <section ng-app="main">
            	<div class="container">
                    <div ng-controller="Services as servCtrl" class="row eq-height">
                        <div ng-repeat="serv in servCtrl.srvs" class="col s6">
                            <div class="cont-service">
                                <a class="service" href="#">
                                    <div class="i-service"><span class="{{serv.image.full}}"></span></div>
                                    <div class="desc-service">
                                        <h2 class="title-service">{{serv.name}}</h2>
                                        <p>{{serv.description}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>                     
                    </div>
                </div>
            </section>
            <?php } ?>