<?PHP
class LivreT
{
	private $Titre;
	private $Description;
	private $file;

	function __construct($Titre,$Description,$file)
	{
		$this->Titre=$Titre;
		$this->Description=$Description;
		$this->file=$file;
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

	function getfile()
	{
		return $this->file;
	}
	function setfile($file)
	{
		$this->file=$file;
	}
}

?>