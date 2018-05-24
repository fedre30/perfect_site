<?php

/**
 * @adminPage
 * Pages' titles and IDs which are a link to page's details (show.php?id=PAGEID)
 * Form to add a page
 */
include '../../src/admin/head.php';
require '../../src/db.php';
require '../../src/admin/init.php';

if ( ! isAuthenticated() ) {
	$db->redirectToLogin();
}
?>

    <div class="back-header">
        <h2 class="admin-title">Admin page</h2>
        <ul>
			<?php
			$article  = isset( $_GET['article'] ) ? max( 0, intval( $_GET['article'] ) ) : 0;
			$articles = $db->getArticles( $article );

			foreach ( $articles as $article ) {
				?>

                <li>
                    <a href="details.php?id=<?= $article['id'] ?>">
						<?= $article['id'] ?>: <?= $article['title'] ?>
                    </a>
                </li>
			<?php } ?>
        </ul>
    </div>

    <h3 class="admin-subtitle">Ajouter une page</h3>

    <form method="post" action="addArticle.php" class="pages-form" enctype="multipart/form-data">
        <div class="row">
            <div class="six columns">
                <label>Titre</label>
                <input class="u-full-width" name="title" type="text" placeholder="Title">
            </div>
            <div class="six columns">
                <label>Sous-titre</label>
                <input class="u-full-width" name="subtitle" type="text" placeholder="Subtitle">
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <label>Texte</label>
                <textarea class="u-full-width" name="content" placeholder="Article content"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="six columns">
                <label>Logo</label>
                <input class="u-full-width" name="logo_img" type="file">
            </div>
            <div class="six columns">
                <label>Entreprise</label>
                <input class="u-full-width" name="company_name" type="text" placeholder="Company">
            </div>
        </div>

        <div class="row">
            <div class="six columns">
                <label>Image</label>
                <input class="u-full-width" name="img_src" type="file">
            </div>
            <div class="six columns">
                <label>Description Image</label>
                <input class="u-full-width" name="img_alt" type="text" placeholder="Image description">
            </div>
        </div>

        <div class="row">
            <div class="six columns">
                <label>Titre</label>
                <select class="u-full-width" name="category_id">
					<?php
					$category   = isset( $_GET['category'] ) ? max( 0, intval( $_GET['category'] ) ) : 0;
					$categories = $db->getCategories( $category );

					foreach ( $categories as $category ) {
						?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
					<?php } ?>
                </select>
            </div>
            <div class="six columns">
                <label>&nbsp;</label>
                <input class="u-full-width" type="submit">
            </div>
        </div>
    </form>

    <div class="back-link"><a href="../index.php" class="back-link">Go to website</a></div>

<?php include '../../src/admin/footer.php' ?>