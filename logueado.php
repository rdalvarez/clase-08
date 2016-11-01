<?php 
session_start();

if (!isset($_POST['user']) && !isset($_POST['pass'])) {
	echo "No llego";
}
else{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	echo "Llego:<br> User: $user <br> Pass: $pass <br>";
	setcookie("user",$user,time() + (86400 * 30), "/");

	$_SESSION['usuario'] = $user;
	var_dump($_SESSION);
	$_SESSION['perfil'] = "ADMIN";
}
 ?>