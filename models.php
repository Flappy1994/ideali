<?php /* Template Name: Models */ ?>
<?php get_header();?>
<div class="container-fluid content mt-4 p-lg-0 bg-grey">
    <div class="row d-flex justify-content-center">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'model-category-menu',
            'container_class' => 'model-category-menu',
            'menu_class' => 'model-menu bg-grey mt-2'
        ));
        ?>
        <div class="row d-flex justify-content-around px-0 px-md-5">
            <?php
            $modelsRequest = array(
                'post_type'         => 'page',
                'posts_per_page'    => 100,
                'category_name' => 'Models'
            );
            $models = new WP_Query($modelsRequest);

            // The Loop
            if ($models->have_posts()) {
                while ($models->have_posts()) {
                    $models->the_post();
                    $brust = get_post_meta(get_the_ID(), 'Brust', true);
                    $taille = get_post_meta(get_the_ID(), 'Taille', true);
                     $huefte = get_post_meta(get_the_ID(), 'Hüfte', true);
                      ?>
                    <div class="col-12 col-lg d-flex justify-content-center justify-content-lg-start text-center mb-3 p-0 model">
                        <div class="card border-0 w-100 border-radius-0 card-models">
                            <div class="card-body w-100 container-models p-0">
                                <a href="<?php echo get_permalink(); ?>">
                                    <figure class="wp-block-image size-large">
                                        <!--<img class="model" src="<?php echo get_profile_picture() ?>" />-->
                                        <img class="model" src="<?php echo get_template_directory_uri(); ?>/img/model.jpg" />
                                    </figure>
                                </a>
                            </div>
                            <div class="p-lg-0 pt-3 container-fluid bg-black info-models">
                                <div class="row d-flex">
                                    <div class="col-md-4">
                                        <p class="m-0 font-black"><?php echo $brust; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="m-0 font-black"> <?php echo $taille; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="m-0 font-black"> <?php echo $huefte; ?></p>
                                    </div>
                                </div> 
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
</div>
<?php get_footer(); ?>