<?PHP
include "../config.php";
class Users {
	
	function ajouterEmploye($employe){
		$sql="INSERT INTO `users`(`ID`, `Nom`, `Email`, `MotDePasse`, `NumeroTelephone`, `Adresse`,`Role`) VALUES (:id,:nom,:email,:motdepasse,:numerotelephone,:adresse,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$id=$employe->getID();
        $nom=$employe->getNom();
        $email=$employe->getEmail();
        $numerotelephone=$employe->getNumerotelephone();
        $adresse=$employe->getAdresse();
        $role=$employe->getRole();

        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$id);
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
		
        $nom=$client->getNomC();
        $email=$client->getemail();
        $motdepasse=$client->getmotdepasse();
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':motdepasse',$motdepasse);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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
	
	function afficherEmploye(){
		$sql="SELECT * FROM `users` where Role='Employe' ";
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
	
	function supprimerClient($id){
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
}

?>