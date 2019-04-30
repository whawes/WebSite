<?PHP
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
	$sql="SElECT * From reclamation where traitement='non'";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
	function afficherReclamtion_traiter(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation where traitement='oui'";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherReclamtion_tri($s){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM reclamation  WHERE traitement='non' and (nom like '%$s%' or mail like '%$s%')  ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherReclamtion_recherche($s){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM reclamation  WHERE traitement='oui' and (nom like '%$s%' or mail like '%$s%')  ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	/*function afficherReclamtion_a_modifier($s){
		$dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
		$sth = $dbh->prepare('SElECT msg From reclamation where id=:s');
		$sth->bindValue(':s',$s);

		$sth->execute();

		$x = $sth->fetchAll();
		foreach ($x as $b) {
			foreach ($b as $i)
				return $i ;
		}
	}*/
	function afficherReclamtion_id(){
		$sql='SELECT * FROM `reclamation` WHERE traitement like "non"';
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherReclamtion_id_traiter(){
		$sql="SElECT * From reclamation where traitement='oui' order by id asc ";
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
		$sql="SElECT * From reclamation where traitement='non' order by nom asc ";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function afficherReclamtion_nom_traiter(){
		$sql="SElECT * From reclamation where traitement='oui' order by nom asc ";
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
	/*function notif_prod()
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
	/*function notification()
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

	}*/

	function recuperer_user($ad){
		$sql="SELECT * from user where mail=$ad";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }}
	function afficher_user($mail,$mdp){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From users where user_email='$mail' and user_pass='$mdp'";
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
	
	