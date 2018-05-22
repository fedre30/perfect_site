<?php

/**
 * @details of clicked page
 * @adminPage link
 * @editPage link
 * @deletePage link
 */
require 'db.php';
require 'init.php';

$id   = $_GET['id'];
$article = $db->getArticleID($id)
?>
<div>ID:<?= $article['id'] ?></div>
<h2><span style="color: #ac2925">Titre: </span><?= $article['title'] ?></h2>
<p><span >Subtitle: </span><?= $article['subtitle'] ?></p>
<p><span >Image description: </span> <?= $article['img_alt'] ?></p>
<p><span >Image source: </span> <?= $article['img_src'] ?></p>
<p><span >Content: </span> <?= $article['content'] ?></p>
<p><span >Logo: </span> <?= $article['logo_img'] ?></p>
<p><span >Logo: </span> <?= $article['company_name'] ?></p>
</div>

<div class="links-wrapper">
	<a href="../index.php" class="show-link">Admin Homepage</a><br>
	<a href="editArticle.php?id=<?= $article['id'] ?>" class="show-link">Edit page</a><br>
	<a href="deleteArticle.php?id=<?= $article['id'] ?>" class="show-link">Delete page</a>
</div>