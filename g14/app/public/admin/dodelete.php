<?php
require '../../src/db.php';
require '../../src/admin/init.php';

if(isAuthenticated()){

	if(isset($_POST['id'])){
		$id = htmlentities($_POST['id']);
	}

	if ($db->deleteArticle($id)) {
		$db->redirectToLogin();
	}
}
