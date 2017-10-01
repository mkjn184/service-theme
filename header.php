<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Service Company</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Service description" name="description">
    <meta content="Service keywords" name="keywords">
    <meta content="Service team" name="author">

    <meta property="og:site_name" content="Service">
    <meta property="og:title" content="Service">
    <meta property="og:description" content="Service">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">
    <meta name="hrefimg" content="<?php echo get_template_directory_uri(); ?>">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon1.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Theme styles START -->
	<?php wp_head(); ?>
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">

<div class="hidden"></div>

<!-- BEGIN HEADER -->
<div class="header">
    <div class="container">
        <a class="site-logo" href="index.php"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/corporate/img/logos/logo.png"
                    alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
            <ul>
                <li class="menu-search">
                    <span class="sep"></span>
                    <i class="fa fa-search search-btn"></i>
                    <div class="search-box">
                        <form action="<?php echo home_url( 'search' ); ?>">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="form-control">
                                <span class="input-group-btn">
                                  <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-2"></div>
			<?php wp_nav_menu( array(
				'theme_location'  => 'top_nav',
				'container_class' => 'header-navigation font-transform-inherit'
			) ); ?>

        <!-- END NAVIGATION -->
    </div>
</div>