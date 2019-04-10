<?php 
include "../entities/client.php";
include "../core/clients.php";

$client1=new Clients() ;
if (isset($_POST["supprimer"]))
{

$Tabclient=$client1->supprimerclient($_GET['id']);
}




header('Location: tableclient.php');

?>