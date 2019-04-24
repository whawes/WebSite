<?PHP
class User{
	private $ID;
	private $Nom;
	private $DateDeNaissance;
	private $Email;
	private $MotDePasse;
	private $NumeroTelephone;
	private $Ville;
	private $Adresse;
	private $CodePostale;
	private $Role;

	function __construct($id,$nom,$datedenaissance,$email,$motdepasse,$numerotelephone,$ville,$adresse,$codepostale,$role){
		$this->ID=$id;
		$this->Nom=$nom;
		$this->DateDeNaissance=$datedenaissance;
		$this->Email=$email;
		$this->MotDePasse=$motdepasse;
		$this->NumeroTelephone=$numerotelephone;
		$this->Adresse=$adresse;
		$this->Ville=$ville;
		$this->CodePostale=$codepostale;
		$this->Role=$role;
		
	}
	
	function getID(){
		return $this->ID;
	}
	
	function getNom(){
		return $this->Nom;
	}
	function getDatedenaissance(){
		return $this->DateDeNaissance;
	}
	function getEmail(){
		return $this->Email;
	}
	function getMotdepasse(){
		return $this->MotDePasse;
	}
	function getNumerotelephone() {
		return $this->NumeroTelephone;
	}
	function getVille() {
		return $this->Ville;
	}
	function getAdresse() {
		return $this->Adresse;
	}
	function getCodepostale() {
		return $this->CodePostale;
	}
	function getRole(){
		return $this->Role;
	}
	
	function setID($id){
		$this->ID=$id;
	}
	
	function setNom($nom){
		$this->Nom=$nom;
	}
	
	function setDatedenaissance($datedenaissance){
		$this->DateDeNaissance=$datedenaissance;
	}
	function setEmail($email){
		$this->Email=$email;
	}
	function setMotdepasse($motdepasse){
		$this->MotDePasse=$motdepasse;
	}
	function setNumerotelephone($numerotelephone){
		$this->NumeroTelephone=$numerotelephone;
	}
	function setVille($ville){
		$this->Ville=$ville;
	}
	function setAdresse($adresse){
		$this->Adresse=$adresse;
	}
	function setCodepostale($codepostale){
		$this->CodePostale=$codepostale;
	}
	function setRole($role){
		$this->Role=$role;
	}
	
	
	
}

?>