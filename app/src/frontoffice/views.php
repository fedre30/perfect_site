<?php
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