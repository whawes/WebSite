<?PHP
class Packs{
	
	private $nom;
	private $prix;
	private $informations;
	private $livres;
	function __construct($nom,$prix,$informations,$livres){
		
		$this->nom=$nom;
		$this->prix=$prix;
		$this->informations=$informations;
		$this->livres=$livres;
		
	}
	
	
	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}
	function getInformations(){
		return $this->informations;
	}
	
	function getLivres(){
		return $this->livres;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setInformations($informations){
		$this->informations=$informations;
	}
	function setLivres($livres){
		$this->livres=$livres;
	}
	
	
}

?>