<?php
require '../include.php';
//require '../cores/panierC.php';
//$panierc=new PanierC();
session_start();
if(isset($_GET['action'])) {
    foreach ($_SESSION["cart"] as $keys => $values) {

            unset($_SESSION["cart"][$keys]);

    }
}
else
    {
    foreach ($_SESSION["cart"] as $keys => $values) {
        if ($values["id"] == $_GET["id"]) {
            unset($_SESSION["cart"][$keys]);

        }
    }
}

//$panierc->supprimerPanier($_GET['id']);
header('location:cart.php');
?>