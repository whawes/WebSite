<?php
session_start();
require '../core/sujetFunction.php';
require '../entities/sujet.php';                    
$sujetF=new SujetF();
$sujetF->modifierSujet($_SESSION["Titre"], $_SESSION["Createur_post"],$_POST['post_name'],$_POST['post_tags'],$_POST['post_text']);
header('location:vossujet.php');
?>		