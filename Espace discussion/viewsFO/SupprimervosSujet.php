<?php
require '../core/sujetFunction.php';
require '../entities/sujet.php';
$sujetF=new SujetF();
$sujetF->supprimerSujet($_GET['Titre_post'],$_GET['Createur_post']);
header('location:forum.php');
?>