<?php

// AIRLINES

function airlineView($airline)
{
?>
<div class="row">
	<div class="twelve columns news-card">
		<div class="news-image">
			<img src="/uploads/<?= $airline['logo_img'] ?>" />
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
<?php
}
?>

<?php


// HOTELS
function hotelView($hotel)
{
    ?>
	<div class="card-container">
            <div class="row">

              <div class="two columns">
                <span class="number"><?php $hotel['id']?></span>
              </div>

              <div class="seven columns top-text">
                <h3><?= $hotel['title']?></h3>
                <p><?= $hotel['content']?></p>
                <div class="top-link"><a href="#">Réserver</a></div>
              </div>

              <div class="three columns top-image">
                <img src="/uploads/<?= $hotel['logo_img'] ?>['logo_img']">
              </div>
            </div>
          </div>
<?php }?>


<?php

// RESTAURANTS

function restaurantView($restaurant)
{
    ?>
	<div class="card-container">
            <div class="row">

              <div class="two columns">
                <span class="number"><?php $restaurant['id']?></span>
              </div>

              <div class="seven columns top-text">
                <h3><?= $restaurant['title']?></h3>
                <p><?= $restaurant['content']?></p>
                <div class="top-link"><a href="#">Réserver</a></div>
              </div>

              <div class="three columns top-image">
                <img src="/uploads/<?= $restaurant['logo_img'] ?>['logo_img']">
              </div>
            </div>
          </div>
<?php }?>

<?php

// SPAS

function spaView($spa)
{
	?>
    <div class="card-container">
        <div class="row">

            <div class="two columns">
                <span class="number"><?php $spa['id']?></span>
            </div>

            <div class="seven columns top-text">
                <h3><?= $spa['title']?></h3>
                <p><?= $spa['content']?></p>
                <div class="top-link"><a href="#">Réserver</a></div>
            </div>

            <div class="three columns top-image">
                <img src="/uploads/<?= $spa['logo_img'] ?>['logo_img']">
            </div>
        </div>
    </div>
<?php }?>


