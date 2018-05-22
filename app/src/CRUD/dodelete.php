<?php
require 'db.php';
require 'init.php';

if(isset($_POST['id'])){
	$id = htmlentities($_POST['id']);
}

if ($db->deleteArticle($id)) {
	$db->redirectToIndex();
}