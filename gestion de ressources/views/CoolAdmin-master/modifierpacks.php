
<?php
include "../../entities/packs.php";
include "../../core/PacksC.php";
	$packsC=new PacksC();
echo $_GET['id'];
if (isset($_GET['id'])){
    $result=$packsC->recupererPacksParId($_GET['id']);
	foreach($result as $row){
		
		$nom=$row['nom'];
		$prix=$row['prix'];
		$informations=$row['informations'];
		$livres=$row['livres'];
		
}
	}
	$packs=new packs($_POST['nom'],$_POST['prix'],$_POST['informations'],$_POST['livres']);
	$packsC->modifierPacks($packs,$_GET['id']);
	//echo $_POST['cin_ini'];
	header('Location: Ecole.php');

?>