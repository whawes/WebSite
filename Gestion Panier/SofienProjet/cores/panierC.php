<?php
//require  '../config.php';
$DB =new config();
class PanierC{
    function user($nom,$mdp){
        $sql="select * from user where mail='$nom' and mdp='$mdp'";
        $DB = config::getConnexion();

        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function totalPanier(){
        $sql="select Prix_Produit,Qty_Produit from cart";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);
$somme=0;
        try{
            $req->execute();
            foreach ($req as $produit):
                {
                     $somme+=$produit['Prix_Produit']*$produit['Qty_Produit'];
                }
            endforeach;
return $somme;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function nbrProduit(){
        $sql="select count(ID_Produit) as nbr from cart ";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);


        try{

                 $req->execute();
                 foreach ($req as $row):
                     {
                         return $row['nbr'];
                     }
            endforeach;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function subtotalPanier(){
        $sql="select Prix_Produit from cart";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);
        $somme=0;
        try{
            $req->execute();
            foreach ($req as $produit):
                {
                   $somme+= $produit['Prix_Produit'];
                }
            endforeach;

return $somme;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierPanier($qty,$ID){
        $sql="update cart set Qty_Produit=$qty where ID_Produit=$ID";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterProduit($ID){
        $sql1="select Qty_Produit from cart where ID_Produit=$ID";
        $DB = config::getConnexion();
            $req1=$DB->prepare($sql1);

        var_dump($req1->execute());
        foreach ($req1 as $produit):
            {
                $qt_p=$produit['Qty_Produit'];


            }
        endforeach;
            if($qt_p==null ) {
                $sql2="select ID_Produit,Prix_Produit from produits where ID_Produit=$ID";
                $req2 = $DB->prepare($sql2);
                $req2->execute();
                foreach ($req2 as $produit):
                    {
                        $id_p=$produit['ID_Produit'];
                        $prix_p=$produit['Prix_Produit'];
                        $qt_p=1;
                    }
                endforeach;

                $sql = "insert into cart (ID_Produit,Qty_Produit,Prix_Produit) values (:ID_Produit, :Qty_Produit,:Prix_Produit)";

                try {
                    $req = $DB->prepare($sql);

                    $ID_Produit = $id_p;
                    $Qty_Produit = $qt_p;
                    $Prix_Produit =$prix_p;

                    $req->bindValue(':ID_Produit', $ID_Produit);
                    $req->bindValue(':Qty_Produit', $Qty_Produit);
                    $req->bindValue(':Prix_Produit', $Prix_Produit);


                    $req->execute();

                } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
                }
            }
            else{

                $qt_p++;
                $sql3="UPDATE cart SET Qty_Produit =$qt_p WHERE ID_Produit=$ID";
                try {
                    $req3 = $DB->prepare($sql3);
                    $req3->execute();

                } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
                }
            }

    }

    function afficherPanier(){

        $sql="SElECT * From produits inner join cart where produits.ID_Produit=cart.ID_Produit";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function AjouterPanier($panier,$iduser){
        $sql="insert into cart (ID_Produit,Nom_Produit,Qty_Produit,Prix_Produit,ID_User) values (:ID_Produit, :Nom_Produit, :Qty_Produit,:Prix_Produit, :ID_User) ";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $id=$panier->getID_Produit();
            $nom=$panier->getNom_Produit();
            $qty=$panier->getQty_Produit();
            $prix=$panier->getPrix_Produit();

            $req->bindValue(':ID_Produit',$id);
            $req->bindValue(':Nom_Produit',$nom);
            $req->bindValue(':Qty_Produit',$qty);
            $req->bindValue(':Prix_Produit',$prix);
            $req->bindValue(':ID_User',$iduser);

            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerPanier($ID){
        $sql="DELETE FROM cart where ID_Produit like $ID";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherProduit(){

        $sql="SElECT * From produits ";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>