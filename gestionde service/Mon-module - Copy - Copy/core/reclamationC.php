<?PHP
include "config.php";
class reclamationC {

	function ajouterReclamation($reclamation ){
		//INSERT INTO `reclamation` (`id`, `nom`, `mail`, `msg`, `traitement`) VALUES ('444', 'ppp', '444', '444', 'non');
		$sql="INSERT INTO `reclamation` ( `nom`, `mail`, `msg`, `traitement`) values (:nom, :mail,:msgg, 'non')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $mail=$reclamation->getMail();
        $nom=$reclamation->getNom();
        $msgg=$reclamation->getMsg();
       	$req->bindValue(':mail',$mail);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':msgg',$msgg);
		
		
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
	function recuperer_mail($s)
	{
		$dbh = config::getConnexion();

		$sth = $dbh->prepare('SELECT mail FROM `reclamation` WHERE id=:s');
		$sth->bindValue(':s',$s);

		$sth->execute();

		$x = $sth->fetchAll();
		foreach ($x as $b) {
			foreach ($b as $i)
				return $i;
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
	function afficherReclamtion_a_modifier($s){
		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SElECT msg From reclamation where id=:s');
		$sth->bindValue(':s',$s);

		$sth->execute();

		$x = $sth->fetchAll();
		foreach ($x as $b) {
			foreach ($b as $i)
				return $i ;
		}
	}
	function afficherReclamtion_id(){
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

	function afficherReclamtion_nom(){
		$sql="SElECT * From reclamation order by nom asc ";
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

	function notif(){
		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SELECT count(*) as total from reclamation where traitement="non"');
		$sth->execute();
		$x=$sth->fetchAll();
		foreach ($x as $b)
		{foreach ($b as $i)
			return $i+0;
		}

	}
	function notif_con()
	{

		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SELECT nom  from reclamation where traitement="non"');
		$sth->execute();
		$x=$sth->fetchAll();
		foreach ($x as $b)
		{foreach ($b as $i)
			return $i;
		}

	}
	function notif_prod()
	{
		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SELECT count(*) as total from produit_specifique ');
		$sth->execute();
		$x = $sth->fetchAll();
		foreach ($x as $b) {
			foreach ($b as $i)
				return $i + 0;
		}

	}
	function notification()
	{
		$x=$this->notif()+$this->notif_prod();
		return $x;
	}
	function notif_con_prod()
	{

		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SELECT titre  from produit_specifique');
		$sth->execute();
		$x=$sth->fetchAll();
		foreach ($x as $b)
		{foreach ($b as $i)
			return $i;
		}

	}


}

?>
	
	