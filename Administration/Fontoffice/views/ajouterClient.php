<?PHP
include "../entities/client.php";
include "../core/clients.php";
if (isset($_POST['inscription'])) 

{
if (isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['Datenaissance']) and isset($_POST['Email']) and isset($_POST['Motdepasse']) and isset($_POST['NumTel']) or isset($_POST['Ville']) or isset($_POST['Adresse']) or isset($_POST['CodePostale']))
{
   $client1=new client($_POST['Nom'],$_POST['Prenom'],$_POST['Datenaissance'],$_POST['Email'],$_POST['Motdepasse'],$_POST['NumTel'],$_POST['Ville'],$_POST['Adresse'],$_POST['CodePostale']);

//Partie2

var_dump($client1);


//Partie3
$clients1=new clients();
$clients1->ajouterClient($client1);
header('location:createclien.html')	
}else{
	echo "vérifier les champs";
}
//*/
}
echo "erreur"
?>