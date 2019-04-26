<?php
include "../../config.php";
$db = config::getConnexion();
if (isset($_GET['search']))
{
    $critere=$_GET['search'];
$req=$db->prepare("select * from Reclamation where nom like $critere$");
$req->execute();
    $x=$req->fetchAll();
print_r($x);
$table=$req->fetchAll(PDO::FETCH_OBJ);
if(count($table)>0){
    echo "<h3>" .count($table)."resultats trouve(s)</h3>";

}
else echo"nnn";
}








?>