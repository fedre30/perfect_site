<?php include_once '../src/frontoffice/header.php'; ?>

<header class="header">
    <!-- NAVBAR -->

	<?php include 'navbar.php' ?>
    <div class="header-tag">guide de voyage</div>
    <h1 class="header-title">Une année <span class="bold">de voyages.</span></h1>

    <div class="header-social">
        <div class="social-item"><a href="#"><img src="assets/images/youtube-rounded-square-logo.svg"
                                                  alt="youtube logo"></a></div>
        <div class="social-item"><a href="#"><img src="assets/images/instagram.svg" alt="instagram logo"></a></div>
        <div class="social-item"><a href="#"><img src="assets/images/twitter-logo-silhouette.svg"
                                                  alt="twitter logo"></a></div>
        <div class="social-item"><a href="#"><img src="assets/images/facebook-logo.svg" alt="facebook logo"></a></div>
    </div>
</header>
<section class="heropanel">

    <div class="heropanel-logo">
        <img src="assets/images/logo_black.png" alt="">
    </div>

    <ul class="heropanel-navList">
        <li class="heropanel-navListItem">
            <a class="heropanel-navListItem-link" href="#">Top 100</a>
        </li>
        <li class="heropanel-navListItem">
            <a class="heropanel-navListItem-link" href="#">Voyages</a>
        </li>
        <li class="heropanel-navListItem">
            <a class="heropanel-navListItem-link" href="#">Adresses</a>
        </li>
        <li class="heropanel-navListItem">
            <a class="heropanel-navListItem-link" href="#">Contacts</a>
        </li>
    </ul>
</section>

<!-- TOP 100 SECTION -->

<section class="top container">
    <div class="row">
        <div class="nine columns">
            <div class="top-title-container">
                <h2 class="top-title">Top 100</h2>
                <div class="dot"><img src="assets/images/dot.png"></div>
            </div>
            <div class="card-container">
                <div class="row">
                    <div class="seven columns top-text">
                        <h3>Meilleurs <span class="bold">Hôtels</span></h3>
                        <p>Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V
                            Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V.</p>
                        <div class="top-link"><a href="#">Voir plus</a></div>
                    </div>
                    <div class="three columns top-image">
                        <img src="assets/images/island.jpg">
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="row">
                    <div class="seven columns top-text">
                        <h3>Meilleurs <span class="bold">Restaurants</span></h3>
                        <p>Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V
                            Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V.</p>
                        <div class="top-link"><a href="#">Voir plus</a></div>
                    </div>
                    <div class="three columns top-image">
                        <img src="assets/images/resto.jpg">
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="row">
                    <div class="seven columns top-text">
                        <h3>Meilleurs <span class="bold">Spas</span></h3>
                        <p>Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V
                            Découvrez une selection des 100 meilleurs hôtels selon les critères de U.A.D.V.</p>
                        <div class="top-link"><a href="#">Voir plus</a></div>
                    </div>
                    <div class="three columns top-image">
                        <img src="assets/images/spa.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="three columns twitter"><a class="twitter-timeline" data-width="400" data-height="980"
                                              href="https://twitter.com/MeloFedre/lists/une-ann-e-de-voyages?ref_src=twsrc%5Etfw">A
                Twitter List by MeloFedre</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</section>

<!-- CAROUSEL -->

