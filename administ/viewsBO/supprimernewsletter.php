<?php 
include "../entities/Newsletter.php";
include "../core/Newsletters.php";

$newsletters=new Newsletters();
if (isset($_POST["supprimernewsletter"])) {
	$newsletters->supprimerUser($_GET['id']);
}
header('location:tablenewsletter.php')
?>