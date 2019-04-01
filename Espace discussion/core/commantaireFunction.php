<?PHP
require '../core/sujetFunction.php';

class CommantaireF
{
	function ajouterCommantaire($Commantaire)
	{
		$sql="insert into Commentaire (Sujet,SujetCreateur,Date,Createur,Texte) values (:Sujet,:SujetCreateur,:Date,:Createur,:Texte)";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);
			
	        $Sujet=$Commantaire->getSujet();
	        $SujetCreateur=$Commantaire->getSujetCreateur();
	        $Date=$Commantaire->getDate();
	        $Createur=$Commantaire->getCreateur();
	        $Texte=$Commantaire->getTexte();

			$req->bindValue(':Sujet',$Sujet);
			$req->bindValue(':SujetCreateur',$SujetCreateur);
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
	
	function afficherCommantaires($Sujet,$SujetCreateur)
	{
		$sql="SElECT * From Commentaire where Sujet='$Sujet' AND SujetCreateur='$SujetCreateur'";
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

	function supprimerCommantaire($Sujet,$SujetCreateur,$Createur,$Texte)
	{
		$sql="delete FROM Commentaire where Sujet=:Sujet AND SujetCreateur=:SujetCreateur AND Createur=:Createur AND Texte=:Texte";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Sujet',$Sujet);
		$req->bindValue(':SujetCreateur',$SujetCreateur);
		$req->bindValue(':Createur',$Createur);
		$req->bindValue(':Texte',$Texte);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierCommantaire($Sujet,$SujetCreateur,$Createur,$Texte,$Texte2,$Date)
	{
		$sql="update Commentaire SET Texte=:Texte2, Date=:Date WHERE Sujet='$Sujet' AND SujetCreateur='$SujetCreateur' AND Createur='$Createur' AND Texte='$Texte'";
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