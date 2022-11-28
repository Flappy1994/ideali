<?php /* Template Name: Dienstleister */ ?>
<?php get_header(); ?>
<div class="container-fluid content pt-4 p-lg-0 bg-grey">
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
                    <div class="col-12 col-md-5 col-lg-5 d-flex justify-content-center justify-content-lg-start text-center mb-3 p-0 dienstleister mx-lg-4">
                        <div class="card border-0 border-radius-0 card-models">
                            <div class="card-body w-100 container-models p-0">
                                <div class="container-model-picture">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <figure class="wp-block-image size-large m-0">
                                            <img class="dienstleister" src="<?php echo get_profile_picture() ?>" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="p-lg-0 pt-3 container-fluid bg-grey info-models">
                                    <div class="row d-flex">
                                        <div class="col-md-12 details">
                                            <p class="m-0 text-white fw-bold"> <?php echo $name; ?></p>
                                        </div>
                                    </div>
                                    <div class="row d-flex px-lg-2">
                                        <div class="col-md-6 details">
                                                <p class="m-0 text-white text-start"><?php echo $description; ?></p>
                                            </div>
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