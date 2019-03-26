<?php
//require '../cores/panierC.php';
require '../cores/commandeC.php';
$Commande=new CommandeC();
//$panierC=new PanierC();
$Commande->ajouterFacture();
//echo $panierC->subtotalPanier(/*$_GET['id']*/11);


//header('location:cart.php');

?>