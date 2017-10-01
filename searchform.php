<?php
/*
 Template Name: Adv Search
 */
?>
<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="javascript:;">Pages</a></li>
                <li class="active">Search Advance</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN CONTENT -->
                <div class="col-md-12">
                    <h1>Search Advance</h1>
                    <div class="content-page">
                        <div class="row margin-bottom-40">
                            <form method="get" action="<?php echo home_url( 'search' ); ?>">
                                <label for="">Service Name</label>
                                <input type="text" name="sname" class="form-control">
                                <br>

                                <label for="">Service Price</label>
                                <input type="text" name="sprice" class="form-control">
                                <br>

                                <?php
                                $categories = get_categories();
                                ?>


                                <label for="">Service category</label>
                                <select name="serv_cat" id="">
                                    <option value="">Select Service category</option>
                                    <?php
                                    foreach ( $categories as $category ) {
                                        ?>
                                        <option class="form-control" value="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>
                                <br>
                                <input type="submit" value="Search" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>