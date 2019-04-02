<?php
require  '../config.php';

$DB =new config();
class CommandeC{

    function Samedi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=7";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Vendredi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=6";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Jeudi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=5";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Mercredi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=4";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Mardi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=3";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Lundi(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=2";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Dimanche(){

        $sql="select count(ID_Commande) as nbr from commande where DAYOFWEEK(Date_Creation)=1";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function commandepardate(){

        $sql="select count(ID_Commande) as nbr from commande group by Date_Creation";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
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
    function Produit(){

        $sql="select (Prix_Produit * Qty_Produit) as prix from facture inner join commande on commande.ID_Commande=facture.ID_Commande where commande.Etat_Commande='Valid'";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;


        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function Email($id){

        $sql="SElECT Email From detail_commande where ID_Commande=$id";
        $DB = config::getConnexion();
        try{
            $req = $DB->prepare($sql);
            $req->execute();
            foreach ($req as $row):
                {
                    return $row['Email'];
                }
            endforeach;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
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

        $sql="SElECT c.ID_Commande,c.Date_Creation,c.Etat_Commande,d.Adresse_Street,d.Nom,d.Prenom From commande c,detail_commande d where c.ID_Commande=d.ID_Commande";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommandeday(){

        $sql="SElECT c.ID_Commande,c.Date_Creation,c.Etat_Commande,d.Adresse_Street,d.Nom,d.Prenom From commande c,detail_commande d where c.ID_Commande=d.ID_Commande and DATEDIFF(current_date ,c.Date_Creation)=0";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommande3day(){

        $sql="SElECT c.ID_Commande,c.Date_Creation,c.Etat_Commande,d.Adresse_Street,d.Nom,d.Prenom From commande c,detail_commande d where c.ID_Commande=d.ID_Commande and DATEDIFF(current_date ,c.Date_Creation)=3";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherCommandeweek(){

        $sql="SElECT c.ID_Commande,c.Date_Creation,c.Etat_Commande,d.Adresse_Street,d.Nom,d.Prenom From commande c,detail_commande d where c.ID_Commande=d.ID_Commande and DATEDIFF(current_date ,c.Date_Creation)=7";
        $DB = config::getConnexion();
        try{
            $liste=$DB->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercher($nom){

        $sql="SElECT c.ID_Commande,c.Date_Creation,c.Etat_Commande,d.Adresse_Street,d.Nom,d.Prenom From commande c,detail_commande d where c.ID_Commande=d.ID_Commande and d.Nom like '%$nom%'";
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