<?php 
include "../../entities/User.php";
include "../../core/Users.php";
if (isset($_POST["ConfirmerM"])) 
{
	

	if (isset($_POST['motdepasse']) and isset($_POST['email']) )
	{	
		$pass_hache=password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
		$Users=new Users() ;
		$user=new User('','','','',$pass_hache,'','','','','');
		$Users->NouveauMotdepasse($user,$_POST['email']);
	}

}


header('Location:login.html');

?>