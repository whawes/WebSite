<?PHP
include "../config.php";
class reclamationC {

	function ajouterReclamation($reclamation ){
		$sql="insert into reclamation (nom,mail,msg) values (:nom, :mail,:msg)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);

			$mail=$reclamation->getMail();
			$nom=$reclamation->getNom();
			$msg=$reclamation->getMsg();
			$req->bindValue(':mail',$mail);
			$req->bindValue(':nom',$nom);
			$req->bindValue(':msg',$msg);


			$req->execute();

		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}

	}
	function traiter($s){

		$sql="update reclamation set traitement='oui' where id=:s";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':s',$s);
		try{
			$req->execute();

		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherReclamtion(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation  ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function trieReclamtion(){
		$sql="SElECT * From reclamation order by id asc ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();

		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function modifierReclamation($s,$m){
		$sql="update reclamation set msg=:m where id=:s";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':s',$s);
		$req->bindValue(':m',$m);

		try{
			$req->execute();

		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}



}

?>
	
	