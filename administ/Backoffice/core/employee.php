<?PHP
include "../config.php";
class Employee {
	
	function ajouterEmploye($employe){
		$sql="INSERT INTO `employee` (`CIN`, `Nom`, `Prenom`, `Email`, `Salaire`) VALUES (:cin, :nom,:prenom,:email,:salaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $email=$employe->getEmail();
        $salaire=$employe->getSalaire();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':salaire',$salaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmploye(){
		
		$sql="SElECT * From employee";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($id){
		$sql="DELETE FROM employee where ID=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($Salaire,$id){
		$sql="UPDATE employee SET Salaire=:salaire WHERE ID=$id";
		
		$db = config::getConnexion();
	
try{		
        $req=$db->prepare($sql);
        
		$req->bindValue(':salaire',$Salaire);
            $s=$req->execute();
			
          
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
		
	}



	function recupererEmploye($nom){
		$sql="SELECT * from employee where Nom like '%$nom%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trierEmploye(){
		$sql="SELECT * from employee ORDER BY Salaire ASC ";
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