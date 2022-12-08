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
    <div class="container-fluid header-desktop d-none d-md-block fixed-top p-md-4">
        <div class="navbar-nav">
            <div class="container-fluid container-navbar text-black">
                <div class="row d-flex align-items-center">
                    <div class="col-1">
                        <a class="navbar-brand" href="/">
                            <img class="w-75" id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-im.png" />
                        </a>
                    </div>
                    <div class="col-9 d-flex justify-content-center">
                                <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header-menu d-flex justify-content-end flex-wrap'
                            ));
                            ?>
                    </div>
                    <div class="col-2">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid header-mobile d-block d-md-none">
                        <div class="py-3 navbar-nav">
                            <div class="row pb-3 d-flex justify-content-between">
                            <div class="col-3 d-flex">
                                <a class="navbar-brand" href="/">
                                    <img class="w-75" id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-im.png" />
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-end align-self-center">
                                <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header-menu d-flex justify-content-end flex-wrap'
                            ));
                            ?>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-12">
                            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                            </div>
                            </div>
                        </div>
    </div>
</div>
<div class="wrapper-fixed">