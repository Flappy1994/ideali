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
                        <div class="col-2" id="faces-absolute">
                            <p class="mt-5 font-20">Die Gesichter der neuen Generation</p> 
                            <a href="" class="font-20 text-white">Unsere Models</a>
                        </div>
                    
                    </div>
                    <div id="banner-models" class="carousel-item bg-black text-white p-5">
                        <div class="col-2" id="models-absolute">
                            <p class="mt-5 font-20">Buchen Sie unsere Models</p>
                            <a href="" class="font-20 text-black">Buchen</a>
                        </div>  
                    </div>
                    <div id="banner-makeup" class="carousel-item bg-black text-white p-5">
                        <div class="col-2" id="makeup-absolute">
                            <p class="mt-5 font-20">Buchen Sie unsere Makeup - Artists</p>
                            <a href="" class="font-20 text-white">Buchen</a>
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
<div class="container-fluid services text-center bg-grey">
    <div class="row d-flex justify-content-center pb-4">
        <div class="col-md-6 col-10 mt-5">
            <h2 class="text-white">Unsere Dienstleistungen</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center pb-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-xl-0 p-0">
                <div class="col-12 col-xl-8 offset-xl-2">
                    <img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/services/models.png" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-xl-8 offset-xl-2 mb-5 text-center text-xl-start stretch-flex px-2">
                    <h5 class="card-title text-white pb-3 ">Models & Influencer*innen</h5>
                    <p class="card-text text-white container-dienstleistungen ">In unserer Agentur können Sie neben Models auch Influencer*innen buchen, um somit Ihre Produkte auch auf Social Media Plattformen bewerben.
Somit kreieren wir einen Save Space für klassische und außergewöhnliche Newcomer-Künstler der neuen Generation.</p>
                </div>
            </div>
            <div class="row d-flex d-sm-none">
                <div class="col-12 px-3 px-xl-none text-center">
                <a href="#" class="text-white ">Models</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-xl-0 p-0">
                    <div class="col-12 col-xl-8 offset-xl-2">
                    <img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/services/photography.png" class="card-img-top" alt="...">
                    </div>
                    <div class="col-12 col-xl-8 offset-xl-2 mb-5 text-center text-xl-start stretch-flex px-2">
                        <h5 class="card-title text-white pb-3 ">Video- & Fotografen*innen</h5>
                        <p class="card-text text-white container-dienstleistungen ">Fotografen sind ein wichtiger Bestandteil in der Werbe- und Modewelt und dürfen bei uns nicht fehlen. </p>
                    </div>
            </div>
            <div class="row d-flex d-sm-none">
                <div class="col-12 px-3 px-xl-none text-center">
                <a href="#" class="text-white ">Video & Fotoproduktion</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-xl-0 p-0">
                <div class="col-12 col-xl-8 offset-xl-2">
                <img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/services/makeup.png" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-xl-8 offset-xl-2 mb-5 text-center text-xl-start stretch-flex px-2">
                    <h5 class="card-title text-white pb-3 ">Makeup Artists</h5>
                    <p class="card-text text-white container-dienstleistungen ">Beschrieben, dass es ein rieseigen Unterschied macht eine Visa mit dabei zu haben, sowohl für die Qualität der Fotos als auch bei der Bearbeitung.</p>
                </div>
            </div>
            <div class="row d-flex d-sm-none">
                <div class="col-12 px-3 px-xl-none text-center">
                <a href="#" class="text-white ">Makeup Artists</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 p-xl-0 p-0">
                <div class="col-12 col-xl-8 offset-xl-2">
                <img class="pb-3" src="<?php echo get_template_directory_uri(); ?>/img/services/marketing.png" class="card-img-top" alt="...">
                </div>
                <div class="col-12 col-xl-8 offset-xl-2 mb-5 text-center text-xl-start stretch-flex px-2">
                    <h5 class="card-title text-white pb-3 ">Marketing & Produktion</h5>
                    <p class="card-text text-white container-dienstleistungen ">Wenn Sie auf der Suche nach einem kreativen Unternehmen sind, das Ihr Projekt voranbringen kann, sind Sie bei uns genau richtig. Wir verfügen über die nötige Kompetenz und kreative Lösungsansätze. </p>
                </div>
            </div>
            <div class="row d-flex d-sm-none">
                <div class="col-12 px-3 px-xl-none text-center">
                <a href="#" class="text-white ">Marketing & Produktion</a>
                </div>
            </div>
            <div class="row d-none d-xl-flex justify-content-center bg-grey text-white p-xl-0 p-0">
                <div class="col-3">
                    <div class="col-8 offset-2 text-start">
                    <a href="#" class="text-white ">Models</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-8 offset-2 text-start">
                    <a href="#" class="text-white ">Video & Fotoproduktion</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-8 offset-2 text-start">
                    <a href="#" class="text-white ">Makeup Artists</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="col-8 offset-2 text-start">
                    <a href="#" class="text-white ">Marketing & Produktion</a>
                    </div>
                </div>
            </div>
                </div>
    </div>
</div>
<div class="container-fluid who-we-are p-5 bg-black">
    <div class="row d-flex justify-content-center">
        <div id="carousel-who-we-are" class="carousel carousel-who-we-are slide" data-bs-ride="true">
        <div class="carousel-indicators pt-md-5">
            <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner p-5 text-center">
            <div class="carousel-item bg-black text-white active p-5">
                <h2 class="">Unsere Kunden</h2> 
                <p class="mt-5 mb-0">Wir sind erfahren, verlässlich sowie jederzeit auf gute Ergebnisse fokussiert</p>
                <p class="mb-0">und wissen es zu schätzen, mit großartigen Kunden zusammenzuarbeiten.</p>
                <p class="pb-md-5"><br></p>
            </div>
            <div class="carousel-item bg-black text-white p-5">
                <h2 class="">Unsere Motivation</h2>
                <p class="mt-5 mb-0">Unsere Arbeit ist unsere Leidenschaft und ein positiver Antrieb für jeden Tag.</p>
                <p class="mb-0">Sie bringt unser Team dazu, an jeder neuen Herausforderung zu wachsen</p>
                <p class="pb-md-5">und so neue Ziele zu erreichen.</p>
            </div>
            <div class="carousel-item bg-black text-white p-5">
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
<div class="container-fluid call-to-action bg-black pb-md-5">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-md-8 ps-0 bg-white">
            <h2 class="mt-5 mx-5">Kontaktieren Sie uns noch heute!</h2>
            <div class="mt-5 mx-5">
            <form class="mb-lg-5" id="contact-us">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">E-Mail-Adresse</label>
                    <input type="email" class="form-control" id="mail">
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Telefonnummer</label>
                    <input type="tel" class="form-control" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Nachricht</label>
                    <textarea name="text" class="form-control" cols="40" rows="5" form="contact-us"></textarea>
                </div>
                <p>Es gilt unsere Datenschutzerklärung.</p>
                <button type="submit" class="btn btn-outline-dark ">Absenden</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>