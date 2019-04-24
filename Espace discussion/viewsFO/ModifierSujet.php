<?php
require "../config.php";
session_start();
require '../core/sujetFunction.php';          
$sujetF=new SujetF();
$sujetF->modifierSujet($_POST['id'],$_POST['post_name'],$_POST['post_text']);
$up=$_SESSION["page"];
$up = $str = explode('?', $up)[0];
header('location:'.$up);
?>		