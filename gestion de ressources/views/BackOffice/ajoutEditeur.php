<?PHP
include "../../entities/editeur.php";
include "../../core/EditeurC.php";
//echo "nom <br>";
//echo $_POST['nom']; 
//echo "informations :   <br>";
//echo $_POST['info'];
//echo "livfre <br>";
//echo $_POST['livres'];
//echo "mail <br>";
//echo $_POST['mail'];
//echo "phone <br>";
//echo $_POST['telephone'];
//echo "address <br>";
//echo $_POST['adresse'];
if ( isset($_POST['nom']) and isset($_POST['info']) and isset($_POST['livres']) and isset($_POST['mail']) and isset($_POST['telephone']) and isset($_POST['adresse'])
){
$editeur1=new editeur($_POST['nom'],$_POST['info'],$_POST['livres'],$_POST['mail'],$_POST['telephone'],$_POST['adresse']);
//Partie2
/*
var_dump($editeur1);
}
*/
//Partie3
$editeur1C=new EditeurC();
$editeur1C->ajouterEditeur($editeur1);
//echo "address <br>";

header('Location: Editeur-list.php');	
}else{
	echo "vérifier les champs";
}

//*/

?>