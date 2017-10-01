<?php
/*
 Template Name: Service
 */
?>
<?php //include("test2.php"); ?>
<?php get_header(); ?>
    <div class="main">
<?php
/* Start the Loop */
have_posts();the_post(); ?>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="javascript:;">service</a></li>
            <li class="active"><?php the_title(); ?></li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-8 col-sm-12">
                <h1><?php the_title(); ?></h1>
                <div class="recent-work-item">
                    <em>
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
                             alt="<?php echo get_post_meta( get_the_ID(), 'alt_ind', true ); ?>"
                             class="img-responsive">
                    </em>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 blog-item">
                <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
                <div style="margin-top: 40px;" class="post-comment padding-top-40">
                    <h3>Book Now</h3>
                    <form role="form">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Email <span class="color-red">*</span></label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="8"></textarea>
                        </div>
                        <p>
                            <button class="btn btn-primary" type="submit">Post a Comment</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        </br>
        <div class="row margin-bottom-40">
            <h3>Details :</h3>
            <p><?php the_content(); ?></p>
        </div>
        </br>
        </br>

    </div>
    <!-- BEGIN LEFT SIDEBAR -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="../../gtmetrix">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">URL</label>
                            <input type="text" class="form-control" id="recipient-name" name="url" required>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Test">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>