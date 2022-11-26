<?php /* Template Name: Models */ ?>
<?php get_header();?>
<div class="container-fluid content pt-4 p-lg-0 bg-grey">
    <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-around px-0 px-md-5 w-60 mt-lg-5">
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
                     $groesse = get_post_meta(get_the_ID(), 'Größe', true);
                     $konfektion = get_post_meta(get_the_ID(), 'Konfektionsgröße', true);
                     $name = get_the_title();
                      ?>
                    <div class="col-12 col-md-3 d-flex justify-content-center justify-content-lg-start text-center mb-3 p-0 model">
                        <div class="card border-0 w-100 border-radius-0 card-models">
                            <div class="card-body w-100 container-models p-0">
                                <div class="container-model-picture">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <figure class="wp-block-image size-large">
                                            <!--<img class="model" src="<?php echo get_profile_picture() ?>" /> -->
                                            <img class="model" src="<?php echo get_template_directory_uri(); ?>/img/model.jpg" />
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
                                                <p class="m-0 text-white text-start">Konfektion: <?php echo $konfektion; ?></p>
                                            </div>
                                        <div class="col-md-6 details">
                                                <p class="m-0 text-white text-end">Größe: <?php echo  $groesse;?></p>
                                        </div>
                                    </div>
                                    <div class="row d-flex px-lg-2">
                                    <div class="col-md-4 details">
                                            <p class="m-0 text-white text-start">Brust: <?php echo $brust; ?></p>
                                    </div>
                                    <div class="col-md-4 details">
                                            <p class="m-0 text-white">Taille: <?php echo $taille; ?></p>
                                    </div>
                                    <div class="col-md-4 details">
                                            <p class="m-0 text-white text-end">Hüfte: <?php echo $huefte; ?></p>
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