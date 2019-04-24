<?php 
include "../entities/User.php";
include "../core/Users.php";

$employe=new Users() ;
$employe1=new User('',$_POST['Nom'],$_POST['Datedenaissance'],$_POST['Email'],'',$_POST['Numerotelephone'],$_POST['Ville'],$_POST['Adresse'],'','');

if (isset($_POST["modifier"]))
{

$employe->modifierEmploye($employe1,$_GET['id']);
}





header('Location:Profileemploye.php');

?>