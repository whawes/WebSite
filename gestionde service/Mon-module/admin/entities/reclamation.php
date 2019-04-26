<?PHP
class Reclamation{
	private $nom;
	private $mail;
	private $msg;
	
	function __construct($nom,$mail,$msg){
		$this->nom=$nom;
		$this->mail=$mail;
		$this->tel=$msg;
		
	}
	
	function getMail(){
		return $this->mail;
	}
	function getNom(){
		return $this->nom;
	}
	function getMsg(){
		return $this->msg;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setTel($msg){
		$this->msg=$msg;
	}
	
	
}

?>