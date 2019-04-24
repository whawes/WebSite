<?PHP
include "../entities/User.php";
include "../core/Users.php";
if (isset($_POST['inscription'])) 

{
if (isset($_POST['Nom']) and isset($_POST['Email']) and isset($_POST['MotDePasse']))
{
   $Client=new User($_POST['Nom'],$_POST['Email'],$_POST['MotDePasse']);

//Partie2

var_dump($Client);


//Partie3
$Client1=new Users();
$Client1->ajouterClient($Client);
	
}else{
	echo "vérifier les champs";
}
//*/
}
header('Location:../index.html');
?>