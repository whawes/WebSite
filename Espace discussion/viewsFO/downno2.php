<?php
require '../core/sujetFunction.php';
require '../entities/sujet.php';
$fname = "lib/downvote.txt"; 
$txt =$_GET['Titre_post'].$_GET['Createur_post'];
$f = fopen($fname, "r+");
$line = fgets($f);
$a=str_replace($txt, "", $line);
fclose($f);
$fi = fopen($fname, "w+");
fwrite($fi, $a);  
fclose($fi);
$sujetF=new SujetF();
$sujetF->upvote($_GET['Titre_post'],$_GET['Createur_post']);
header('location:sujet.php');
?>