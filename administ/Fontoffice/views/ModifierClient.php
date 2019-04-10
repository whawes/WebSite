<?php 
include "../entities/client.php";
include "../core/clients.php";

$Clients1=new Clients() ;
if (isset($_POST["modifierclient"]))
{


$Clients1->modifierclient($_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Motdepasse'],$_POST['Numtel'],$_GET['id']);
}
/*if (isset($_POST["supprimer"]))
{

$Tabeclient=$Clients1->supprimerclient($_GET['id']);
}*/
header('Location: tabclient.php');

?>