<?php

class Database {

	const NAME = "perfect_site";
	const HOST = "localhost";
	const PORT = 8889;
	const USERNAME = "root";
	const PASSWORD = "root";

	private $db;

	function __construct() {
		$options = [
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		];

		$this->db = new PDO( 'mysql:host=' . Database::HOST . ':' . Database::PORT . ';dbname=' . Database::NAME, Database::USERNAME, Database::PASSWORD, $options );
		$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}

	// CREATE


	function addArticle( $title, $subtitle, $img_src, $img_alt, $content, $logo_img, $company_name, $category_id ) {
		$stmt = $this->db->prepare(
			'INSERT INTO `articles`( `title`,`subtitle`,`img_src`,`img_alt`,`content`,`logo_img`,`company_name`, `category_id`)
		VALUES ( :title, :subtitle, :img_src, :img_alt, :content, :logo_img, :company_name, :category_id)' );
		$stmt->execute( [
			':title'        => $title,
			':subtitle'     => $subtitle,
			':img_alt'      => $img_alt,
			':img_src'      => $img_src,
			':content'      => $content,
			':logo_img'     => $logo_img,
			':company_name' => $company_name,
			':category_id'  => $category_id,

		] );

		$result = $stmt->rowCount();

		return $result === 1;

	}


	// READ

	function getArticles( $page ) {
		$stmt = $this->db->prepare( 'SELECT `id`, `title` FROM `articles` LIMIT 20 OFFSET :page' );
		$stmt->bindValue( ':page', (int) $page, PDO::PARAM_INT );
		$stmt->execute();

		return $stmt->fetchAll();
	}

	function getArticleID( $id ) {
		$stmt = $this->db->prepare( 'SELECT articles.id, `title`, `subtitle`,`img_src`,`img_alt`,`content`,`logo_img`,`company_name`, categories.name AS `category_name`
			FROM `articles`
			LEFT JOIN `categories` ON articles.category_id = categories.id
			WHERE articles.id = :id' );
		$stmt->execute( [
			':id' => $id
		] );

		return $stmt->fetch();
	}

	function getCategoryByName( $name ) {
		$stmt = $this->db->prepare( 'SELECT id FROM categories WHERE LOWER(name) LIKE LOWER(:name) LIMIT 1' );
		$stmt->execute( [
			':name' => $name
		] );

		return $stmt->fetch();
	}

	function getCategories( $page ) {
		$stmt = $this->db->prepare( 'SELECT `id`, `name` FROM `categories` LIMIT 20 OFFSET :page' );
		$stmt->bindValue( ':page', (int) $page, PDO::PARAM_INT );
		$stmt->execute();

		return $stmt->fetchAll();
	}

	function getArticlesInCategory( $page, $category_id ) {
		$stmt = $this->db->prepare( 'SELECT * FROM `articles` WHERE `category_id` = :category_id LIMIT 20 OFFSET :page' );
		$stmt->bindValue( ':page', (int) $page, PDO::PARAM_INT );
		$stmt->bindValue( ':category_id', intval( $category_id ), PDO::PARAM_INT );
		$stmt->execute();

		return $stmt->fetchAll();
	}

	function getAirlines( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Compagnies aériennes' )['id'] );
	}

	function getHotels( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Hotels' )['id'] );
	}

	function getRestaurants( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Restaurants' )['id'] );
	}

	function getSpas( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Spas' )['id'] );
	}

	function getDiscounts( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Bons plans' )['id'] );
	}

	function getBars( $page ) {
		return $this->getArticlesInCategory( $page, $this->getCategoryByName( 'Bars' )['id'] );
	}


	// UPDATE


	function editArticle( $id, $title, $subtitle, $img_src, $img_alt, $content, $logo_img, $company_name, $category_id ) {
		$params = [
			':id'           => $id,
			':title'        => $title,
			':subtitle'     => $subtitle,
			':img_alt'      => $img_alt,
			':content'      => $content,
			':company_name' => $company_name,
		':category_id'      => $category_id
		];

		$query = 'UPDATE articles SET `title` = :title, `subtitle` = :subtitle, `img_alt`= :img_alt, `content` = :content, `company_name` = :company_name, `category_id` = :category_id';
		if ($img_src != false) {
			$query .= ', `img_src`= :img_src';
			$params[':img_src'] = $img_src;
		}
		if ($logo_img != false) {
			$query .= ', `logo_img`= :logo_img';
			$params[':logo_img'] = $logo_img;
		}
		$query .= ' WHERE id = :id';

		$stmt = $this->db->prepare( $query );
		$stmt->execute( $params );
	}

	//DELETE

	function deleteArticle( $id ) {
		$stmt = $this->db->prepare( 'DELETE FROM `articles` WHERE id = :id' );
		$stmt->execute( [
			':id' => $id
		] );

		return $stmt->rowCount() === 1;
	}

	//REDIRECTION

	function redirectToLogin() {
		header( "Location: /admin/" );
		die();
	}

	function redirectToBackOffice() {
		header( "Location: /admin/form.php" );
		die();
	}


	// CONNECTION

	function connectUser( $username, $password ) {
		$stmt = $this->db->prepare( "SELECT * FROM admin WHERE username = :username" );
		$stmt->execute( [ ':username' => $username ] );
		$result = $stmt->fetchAll();
		if ( count( $result ) === 0 ) {
			return false;
		}
		$passwordHashed   = $result[0]['password'];
		$passwordVerified = password_verify( $password, $passwordHashed );
		if ( $passwordVerified === false ) {
			return false;
		} else {
			setcookie( "User", serialize( [ 'username' => $result[0]['username'] ] ), time() + 60 * 60 * 24 * 365 );
			$this->redirectToBackOffice();
		}
	}


}