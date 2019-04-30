<?php 
include "../entities/User.php";
include "../core/Users.php";
include "../entities/Newsletter.php";
include "../core/Newsletters.php";


$Clients=new Users();
$client=new User('',$_POST['Nom'],$_POST['Datedenaissance'],$_POST['Email'],'',$_POST['Numerotelephone'],$_POST['Ville'],$_POST['Adresse'],$_POST['Codepostale'],'');

$newsletters=new Newsletters();
$newsletter=new Newsletter($_POST['Email']);


if (isset($_POST["modifier"]))
{ 
	$Clients->modifierClient($client,$_GET['id']);

    if (!empty($_POST['newsletter']))
    {
    	$newsletters->ajouterNewsletter($newsletter);
    }



}
/*if (isset($_POST["supprimer"]))
{

$Tabeclient=$Clients1->supprimerclient($_GET['id']);
}*/
header('Location: profile.php');

?>