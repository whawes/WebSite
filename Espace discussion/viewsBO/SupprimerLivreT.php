<?php

require "../config.php";
require '../core/livretFunction.php';
$livretF=new livretF();
$livretF->supprimerLivresT($_GET['Titre']);
unlink('C:\xampp\phpMyAdmin\atelierPHP\projet\viewsFO\files\\'.$_GET['Titre'].'.pdf');
header('location:table.php');
?>