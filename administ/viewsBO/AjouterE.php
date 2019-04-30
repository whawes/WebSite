<?PHP
include "../entities/User.php";

include "../core/Users.php";
if (isset($_POST['Ajouter'])) 
;
{
if (isset($_POST['Cin']) and isset($_POST['Nom']) and isset($_POST['Email']) and isset($_POST['Numerotelephone']) and isset($_POST['Adresse']) and isset($_POST['Role']))
{ 
	$pass=password_hash($_POST['Cin'], PASSWORD_DEFAULT);
   $employe1=new User($_POST['Cin'],$_POST['Nom'],'',$_POST['Email'],$pass,$_POST['Numerotelephone'],$_POST['Adresse'],'','',$_POST['Role']);

//Partie2

var_dump($employe1);


//Partie3
$employee1=new Users();
$employee1->ajouterEmploye($employe1);
	
}else{
	echo "vérifier les champs";
}
//*/
}
header('Location:tableclient.php');
?>