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
    <div class="container-fluid header-mobile d-flex d-lg-none m-0 text-uppercase">
        <div class="mobile d-lg-none col-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="idealimodels.de">
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-im.png" />
                </a>
                <button class="navbar-toggler" style="border:none" type="button" data-bs-toggle="collapse" data-bs-target="#mobilenav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mobilenav">
                    <div class="navbar-nav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'header-menu d-flex justify-content-center flex-wrap text-gray',
                        ));
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid header-desktop d-none d-lg-block">
        <div class="row" id="header-row">
            <div class="col-md-12 p-3">
                <div class="row">
                    <div class="col-1 ps-md-5 text-start d-flex align-items-center">
                        <a class="navbar-brand" href="idealimodels.de">
                            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-im.png" />
                        </a>
                    </div>
                    <div class="col-11 pe-md-5 pb-md-3">
                        <div class="navbar-nav">
                            <div class="row">
                                <div class="col-10">
                                <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'header-menu d-flex justify-content-end flex-wrap'
                            ));
                            ?>
                            </div>
                            <div class="col-2 pt-md-3">
                            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                            </div>
                                </div>
                            </div>
                       
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>