<?php
include "../../config.php";

session_start();

if(($_POST['addressmail']=='aa@esprit.tn')&&($_POST['pass']==0000))
{
    $_SESSION['tel']=24551966;
    $_SESSION['Nom']='aaa';
    $_SESSION['mail']='jmaiomar184@gmail.com';

    $up=$_SESSION['page2'];
    echo $_SESSION['page2'];

    header('Location:'.$up);
}
else
{
	header('Location: login.php');
}


?>