<?php
/*
 Template Name: Gallery
 */
?>
<?php get_header(); ?>
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Gallery</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12">
                <h1>Gallery</h1>
                <div class="content-page">
                    <div class="row margin-bottom-40">

                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'category_name'=>'gellary',
                            'posts_per_page' => 12
                        );
                        $gellary = new WP_Query( $args ); ?>

                        <?php if ( $gellary->have_posts() ) {
                            while ( $gellary->have_posts() ){
                                $gellary->the_post();
                                ?>

                                <div class="col-md-3 col-sm-4 gallery-item">
                                    <a data-rel="fancybox-button" title="Project Name" href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="fancybox-button">
                                        <img alt="" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="img-responsive">
                                        <div class="zoomix"><i class="fa fa-search"></i></div>
                                    </a>
                                </div>
                                <?php
                                wp_reset_postdata();
                            }
                        } else{
                            ?><p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php
                        }?>
                    </div>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
<?php get_footer(); ?>