<section class="voyages">
    <div class="container">
        <div class="row">
            <div class="top-title-container">
                <h2 class="top-title">Top 100</h2>
                <div class="dot"><img src="assets/images/dot.png"></div>
            </div>

            <div class="carousel-container">
                <div class="carousel" id="carousel">
                    <div class="slide">
                        <div class="background" style="background-image: url(assets/images/thumbnail.jpeg)"></div>
                        <div class="oval">
                            <h2>Gastronomie</h2>
                            <span> Goûtez aux saveurs du monde </span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background" style="background-image: url(assets/images/thumbnail.jpeg)"></div>
                        <div class="oval">
                            <h2>Culture</h2>
                            <span>Découvrez un mode de vie différent du vôtre</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background" style="background-image: url(assets/images/thumbnail.jpeg"></div>
                        <div class="oval">
                            <h2>Bien-être</h2>
                            <span>Trouvez l'apaisement de votre esprit dans des lieux mythiques</span>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="background" style="background-image: url(assets/images/thumbnail.jpeg)"></div>
                        <div class="oval">
                            <h2>Sport</h2>
                            <span>Dépensez votre corps vers de nouveaux horizons</span>
                        </div>
                    </div>

                    <div class="next-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                    <div class="previous-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAGAZINE -->
<section class="magazine">
    <div class="container">
        <div class="top-title-container">
            <h2 class="top-title">Magazine</h2>
            <div class="dot"><img src="assets/images/dot.png"></div>
        </div>

        <div class="row">
            <div class="four columns magazine-image">
                <img src="assets/images/revue.png" alt="magazine">
            </div>
            <div class="eight columns">
                <ul class="magazine-list">
                    <li class="magazine-list-item">Un mook annuel à collectionner grâce à sa couverture illustrée, œuvre
                        d'un artiste.
                    </li>
                    <li class="magazine-list-item">Des goddies : 5 dessins originaux issus des "illustrateurs voyageurs"
                        de
                        la communauté internationale Urban Sketchers.
                    </li>
                    <li class="magazine-list-item">300 pages de reportages sous forme de "carnets de voyages ».</li>
                    <li class="magazine-list-item">Des destinations testées et approuvées par nos journalistes (pas de
                        mauvaise surprise à l'arrivée !).
                    </li>
                    <li class="magazine-list-item">40.000 exemplaires vendus en kiosques, librairies et sur notre site
                    </li>
                    <li class="magazine-list-item">Des fiches pratiques d'exception et détachables.</li>
                    <li class="magazine-list-item">TV YouTube.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PDF -->
<section class="pdf">
    <div class="container">
        <div class="top-title-container">
            <h2 class="top-title">Extrait</h2>
            <div class="dot"><img src="assets/images/dot.png"></div>
        </div>
        <div style="text-align:center;">
            <div style="margin:8px 0 4px;">
                <iframe src="//v.calameo.com/?bkcode=005228582dac89eb5211f&mode=mini" width="1000" height="700"
                        frameborder="0" scrolling="no" allowtransparency allowfullscreen
                        style="margin:0 auto;"></iframe>
                <div style="margin:4px 0px 8px;"
            </div>
        </div>
    </div>
</section>

<!-- TOOLCARDS -->
<section class="toolcard">
    <div class="container">
        <div class="top-title-container">
            <h2 class="top-title">Fiches pratiques</h2>
            <div class="dot"><img src="assets/images/dot.png"></div>
        </div>
        <div class="row">
            <div class="six columns toolcard-text">
                <p>Minutieusement détaillées, elles vous disent tout du voyage décrit nos articles : Hôtels,
                    restaurants, boutiques, musée, shopping, The Place to be et aussi quelle est la meilleure compagnie
                    aérienne pour rejoindre par exemple San Francisco, quelles sont les meilleures dates, comment aller
                    à pied de Nob Hill au Golden Gate en passant par des ruelles remplies de street art méconnus du
                    grand public, arriver pile à l'heure pour être dans l'axe du soleil sur le 3ème pilier et réussir à
                    coup sûr la photo du siècle tout en s'émerveillant de la beauté de la Bay... ça, c'est Une Année de
                    Voyages !</p>
            </div>
            <div class="six columns toolcard-image">
                <img src="assets/images/toolcard.jpg" alt="man reading paper">
            </div>
        </div>
        <div class="top-link toolcard-link"><a href="#">Voir plus</a></div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-left">
        <div class="footer-logo">
            <img src="assets/images/logo_black.png" alt="logo">
        </div>
        <div class="footer-copyright">© Copyright 2018. All rights reserved.</div>
    </div>
    
</footer>

<?php include_once '../src/frontoffice/footer.php'; ?>
