<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="byt">
    <div class="container pt-7 pb-5">
        <div class="row">
            <div class="col-md-7 text-md-left text-center">
                <h1>
                    Zariadený 3 izbový byt v&nbsp;Seredi na predaj
                </h1>
            </div>
            <div class="col-md-5 text-md-right text-center">
                <h2 class="h1">
                    <span class="state">Voľný</span>
                    <span class="d-block">99 000€</span>
                </h2>
            </div>
        </div>
    </div>
        <div class="container py-5 py-md-6">
            <div class="row text-center">
                <div class="col-11 col-md-10 px-md-0">
                    <a data-lightbox="image" href="images/miko.png" class="main">
                        <img src="images/miko.png" class="w-100" alt="Miko"/>
                    </a>
                    <a data-lightbox="image" href="images/miko.png" class="offseted">
                        <img src="images/miko.png" class="w-100" alt="Miko"/>
                    </a>
                    <a data-lightbox="image" href="images/miko.png"></a>
                </div>
            </div>
        </div>
</section>

<section id="description">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 order-lg-1 order-2 ">
                <h4>Neoreal prichádza s ponukou 3 izbového bytu na predaj. Byt sa nachádza v Seredi na ulici Námestie Slobody. Veľký a priestranný byt je o výmere 72,61 m2 a pripadá k nemu aj balkón o výmere 4 m2 a taktiež pivnica o výmere 1,44 m2. Byt je umiestnený na 3 poschodí zo 7-mich poschodí.</h4>
                <div class="row pt-4">
                    <div class="col-md-6">
                        <p>Dispozične byt pozostáva zo vstupnej chodby, nepriechodnej detskej izby, peknej spálne, obývačky a taktiež kuchyne s jedálňou, z ktorej je prístup na balkón. V kúpeľni je umiestnená vaňa a je oddelená od samostatnej toalety. Balkón je presklený, čo Vám prináša možnosť tráviť tu čas aj v zime.  Obývačka s kuchyňou  sú orientované na sever a spálňa je orientovaná na juh. V byte je k dispozícií aj funkčná klimatizácia. Byt je kompletne zariadený, vrátane kuchyne so všetkými zabudovanými spotrebičmi.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Bytový dom prešiel kompletnou rekonštrukciou vrátane rekonštrukcie strechy, balkónov, výťahu a zateplenia. Ako bonus máte možnosť využívať ďalšiu murovanú pivnicu, ktorá pripadá k dvom bytom. Taktiež môžete využívať spoločnú kočikáreň.</p>
                        <p>Tento byt je možne zakúpiť si prostredníctvom hypotekárneho úveru, vybavením ktorého Vám radi pomôžeme.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 order-lg-2 order-1 offset-xl-1">
               <dic class="row">
                   <div class="col-lg-12 col-md-4 col-6">
                       <h2 class="h1">3-izbový</h2>
                       <h4>Dispozícia</h4>
                   </div>
                   <div class="col-lg-12 col-md-4 col-6">
                       <h2 class="h1">60m<sup>2</sup></h2>
                       <h4>Plocha</h4>
                   </div>
                   <div class="col-lg-12 col-md-4">
                       <h2 class="h1">Sereď</h2>
                       <h4>Mesto</h4>
                   </div>
               </dic>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container py-5 py-md-6">
        <div class="row text-center">
            <div class="col-md-10 col-xl-8 m-md-auto">
                <h2 class="mb-5">V prípade prípade záujmu nám pošlite vaše kontaktné údaje.<br>Náš maklér vás bude kontaktovať</h2>
            </div>
            <div class="col-md-7 col-xl-5 m-md-auto">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <input class="formular" type="text" name="meno" placeholder="Meno a priezvisko">
                        </div>
                        <div class="col-12">
                            <input class="formular" type="text" name="mail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input class="formular" type="text" name="mail" placeholder="Telefón">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <button class="btn btn-black w-100 mb-4" name="submit" value="Odoslať kontakt">Odoslať kontakt</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="blog-interest" class="bg">
    <div class="container py-md-6 py-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Nenašli ste čo ste hľadali?</h2>
            </div>
        </div>
        <div class="row ponuka pt-md-5 pt-4 blog">
            <?php include "./components/ponuka.php" ?>
            <?php include "./components/ponuka.php" ?>
            <?php include "./components/ponuka.php" ?>
        </div>
    </div>
</section>

<?php include "./components/footer.php" ?>
