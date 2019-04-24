<?php
class Panier {

        private $ID_Produit;
         private $Nom_Produit;
        private $Qty_Produit;
        private $Prix_Produit;


            public function __construct($ID_Produit,$Nom_Produit,$Qty_Produit,$Prix_Produit){
                $this->ID_Produit=$ID_Produit;
                $this->Nom_Produit=$Nom_Produit;
                $this->Qty_Produit=$Qty_Produit;
                $this->Prix_Produit=$Prix_Produit;

            }

public function getID_Produit(){
            return $this->ID_Produit;
            }
    public function getNom_Produit(){
        return $this->Nom_Produit;
    }
public function getQty_Produit(){
            return $this->Qty_Produit;
            }
    public function getPrix_Produit(){
            return $this->Prix_Produit;
            }
    public  function setID_Produit($ID_Produit){
            $this->ID_Produit=$ID_Produit;
            }
    public  function setNom_Produit($Nom_Produit){
        $this->Nom_Produit=$Nom_Produit;
    }
    public function setQty_Produit($Qty_Produit){
            $this->Qty_Produit;
            }
    public function setPrix_Produit($Prix_Produit){
            $this->Prix_Produit=$Prix_Produit;
            }



}

?>