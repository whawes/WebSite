<?PHP
include "../config.php";
class Clients {
	
	function ajouterClient($client){
		$sql="INSERT INTO `client` (`Nom`, `Prenom`, `Email`, `Motdepasse`, `NumTel`, `Adresse`, `Ville`, `CodePostale`, `Datenaissance`) VALUES (:nom,:prenom,:email,:motdepasse,:numtel,:adresse,:ville,:codepostale,:datenaissance)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getNom();
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
	function recuperernom($id)
    {
        $dbh = config::getConnexion();

        $sth = $dbh->prepare('SELECT ID FROM client WHERE id=1');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i +0;
        }


    }
	
	/*function afficherclient(){
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}*/
	function supprimerclient($cin){
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
	}
	function modifierclient($client,$id){
		$sql="UPDATE client SET Nom=:nom,Prenom=:prenom,Email=:email,Motdepasse=:motdepasse,NumTel=:numtel,Ville=:ville,Adresse=:adresse,CodePostale=:codepostale WHERE ID=$id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $salaire=$client->getSalaire();
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererclient($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclient($tarif){
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