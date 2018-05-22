<?php

require 'admin/db.php';
require 'admin/init.php';

?>

<!doctype html>
<html lang="en">

<form action="/" method="post">
    <input name="username" type="text" placeholder="username">
    <input name="password" type="text" placeholder="password">
    <input type="submit">
</form>

<a href="admin/form.php">ici</a>

<?php
$fields = array( 'username', 'password' );

foreach ( $fields as $field ) {
	if ( ! isset( $_POST[ $field ] ) || empty( trim( $_POST[ $field ] ) ) ) {
		echo 'All fields are required';
		die;
	}
}

$username = htmlentities( $_POST['username'] );
$password = htmlentities( $_POST['password'] );

$db->connectUser( $username, $password );
?>
