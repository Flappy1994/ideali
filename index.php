<?php /* Template Name: Index */ ?>
<?php get_header(); ?>
<div class="container-fluid content p-lg-0 mb-lg-5 wrapper">
    <div class="row d-flex justify-content-center px-0">
        <div class="col-12 col-md-12 px-0">
            <div class="container-fluid p-0">
                <div id="carousel-banner" class="carousel carousel-banner slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel-banner" data-bs-slide-to="0" class="round-buttons active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel-banner" data-bs-slide-to="1" class="round-buttons  "aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel-banner" data-bs-slide-to="2" class="round-buttons  "aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner text-center">
                    <div id="banner-faces" class="carousel-item bg-black text-white active p-5">
                        <div class="col-lg-2 col-12" id="faces-absolute">
                            <p class="mt-5 font-20">Du möchtest das Gesicht der neuen Generation sein?</p> 
                            <a href="/bewerbung" class="font-20 text-white">Hier bewerben</a>
                        </div>
                    
                    </div>
                    <div id="banner-models" class="carousel-item bg-black text-white p-5">
                        <div class="col-lg-2 col-12" id="models-absolute">
                            <p class="mt-5 font-20">Buchen Sie unsere Models</p>
                            <a href="/models" class="font-20 text-black">Buchen</a>
                        </div>  
                    </div>
                    <div id="banner-makeup" class="carousel-item bg-black text-white p-5">
                        <div class="col-lg-2 col-12" id="makeup-absolute">
                            <p class="mt-5 font-20">Buchen Sie unsere Makeup - Artists</p>
                            <a href="/category/makeup-artist" class="font-20 text-white">Buchen</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-banner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-banner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid welcome text-center mb-5">
    <div class="row d-flex justify-content-center pb-4">
        <div class="col-md-6 col-10">
            <h2>Willkommen bei Ideali Models</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center pb-5">
        <div class="col-md-6 col-10">
            <p>der Model- und Werbeagentur, die nicht nur die Models der neuen Generation präsentiert, sondern auch alle Komponenten einer Produktion über Werbespots, Fotoshootings, als auch Visagisten und Fotografen zu Verfügung stellt.</p>
        </div>
    </div>
</div>
<div class="container-fluid services bg-grey pb-5">
    <div class="container">
    <div class="row d-flex justify-content-center pb-4">
        <div class="col-md-6 col-10 mt-5 text-center">
            <h2 class="text-white">Unsere Dienstleistungen</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center pb-5">
            <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img class="pb-3 w-100" src="<?php echo get_template_directory_uri(); ?>/img/services/models.png" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img class="pb-3 w-100" src="<?php echo get_template_directory_uri(); ?>/img/services/photography.png" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <img class="pb-3 w-100" src="<?php echo get_template_directory_uri(); ?>/img/services/makeup.png" class="card-img-top" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <img class="pb-3 w-100" src="<?php echo get_template_directory_uri(); ?>/img/services/marketing.png" class="card-img-top" alt="...">
            </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-5 text-center text-xl-start stretch-flex px-2 ">
                <h5 class="card-title text-white pb-3 ">Models & Influencer*innen</h5>
                <p class="card-text text-white container-dienstleistungen ">In unserer Agentur können Sie neben Models auch Influencer*innen buchen, um somit Ihre Produkte auch auf Social Media Plattformen bewerben.
        Somit kreieren wir einen Save Space für klassische und außergewöhnliche Newcomer-Künstler der neuen Generation.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 text-center text-xl-start stretch-flex px-2">
                        <h5 class="card-title text-white pb-3 ">Video- & Fotografen*innen</h5>
                        <p class="card-text text-white container-dienstleistungen ">Fotografen sind ein wichtiger Bestandteil in der Werbe- und Modewelt und dürfen bei uns nicht fehlen. Wir arbeiten daher mit einer Vielzahl an verschiedenen Video- & Fotografen zusammen die verschiedene Stile mit einbringen. Wenn Sie einen Fotografen suchen sind Sie bei uns genau richtig. Wir helfen Ihnen den Richtigen für Ihr Projekt zu finden.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 text-center text-xl-start stretch-flex px-2">
                    <h5 class="card-title text-white pb-3 ">Makeup Artists</h5>
                    <p class="card-text text-white container-dienstleistungen ">Es macht einen großen Unterschied eine Visagistin im Projekt mit zu buchen, die dafür sorgt, dass sowohl die Qualität der Fotos hochwertiger ausfallen als auch die Bearbeitung dadurch vereinfacht wird.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 text-center text-xl-start stretch-flex px-2">
                    <h5 class="card-title text-white pb-3 ">Marketing & Produktion</h5>
                    <p class="card-text text-white container-dienstleistungen ">Wenn Sie auf der Suche nach einem kreativen Unternehmen sind, das Ihr Projekt voranbringen kann, sind Sie bei uns genau richtig. Wir verfügen über die nötige Kompetenz und kreative Lösungsansätze. </p>
            </div>
    </div>
    </div>
</div>
<div class="container-fluid who-we-are p-md-5 bg-black">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-10">
            <div id="carousel-who-we-are" class="carousel carousel-who-we-are slide" data-bs-ride="true">
            <div class="carousel-indicators pt-md-5">
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner p-5 text-center">
                <div class="carousel-item carousel-item-our-identity bg-black text-white active p-md-5">
                    <h2 class="">Unsere Kunden</h2> 
                    <p class="mt-5 mb-0">Wir sind erfahren, verlässlich sowie jederzeit auf gute Ergebnisse fokussiert</p>
                    <p class="mb-0">und wissen es zu schätzen, mit großartigen Kunden zusammenzuarbeiten.</p>
                    <p class="pb-md-5"><br></p>
                </div>
                <div class="carousel-item carousel-item-our-identity bg-black text-white p-md-5">
                    <h2 class="">Unsere Motivation</h2>
                    <p class="mt-5 mb-0">Unsere Arbeit ist unsere Leidenschaft und ein positiver Antrieb für jeden Tag.</p>
                    <p class="mb-0">Sie bringt unser Team dazu, an jeder neuen Herausforderung zu wachsen</p>
                    <p class="pb-md-5">und so neue Ziele zu erreichen.</p>
                </div>
                <div class="carousel-item carousel-item-our-identity bg-black text-white p-md-5">
                    <h2 class="">Unser Team</h2>
                    <p class="mt-5 mb-0">Wir haben immer ein Projekt, an dem wir arbeiten. Meistens für unsere Kunden.</p>
                    <p class="mb-0">Von Zeit zu Zeit ist es aber auch ein persönliches Vorhaben,</p>
                    <p class="pb-md-5">wie für gemeinnützige Organisationen, das uns neue Inspiration gewinnen lässt.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-who-we-are" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-who-we-are" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid call-to-action bg-black pb-md-5">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-md-8 ps-0 bg-white">
            <h2 class="mt-5 mx-5">Kontaktieren Sie uns noch heute!</h2>
            <div class="mt-5 mx-5">
            <?php echo do_shortcode('[contact-form-7 id="1334" title="Index | Kontaktieren Sie uns noch heute!"]');?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>