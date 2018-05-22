<?php
 class Database {

	 const NAME = "perfect_site";
	 const HOST = "localhost";
	 const PORT = 8889;
	 const USERNAME = "root";
	 const PASSWORD = "root";

	 private $db;

	 function __construct()
	 {
		 $options = [
			 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		 ];

		 $this->db = new PDO('mysql:host=' . Database::HOST . ':' . Database::PORT . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD, $options);
		 $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 }

	 // CREATE


	 function addArticle($title, $subtitle, $img_src, $img_alt, $content, $logo_img, $company_name, $category){
		 $stmt = $this->db->prepare(
			 'INSERT INTO `articles`( `title`,`subtitle`,`img_src`,`img_alt`,`content`,`logo_img`,`company_name`, `category`)
		VALUES ( :title, :subtitle, :img_src, :img_alt, :content, :logo_img, :company_name)');
		 $stmt->execute([
			 ':title' => $title,
			 ':subtitle' => $subtitle,
			 ':img_alt' => $img_alt,
			 ':img_src' => $img_src,
			 ':content' => $content,
			 ':logo_img' => $logo_img,
			 ':company_name' => $company_name,

		 ]);

		 $result = $stmt->rowCount();

		 return $result === 1;

	 }


	 // READ

	 function getArticles( $article){
		 $stmt = $this->db->prepare('SELECT `id`, `title` FROM `articles` LIMIT 20 OFFSET :article');
		 $stmt->bindValue(':article', (int) $article, PDO::PARAM_INT);
		 $stmt->execute();
		 return $stmt->fetchAll();
	 }

	 function getArticleID( $id){
		 $stmt = $this->db->prepare('SELECT `id`, `title`, `subtitle`,`img_src`,`img_alt`,`content`,`logo_img`,`company_name` FROM `articles` WHERE `id` = :id');
		 $stmt->execute([
			 ':id' => $id
		 ]);

		 return $stmt->fetch();
	 }

	 function getCategories($category){
	 	$stmt = $this->db->prepare('SELECT `name` FROM `categories` LIMIT 20 OFFSET :category');
	 	$stmt->bindValue(':category', (int) $category, PDO::PARAM_INT);
	 	$stmt->execute();
	 	return $stmt->fetchAll();
	 }


	 // UPDATE


	 function editArticle($id, $title, $subtitle, $img_src, $img_alt, $content, $logo_img, $company_name){
		 $stmt = $this->db->prepare(
			 'UPDATE articles SET `title` = :title, `subtitle` = :subtitle, `img_alt`= :img_alt, `img_src`= :img_src, `content` = :content, `logo_img` = :logo_img, `company_name` = :company_name WHERE id = :id');
		 $stmt->execute([
			 ':id' => $id,
			 ':title' => $title,
			 ':subtitle' => $subtitle,
			 ':img_alt' => $img_alt,
			 ':img_src' => $img_src,
			 ':content' => $content,
			 ':logo_img' => $logo_img,
			 ':company_name' => $company_name
		 ]);

		 $result = $stmt->rowCount();

		 return $result === 1;

	 }

	 //DELETE

	 function deleteArticle( $id){
		 $stmt = $this->db->prepare('DELETE FROM `articles` WHERE id = :id');
		 $stmt->execute([
			 ':id' => $id
		 ]);
		 return $stmt->rowCount() === 1;
	 }

	 //REDIRECTION

	 function redirectToIndex() {
		 header("Location: /");
		 die();
	 }


	 // CONNECTION

	 function connectUser($username, $password)
	 {
		 $stmt = $this->db->prepare("SELECT * FROM admin WHERE username = :username");
		 $stmt->execute([':username' => $username]);
		 $result = $stmt->fetchAll();
		 if (count($result) === 0) {
			 return false;
		 }
		 $passwordHashed = $result[0]['password'];
		 $passwordVerified = password_verify($password, $passwordHashed);
		 if ($passwordVerified === false) {
			 return false;
		 } else {
			 $this->redirectToIndex();
		 }
	 }



 }