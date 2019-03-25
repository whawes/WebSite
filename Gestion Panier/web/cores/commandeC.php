<?php
require  '../config.php';

$DB =new config();
class CommandeC{

    function CalculNumCommande()
    {
        $sql = "select ID_Commande from commande";
        $DB = config::getConnexion();
        $req = $DB->prepare($sql);
        $NumCommande = 0;
        try {
            $req->execute();
            foreach ($req as $row):
                {
                    $NumCommande++;
                }
            endforeach;
            return $NumCommande;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function ModifierCommande($id_commande){
        $sql="UPDATE detail_commande AS d INNER JOIN commande AS c ON d.ID_Commande = c.ID_Commande SET 1=1 where c.ID_Commande=$id_commande";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ModifierEtatCommande($etat_commande,$id_commande){
        $sql="update commande set Etat_Commande=$etat_commande where ID_Commande=$id_commande";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterPricipalCommande($NumCommande){
        $sql="insert into commande (ID_Commande,Date_Creation) values (:ID_Commande,current_date)";
        $DB = config::getConnexion();
        try{

            $req=$DB->prepare($sql);
            $req->bindValue(':ID_Commande',$NumCommande);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }



    }
    function ajouterFacture($NumCommande){
        $sql="select cart.Qty_Produit,produits.Prix_Produit,produits.Nom_Produit from cart inner join produits on cart.ID_Produit=produits.ID_Produit";
        $sql1="insert into facture (ID_Commande,Qty_Produit,Prix_Produit,Nom_Produit) values (:ID_Commande,:Qty_Produit,:Prix_Produit,:Nom_Produit)";
        $sql2="Delete * from cart";
        $DB = config::getConnexion();

        try{

            $req1=$DB->prepare($sql1);
            $req=$DB->prepare($sql);
            $req->execute();
            foreach ($req as $row):
                {
                    $req1->bindValue(':ID_Commande',$NumCommande);
                    $req1->bindValue(':Qty_Produit',$row['Qty_Produit']);
                    $req1->bindValue(':Prix_Produit',$row['Prix_Produit']);
                    $req1->bindValue(':Nom_Produit',$row['Nom_Produit']);


                    $req1->execute();

                }
            endforeach;
            $req2=$DB->prepare($sql2);
            $req2->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }



    }
    function ajouterCommande($Detail_Commande,$NumCommande){
        $sql = "insert into detail_commande (ID_Commande,Adresse_Street,CP,Phone,Email,Nom,Prenom,Country,City,Type_Livraison) values (:ID_Commande,:Adresse_Street,:CP,:Phone,:Email,:Nom,:Prenom,:Country,:City,:Type_Livraison)";
        $DB = config::getConnexion();

        try{
            $req=$DB->prepare($sql);

            $id=$NumCommande;
            $as=$Detail_Commande->getAdresse_Street();
            $cp=$Detail_Commande->getCP();
            $ph=$Detail_Commande->getPhone();
            $email=$Detail_Commande->getEmail();
            $nom=$Detail_Commande->getNom();
            $prenom=$Detail_Commande->getPrenom();
            $ctry=$Detail_Commande->getCountry();
            $cty=$Detail_Commande->getCity();
            $liv=$Detail_Commande->getType_Livraison();

            $req->bindValue(':ID_Commande',$id);
            $req->bindValue(':Adresse_Street',$as);
            $req->bindValue(':CP',$cp);
            $req->bindValue(':Phone',$ph);
            $req->bindValue(':Email',$email);
            $req->bindValue(':Nom',$nom);
            $req->bindValue(':Prenom',$prenom);
            $req->bindValue(':Country',$ctry);
            $req->bindValue(':City',$cty);
            $req->bindValue(':Type_Livraison',$liv);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }


    }
    function afficherCommande(){

        $sql="SElECT ID_Commande,Date_Creation,Etat_Commande From commande where ID_User=1";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerCommande($ID){
        $sql="DELETE FROM commande where ID_Produit like $ID";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>