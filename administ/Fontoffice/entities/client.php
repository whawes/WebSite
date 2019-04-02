<?PHP
class Client{
	private $Nom;
	private $Prenom;
	private $Datenaissance;
	private $Email;
	private $Motdepasse;
	private $Numtel;
	private $Ville;
	private $Adresse;
	private $CodePostale;

	function __construct($nom,$prenom,$datenaissance,$email,$motdepasse,$numtel,$ville,$adresse,$codepostale){
		$this->Nom=$nom;
		$this->Prenom=$prenom;
		$this->Datenaissance=$datenaissance;
		$this->Email=$email;
		$this->Motdepasse=$motdepasse;
		$this->Numtel=$numtel;
		$this->Ville=$ville;
		$this->Adresse=$adresse;
		$this->CodePostale=$codepostale;

	}
	
	
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getdate(){
		return $this->Datenaissance;
	}
	function getemail(){
		return $this->Email;
	}
	function getmotdepasse(){
		return $this->Motdepasse;
	}
	function getnumtel() {
		return $this->Numtel;
	}
	function getville() {
		return $this->Ville;
	}
	function getadresse() {
		return $this->Adresse;
	}
	function getcodepostale() {
		return $this->CodePostale;
	}
	function setNom($nom){
		$this->Nom=$nom;
	}
	function setPrenom($prenom){
		$this->Prenom=$prenom;
	}
	function setdatenaissance($datenaissance){
		$this->Datenaissance=$datenaissance;
	}
	function setemail($email){
		$this->Email=$email;
	}
	function setmotdepasse($motdepasse){
		$this->Motdepasse=$motdepasse;
	}
	function setnumtel($numtel){
		$this->Numtel=$numtel;
	}
	function setville($ville){
		$this->Ville=$ville;
	}
	function setadresse($adresse){
		$this->Adresse=$adresse;
	}
	function setcodepostale($codepostale){
		$this->CodePostale=$codepostale;
	}
	
	
}

?>