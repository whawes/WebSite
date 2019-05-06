<?php 
include "../entities/User.php";
include "../core/Users.php";


if (isset($_POST['Changermdp']))
{ 
	if (isset($_POST['Nouveaumdp']))
	 {
        $pass_hache=password_hash($_POST['Nouveaumdp'], PASSWORD_DEFAULT);
        $Users=new Users() ;
		$user=new User('','','','',$pass_hache,'','','','','');
		$Users->ModifierMotdepasse($user,$_GET['id']);

	}



}

header('Location: profile.php');

?>