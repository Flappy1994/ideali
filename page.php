<?php /* Template Name: Page Standard */ ?>
<?php get_header(); ?>
<div class="container container-page">
    <div classs="row">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid container-xl px-0">
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-12 col-lg-5">
                        <h2 class="text-start mb-md-5"><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="content text-start">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- .site-main -->
    </div>
</div>
<?php get_footer(); ?>