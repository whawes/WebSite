<?PHP
include "../config.php";
class EditeurC {

	function ajouterEditeur($editeur){
		$sql="insert into editeur (nomMaison,informations,livres,mail,telephone,adresse) 
		values 
		(:nomMaison,:informations,:livres,:mail,:telephone,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $nom=$editeur->getNomMaison();
        $informations=$editeur->getInformations();
        $livres=$editeur->getLivres();
        $mail=$editeur->getMail();
        $telephone=$editeur->getTelephone();
        $adresse=$editeur->getAdresse();
        
		
		$req->bindValue(':nomMaison',$nom);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':adresse',$adresse);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEditeur(){
		//$sql="SElECT * From editeur e inner join formationphp.editeur a on e.cin= a.cin";
		$sql="SElECT * From editeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEditeur($id){
		$sql="DELETE FROM editeur where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEditeur($editeur,$id){
		$sql="UPDATE editeur SET nomMaison=:nomMaison, informations=:informations,livres=:livres,mail=:mail,telephone=:telephone,adresse=:adresse WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomMaison=$editeur->getNomMaison();
        $informations=$editeur->getInformations();
        $livres=$editeur->getLivres();
        $mail=$editeur->getMail();
        $telephone=$editeur->getTelephone();
        $adresse=$editeur->getAdresse();

		//$datas = array(':nomMaison'=>$nomMaisonn, ':nomMaison'=>$nomMaison, ':informations'=>$informations,':livres'=>$livres);
		$req->bindValue(':id',$id);
		$req->bindValue(':nomMaison',$nomMaison);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':adresse',$adresse);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEditeur($nomMaison){
		$sql="SElECT * from editeur where nomMaison='$nomMaison'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function recupererEditeurParId($id){
		$sql="SElECT * from editeur where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function rechercheavance($nomMaison){
		$sql="SElECT * from editeur where nomMaison like '%$nomMaison%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function triEditeur(){
		$sql="SElECT * from editeur ORDER BY nomMaison ASC  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function triEditeurParVente(){
		$sql="SElECT * from editeur ORDER BY Nb_vente DESC  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function GetEditeurParVente(){
		$sql="SElECT nomMaison,nb_Vente from editeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function ajouterEditeurAvecImage($editeur){
		$sql="insert into editeur (nomMaison,informations,livres,mail,telephone,adresse,image) 
		values 
		(:nomMaison,:informations,:livres,:mail,:telephone,:adresse,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $nom=$editeur->getNomMaison();
        $informations=$editeur->getInformations();
        $livres=$editeur->getLivres();
        $mail=$editeur->getMail();
        $telephone=$editeur->getTelephone();
		$adresse=$editeur->getAdresse();
		$image=$editeur->getImage();
        
		
		$req->bindValue(':nomMaison',$nom);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':image',$image);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
}

?>