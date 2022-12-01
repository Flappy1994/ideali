<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<div class="container-fluid container-xl-fluid content h-75">
    <div class="row">
        <div class="col px-lg-0 text-center">
            <h2 class="mb-5">Gerne vereinbaren wir Termine vor Ort</h2>
            <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.6713860348545!2d8.222902951536627!3d50.07371557932426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdbe0c49ccbdff%3A0xdb7b686b0dfe1435!2sEibinger%20Str.%203%2C%2065197%20Wiesbaden!5e0!3m2!1sde!2sde!4v1653583610780!5m2!1sde!2sde" id="ideali-address-location" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center pb-md-5">
        <h2 class="mb-5">Am Telefon oder per Mail</h2>
        <div class="col-4 col-md-2 px-lg-0 text-center">
            <a class="border-hover-none" href="mailto:kontakt@idealimodels.de">
            <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/img/envelope.svg">
            </a>
        </div>
        <div class="col-4 col-md-2 px-lg-0 text-center">
        <a class="border-hover-none" href="tel:01736679653">
            <img class="w-25" src="<?php echo get_template_directory_uri(); ?>/img/telephone.svg">
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>