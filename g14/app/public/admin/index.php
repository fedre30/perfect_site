<?php

require '../../src/db.php';
require '../../src/admin/init.php';
include '../../src/admin/head.php';

if(isAuthenticated()){
	$db->redirectToBackOffice();
	die;
}

?>
<h2 class="back-title">Login</h2>
<form action="/admin/" method="post" class="login">
	<input name="username" type="text" placeholder="username">
	<input name="password" type="password" placeholder="password">
	<input type="submit">
</form>

<?php
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$fields = array( 'username', 'password' );
	$fieldsOk = true;

	foreach ( $fields as $field ) {
		if ( ! isset( $_POST[ $field ] ) || empty( trim( $_POST[ $field ] ) ) ) {
			echo 'All fields are required';
			$fieldsOk = false;
		}
	}

	if ($fieldsOk) {
		$username = htmlentities( $_POST['username'] );
		$password = htmlentities( $_POST['password'] );

		$db->connectUser( $username, $password );
	}
}

include '../../src/admin/footer.php';
?>

