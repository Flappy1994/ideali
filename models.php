<?php /* Template Name: Models */ ?>
<?php get_header(); ?>
<div class="container-fluid content mt-4 p-lg-0">
    <div class="row d-flex justify-content-center">
        <h2 class="text-center">Unsere Models</h2>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'model-category-menu',
            'container_class' => 'model-category-menu',
            'menu_class' => 'model-menu'
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
                    $models->the_post(); ?>
                    <div class="col-12 col-lg d-flex justify-content-center justify-content-lg-start text-center mb-3 p-0 model">
                        <div class="card border-0 w-100">
                            <div class="card-body w-100 container-models p-0">
                                <a href="<?php echo get_permalink(); ?>">
                                    <figure class="wp-block-image size-large">
                                        <img class="model" src="<?php echo get_profile_picture() ?>" />
                                    </figure>
                                </a>
                            </div>
                            <div class="card-name p-lg-0 pt-3">
                                <h5 class="model-name text-uppercase mt-md-3"><?php echo the_title(); ?></h5>
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