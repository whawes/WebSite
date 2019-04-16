<?php 
 $id=5;
 $username="hello";
if(($_POST['mail']=='ctl.contact@gmail.org')&&($_POST['mdp']==0000)){
    $_SESSION["directeur"] = true;
    $_SESSION["username"] = $_POST['mail'];                            
    header('location:espace-ecole.php');
}
else if(($_POST['mail']==='wafa@esprit.tn') && ($_POST['mdp']==="0000")){
    session_start();

$_SESSION["superadmin"] = true;    
//echo "session";
$_SESSION["username"] = $_POST['mail'];                            
header('location: CoolAdmin-master/editeur-list.php');
}
else{
header('location:login-admin.php?id=azez');
}
?>