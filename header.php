<?php /* Template Name: Header */ ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <!-- Ideali CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo-im.png">

    <title>Ideali Models</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container-fluid header-desktop">
        <div class="row" id="header-row">
            <div class="col-md-12 p-3">
                <div class="row">
                    <div class="col-1 ps-md-5 text-start d-flex align-items-center">
                        <a class="navbar-brand" href="idealimodels.de">
                            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-im.png" />
                        </a>
                    </div>
                    <div class="col-11 pe-md-5 pt-md-2 text-center">
                        <div class="navbar-nav">
                            <div class="row">
                                <div class="col-lg-10 col-12 d-flex justify-content-center">
                                <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header-menu d-flex justify-content-end flex-wrap'
                            ));
                            ?>
                                </div>
                                <div class="col-lg-2 col-12 pt-md-2">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>