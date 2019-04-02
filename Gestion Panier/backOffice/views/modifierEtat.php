<?php
require '../cores/commandeC.php';
$commande=new CommandeC();

if(isset($_POST['edit'])) {
    if($_POST['edit']=="Invalid"){

       mail($commande->Email($_GET['id']),"Verification Commande","Check your commande");


}else {
        mail($commande->Email($_GET['id']),"Verification Commande","Your Commande ready");
    }
    $commande->ModifierEtat($_POST['etat'], $_GET['id']);
    header('location:commande.php');
}
if(isset($_POST['delete'])) {
    $commande->supprimerCommande($_GET['id']);
    header('location:commande.php');
}
if(isset($_POST['more'])) {
   $id=$_GET['id'];
    require 'facture.php';
}

?>

