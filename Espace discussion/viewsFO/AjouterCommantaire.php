<?php
session_start();
require '../core/commantaireFunction.php';
require '../entities/commantaire.php';
$date=date("Y-m-d H:i:sa");
$commantaire=new Commantaire($_SESSION["titre"],$_SESSION["createur"],$date,$_SESSION["connected"],$_POST['post_text']);
$commantaireF=new CommantaireF();
$commantaireF->ajouterCommantaire($commantaire);
header('location:sujet.php');
?>