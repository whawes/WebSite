<?PHP
include "../config.php";
class Clients {
	
	function ajouterClient($client){
		$sql="INSERT INTO `client` (`Nom`, `Prenom`, `Email`, `Motdepasse`, `NumTel`, `Adresse`, `Ville`, `CodePostale`, `Datenaissance`) VALUES (:nom,:prenom,:email,:motdepasse,:numtel,:adresse,:ville,:codepostale,:datenaissance)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getNomC();
        $prenom=$client->getPrenom();
        $email=$client->getemail();
        $motdepasse=$client->getmotdepasse();
        $numtel=$client->getnumtel();
        $adresse=$client->getadresse();
        $ville=$client->getville();
        $codepostale=$client->getcodepostale();
        $datenaissance=$client->getdate();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':datenaissance',$datenaissance);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$motdepasse);
		$req->bindValue(':numtel',$numtel);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':codepostale',$codepostale);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclient($id){
		
		$sql="SElECT * From client where ID=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierclient($nom,$prenom,$email,$motdepasse,$numtel,$id){
		$db = config::getConnexion();
		$sql="UPDATE client SET Nom=:nom,Prenom=:prenom,Email=:email,Motdepasse=:motdepasse,NumTel=:numtel WHERE ID=$id";

try{		
        $req=$db->prepare($sql);
		
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$motdepasse);
	    $req->bindValue(':numtel',$numtel);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	/*function supprimerclient($cin){
		$sql="DELETE FROM employee where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	/*function recupererclient($id){
		$sql="SELECT * from client where ID=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeclient($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>