<?php
require 'db.php';
require 'init.php';

$fields = array( 'title', 'subtitle','img_alt', 'img_src', 'content', 'logo_img');

foreach ( $fields as $field ) {
	if ( ! isset($_POST[ $field ]) || empty( trim( $_POST[ $field ] ) ) ) {
		echo 'All fields are required';
		die;
	}
}

$title      = htmlentities($_POST['title']);
$subtitle         = htmlentities($_POST['subtitle']);
$img_alt    = htmlentities($_POST['img_alt']);
$img_src    = htmlentities($_POST['img_src']);
$content    = htmlentities($_POST['content']);
$logo_img    = htmlentities($_POST['logo_img']);
$company_name    = htmlentities($_POST['company_name']);


if ( $db->addArticle( $title, $subtitle, $img_src, $img_alt, $content, $logo_img, $company_name) ) {
	$db->redirectToIndex();
}