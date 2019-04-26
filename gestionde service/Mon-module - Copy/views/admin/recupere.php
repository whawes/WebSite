<?php
function re()
{
    $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
    $sth = $dbh->prepare('SELECT telephone FROM `produit_specifique` WHERE id=225');
    $sth->execute();
    $x = $sth->fetchAll();
    foreach ($x as $b) {
        foreach ($b as $i)
            return $i + 0;
    }
}
echo  re();

?>