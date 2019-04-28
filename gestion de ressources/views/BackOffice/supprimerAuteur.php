<?PHP
include "../core/AuteurC.php";
$AuteurC=new AuteurC();
if (isset($_POST["nom"])){
	$AuteurC->supprimerAuteur($_POST["nom"]);
	header('Location: afficherAuteur.php');
}

?>