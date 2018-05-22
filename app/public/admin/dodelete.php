<?php
require '../../src/admin/db.php';
require '../../src/admin/init.php';

if(isset($_POST['id'])){
	$id = htmlentities($_POST['id']);
}

if ($db->deleteArticle($id)) {
	$db->redirectToLogin();
}