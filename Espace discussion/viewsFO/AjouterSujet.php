<?php
session_start();
require '../core/sujetFunction.php';
require '../entities/sujet.php';
$date=date("Y-m-d H:i:sa");
$sujet=new Sujet($_POST['post_name'],$date,0, $_SESSION["connected"],$_POST['post_text'],$_POST['post_tags']);
$sujetF=new SujetF();
$sujetF->ajouterSujet($sujet);
header('location:forum.php');
?>