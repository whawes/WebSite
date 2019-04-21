<?PHP
class Commantaire
{
	private $Sujet;
	private $Date;
	private $Createur;
	private $Texte;

	function __construct($Sujet,$Date,$Createur,$Texte)
	{
		$this->Sujet=$Sujet;
		$this->Date=$Date;
		$this->Createur=$Createur;
		$this->Texte=$Texte;
	}
	
	function getSujet()
	{
		return $this->Sujet;
	}
	function setSujet($Sujet)
	{
		$this->Sujet=$Sujet;
	}

	function getDate()
	{
		return $this->Date;
	}
	function setDate($Date)
	{
		$this->Date=$Date;
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
}

?>