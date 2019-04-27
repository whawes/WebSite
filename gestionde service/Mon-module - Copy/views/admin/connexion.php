<?php
require '../cores/panierC.php';
//$user=new PanierC();
$list=$user->user($_POST['addressmail'],$_POST['pass']);
$id="";
$nom="";
$mdp="";
session_start();
foreach ($list as $row)
    {
        $id=$row['ID_User'];
        $nom=$row['Nom'];
        $mdp=$row['mdp'];

    }

$p=$_SESSION['page2'];

if(($_POST['addressmail']==$nom)&&($_POST['pass']==$mdp)) {
    $_SESSION['id']=$id;
    $_SESSION['Nom']=$nom;
    $_SESSION['mdp']=$mdp;
    echo $p;
    header('location:'.$p);
}
else {
    echo $id;
    header('location:login.php');
}

?>