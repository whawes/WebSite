<?php

require "../config.php";
require '../core/sujetFunction.php';
require '../core/commantaireFunction.php';
session_start();
$sujetF=new SujetF();
$commantaireF=new CommantaireF();
$sujetF->supprimerSujet($_GET['id']);
echo $_GET['id'];
$commantaireF->supprimerCommantaireS($_GET['id']);
$up=$_SESSION["page"];
//$up = $str = explode('?', $up)[0];
	header('location:'.$up);
?>