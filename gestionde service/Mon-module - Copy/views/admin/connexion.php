<?php
include "../../core/reclamationC.php";
include "../../config.php";

$user=new ReclamationC();
$list=$user->afficher_user($_POST['addressmail'],$_POST['pass']);
$id="";
$nom="";
$mdp="";
session_start();
foreach ($list as $row)
    {
        $id=$row['user_id'];
        $nom=$row['user_name'];
        $mail=$row['user_mail'];
        $mdp=$row['user_pass'];
        $tel=$row['user_tel'];
        $role=$row['role'];




    }

$p=$_SESSION['page2'];

if(($_POST['addressmail']==$nom)&&($_POST['pass']==$mdp) && $role=='Client') {
    $_SESSION['id']=$id;
    $_SESSION['Nom']=$nom;
    $_SESSION['mail']=$mail;
    $_SESSION['tel']=$tel;


    echo $p;
    header('location:'.$p);
}
else if(($_POST['addressmail']==$nom)&&($_POST['pass']==$mdp)&& $role=='Admin') {
    $_SESSION['id']=$id;
    $_SESSION['Nom']=$nom;
    $_SESSION['mdp']=$mdp;
    echo $p;
    header('location:/admin/afficherReclamation.php');
}

else
    {
    echo $id;
    header('location:login.php');
}

?>