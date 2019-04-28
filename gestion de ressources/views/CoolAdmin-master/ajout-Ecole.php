<?PHP
include "../../entities/packs.php";
include "../../core/PacksC.php";

if ( isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['informations']) and isset($_POST['livres'])){
$packs1=new packs($_POST['nom'],$_POST['prix'],$_POST['informations'],$_POST['livres']);
//Partie2
/*
var_dump($Packs1);
}
*/
//Partie3
$packs1C=new packsC();
$packs1C->ajouterPacks($packs1);
header('Location: Ecole.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>