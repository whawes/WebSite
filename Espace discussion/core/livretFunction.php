<?PHP

class livretF
{
	function ajouterLivreT($livreT)
	{
		$sql="insert INTO livret (Titre,File, Description) VALUES (:Titre, :file, :Date)";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);
			
	        $Titre=$livreT->getTitre();
	        $file=$livreT->getfile();
	        $Description=$livreT->getDescription();
	        $t=fopen($file, 'rb');
			$req->bindValue(':Titre',$Titre);
			$req->bindValue(':file',$t);
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
		$sql="SElECT * From livret";
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
	function afficherLivreTspes($id)
	{
		$sql="SElECT * From livret where ID='$id'";
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

	function recupererLivresT($id)
	{
		$sql="SElECT *,length(file) as size From livret where id='$id'";
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

	function modifierLivresT($Titre2,$Texte2)
	{
		$sql="update livret SET Description=:Texte2 WHERE ID='$Titre2'";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);

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