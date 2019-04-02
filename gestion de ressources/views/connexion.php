<?php 
if(($_POST['mail']=='ctl.contact@gmail.org')&&($_POST['mdp']==0000))
header('location:espace-ecole.php');
else if(($_POST['mail']=='wafa@esprit.tn')&&($_POST['mdp']==0000))
header('location:CoolAdmin-master/Ecole.php');
else
header('location:login-admin.php?id=azez');
?>