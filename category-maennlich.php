<?php /* Template Name: Category */ ?>
<?php get_header(); ?>

<?php
/* gets current category if the page is a category-page */
$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
$cat_name = get_cat_name($cat_id);
?>
</div>
<div class="container-fluid container-category bg-grey p-lg-0">
    <div class="row">
        <h2 class="text-center text-white mt-4"><?php echo $cat_name; ?></h2>
    </div>
    <div class="row d-flex justify-content-center">
        <ul class="col-12 col-md-6 d-flex flex-wrap namefilter justify-content-center text-center text-white">
            <li class="letter" id="A" onclick="filter('A')">A</li>
            <li class="letter" id="B" onclick="filter('B')">B</li>
            <li class="letter" id="C" onclick="filter('C')">C</li>
            <li class="letter" id="D" onclick="filter('D')">D</li>
            <li class="letter" id="E" onclick="filter('E')">E</li>
            <li class="letter" id="F" onclick="filter('F')">F</li>
            <li class="letter" id="G" onclick="filter('G')">G</li>
            <li class="letter" id="H" onclick="filter('H')">H</li>
            <li class="letter" id="I" onclick="filter('I')">I</li>
            <li class="letter" id="J" onclick="filter('J')">J</li>
            <li class="letter" id="K" onclick="filter('K')">K</li>
            <li class="letter" id="L" onclick="filter('L')">L</li>
            <li class="letter" id="M" onclick="filter('M')">M</li>
            <li class="letter" id="N" onclick="filter('N')">N</li>
            <li class="letter" id="O" onclick="filter('O')">O</li>
            <li class="letter" id="P" onclick="filter('P')">P</li>
            <li class="letter" id="Q" onclick="filter('Q')">Q</li>
            <li class="letter" id="R" onclick="filter('R')">R</li>
            <li class="letter" id="S" onclick="filter('S')">S</li>
            <li class="letter" id="T" onclick="filter('T')">T</li>
            <li class="letter" id="U" onclick="filter('U')">U</li>
            <li class="letter" id="V" onclick="filter('V')">V</li>
            <li class="letter" id="W" onclick="filter('W')">W</li>
            <li class="letter" id="X" onclick="filter('X')">X</li>
            <li class="letter" id="Y" onclick="filter('Y')">Y</li>
            <li class="letter" id="Z" onclick="filter('Z')">Z</li>
        </ul>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-center px-0 px-md-5 w-60">
            <?php
            $modelsRequest = array(
                'post_type'         => 'page',
                'posts_per_page'    => 100,
                'category_name' => $cat_name
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
                    <div id="<?php echo $name?>" class="col-12 col-md-3 d-flex justify-content-center justify-content-lg-start text-center mb-3 p-0 category-model mx-lg-4 model">
                    <div class="card border-0 w-100 border-radius-0 card-models">
                            <div class="card-body w-100 container-models p-0">
                                <div class="container-model-picture">
                                    <a class="picture-link" href="<?php echo get_permalink(); ?>">
                                        <figure class="wp-block-image size-large m-0">
                                            <img class="model" src="<?php echo get_profile_picture() ?>" />
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
        </div>mi
    <div class="row d-flex justify-content-center px-lg-0 pt-lg-5">
        <div class="col-12 mb-lg-5">
            <h2 class="text-center text-white">
             Sie haben nicht das passende Model gefunden? Hier geht es zu unseren Bereichen
            </h2>
        </div>
        <div>
            <?php
        wp_nav_menu(array(
            'theme_location' => 'model-category-menu',
            'container_class' => 'model-category-menu py-lg-5',
            'menu_class' => 'model-menu'
        ));
        ?>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/namefilter.js"></script>
<?php get_footer(); ?>