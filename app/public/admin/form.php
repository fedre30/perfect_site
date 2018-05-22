
<?php

/**
 * @adminPage
 * Pages' titles and IDs which are a link to page's details (show.php?id=PAGEID)
 * Form to add a page
 */
include '../../src/admin/head.php';
require '../../src/admin/db.php';
require '../../src/admin/init.php';

if(!isAuthenticated()){
    $db->redirectToLogin();
}
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
	<input name="img_src" type="file" placeholder="Image source">
	<input name="img_alt" type="text" placeholder="Image description">
	<input name="content" type="text" placeholder="Article content">
	<input name="logo_img" type="text" placeholder="Logo">
	<input name="company_name" type="text" placeholder="Company">
    <select name="category">
	<?php
	$category = isset( $_GET['category'] ) ? max( 0, intval( $_GET['category'] ) ) : 0;
	$categories = $db->getCategories($category);

	foreach ( $categories as $category ) {
		?>
        <option value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
	<?php } ?>
    </select>
	<input type="submit">
</form>

<div class="website-link"><a href="../index.php" class="website-link">Go to website</a></div>

<?php include '../../src/admin/footer.php' ?>