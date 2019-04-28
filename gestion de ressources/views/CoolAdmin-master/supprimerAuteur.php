<?PHP
include "../../core/AuteurC.php";
$AuteurC=new AuteurC();
if (isset($_GET["id"])){
	$AuteurC->supprimerAuteur($_GET["id"]);
	header('Location: table-Auteur.php');
}

?>