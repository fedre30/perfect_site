<?php

/**
 * @details of clicked page
 * @adminPage link
 * @editPage link
 * @deletePage link
 */
require '../../src/db.php';
require '../../src/admin/init.php';
require '../../src/admin/head.php';

$id   = $_GET['id'];
$article = $db->getArticleID($id)
?>
<div class="back-detail">ID:<?= $article['id'] ?></div>
<h2 class="back-detail"><spanclass="back-span">Titre: </span><?= $article['title'] ?></h2>
<div class="back-detail"><span class="back-span">Sous-titre: </span><?= $article['subtitle'] ?></div>
<div class="back-detail"><span class="back-span">Description Image: </span> <?= $article['img_alt'] ?></div>
<div class="back-image back-detail"><span class="back-span">Image source: </span> <img src="/uploads/<?= $article['img_src'] ?>" /></div>
<div class="back-detail"><span class="back-span">Texte: </span> <?= $article['content'] ?></div>
<div class="back-image back-detail"><span class="back-span">Logo: </span> <img src="/uploads/<?= $article['logo_img'] ?>" /></div>
<div class="back-detail"><span class="back-span">Entreprise: </span> <?= $article['company_name'] ?></div>


<div class="links-wrapper">
	<a href="/admin/" class="back-link">Admin Homepage</a><br>
	<a href="/admin/editArticle.php?id=<?= $article['id'] ?>" class="back-link">Modifier page</a><br>
	<a href="/admin/deleteArticle.php?id=<?= $article['id'] ?>" class="back-link">Supprimer page</a>
</div>

<?php include '../../src/admin/footer.php' ?>