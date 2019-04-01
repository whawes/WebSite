<?php
require '../core/livretFunction.php';
$livretF=new livretF();
$livretF->supprimerLivresT($_GET['Titre']);
header('location:table.php');
?>