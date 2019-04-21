<?php

require "../config.php";
require '../core/commantaireFunction.php';
require '../core/sujetFunction.php';
$sujetF=new SujetF();	
$commantaireF=new CommantaireF();
$sujetF->supprimerSujet($_GET['Titre_post']);
$commantaireF->supprimerCommantaireS($_GET['Titre_post']);
header('location:table.php');
?>