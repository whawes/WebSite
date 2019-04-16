<?php
include "../config.php";
class AuteurC {

	function AfficherAuteurBackoffice ($auteur){
		
		echo "Nom: ".$auteur->getNom()."<br>";
		echo "Prénom: ".$auteur->getPrenom()."<br>";
		echo "Biographie: ".$auteur->getInformations()."<br>";
		echo "Oeuvres: ".$auteur->getLivres()."<br>";
	}
	
	function ajouterAuteur($auteur){
		$sql="insert into auteur (nom,prenom,informations,livres) values (:nom,:prenom,:informations,:livres)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$auteur->getNom();
        $prenom=$auteur->getPrenom();
        $informations=$auteur->getInformations();
        $livres=$auteur->getLivres();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':informations',$informations);
		$req->bindValue(':livres',$livres);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAuteur(){
		//$sql="SElECT * From auteur e inner join formationphp.auteur a on e.cin= a.cin";
		$sql="SElECT * From auteur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAuteur($id){
		$sql="DELETE FROM auteur where id= :id";
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
	function modifierAuteur($auteur,$id){
		$sql="UPDATE auteur SET nom=:nom, prenom=:prenom,informations=:informations,livres=:livres WHERE id=:id";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $nom=$auteur->getNom();
        $prenom=$auteur->getPrenom();
        $informations=$auteur->getInformations();
        $livres=$auteur->getLivres();
       
		//$datas = array(':nomm'=>$nomm, ':nom'=>$nom, ':prenom'=>$prenom, ':informations'=>$informations,':livres'=>$livres);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
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
	function rechercherAuteur($nom){
		$sql="SELECT * from auteur where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercheAvance($nom){
		$sql="SElECT * from auteur where nom like '%$nom%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherAuteurById($id){
		$sql="SELECT * from auteur where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function GetAuteurParVente(){
		$sql="SElECT nom,nb_Vente from auteur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherAuteurTop(){
		$sql="select * from auteur order by nb_Vente desc limit 5";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	


function triAuteur(){
	$sql="SElECT * from auteur ORDER BY nom ASC  ";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function triAuteurParVente(){
	$sql="SElECT * from auteur ORDER BY Nb_vente DESC  ";
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