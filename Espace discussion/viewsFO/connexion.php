<?php 
session_start();
if(($_POST['addressmail']=='aa@esprit.tn')&&($_POST['pass']==0000))
header('location:'.$_SESSION['page'].'.php');
else if(($_POST['addressmail']=='bb@esprit.tn')&&($_POST['pass']==1111))
header('location:../viewsBO/index.html');
else
header('location:login.php');
?>