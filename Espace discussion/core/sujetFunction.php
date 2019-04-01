<?PHP

require "../config.php";
class SujetF
{
	function ajouterSujet($sujet)
	{
		$sql="insert into sujet (Titre,Date,Note,Createur,Texte,Genre) values (:Titre,:Date,:Note,:Createur,:Texte,:Genre)";
		$db = config::getConnexion();
		try
		{
	        $req=$db->prepare($sql);
			
	        $Titre=$sujet->getTitre();
	        $Date=$sujet->getDate();
	        $Note=$sujet->getNote();
	        $Createur=$sujet->getCreateur();
	        $Texte=$sujet->getTexte();
	        $Genre=$sujet->getGenre();

			$req->bindValue(':Titre',$Titre);
			$req->bindValue(':Date',$Date);
			$req->bindValue(':Note',$Note);
			$req->bindValue(':Createur',$Createur);
			$req->bindValue(':Texte',$Texte);
			$req->bindValue(':Genre',$Genre);
			
	        $req->execute();       
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherSujets()
	{
		$sql="SElECT * From sujet";
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

		function afficherSujetsNom()
	{
		$sql="SElECT * From sujet order by titre asc";
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

		function afficherSujetsDate()
	{
		$sql="SElECT * From sujet order by date DESC";
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

		function afficherSujetsNote()
	{
		$sql="SElECT * From sujet order by Note DESC";
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

	function supprimerSujet($Titre,$Createur)
	{
		$sql="delete FROM sujet where Titre=:Titre AND Createur=:Createur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Titre',$Titre);
		$req->bindValue(':Createur',$Createur);
		try
		{
            $req->execute();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierSujet($Titre,$Createur,$Titre2,$Genre,$Texte)
	{
		if ((!empty($Titre2))&&(empty($Genre))&&(empty($Texte)))
		{
			$sql="update sujet SET Titre=:Titre2 WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Titre2',$Titre2);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
		elseif ((!empty($Titre2))&&(!empty($Genre))&&(empty($Texte)))
		{
			$sql="update sujet SET Titre=:Titre2 , Genre=:Genre WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Titre2',$Titre2);
				$req->bindValue(':Genre',$Genre);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
		elseif ((!empty($Titre2))&&(empty($Genre))&&(!empty($Texte)))
		{
			$sql="update sujet SET Titre=:Titre2 , Texte=:Texte WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Titre2',$Titre2);
				$req->bindValue(':Texte',$Texte);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}

		elseif ((empty($Titre2))&&(!empty($Genre))&&(empty($Texte)))
		{
			$sql="update sujet SET Genre=:Genre WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Genre',$Genre);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
		elseif ((empty($Titre2))&&(!empty($Genre))&&(!empty($Texte)))
		{
			$sql="update sujet SET Genre=:Genre , Texte=:Texte WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Texte',$Texte);
				$req->bindValue(':Genre',$Genre);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
		elseif ((empty($Titre2))&&(empty($Genre))&&(!empty($Texte)))
		{
			$sql="update sujet SET Texte=:Texte WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Texte',$Texte);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
		elseif ((!empty($Titre2))&&(!empty($Genre))&&(!empty($Texte)))
		{
			$sql="update sujet SET Titre=:Titre2 , Genre=:Genre , Texte=:Texte WHERE Createur='$Createur' AND Titre='$Titre'";
			$db = config::getConnexion();
			try
			{		
		        $req=$db->prepare($sql);
				$req->bindValue(':Titre2',$Titre2);
				$req->bindValue(':Texte',$Texte);
				$req->bindValue(':Genre',$Genre);
					
	            $s=$req->execute();
			}
	        catch (Exception $e)
	        {
	            echo " Erreur ! ".$e->getMessage();
	        }
		}
	}

	function recupererSujet($Createur,$Titre)
	{
		$sql="SElECT * from sujet where Createur='$Createur' AND Titre='$Titre'";
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

	function recupererSujets($Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur'";
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

	function recupererSujetsNom($Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur' order by titre asc";
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

	function recupererSujetsDate($Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur' order by date DESC";
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

	function recupererSujetsNote($Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur' order by note DESC";
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

	function upvote($Titre,$Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur' AND Titre='$Titre'";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			foreach ($liste as $row)
			{
        		$note=$row['Note']+1;
    		}
    		$sql2="update sujet SET Note=:Note WHERE Createur='$Createur' AND Titre='$Titre'";
			$db2 = config::getConnexion();
			try
			{
		        $req=$db2->prepare($sql2);
				$req->bindValue(':Note',$note);
					
	            $s=$req->execute();
			}
			catch (Exception $e)
        	{
            	die('Erreur: '.$e->getMessage());
        	}
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function downvote($Titre,$Createur)
	{
		$sql= "SElECT * FROM sujet WHERE Createur='$Createur' AND Titre='$Titre'";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			foreach ($liste as $row)
			{
        		$note=$row['Note']-1;
    		}
    		$sql2="update sujet SET Note=:Note WHERE Createur='$Createur' AND Titre='$Titre'";
			$db2 = config::getConnexion();
			try
			{		
		        $req=$db2->prepare($sql2);
				$req->bindValue(':Note',$note);
					
	            $s=$req->execute();
			}
			catch (Exception $e)
        	{
            	die('Erreur: '.$e->getMessage());
        	}
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function afficherSujetsRe($txt)
	{
		$sql="SElECT * From sujet where Titre Like '%$txt%' or Createur Like '%$txt%' or Genre Like '%$txt%'";
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

	function afficherSujetsReNom($txt)
	{
		$sql="SElECT * From sujet where Titre Like '%$txt%' or Createur Like '%$txt%' or Genre Like '%$txt%' order by titre asc";
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

	function afficherSujetsReDate($txt)
	{
		$sql="SElECT * From sujet where Titre Like '%$txt%' or Createur Like '%$txt%' or Genre Like '%$txt%' order by date DESC";
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

	function afficherSujetsReNote($txt)
	{
		$sql="SElECT * From sujet where Titre Like '%$txt%' or Createur Like '%$txt%' or Genre Like '%$txt%' order by note DESC";
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
}

?>