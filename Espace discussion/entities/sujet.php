<?PHP
class Sujet
{
	private $Titre;
	private $Date;
	private $Note;
	private $Createur;
	private $Texte;
	private $Genre;

	function __construct($Titre,$Date,$Note,$Createur,$Texte,$Genre)
	{
		$this->Titre=$Titre;
		$this->Date=$Date;
		$this->Note=$Note;
		$this->Createur=$Createur;
		$this->Texte=$Texte;
		$this->Genre=$Genre;
	}
	
	function getTitre()
	{
		return $this->Titre;
	}
	function setTitre($Titre)
	{
		$this->Titre=$Titre;
	}

	function getDate()
	{
		return $this->Date;
	}
	function setDate($Date)
	{
		$this->Date=$Date;
	}

	function getNote()
	{
		return $this->Note;
	}
	function setNote($Note)
	{
		$this->Note=$Note;
	}

	function getCreateur()
	{
		return $this->Createur;
	}
	function setCreateur($Createur)
	{
		$this->Createur=$Createur;
	}

	function getTexte()
	{
		return $this->Texte;
	}
	function setTexte($Texte)
	{
		$this->Texte=$Texte;
	}
	
	function getGenre()
	{
		return $this->Genre;
	}
	function setGenre($Genre)
	{
		$this->Genre=$Genre;
	}
}

?>