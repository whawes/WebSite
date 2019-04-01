<?PHP

require '../core/sujetFunction.php';
class livretF
{
	function ajouterLivreT($livreT)
	{
		$sql="insert INTO livret (Titre, Description) VALUES (:Titre, :Date)";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);
			
	        $Titre=$livreT->getTitre();
	        $Description=$livreT->getDescription();

			$req->bindValue(':Titre',$Titre);
			$req->bindValue(':Date',$Description);
			
	        $req->execute();       
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function afficherLivresT()
	{
		$sql="SElECT * From livreT";
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

	function supprimerLivresT($Titre)
	{
		$sql="delete FROM livret where Titre=:Titre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Titre',$Titre);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierLivresT($Titre,$Titre2,$Texte2)
	{
		$sql="update livret SET Description=:Texte2, Titre=:Titre2 WHERE Titre='$Titre'";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);

			$req->bindValue(':Titre2',$Titre2);
			$req->bindValue(':Texte2',$Texte2);
            $s=$req->execute();
		}
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
        }
	}
}

?>