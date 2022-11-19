<?php /* Template Name: Category */ ?>
<?php get_header(); ?>

<?php
/* gets current category if the page is a category-page */
$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
$cat_name = get_cat_name($cat_id);
?>
</div>
<div class="container container-category">
    <div class="row">
        <h2 class="text-center mt-4"><?php echo $cat_name; ?></h2>
    </div>
    <div class="row d-flex">
        <ul class="col-12 d-flex flex-wrap namefilter justify-content-center text-center">
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
    <div class="row d-flex justify-content-center px-lg-0">

        <?php
        $modelsRequest = array(
            'post_type'         => 'page',
            'posts_per_page'    => 10,
            'cat' => $cat_id
        );
        $models = new WP_Query($modelsRequest);

        // The Loop
        if ($models->have_posts()) {
            while ($models->have_posts()) {
                $models->the_post(); ?>
                <div class="col-12 col-lg-4 col-md-6 d-flex justify-content-center text-center mb-3 p-0 category-model" id="<?php echo get_the_title(); ?>">
                    <div class="card border-0 w-100">
                        <div class="card-body w-100 container-models p-0">
                            <a href="<?php echo get_permalink(); ?>">
                                <figure class="wp-block-image size-large">
                                    <img class="category-image" src="<?php echo get_profile_picture() ?>" />
                                </figure>
                            </a>
                        </div>
                        <div class="card-name p-lg-0 pt-3">
                            <h5 class="model-name"><?php echo the_title(); ?></h5>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        else{
            ?><div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <h2 class="text-center">Leider keine Models gefunden. <a href="https://idealimodels.de/models/">Hier</a> geht es zurück</h2>
                    </div>
                </div>
            </div> <?php
        } 
        ?>
    </div>
    <div class="row d-flex justify-content-center px-lg-0">
        <div class="col-12">
            <h2 class="text-center">
                Sie haben nicht das passende Model gefunden? Hier geht es zu den Kategorien
            </h2>
            <div>
            <?php
        wp_nav_menu(array(
            'theme_location' => 'model-category-menu',
            'container_class' => 'model-category-menu',
            'menu_class' => 'model-menu'
        ));
        ?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/namefilter.js"></script>
<?php get_template_part('bewerbung') ?>
<?php get_footer(); ?>


