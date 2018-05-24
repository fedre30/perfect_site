<?php include '../src/frontoffice/header.php';
require_once '../src/db.php';
require_once '../src/frontoffice/views.php';
require_once '../src/admin/init.php';
?>

    <section class="home fichesBackground">
        <?php include 'navbar.php'?>

        <div class="container">
            <div class="row">

                <div class="twelve columns">


                    <span class="home-lilText">GUIDE DE VOYAGE</span>
                </div>


                <div class="six columns">
                    <h1 class="home-Title">Fiches <span class="home-boldText">pratiques.</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="fichesPratiques">
        <div class="container">

            <!--HOTELS-->
            <div class="row">

                <div class="twelve columns">
                    <h1 class="title">Fiches Pratiques : Hôt<span class="line-text">els  </span></h1>
                </div>



	            <?php foreach ( $db->getHotels( 0 ) as $hotel ) {
		            cardViewHotel( $hotel );
	            } ?>

                <div class="two columns">
                    <div class="btn-contain">
                        <button class="fiches-btn" type="button" name="button">Voir plus</button>
                    </div>
                </div>

            </div>


            <!--RESTO-->

            <div class="row">

                <div class="twelve columns">
                    <h1 class="title">Fiches Pratiques : Restaura<span class="line-text">nts  </span></h1>
                </div>

	            <?php foreach ( $db->getRestaurants( 0 ) as $restaurant ) {
		            cardViewRestaurant( $restaurant );
	            } ?>

                <div class="two columns">
                    <div class="btn-contain">
                        <button class="fiches-btn" type="button" name="button">Voir plus</button>
                    </div>
                </div>

            </div>


            <!--BARS-->

            <div class="row">

                <div class="twelve columns">
                    <h1 class="title">Fiches Pratiques : Ba<span class="line-text">rs  </span></h1>
                </div>

	            <?php foreach ( $db->getBars( 0 ) as $bar ) {
		            cardViewBar( $bar );
	            } ?>

                <div class="two columns">
                    <div class="btn-contain">
                        <button class="fiches-btn" type="button" name="button">Voir plus</button>
                    </div>
                </div>

            </div>
    </section>
    </div>
    </section>

<?php include_once '../src/frontoffice/footer.php'; ?>