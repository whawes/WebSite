<?php
require '../cores/panierC.php';
$panierC=new PanierC();
if(isset($_GET['id'])){
    $panierC->ajouterProduit($_GET['id']);
}else{
    die("erreur id");
}
header('location:cart.php');

?>