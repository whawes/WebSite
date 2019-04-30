<?PHP
include "../config.php";
class Users {
	
function Login($email){
		$sql="SELECT * FROM `users` where Email='$email' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherusers(){
		$sql="SELECT * FROM `users`";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function afficher($role,$id){
		$sql="SELECT * FROM `users` WHERE Role='$role' and ID='$id'";
		$db = config::getConnexion();

		try{
			
		    $liste=$db->query($sql);
		    return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function ajouterEmploye($employe){
		$sql="INSERT INTO `users`(`ID`, `Nom`, `Email`, `MotDePasse`, `NumeroTelephone`, `Adresse`,`Role`) VALUES (:id,:nom,:email,:motdepasse,:numerotelephone,:adresse,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id=$employe->getID();
		;
        $nom=$employe->getNom();
        $email=$employe->getEmail();
        $motdepasse=$employe->getMotdepasse();
        $numerotelephone=$employe->getNumerotelephone();
        $adresse=$employe->getAdresse();
        $role=$employe->getRole();

        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$motdepasse);
		$req->bindValue(':numerotelephone',$numerotelephone);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':role',$role);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function ajouterClient($client){
		$sql="INSERT INTO `users` (`Nom`, `Email`, `Motdepasse`) VALUES (:nom,:email,:motdepasse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getNom();
        $email=$client->getEmail();
        $motdepasse=$client->getMotdepasse();
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$motdepasse);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


		function verifiermail($email){
		$sql="SELECT * FROM `users` WHERE Email='$email'";
		$db = config::getConnexion();

		try{
			
		    $liste=$db->query($sql);
		    return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function supprimerUser($id){
		$sql="DELETE FROM users where id= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierClient($client,$id){
		$sql="UPDATE users SET Nom=:nom,Email=:email,NumeroTelephone=:numerotelephone,DateDeNaissance=:datedenaissance,Adresse=:adresse,Ville=:ville,CodePostale=:codepostale WHERE ID='$id'";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

        $nom=$client->getNom();
        $email=$client->getEmail();
        $numerotelephone=$client->getNumerotelephone();
        $datedenaissance=$client->getDatedenaissance();
        $adresse=$client->getAdresse();
        $ville=$client->getVille();
        $codepostale=$client->getCodepostale();
        

		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':numerotelephone',$numerotelephone);
		$req->bindValue(':datedenaissance',$datedenaissance);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':codepostale',$codepostale);

            $s=$req->execute();
			
           ;
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function modifierEmploye($employe,$id){
		$sql="UPDATE users SET Nom=:nom,Email=:email,NumeroTelephone=:numerotelephone,DateDeNaissance=:datedenaissance,Adresse=:adresse,Ville=:ville WHERE ID='$id'";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

        $nom=$employe->getNom();
        $email=$employe->getEmail();
        $datedenaissance=$employe->getDatedenaissance();
        $adresse=$employe->getAdresse();
        $ville=$employe->getVille();
        $numerotelephone=$employe->getNumerotelephone();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':numerotelephone',$numerotelephone);
		$req->bindValue(':datedenaissance',$datedenaissance);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);

            $s=$req->execute();
			
           ;
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function NouveauMotdepasse($user,$email){
		$sql="UPDATE users SET MotDePasse=:motdepasse WHERE Email='$email'";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

        $motdepasse=$user->getMotdepasse();
  

		$req->bindValue(':motdepasse',$motdepasse);
		

            $s=$req->execute();
			
           ;
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
	}
	function verification($employe)
        {
            $sql = "SELECT * FROM users where Email = :email";
            $db = config::getConnexion();
            try{
            $req=$db->query($sql);
            $req->execute(['email' =>$employe->getEmail()]);
            return $req->fetch();
              }
              catch(Exception $e){
              	die('Erreur:'.$e->getMessage());
              }
        }

        function afficherusers_id(){
		$sql="SElECT * From users order by ID asc ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherusers_Nom(){
		$sql="SElECT * From users order by Nom asc ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherusers_role(){
		$sql="SElECT * From users order by Role asc ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function afficheruseres_tri($s){
		
		$sql="SELECT * FROM users  WHERE nom like '%$s%' or Email like '%$s%' or ID like '%$s%' or Role  like '%$s%' ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	/*function recuperernom($id)
    {
        $dbh = config::getConnexion();

        $sth = $dbh->prepare('SELECT ID FROM client WHERE id=1');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i +0;
        }


    }*/

}

?>