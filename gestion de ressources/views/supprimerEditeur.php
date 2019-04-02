<?PHP
include "../core/EditeurC.php";
$editeurC=new EditeurC();
if (isset($_POST["nomMaison"])){
	$editeurC->supprimerEditeur($_POST["nomMaison"]);
	header('Location: afficherEditeur.php');
}

?>