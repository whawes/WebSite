<?PHP
include "../entities/User.php";
include "../core/Users.php";
if (isset($_POST['inscription'])) 

{
if (isset($_POST['Nom']) and isset($_POST['Email']) and isset($_POST['MotDePasse']))
{ $pass_hache=password_hash($_POST['MotDePasse'], PASSWORD_DEFAULT);
   $Client=new User('',$_POST['Nom'],'',$_POST['Email'],$pass_hache,'','','','','');

//Partie2



//Partie3
$Client1=new Users();
$Client1->ajouterClient($Client);
	
}

else{
	echo "vérifier les champs";
}
//*/
}
header('location:../index.php');
?>