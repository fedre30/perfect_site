<?php
$db = new Database();

// COOKIES

function isAuthenticated(){
	return isset($_COOKIE['User']);
}
