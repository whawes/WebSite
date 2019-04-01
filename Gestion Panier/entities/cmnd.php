<?php
class Detail_Commande {

    private $ID_Commande;
    private $Adresse_Street;
    private $CP;
    private $Phone;
    private $Email;
    private $Nom;
    private $Prenom;
    private $Country;
    private $City;
    private $Type_Livraison;


    public function __construct($Adresse_Street,$CP,$Phone,$Email,$Nom,$Prenom,$Country,$City,$Type_Livraison){

        $this->Adresse_Street=$Adresse_Street;
        $this->CP=$CP;
        $this->Phone=$Phone;
        $this->Email=$Email;
        $this->Nom=$Nom;
        $this->Prenom=$Prenom;
        $this->Country=$Country;
        $this->City=$City;
        $this->Type_Livraison=$Type_Livraison;

    }

    public function getID_Commande(){
        return $this->ID_Commande;
    }
    public function getAdresse_Street(){
        return $this->Adresse_Street;
    }
    public function getCP(){
        return $this->CP;
    }
    public function getPhone(){
        return $this->Phone;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getNom(){
        return $this->Nom;
    }
    public function getPrenom(){
        return $this->Prenom;
    }
    public function getCountry(){
        return $this->Country;
    }
    public function getCity(){
        return $this->City;
    }
    public function getType_Livraison(){
        return $this->Type_Livraison;
    }
    public  function setID_Commande($ID_Commande){
        $this->ID_Commande=$ID_Commande;
    }
    public function setAdresse_Street($Adresse_Street){
        $this->Adresse_Street=$Adresse_Street;
    }
    public function setCP($CP){
        $this->CP=$CP;
    }
    public  function setPhone($Phone){
        $this->Phone=$Phone;
    }
    public function setEmail($Email){
        $this->Email=$Email;
    }
    public function setNom($Nom){
        $this->Nom=$Nom;
    }
    public function setPrenom($Prenom){
        $this->Prenom=$Prenom;
    }
    public  function setCountry($Country){
        $this->Country=$Country;
    }
    public function setCity($City){
        $this->City=$City;
    }
    public function setType_Livraison($Type_Livraison){
        $this->Type_Livraison=$Type_Livraison;
    }



}

?>