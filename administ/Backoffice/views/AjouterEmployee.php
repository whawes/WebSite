<?PHP
include "../entities/employe.php";
include "../core/employee.php";
if (isset($_POST['enregistrer'])) 

{
if (isset($_POST['Cin']) and isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Email']) and isset($_POST['Salaire']))
{
   $employe1=new employe($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Salaire']);

//Partie2

var_dump($employe1);


//Partie3
$employee1=new employee();
$employee1->ajouterEmploye($employe1);
	
}else{
	echo "vérifier les champs";
}
//*/
}
header('Location: index.html');
?>