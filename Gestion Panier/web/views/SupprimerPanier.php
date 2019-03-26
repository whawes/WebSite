<?php
require '../cores/panierC.php';
$panierc=new PanierC();

$panierc->supprimerPanier($_GET['id']);
header('location:cart.php');
?>