<?php
include_once '../src/frontoffice/header.php';
require_once '../src/db.php';
require_once '../src/frontoffice/views.php';

$db = new Database();
?>

<header class="header article">
	<!-- NAVBAR -->

	<?php include 'navbar.php' ?>
	<div class="header-tag">guide de voyage</div>
	<h1 class="header-title"><?= $article['category_name']?>.</span></h1>

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
		<a href="/"><img src="assets/images/logo_black.png" alt="logo"></a>
	</div>

	<ul class="heropanel-navList">
		<li class="heropanel-navListItem">
			<a class="heropanel-navListItem-link top-call" href="#top">Top 100</a>
		</li>
		<li class="heropanel-navListItem">
			<a class="heropanel-navListItem-link voyages-call" href="#voyages">Voyages</a>
		</li>
		<li class="heropanel-navListItem">
			<a class="heropanel-navListItem-link magazine-call" href="#magazine">Magazine</a>
		</li><li class="heropanel-navListItem">
			<a class="heropanel-navListItem-link" href="fiches.php">Fiches pratiques</a>
		</li>
		<li class="heropanel-navListItem">
			<a class="heropanel-navListItem-link" href="formulaire.php">Contact</a>
		</li>
	</ul>
</section>

<?php articleView($article)?>


	<!-- FOOTER -->
	<footer class="footer">
		<div class="footer-left">
			<div class="footer-logo">
				<img src="assets/images/logo_black.png" alt="logo">
			</div>
			<div class="footer-copyright">© Copyright 2018. All rights reserved.</div>
		</div>
		<div class="footer-social">
			<div class="social-item"><a href="#"><img src="assets/images/youtube-rounded-square-logo.png"
			                                          alt="youtube logo"></a></div>
			<div class="social-item"><a href="#"><img src="assets/images/instagram.png" alt="instagram logo"></a></div>
			<div class="social-item"><a href="#"><img src="assets/images/twitter-logo-silhouette.png"
			                                          alt="twitter logo"></a></div>
			<div class="social-item"><a href="#"><img src="assets/images/facebook-logo.png" alt="facebook logo"></a></div>
		</div>

	</footer>

<?php include_once '../src/frontoffice/footer.php'; ?>