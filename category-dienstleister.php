<?php /* Template Name: Dienstleister */ ?>
<?php get_header(); ?>
<div class="container-fluid content pt-4 p-lg-0 bg-black">
    <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-center px-0 px-md-5 px-lg-0 w-60 mt-lg-5">
            <?php
            $dienstleisterRequest = array(
                'post_type'         => 'page',
                'posts_per_page'    => 100,
                'category_name' => 'Dienstleister'
            );
            $dienstleister = new WP_Query($dienstleisterRequest);

            // The Loop
            if ($dienstleister->have_posts()) {
                while ($dienstleister->have_posts()) {
                    $dienstleister->the_post();
                    $description = get_post_meta(get_the_ID(), 'Beschreibung', true);
                     $name = get_the_title();
                      ?>
                    <div class="col-12 col-md-3 col-lg-6 dienstleister-container me-md-5 mb-5 mt-5">
                        <div class="row">
                            <div class="col-12 p-0">
                            <a class="picture-link" href="<?php echo get_permalink(); ?>">
                                           <img class="dienstleister" src="<?php echo get_profile_picture() ?>" /> 
                                    </a>
                            </div>
                            <div class="col-12 p-5 bg-grey dienstleister-info">
                                <p class="m-0 text-white"><?php echo $description; ?></p>
                            </div>
                        </div>            
                        </div>
            <?php
                }
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="row d-flex justify-content-center px-lg-0 pt-5">
        <div class="col-12 mb-lg-5">
            <h2 class="text-center text-white">
             Sie haben nicht den passenden Dienstleister gefunden? Hier geht es zu unseren Bereichen
            </h2>
        </div>
        <div>
            <?php
        wp_nav_menu(array(
            'theme_location' => 'dienstleister-category-menu',
            'container_class' => 'dienstleister-category-menu py-lg-5 text-white',
            'menu_class' => 'dienstleister-menu'
        ));
        ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>