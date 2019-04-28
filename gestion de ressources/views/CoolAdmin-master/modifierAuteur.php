
<?php
include "../../entities/auteur.php";
include "../../core/AuteurC.php";
	$auteurC=new AuteurC();
echo $_GET['id'];
if (isset($_GET['id'])){
    $result=$auteurC->rechercherAuteurById($_GET['id']);
	foreach($result as $row){
		
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$informations=$row['informations'];
		$livres=$row['livres'];
		
}
	}
	$auteur=new auteur($_POST['nom'],$_POST['prenom'],$_POST['informations'],$_POST['livres']);
	$auteurC->modifierAuteur($auteur,$_GET['id']);
	//echo $_POST['cin_ini'];
	header('Location: table-Auteur.php');

?>