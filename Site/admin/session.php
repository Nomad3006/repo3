<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location: login.php');
}
if (isset($_GET['deco'])) {

	// Kill all the session variable
	$_SESSION = array();

	// Delete the session cookie.
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
				  $params["path"], $params["domain"],
				  $params["secure"], $params["httponly"]
				 );
	}

	// Kill the session.
	session_destroy();
	header('location: login.php');

}
?>
