<?PHP
class Employe{
	private $Cin;
	private $Nom;
	private $Prenom;
	private $Email;
	private $Salaire;
	function __construct($cin,$nom,$prenom,$email,$salaire){
		$this->Cin=$cin;
		$this->Nom=$nom;
		$this->Prenom=$prenom;
		$this->Email=$email;
		$this->Salaire=$salaire;
	}
	
	function getCin(){
		return $this->Cin;
	}
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getEmail(){
		return $this->Email;
	}
	function getSalaire(){
		return $this->Salaire;
	}

	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrenom($prenom){
		$this->Prenom=$prenom;
	}
	function setEmail($email){
		$this->Email=$email;
	}
	function setSalaire($salaire){
		$this->Salaire=$salaire;
	}
	
}

?>