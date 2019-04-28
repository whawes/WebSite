<?PHP
include "../../core/PacksC.php";
$id = $_GET["id"];
echo $id;
$packs=new PacksC();

$packs->supprimerPacks($id);
header('Location: Ecole.php');




?>