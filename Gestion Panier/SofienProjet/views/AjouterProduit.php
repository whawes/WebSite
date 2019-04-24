<?php
require '../include.php';
//include '../cores/livreC.php';
$le=new livreC();
session_start();
$liste=$le->livre();
  foreach($liste as $row) {
      if($_GET['id']==$row['id'])
      {
          $nom=$row['titre'];
          $prix=$row['prix'];
          $qty=1;
      }
  }

    if(!empty($_SESSION["cart"])) {

        $item_array_id = array_column($_SESSION["cart"], "id");
        if (!in_array($_GET['id'], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            echo $count;
            $item_array = array(
                'id' => $_GET['id'],
                'nom' => $nom,
                'prix' => $prix,
                'qty' => $qty
            );
            $_SESSION["cart"][$count] = $item_array;
        }
        else
        {
            $key = array_search($_GET['id'], array_column($_SESSION["cart"], 'id'));
            $_SESSION["cart"][$key]['qty']++;
        }



    }
    else
        {
            $item_array = array(
                'id' => $_GET['id'],
                'nom' => $nom,
                'prix' => $prix,
                'qty' => $qty
            );
            $_SESSION["cart"][0] = $item_array;
        }


/*
$panierC=new PanierC();
if(isset($_GET['id'])){
    $panierC->ajouterProduit($_GET['id']);
}else{
    die("erreur id");
}*/
header('location:cart.php');
//var_dump($_SESSION["cart"]);
?>