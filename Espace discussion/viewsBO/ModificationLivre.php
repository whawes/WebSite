<?php 
require '../core/livretFunction.php';
require '../entities/livreT.php';
session_start();
$description=$_GET['cc-name2'];
$titre=$_GET['cc-payment2'];
$t=$_SESSION["t"];
$filename = '../viewsFO/files/'.$titre.'.pdf';
if (file_exists($filename)) {
	$livreTF=new livretF();
	$livreTF->modifierLivresT($t,$titre,$description);
    header('location:table.php');
} else {
	$t=$_SESSION["t"];
	$d=$_SESSION["d"];
	$s='location:form2.php?Titre=';
	$c='&Description=';
	$f='&id=aa';
    header($s.$t.$c.$d.$f);
    
}
?>