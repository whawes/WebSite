<?PHP
class Reclamation{
	private $nom;
	private $mail;
	private $msg;
	
	function __construct($nom,$mail,$msgg){
		$this->nom=$nom;
		$this->mail=$mail;
		$this->msg=$msgg;
		
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
	function setMsg($msgg){
		$this->msg=$msgg;
	}
	
	
}

?>
