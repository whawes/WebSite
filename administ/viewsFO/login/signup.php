<?php
include '../../config.php';
include "../../core/Users.php";
include "../../entities/User.php";
$user= new Users();
session_start();
$code="123456789AZERTYUIOPQSDFGHJKLMWXCVBN";

   if( isset($_POST['inscription'])) {
       $_SESSION['code']=substr(str_shuffle($code),0,4);
        $_SESSION['nom']=$_POST['Nom'];
        $_SESSION['mail']=$_POST['Email'];
        $_SESSION['mdp']=$_POST['MotDePasse'];
       mail($_POST['Email'], "Confiramtion", $_SESSION['code']);

       require 'verficationemail.html';


   }

   else if(isset($_POST['confrmationmail'])){
      if ($_SESSION['code']==$_POST['code'])
      {
           $pass_hache=password_hash($_SESSION['mdp'], PASSWORD_DEFAULT);
          $Client=new User("",$_SESSION['nom'],"",$_SESSION['mail'], $pass_hache,"","","","","Client");
          $user->ajouterClient($Client);
        header("location:../index.php");
      }
      else
      {
          require 'verficationemail.html';

      }
    }



?>