<?php
require '../core/commantaireFunction.php';
require '../entities/commantaire.php';
session_start();
$commantaireF=new CommantaireF();
$commantaireF->supprimerCommantaire($_GET['Titre'],$_GET['Createur'],$_GET['Crea'],$_GET['Texte']);
$titre=$_GET['Titre'];
$crea=$_GET['Createur'];
$t='location:table2.php?Titre_post=';
$t2='&Createur_post=';
header($t.$titre.$t2.$crea);
?>