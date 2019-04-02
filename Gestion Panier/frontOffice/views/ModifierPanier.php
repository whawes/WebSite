<?php
require '../cores/panierC.php';
$panierC=new PanierC();


if(isset($_POST['button'])){
    $panierC->modifierPanier($_POST['qty'],$_GET['id']);
}else{
    die("erreur id");
}
header('location:cart.php');

?>