<?php 
session_start();
if(($_POST['addressmail']=='aa@esprit.tn')&&($_POST['pass']==0000))
header('location:shop.php');
else if(($_POST['addressmail']=='bb@esprit.tn')&&($_POST['pass']==1111))
header('location:../../backOffice/views/table.php');
else
header('location:login.php');
?>