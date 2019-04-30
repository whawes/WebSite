<?php 

include "../config.php";
class Newsletters{

	 function ajouterNewsletter($newsletter){
		$sql="INSERT INTO `newsletters`(`Emails`) VALUES (:emailn)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $emailn=$newsletter->getEmailn();
        
		$req->bindValue(':emailn',$emailn);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 function afficherNewsletter(){
		$sql="SELECT * FROM `newsletters`";
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
		$sql="DELETE FROM newsletters where id= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$id);
		try{
            $req->execute();
     
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}




	}









?>