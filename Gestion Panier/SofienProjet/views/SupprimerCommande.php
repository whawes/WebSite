<?php
//require '../cores/commandeC.php';
require '../include.php';
$commande=new CommandeC();
$commande->supprimerCommande($_GET['id']);
header('location:commande.php');
?>