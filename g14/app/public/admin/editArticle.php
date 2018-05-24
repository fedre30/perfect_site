<!DOCTYPE html>
<html lang="en">
<?php

/**
 * @editPage form
 */
require '../../src/db.php';
require '../../src/admin/init.php';
require '../../src/admin/head.php';
require '../../src/admin/file_upload.php';

$id = $_GET['id'];
$article = $db->getArticleID($id);
?>


<h3 class="admin-subtitle">Modifier une page</h3>

<form method="post" action="doedit.php" class="pages-form" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id ?>" />

    <div class="row">
        <div class="six columns">
            <label>Title</label>
            <input class="u-full-width" name="title" type="text" value="<?= $article['title']?>">
        </div>
        <div class="six columns">
            <label>Subtitle</label>
            <input class="u-full-width" name="subtitle" type="text" value="<?= $article['subtitle']?>">
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <label>Article content</label>
            <textarea class="u-full-width" name="content"><?= $article['content']?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <label>Logo (optional)</label>
            <img src="/uploads/<?= $article['logo_img'] ?>" width="100">
            <input class="u-full-width" name="logo_img" type="file">
        </div>
        <div class="six columns">
            <label>Company</label>
            <input class="u-full-width" name="company_name" type="text" value="<?= $article['company_name']?>">
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <label>Image (optional)</label>
            <img src="/uploads/<?= $article['img_src'] ?>" width="100">
            <input class="u-full-width" name="img_src" type="file">
        </div>
        <div class="six columns">
            <label>Image description</label>
            <input class="u-full-width" name="img_alt" type="text" value="<?= $article['img_alt']?>">
        </div>
    </div>

    <div class="row">
        <div class="six columns">
            <label>Title</label>
            <select class="u-full-width" name="category_id">
				<?php
				$category = isset( $_GET['category'] ) ? max( 0, intval( $_GET['category'] ) ) : 0;
				$categories = $db->getCategories($category);

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
<div class="website-link"><a href="/admin/" class="website-link">Back to Admin Page</a></div>
