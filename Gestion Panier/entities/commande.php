<?php
class Commande {


    private $Qty_Commande;
    private $Prixtotal_Commande;
    private $ID_User;
    private $Etat_Commande;
    private $Date_Creation;


    public function __construct($Qty_Commande,$Prixtotal_Commande,$ID_User,$Etat_Commande,$Date_Creation){

        $this->Qty_Commande=$Qty_Commande;
        $this->Prixtotal_Commande=$Prixtotal_Commande;
        $this->ID_User=$ID_User;
        $this->Etat_Commande=$Etat_Commande;
        $this->Date_Creation=$Date_Creation;

    }


    public function getQty_Commande(){
        return $this->Qty_Commande;
    }
    public function getPrixtotal_Commande(){
        return $this->Prixtotal_Commande;
    }
    public function getID_User(){
        return $this->ID_User;
    }
    public function getEtat_Commande(){
        return $this->Qty_Commande;
    }
    public function getDate_Creation(){
        return $this->Date_Creation;
    }

    public function setQty_Commande($Qty_Commande){
        $this->Qty_Commande=$Qty_Commande;
    }
    public function setPrix_Produit($Prixtotal_Commande){
        $this->Prixtotal_Commande=$Prixtotal_Commande;
    }
    public  function setID_User($ID_User){
        $this->ID_User=$ID_User;
    }
    public function setEtat_Commande($Etat_Commande){
        $this->Etat_Commande=$Etat_Commande;
    }
    public function setDate_Creation($Date_Creation){
        $this->Date_Creation=$Date_Creation;
    }



}

?>