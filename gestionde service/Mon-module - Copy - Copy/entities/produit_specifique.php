<?PHP
class Produit_specifique{
  private $titre;
  private $auteur;
  private $mail;
  private $telephone;
  private $categorie;
  private $autre_info;

    function __construct($t,$a,$c,$tel,$m,$info){
        $this->titre=$t;
        $this->auteur=$a;
        $this->categorie=$c;
        $this->telephone=$tel;
        $this->mail=$m;
        $this->autre_info=$info;


    }
    function getTitre(){
        return $this->titre;
    }
    function getAuteur(){
        return $this->auteur;
    }
    function getCategorie(){
        return $this->categorie;
    }
    function getMail(){
        return $this->mail;
    }
    function getTelphone()
    {
        return $this->telephone;
    }
    function getAutre_info(){
        return $this->autre_info;
    }




    function setTitre($t){
        $this->titre=$t;
    }

    function setAuteur($a){
        $this->auteur=$a;
    }
    function setCategorie($c){
        $this->categorie=$c;
    }
    function setmail($mail){
        $this->mail=$mail;
    }
    function setTelephone($t){
        $this->telephone=$t;
    }
    function setAutre_info($info){
        $this->autre_info=$info;
    }

}

?>