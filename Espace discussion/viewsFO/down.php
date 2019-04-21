<?php

require "../config.php";
require '../core/sujetFunction.php';
session_start();
$sujetF=new SujetF();
$sujetF->downvote($_GET['id'],$_SESSION["connected"]);
echo $_GET['id'];
echo $_SESSION["connected"];
$up=$_SESSION["page"];
//$up = $str = explode('?', $up)[0];
header('location:'.$up);;
?>