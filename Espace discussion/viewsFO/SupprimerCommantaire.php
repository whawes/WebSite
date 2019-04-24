<?php
require "../config.php";
require '../core/commantaireFunction.php';
session_start();
$commantaireF=new CommantaireF();
$commantaireF->supprimerCommantaire($_GET['ids'],$_GET['id']);
$up=$_SESSION["page"];
echo "$up";
//$up = $str = explode('?', $up)[0];
header('location:'.$up);
?>