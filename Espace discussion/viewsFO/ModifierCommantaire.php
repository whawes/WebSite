<?php
session_start();
require '../core/commantaireFunction.php';
require '../entities/commantaire.php';
$date=date("Y-m-d H:i:sa");                   
$commantaireF=new CommantaireF();
$commantaireF->modifierCommantaire($_SESSION["Titre_post"],$_SESSION["Createur_post"], $_SESSION["Createur_comm"],$_SESSION["Comm_text"],$_POST['post_text'],$date);
header('location:sujet.php');
?>		