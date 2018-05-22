<!DOCTYPE html>
<html lang="en">
<?php

/**
 * @adminPage
 * Pages' titles and IDs which are a link to page's details (show.php?id=PAGEID)
 * Form to add a page
 */
require 'db.php';
require 'init.php';

?>

<h2 class="admin-title">Admin page</h2>

<ul>
	<?php
	$article  = isset( $_GET['article'] ) ? max( 0, intval( $_GET['article'] ) ) : 0;
	$articles = $db->getArticles($article);

	foreach ( $articles as $article ) {
		?>

		<li>
			<a href="details.php?id=<?= $article['id'] ?>">
				<?= $article['id'] ?>: <?= $article['title'] ?>
			</a>
		</li>
	<?php } ?>


</ul>

<h3 class="admin-subtitle">Ajouter une page</h3>

<form method="post" action="addArticle.php" class="pages-form">
	<input name="title" type="text" placeholder="Title">
	<input name="subtitle" type="text" placeholder="Subtitle">
	<input name="img_src" type="text" placeholder="Image source">
	<input name="img_alt" type="text" placeholder="Image description">
	<input name="content" type="text" placeholder="Article content">
	<input name="logo_img" type="text" placeholder="Logo">
	<input name="company_name" type="text" placeholder="Company">
    <select>
	<?php
	$category  = isset( $_GET['category'] ) ? max( 0, intval( $_GET['category'] ) ) : 0;
	$categories = $db->getCategories($category);

	foreach ( $categories as $category ) {
		?>
        <option value="<?= $category['name'] ?>"></option>
	<?php } ?>
    </select>
	<input type="submit">
</form>

<div class="website-link"><a href="../../index.html" class="website-link">Go to website</a></div>