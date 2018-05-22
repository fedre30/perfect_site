<!DOCTYPE html>
<html lang="en">
<?php

/**
 * @Delete form confirmation
 */
require 'db.php';
require 'init.php';

$id = $_GET['id'];
$article = $db->getArticleID($id);
?>

<form method="post" action="dodelete.php" class="pages-form">
	<p>Voulez-vous vraiment supprimer la page <strong><?= $article['title']?></strong>?</p>
	<input name="id" type="hidden" value="<?=$article['id']?>">
	<input type="submit" value="OUI!" class="btn-danger">
</form>

<div class="website-link"><a href="../index.php">Back to admin page</a></div>



