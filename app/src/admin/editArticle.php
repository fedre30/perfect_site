<!DOCTYPE html>
<html lang="en">
<?php

/**
 * @editPage form
 */
require 'db.php';
require 'init.php';

$id = $_GET['id'];
$article = $db->getArticleID($id);
?>

<h2 class="admin-subtitle">Edit page</h2>

<form method="post" action="doedit.php" class="pages-form">
	<input name="id" type="hidden" value="<?=$article['id']?>">
	<input name="title" type="text" value="<?=$article['title']?>">
	<input name="subtitle" type="text" value="<?=$article['subtitle']?>">
	<input name="img_src" type="text" value="<?=$article['img_src']?>">
	<input name="img_alt" type="text" value="<?=$article['img_alt']?>">
	<input name="content" type="text" value="<?=$article['content']?>">
	<input name="logo_img" type="text" value="<?=$article['logo_img']?>">
	<input name="company_name" type="text" value="<?=$article['company_name']?>">
	<input type="submit">
</form>

<div class="website-link"><a href="../index.php" class="website-link">Back to Admin Page</a></div>
