<?php 
include "../../core/Users.php";
include "../../config.php";

$user= new Users();
$list=$user->verifiermail($_POST['email']);
$lien="nouveaumotdepasse.html";


if (isset($_POST['confirmer'])) {
	$header='From:"CLT"<mtf244@gmail.com>';
	mail($_POST['email'], "Changer Mot de passe", "file:///C:/xampp/phpMyAdmin/test2/viewsFO/login/nouveaumotdepasse.html",$header);
	header('location:login.html');

}

?>