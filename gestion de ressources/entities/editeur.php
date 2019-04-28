<?PHP
class Editeur{
	
	private $id;
	private $nomMaison;
	private $informations;
	private $livres;
	private $mail;
	private $telephone;
	private $adresse;
	private $image;
	function __construct($nomMaison,$informations,$livres,$mail,$telephone,$adresse){
		
		$this->nomMaison=$nomMaison;
		$this->informations=$informations;
		$this->livres=$livres;
		$this->mail=$mail;
		$this->telephone=$telephone;
		$this->adresse=$adresse;
		
	}

	function setImage($image){
		$this -> image = $image;
		return $this;
	}

	function getImage(){
		return $this->image;
	}
	
	function getNomMaison(){
		return $this->nomMaison;
	}
	function getInformations(){
		return $this->informations;
	}
	
	function getLivres(){
		return $this->livres;
	}
	function getMail(){
		return $this->mail;
	}
	function getTelephone(){
		return $this->telephone;
	}
	function getAdresse(){
		return $this->adresse;
	}
	
	function setNomMaison($nomMaison){
		$this->nomMaison=$nomMaison;
	}
	function setInformations($informations){
		$this->informations=$informations;
	}
	function setLivres($livres){
		$this->livres=$livres;
	}
	function setMail($mail){
		$this->mail=$mail;
		
	}
	function setTelephone($telephone){
		
		$this->telephone=$telephone;
		
	}
	function setAdresse($adresse){
		
		$this->adresse=$adresse;
	}
	
	
	
	
}

?>