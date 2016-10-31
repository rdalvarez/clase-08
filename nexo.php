<?php 

var_dump($_POST);
if (!isset($_POST['user']) && !isset($_POST['pass'])) {
	echo "No llego";
}
else{
	$U = $_POST['user'];
	$P = $_POST['pass'];
	echo "Llego: \n User: $U \n Pass: $P";
}

 ?>