<?php
session_start();

require "../config.php";
require '../core/sujetFunction.php';
require '../entities/sujet.php';
$date=date("Y-m-d H:i:sa");
$sujet=new Sujet($_POST['post_name'],$date,0, $_SESSION["connected"],$_POST['post_text'],$_POST['post_tags']);
$sujetF=new SujetF();
$sujetF->ajouterSujet($sujet);
$up=$_SESSION["page"];
$up = $str = explode('?', $up)[0];
header('location:'.$up);
?>