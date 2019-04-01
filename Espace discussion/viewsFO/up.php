<?php
require '../core/sujetFunction.php';
require '../entities/sujet.php';
$sujetF=new SujetF();
$file = fopen("lib/upvote.txt","a+");
$txt =$_GET['Titre_post'].$_GET['Createur_post'];
fwrite($file, $txt);
fclose($file);
$sujetF->upvote($_GET['Titre_post'],$_GET['Createur_post']);
header('location:forum.php');
?>