<?PHP
include "config.php";
class produit_specifiqueC
{

    function ajouter_produit_specifique($Produit_specifique)
    {
        $sql = "INSERT INTO `produit_specifique` (`Titre`, `auteur`, `categorie`, `autre_info`, `telephone`, `mail`) values (:titre,:auteur,:categorie,:autre_info,:telephone,:mail )";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $titre = $Produit_specifique->getTitre();
            $auteur = $Produit_specifique->getAuteur();
            $categorie = $Produit_specifique->getCategorie();
            $mail = $Produit_specifique->getMail();
            $telephone = $Produit_specifique->getTelphone();
            $autre_info = $Produit_specifique->getAutre_info();
            $req->bindValue(':auteur', $auteur);
            $req->bindValue(':titre', $titre);
            $req->bindValue(':categorie', $categorie);
            $req->bindValue(':autre_info', $autre_info);
            $req->bindValue(':mail', $mail);
            $req->bindValue(':telephone', $telephone);


            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

    }

    function afficher_Produit_specifique()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql = "SElECT * From produit_specifique  ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficher_Produit_specifique_titre()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From produit_specifique order by Titre asc ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficher_Produit_specifique_auteur()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From produit_specifique order by auteur asc ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficher_Produit_specifique_categorie()
    {
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From produit_specifique order by categorie asc ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function supprimer_Produit_specifique($id)
    {
        $sql = "DELETE FROM produit_specifique where id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifier_Produit_specifique($s, $t, $a, $c)
    {
        $sql = "UPDATE `produit_specifique` SET `Titre` = :t, `auteur` = :a, `categorie` = :c WHERE `produit_specifique`.`id` = :s";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':s', $s);
        $req->bindValue(':t', $t);
        $req->bindValue(':a', $a);
        $req->bindValue(':c', $c);

        try {
            $req->execute();

        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function notif()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from reclamation where traitement="non"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }
    function notif_prod()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique ');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }
    function notification()
    {
        $x=$this->notif()+$this->notif_prod();
        return $x;
    }
    function notif_con_prod()
    {

        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT titre  from produit_specifique');
        $sth->execute();
        $x=$sth->fetchAll();
        foreach ($x as $b)
        {foreach ($b as $i)
            return $i;
        }

    }

    function cat1()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique where categorie="Roman"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }

    function cat2()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique where categorie="Bande dessinee"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }

    function cat3()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique where categorie="Roman-amour"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }

    function cat4()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique where categorie="Fantastique"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }

    function cat5()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT count(*) as total from produit_specifique where categorie="Science-fiction"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }

    }

    function notif_con()
    {

        $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
        $sth = $dbh->prepare('SELECT nom  from reclamation where traitement="non"');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i;
        }

    }

    function recuperer_numero_tel($id)
    {
        $dbh = config::getConnexion();

        $sth = $dbh->prepare('SELECT telephone FROM `produit_specifique` WHERE id=:id');
        $sth->execute();
        $x = $sth->fetchAll();
        foreach ($x as $b) {
            foreach ($b as $i)
                return $i + 0;
        }


    }
    function afficherProduit_specifique_a_modifier($s){
        $sql = "SElECT Titre,auteur,categorie From produit_specifique where id=$s ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>

