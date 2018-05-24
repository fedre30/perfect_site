<?php
require '../../src/db.php';
require '../../src/admin/init.php';
require '../../src/admin/head.php';
require '../../src/admin/file_upload.php';

if ( isAuthenticated() ) {
	$fields = array( 'title', 'subtitle', 'img_alt', 'content', 'company_name', 'category_id' );

	foreach ( $fields as $field ) {
		if ( ! isset( $_POST[ $field ] ) || empty( trim( $_POST[ $field ] ) ) ) {
			echo 'All fields are required: ' . $field;
			die;
		}
	}

	$id           = intval( $_POST['id'] );
	$title        = htmlentities( $_POST['title'] );
	$subtitle     = htmlentities( $_POST['subtitle'] );
	$img_alt      = htmlentities( $_POST['img_alt'] );
	$content      = nl2br(htmlentities( $_POST['content'] ));
	$company_name = htmlentities( $_POST['company_name'] );
	$category_id  = intval( $_POST['category_id'] );

	$images_destination = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'uploads';
	$image_path         = upload_file( 'img_src', $images_destination );
	$logo_path          = upload_file( 'logo_img', $images_destination );

	$db->editArticle( $id, $title, $subtitle, $image_path, $img_alt, $content, $logo_path, $company_name, $category_id );
	$db->redirectToLogin();
}
