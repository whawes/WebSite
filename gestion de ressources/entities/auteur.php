<?PHP
class Auteur{
	
	private $nom;
	private $prenom;
	private $informations;
	private $livres;
	function __construct($nom,$prenom,$informations,$livres){
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->informations=$informations;
		$this->livres=$livres;
		
	}
	
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
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
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setInformations($informations){
		$this->informations=$informations;
	}
	function setLivres($livres){
		$this->livres=$livres;
	}
	
	
}

?>