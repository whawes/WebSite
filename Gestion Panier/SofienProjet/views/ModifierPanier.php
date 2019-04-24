<?php
//require '../include.php';
//require '../cores/panierC.php';
//$panierC=new PanierC();
session_start();


if(!empty($_SESSION['cart'])) {
    $key = array_search($_GET["id"], array_column($_SESSION['cart'], 'id'));
    $_SESSION["cart"][$key]['qty'] = $_POST["qty"];
    //$panierC->modifierPanier($_POST['qty'],$_GET['id']);

header('location:cart.php');
}
?>