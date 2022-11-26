<?php /* Template Name: Marketing */ ?>
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
            <img class="w-100" src="<?php echo get_template_directory_uri()?>/img/marketing/video.jpg"/>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 bg-black text-white">
            <div class="marketing-header bg-black p-0 p-xl-5">
                <h2>Marketing & Produktion</h2>
                <p>Holen Sie mehr aus sich heraus.</p>
            </div>
            <div class="marketing-body">
                <p>Wir glauben an das, was wir tun und möchten Sie bei dem unterstützen, was Sie brauchen. Sollten Sie für Ihr Projekt auf der Suche nach neuen Wegen sein, die sowohl kreative als auch individuelle Möglichkeiten zeigen, wird unser Team Sie mit einzigartigen Lösungen überraschen.</p>
                <a href="">Zur Buchung</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center ps-lg-5 py-lg-5">
        <div class="col-12 p-0 col-md-7 col-lg-7 p-lg-5">
            <h1>Lernen Sie uns kennen</h1>
            <p>Wir sind ein dynamisches Team<br>  
                und haben uns im März 2022 als Startup aufgestellt.<br>
                unser Team besteht aus Marketing- und Social Media Experten, Leadership und Digital<br> Business Innovators als auch... Wir konnten bereits die renommierte Nailflix Gmbh als<br> großen Kunden für uns gewinnen und sind stehts am wachsen...
            </p>
        </div>
        <div class="col-12 p-0 col-md-5 col-lg-5 d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri()?>/img/logo-im.png"/>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
            <img class="w-100" src="<?php echo get_template_directory_uri()?>/img/marketing/strategy.jpg"/>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 bg-black text-white">
            <div class="strategy-header bg-black p-0 p-xl-5">
                <h2>Unsere Strategie</h2>
            </div>
            <div class="strategy-body">
                <p>Individualität...</p>
                <a href="">Jetzt Buchen</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-black text-white">
    <div class="row d-flex justify-content-center p-lg-5">
        <div class="col-12 p-0 col-md-6 col-lg-4 p-lg-5">
            <h1>Unsere Dienstleistungen</h1>
        </div>
        <div class="col-12 p-0 col-md-6 col-lg-4 p-lg-5">
            <ul>
                <li class="bullet">Marketingberatung</li>
                <li class="bullet">Werbung</li>
                <li class="bullet">Öffentlichkeitsarbeit/PR</li>
                <li class="bullet">Videoproduktion</li>
                <li class="bullet">Porträtfotografie</li> 
                <li class="bullet">Content-Strategie</li>
                <li class="bullet">Marketingstrategie</li>
                <li class="bullet">Social Media Marketing</li>
                <li class="bullet">Brand Marketing</li>
                <li class="bullet">Content Marketing</li>
                <li class="bullet">Marketing</li> 
            </ul>
            <a href="/more">Mehr lesen</a>
        </div>
    </div>
</div>
<div class="container-fluid call-to-action bg-white pb-md-5">
    <div class="row d-flex justify-content-center pt-5">
        <div class="col-md-8 ps-0 bg-white">
            <h2 class="mt-5 mx-5 text-center">Buchen Sie noch heute ein kostenloses Beratungsgespräch</h2>
            <div class="mt-5 mx-5">
            <form class="mb-lg-5" id="consult-us">
                <div class="row d-flex justify-content-center">
                    <div class="mb-3 col-lg-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="mail" class="form-label">E-Mail-Adresse</label>
                        <input type="email" class="form-control" id="mail">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <label for="tel" class="form-label">Telefonnummer</label>
                        <input type="tel" class="form-control" id="phone" name="phone"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="tel" class="form-label">Nachricht</label>
                        <textarea name="text" class="form-control" cols="40" rows="5" form="consult-us"></textarea>
                    </div>
                    <div class="col-lg-12">
                    <p>Es gilt unsere Datenschutzerklärung.</p>
                    </div>
                    <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-outline-dark text-center">Absenden</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 p-0 col-md-6 col-lg-6"></div>
        <div class="col-12 p-0 col-md-6 col-lg-6"></div>
    </div>
</div>
<?php get_footer(); ?>