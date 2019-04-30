<?PHP
include "../../core/EditeurC.php";
$id = $_GET["id"];
echo $id;
$editeur=new EditeurC();

$editeur->supprimerEditeur($id);
header('Location: Editeur-list.php');




?>