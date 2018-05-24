<?php include '../src/frontoffice/header.php';
require_once '../src/db.php';
require_once '../src/frontoffice/views.php';
require_once '../src/admin/init.php';
?>

    <section class="home hotelBackground">
		<?php include 'navbar.php' ?>
        <div class="container">
            <div class="row">

                <div class="twelve columns">

                    <div class="home-backgroundText">
                        <span class="home-lilText">GUIDE DE VOYAGE</span>
                    </div>
                </div>

                <div class="six columns">
                    <h1 class="home-Title">Meilleurs <span class="home-boldText">Hôtels.</span></h1>
                </div>
            </div>
        </div>
    </section>


    <section class="list">

        <div class="top container">
            <div class="row">
                <div class="twelve columns">
					<?php foreach ( $db->getHotels( 0 ) as $hotel ) {
						hotelView( $hotel );
					} ?>
                </div>
            </div>

        </div>

        <div class="twelve columns btn-contain">
            <button class="list-btn" type="button" name="button">Charger plus</button>
        </div>

    </section>


<?php include_once '../src/frontoffice/footer.php'; ?>