<?php
include_once '../src/frontoffice/header.php';
require_once '../src/db.php';
require_once '../src/frontoffice/views.php';

$db      = new Database();
$article = $db->getArticleID( intval( $_GET['id'] ) );
?>

    <header class="header article">
        <!-- NAVBAR -->

		<?php include 'navbar.php' ?>
        <div class="header-tag">guide de voyage</div>
        <h1 class="header-title"><?= $article['category_name'] ?>.</span></h1>

        <div class="header-social">
            <div class="social-item"><a href="#"><img src="assets/images/youtube-rounded-square-logo.svg"
                                                      alt="youtube logo"></a></div>
            <div class="social-item"><a href="#"><img src="assets/images/instagram.svg" alt="instagram logo"></a></div>
            <div class="social-item"><a href="#"><img src="assets/images/twitter-logo-silhouette.svg"
                                                      alt="twitter logo"></a></div>
            <div class="social-item"><a href="#"><img src="assets/images/facebook-logo.svg" alt="facebook logo"></a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="article-title"><?= $article['title'] ?></div>
        <div class="article-subtitle"><?= $article['subtitle'] ?></div>
        <div class="row">
            <div class="six columns"><?= $article['content'] ?></div>
            <div class="six columns">
                <img src="/uploads/<?= $article['img_src'] ?>" alt="<?= $articles['img_alt'] ?>">
            </div>
        </div>
        <div class="article-signature">
            <div class="article-company"><?= $article['company_name'] ?></div>
            <div class="article-logo"><img src="/uploads/<?= $article['logo_img'] ?>"
                                           alt="<?= $article['company_name'] ?>"></div>
        </div>
    </div>


<?php include_once '../src/frontoffice/footer.php'; ?>