<?php 
include "../entities/client.php";
include "../core/clients.php";

$Client1=new Client() ;
if (isset($_POST["modifierclient"]))
{

$Tabclient=$Client1->modifierEmploye($_POST['Salaire'],$_GET['id']);
}
if (isset($_POST["supprimer"]))
{

$Tabemploye=$Employee1->supprimerEmploye($_GET['id']);
}
header('Location: table.php');

?>