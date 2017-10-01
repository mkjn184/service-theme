<?php
/*
 Template Name: Services
 */
?>
<?php get_header(); ?>

    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="javascript:;">Portfolio</a></li>
                <li class="active">Portfolio 4 Column</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12 col-sm-12">
                    <h1>Portfolio 4 Column</h1>
                    <div class="content-page">
                        <div class="filter-v1">
                            <ul class="mix-filter">
                                <li data-filter="all" class="filter active">All</li>
                                <?php
                                $args = array(
                                    'post_type' => 'services',
                                    'category_name'=>'cat_filter',
                                    'posts_per_page' => 5
                                );
                                $catfilter = new WP_Query( $args ); ?>

                                <?php if ( $catfilter->have_posts() ) {
                                    while ( $catfilter->have_posts() ){
                                        $catfilter->the_post();
                                        ?>
                                        <li data-filter="<?php echo get_post_meta( get_the_ID(),'c-filltering',true ); ?>" class="filter"><?php the_title(); ?></li>
                                        <?php
                                        wp_reset_postdata();
                                    }
                                } else{
                                    ?><p><?php _e( 'Sorry, no our-clients_img matched your criteria.' ); ?></p><?php
                                }?>
                            </ul>
                            <div class="row mix-grid thumbnails">

                                <?php
                                $args = array(
                                    'post_type' => 'services',
                                    'category_name'=>'recent-work-img'
                                );
                                $catservice = new WP_Query( $args ); ?>

                                <?php if ( $catservice->have_posts() ) {
                                    while ( $catservice->have_posts() ){
                                        $catservice->the_post();
                                        ?>
                                        <div class="col-md-3 col-sm-4 mix <?php echo get_post_meta( get_the_ID(),'c-filltering',true ); ?> <?php echo get_post_meta( get_the_ID(),'cat_filter',true ); ?>" style="display: block; opacity: 1; ">
                                            <div class="mix-inner">
                                                <img alt="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>" class="img-responsive">
                                                <div class="mix-details">
                                                    <h4><?php the_title(); ?></h4>
                                                    <a href="<?php the_permalink(); ?>" class="mix-link"><i class="fa fa-link"></i></a>
                                                    <a data-rel="fancybox-button" title="Project Name" href="<?php echo get_the_post_thumbnail_url( get_the_ID(),'full' );?>" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        wp_reset_postdata();
                                    }
                                } else{
                                    ?><p><?php _e( 'Sorry, no our-clients_img matched your criteria.' ); ?></p><?php
                                }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- BEGIN SIDEBAR & CONTENT -->
        </div>

<?php get_footer(); ?>