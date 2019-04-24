<?php
session_start();

require "../config.php";
require '../core/commantaireFunction.php';
require '../entities/commantaire.php';
$date=date("Y-m-d H:i:sa");
$commantaire=new Commantaire($_SESSION['idd'],$date,$_SESSION["connected"],$_GET['post_text']);
$commantaireF=new CommantaireF();
$commantaireF->ajouterCommantaire($commantaire);
$up=$_SESSION["page"];
echo "$up";
//$up = $str = explode('?', $up)[0];
header('location:'.$up);
?>