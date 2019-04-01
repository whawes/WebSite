<?php
require '../core/commantaireFunction.php';
require '../entities/commantaire.php';
session_start();
$commantaireF=new CommantaireF();
$commantaireF->supprimerCommantaire($_SESSION["titre"],$_SESSION["createur"],$_GET['Createur'],$_GET['Texte']);
header('location:sujet.php');
?>