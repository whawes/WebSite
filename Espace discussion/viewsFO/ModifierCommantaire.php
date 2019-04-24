<?php
require "../config.php";
session_start();
require '../core/commantaireFunction.php';
$date=date("Y-m-d H:i:sa");     
$commantaireF=new CommantaireF();
$commantaireF->modifierCommantaire($_POST['id'],$_POST['post_text'],$date);
$up=$_SESSION["page"];
//$up = $str = explode('?', $up)[0];
header('location:'.$up);
?>		