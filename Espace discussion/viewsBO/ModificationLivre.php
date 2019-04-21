<?php 

require "../config.php";
require '../core/livretFunction.php';
require '../entities/livreT.php';
session_start();
	$livreTF=new livretF();
	$livreTF->modifierLivresT($_GET['id'],$_GET['cc-name2']);
    header('location:table.php');
    

?>