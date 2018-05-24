<?php

function get_unique_filename(string $filename): string {
	if (file_exists($filename)) {
		$pathInfo = pathinfo($filename);
		return get_unique_filename($pathInfo['dirname'] . DIRECTORY_SEPARATOR . $pathInfo['filename'] . '_1.' . $pathInfo['extension']);
	} else {
		return $filename;
	}
}

function upload_file(string $field_name, string $destination) {
	if (!isset($_FILES[$field_name])) {
		return false;
	}
	$file = $_FILES[$field_name];

	if (!isset($file["tmp_name"]) or strlen(trim($file["tmp_name"])) == 0) {
		return false;
	}

	if ($destination[strlen($destination) - 1] != DIRECTORY_SEPARATOR) {
		$destination .= DIRECTORY_SEPARATOR;
	}
	$target_file = $destination . basename($file["name"]);

	if(!getimagesize($file["tmp_name"])) {
		echo "You must upload an image file.";
		return false;
	}

	$target_file = get_unique_filename($target_file);
	if ($file["size"] > 2000 * 1024) {
		echo "Sorry, your file is too large to be uploaded.";
		return false;
	}

	$image_file_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($image_file_extension != "jpg" && $image_file_extension != "png" && $image_file_extension != "jpeg" && $image_file_extension != "gif" ) {
		echo "Only JPG, JPEG, PNG & GIF files are allowed for images.";
		return false;
	}

	if (!move_uploaded_file($file["tmp_name"], $target_file)) {
		echo "An error occured during file upload";
		return false;
	}

	return basename($target_file);
}