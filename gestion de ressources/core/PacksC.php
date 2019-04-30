<?PHP
include "../config.php";


class PacksC {

function AfficherPackbo($packs){
		
		echo "Nom: ".$packs->getNom()."<br>";
		echo "Prix: ".$packs->getprix()."<br>";
		echo "présentation: ".$packs->getInformations()."<br>";
		echo "contenu: ".$packs->getLivres()."<br>";
	}
	
	function ajouterPacks($packs){
		$sql="insert into packs (nom,prix,informations,livres) values (:nom,:prix,:informations,:livres)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$packs->getNom();
        $prix=$packs->getprix();
        $informations=$packs->getInformations();
        $livres=$packs->getLivres();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPacks(){
		//$sql="SElECT * From packs e inner join formationphp.packs a on e.cin= a.cin";
		$sql="SElECT * From packs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPacks($id){
		$sql="DELETE FROM packs where id= :id";
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
	function modifierPacks($packs,$id){
		$sql="UPDATE packs SET nom=:nom, prix=:prix,informations=:informations,livres=:livres WHERE id=:id";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom=$packs->getNom();
        $prix=$packs->getprix();
        $informations=$packs->getInformations();
        $livres=$packs->getLivres();
       
		//$datas = array(':nomm'=>$nomm, ':nom'=>$nom, ':prix'=>$prix, ':informations'=>$informations,':livres'=>$livres);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherPacks($nom){
		$sql="SELECT * from Packs where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	


function recupererPacksParId($id){
		$sql="SElECT * from packs where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function triPacks(){
		$sql="SElECT * from packs ORDER BY nom ASC  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function triPacksParVente(){
		$sql="SElECT * from packs ORDER BY prix DESC  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function GetPacksParPrix(){
		$sql="SElECT nom,prix from packs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
 ?>