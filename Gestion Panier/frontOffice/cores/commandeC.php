<?php
require  '../config.php';

$DB =new config();
class CommandeC{

    function TotalPrice()
    {
        $sql = "select sum(Qty_Produit * Prix_Produit) as nbr from facture";
        $DB = config::getConnexion();
        $req = $DB->prepare($sql);

        try {
            $req->execute();
            foreach ($req as $row):
                {
                    return $row['nbr'];
                }
            endforeach;


        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function TotalDeProduit()
    {
        $sql = "select count(ID_Produit) as nbr from cart";
        $DB = config::getConnexion();
        $req = $DB->prepare($sql);

        try {
            $req->execute();
            foreach ($req as $row):
                {
                    return $row['nbr'];
                }
            endforeach;


        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function ModifierEtat($etat,$id_commande){
        $sql="UPDATE commande set Etat_Commande=:etat where ID_Commande=$id_commande";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);

        try{
            $req->bindValue(':etat',$etat);
            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function CalculNumCommande()
    {
        $sql = "select count(ID_Commande) as nbr from commande";
        $DB = config::getConnexion();
        $req = $DB->prepare($sql);

        try {
            $req->execute();
            foreach ($req as $row):
                {
                    return $row['nbr'];
                }
            endforeach;


        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function ModifierDetailCommande($Detail_Commande,$id){
        $sql = "update detail_commande set Adresse_Street=:Adresse_Street,CP=:CP,Phone=:Phone,Nom=:Nom,Email=:Email,Prenom=:Prenom,Country=:Country,City=:City where ID_Commande=$id";
        $DB = config::getConnexion();

        try{
            $req=$DB->prepare($sql);

            $as=$Detail_Commande->getAdresse_Street();
            $cp=$Detail_Commande->getCP();
            $ph=$Detail_Commande->getPhone();
            $email=$Detail_Commande->getEmail();
            $nom=$Detail_Commande->getNom();
            $prenom=$Detail_Commande->getPrenom();
            $ctry=$Detail_Commande->getCountry();
            $cty=$Detail_Commande->getCity();



            $req->bindValue(':Adresse_Street',$as);
            $req->bindValue(':CP',$cp);
            $req->bindValue(':Phone',$ph);
            $req->bindValue(':Email',$email);
            $req->bindValue(':Nom',$nom);
            $req->bindValue(':Prenom',$prenom);
            $req->bindValue(':Country',$ctry);
            $req->bindValue(':City',$cty);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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
        $sql2="Delete from cart";
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

        $sql="SElECT ID_Commande,Date_Creation,Etat_Commande From commande";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommandespecific($id){

        $sql="SElECT ID_Commande,Date_Creation,Etat_Commande From commande where ID_Commande=$id";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherFacture($id){

        $sql="SElECT * From facture where ID_Commande=$id";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherdetailcommande($id){

        $sql="SElECT * From detail_commande where ID_Commande=$id";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherAdresse($id){

        $sql="SElECT Adresse_Street From detail_commande where ID_Commande=$id";
        $DB = config::getConnexion();
        $req=$DB->prepare($sql);
        try{
            $req->execute();
            foreach ($req as $row):
                {
                    return $row['Adresse_Street'];
                }
            endforeach;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerCommande($ID){
        $sql3="DELETE FROM facture where ID_Commande like $ID";
        $sql2="DELETE FROM detail_commande where ID_Commande like $ID";
        $sql1="DELETE FROM commande where ID_Commande like $ID";

        $DB = config::getConnexion();
        $req3=$DB->prepare($sql3);
        $req2=$DB->prepare($sql2);
        $req1=$DB->prepare($sql1);

        try{
            $req3->execute();
            $req2->execute();
            $req1->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}
?>