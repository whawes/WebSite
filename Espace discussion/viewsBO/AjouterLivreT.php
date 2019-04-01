<?php 
require '../core/livretFunction.php';
require '../entities/livreT.php';
$description=$_GET['cc-name'];
$nom=$_GET['cc-payment'];
$filename = '../viewsFO/files/'.$nom.'.pdf';
if (file_exists($filename)) {
	$livreTF=new livretF();
	$livret=new LivreT($_GET['cc-payment'],$_GET['cc-name']);
	$livreTF->ajouterLivreT($livret);
	echo $livret->getTitre();
	echo $livret->getDescription();
    header('location:table.php');
} else {
    header('location:form.php?id=aa');
    
}
?>