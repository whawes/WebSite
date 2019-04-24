<?PHP

class CommantaireF
{
	function ajouterCommantaire($Commantaire)
	{
		$sql="insert into Commentaire (Sujet,Date,Createur,Texte) values (:Sujet,:Date,:Createur,:Texte)";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);
			
	        $Sujet=$Commantaire->getSujet();
	        $Date=$Commantaire->getDate();
	        $Createur=$Commantaire->getCreateur();
	        $Texte=$Commantaire->getTexte();

			$req->bindValue(':Sujet',$Sujet);
			$req->bindValue(':Date',$Date);
			$req->bindValue(':Createur',$Createur);
			$req->bindValue(':Texte',$Texte);

	        $req->execute();       
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCommantaires($id)
	{
		$sql="SElECT * From Commentaire where Sujet='$id'";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerCommantaireS($Sujet)
	{
		$sql="delete FROM Commentaire where Sujet=:Sujet";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Sujet',$Sujet);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerCommantaire($Sujet,$id)
	{
		$sql="delete FROM Commentaire where Sujet=:Sujet AND ID=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Sujet',$Sujet);
		$req->bindValue(':id',$id);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCommantaire($id,$Texte2,$Date)
	{
		$sql="update commentaire SET Texte=:Texte2, Date=:Date where ID='$id'";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);

			$req->bindValue(':Texte2',$Texte2);
			$req->bindValue(':Date',$Date);
            $s=$req->execute();
		}
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
        }
	}
}

?>