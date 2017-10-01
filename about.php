<?php
/*
 Template Name: About
 */
?>
<?php get_header(); ?>

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">About Us</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <div class="row margin-bottom-30">
                        <!-- BEGIN INFO BLOCK -->
                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'category_name'=>'about',
                            'posts_per_page'=>'1'

                        );
                        $about1 = new WP_Query( $args ); ?>

                        <?php if ( $about1->have_posts() ) {
                            while ( $about1->have_posts() ){
                                $about1->the_post();
                                ?>

                                <div class="col-md-7">
                                    <h2 class="no-top-space"><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <!-- BEGIN LISTS -->
                                    <div class="row front-lists-v1">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled margin-bottom-20">
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Officia deserunt molliti</li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Consectetur adipiscing </li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> Deserunt fpicia</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> wordpress</li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> seo </li>
                                                <li><i class="<?php echo get_post_meta( get_the_ID(),'icon-check',true ); ?>"></i> marketing</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END LISTS -->
                                </div>
                                <?php
                                wp_reset_postdata();
                            }
                        } else{
                            ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                        }?>
                        <!-- END INFO BLOCK -->

                        <!-- BEGIN CAROUSEL -->
                        <div class="col-md-5 front-carousel">
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
	                                <?php
	                                $args = array(
		                                'post_type' => 'services',
		                                'category_name'=>'portfolio',
		                                'posts_per_page' => 3
	                                );
	                                $portfolio = new WP_Query( $args ); ?>

	                                <?php if ( $portfolio->have_posts() ) {
		                                while ( $portfolio->have_posts() ){
			                                $portfolio->the_post();
			                                ?>

                                            <div class="item <?= ($portfolio->current_post == 0) ? 'active' : '' ?>">
                                                <img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>">
                                                <div class="carousel-caption">
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
			                                <?php
			                                wp_reset_postdata();
		                                }
	                                } else{
		                                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
	                                }?>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END CAROUSEL -->
                    </div>
                    <div class="row front-team">
                        <ul class="list-unstyled">
                            <?php
                            $args = array(
                                'post_type' => 'services',
                                'category_name'=>'team_about'

                            );
                            $teamabout = new WP_Query( $args ); ?>

                            <?php if ( $teamabout->have_posts() ) {
                                while ( $teamabout->have_posts() ){
                                    $teamabout->the_post();
                                    ?>
                                    <li class="col-md-3">
                                        <div class="thumbnail">
                                            <img alt="" style="width: 100%;height: 250px" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>">
                                            <h3>
                                                <strong><?php echo get_post_meta( get_the_ID(),'client-name',true ); ?></strong>
                                                <small><?php echo get_post_meta( get_the_ID(),'client-job',true ); ?> </small>
                                            </h3>
                                            <p> <?php the_content();?> </p>
                                            <ul class="social-icons social-icons-color">
                                                <li><a class="facebook" data-original-title="Facebook" href="Facebook.com"></a></li>
                                                <li><a class="twitter" data-original-title="Twitter" href="Twitter.com"></a></li>
                                                <li><a class="googleplus" data-original-title="Goole Plus" href="GoolePlus.com"></a></li>
                                                <li><a class="linkedin" data-original-title="Linkedin" href="Linkedin.com"></a></li>
                                            </ul>
                                        </div>
                                    </li>


                                    <?php
                                    wp_reset_postdata();
                                }
                            } else{
                                ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                            }?>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
<?php get_footer(); ?>