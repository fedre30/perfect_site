<?php

// AIRLINES

function airlineView( $airline ) {
	?>
    <a href="/article.php?id=<?= $airline['id'] ?>" style="color: black">
        <div class="row">
            <div class="twelve columns news-card">
                <div class="news-image">
                    <img src="/uploads/<?= $airline['logo_img'] ?>"/>
                </div>
                <div class="news-content">
                    <div class="news-title-container">
                        <h3 class="news-title"><?= $airline['title'] ?></h3>
                        <h4 class="news-subtitle"><?= $airline['subtitle'] ?></h4>
                    </div>
                    <p class="news-text"><?= $airline['content'] ?></p>
                </div>
            </div>
        </div>
    </a>
	<?php
}

?>

<?php


// HOTELS
function hotelView( $hotel ) {
	?>
    <a href="/article.php?id=<?= $hotel['id'] ?>" style="color: black; text-decoration: none">
        <div class="card-container">
            <div class="row">

                <div class="two columns">
                    <span class="number"><?php $hotel['id'] ?></span>
                </div>

                <div class="seven columns top-text">
                    <h3><?= $hotel['title'] ?></h3>
                    <p><?= $hotel['content'] ?></p>
                    <div class="top-link"><a href="#">Réserver</a></div>
                </div>

                <div class="three columns top-image">
                    <img src="/uploads/<?= $hotel['logo_img'] ?>">
                </div>
            </div>
        </div>
    </a>
<?php } ?>


<?php

// RESTAURANTS

function restaurantView( $restaurant ) {
	?>
    <a href="/article.php?id=<?= $restaurant['id'] ?>" style="color: black; text-decoration: none">
        <div class="card-container">
            <div class="row">

                <div class="two columns">
                    <span class="number"><?php $restaurant['id'] ?></span>
                </div>

                <div class="seven columns top-text">
                    <h3><?= $restaurant['title'] ?></h3>
                    <p><?= $restaurant['content'] ?></p>
                    <div class="top-link"><a href="#">Réserver</a></div>
                </div>

                <div class="three columns top-image">
                    <img src="/uploads/<?= $restaurant['logo_img'] ?>">
                </div>
            </div>
        </div>
    </a>
<?php } ?>

<?php

// SPAS

function spaView( $spa ) {
	?>
    <a href="/article.php?id=<?= $spa['id'] ?>" style="color: black; text-decoration: none">
        <div class="card-container">
            <div class="row">

                <div class="two columns">
                    <span class="number"><?php $spa['id'] ?></span>
                </div>

                <div class="seven columns top-text">
                    <h3><?= $spa['title'] ?></h3>
                    <p><?= $spa['content'] ?></p>
                    <div class="top-link"><a href="#">Réserver</a></div>
                </div>

                <div class="three columns top-image">
                    <img src="/uploads/<?= $spa['logo_img'] ?>">
                </div>
            </div>
        </div>
    </a>
<?php } ?>

<?php

// CARDS

function cardViewHotel( $hotel ) { ?>
    <a href="/article.php?id=<?= $hotel['id'] ?>" style="color: black">
        <div class="three columns">
            <div class="content">
                <div class="imgContent">
                    <img src="/uploads/<?= $hotel['logo_img'] ?>" alt="<?= $hotel['img_alt'] ?>">
                </div>
                <p class="fiches-name"><?= $hotel['title'] ?></p>
                <p class="fiches-text"><?= $hotel['content'] ?></p>
            </div>
        </div>
    </a>
<?php } ?>
<?php

function cardViewRestaurant( $restaurant ) { ?>
    <a href="/article.php?id=<?= $restaurant['id'] ?>" style="color: black">
        <div class="three columns">
            <div class="content">
                <div class="imgContent">
                    <img src="/uploads/<?= $restaurant['logo_img'] ?>"
                         alt="<?= $restaurant['img_alt'] ?>">
                </div>
                <p class="fiches-name"><?= $restaurant['title'] ?></p>
                <p class="fiches-text"><?= $restaurant['content'] ?></p>
            </div>
        </div>
    </a>
<?php } ?>


<?php

function cardViewBar( $bar ) { ?>
    <a href="/article.php?id=<?= $bar['id'] ?>" style="color: black">
        <div class="three columns">
            <div class="content">
                <div class="imgContent">
                    <img src="/uploads/<?= $bar['logo_img'] ?>" alt="<?= $bar['img_alt'] ?>">
                </div>
                <p class="fiches-name"><?= $bar['title'] ?></p>
                <p class="fiches-text"><?= $bar['content'] ?></p>
            </div>
        </div>
    </a>
<?php } ?>

<?php
//ARTICLE

function articleView( $article ) { ?>
    <div class="container">
        <div class="article-title"><?php $article['title'] ?></div>
        <div class="article-subtitle"><?php $article['subtitle'] ?></div>
        <div class="row">
            <div class="six columns"><?php $article['content'] ?></div>
            <div class="six columns">
                <img src="<?php $article['img_src'] ?>" alt="<?php $article['img_alt'] ?>">
            </div>
        </div>
        <div class="article-signature">
            <div class="article-company"><?php $article['company_name'] ?></div>
            <div class="article-logo"><?php $article['logo_img'] ?></div>
        </div>
    </div>

<?php } ?>

