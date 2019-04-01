<?PHP
class LivreT
{
	private $Titre;
	private $Description;

	function __construct($Titre,$Description)
	{
		$this->Titre=$Titre;
		$this->Description=$Description;
	}
	
	function getTitre()
	{
		return $this->Titre;
	}
	function setTitre($Titre)
	{
		$this->Titre=$Titre;
	}

	function getDescription()
	{
		return $this->Description;
	}
	function setDescription($Description)
	{
		$this->Description=$Description;
	}
}

?>