<?php
include "../../core/Users.php";
include "../../config.php";
session_start();
$user=new Users();

$list=$user->login($_POST['addressmail']);
$res=$list->fetch();

$pass=password_verify($_POST['pass'],$res['MotDePasse']);

if ($pass){
      

$id="";
$nom="";
$mdp="";
$mail="";
$tel="";
$role="";

 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        session_start(); 
    }

    {
        $id=$res['ID'];
        $nom=$res['Nom'];
        $mdp=$res['MotDePasse'];
        $mail=$res['Email'];
        $tel=$res['NumeroTelephone'];
        $role=$res['Role'];

    }


echo $role;
if(($_POST['addressmail']==$mail)) {
    $_SESSION['id']=$id;
    $_SESSION['nom']=$nom;
    $_SESSION['mdp']=$mdp;
    $_SESSION['mail']=$mail;
    $_SESSION['tel']=$tel;
    $_SESSION['role']=$role;
    if($_SESSION['role']=='Client')
   { header('location:../../viewsFO/index.php');
}
else if ($_SESSION['role']=='Admin')
    {header('location:../../viewsBO/index.php');}

}
else {
    echo $id;
    header('location:login.html');
}
}
else {echo "mot de passe incorrect";}
?>