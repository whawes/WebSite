<?PHP
include "../entities/editeur.php";
include "../core/EditeurC.php";

if ( isset($_POST['nomMaison']) and isset($_POST['informations']) and isset($_POST['livres']) and isset($_POST['mail'] and isset($_POST['telephone'] and isset($_POST['adresse'])){
$editeur1=new editeur($_POST['nomMaison'],$_POST['informations'],$_POST['livres'],$_POST['mail'],$_POST['telephone'],$_POST['adresse']);
//Partie2
/*
var_dump($editeur1);
}
*/
//Partie3
$editeur1C=new editeurC();
$editeur1C->ajouterEditeur($editeur1);
header('Location: afficherEditeur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>