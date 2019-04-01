<?php
function notif(){
    $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
    $sth = $dbh->prepare('SELECT count(*) as total from reclamation where traitement="non"');
    $sth->execute();
    $x=$sth->fetchAll();
foreach ($x as $b)
{foreach ($b as $i)
return $i+0;
}

}
function notif_con()
{

    $dbh = new \PDO('mysql:host=localhost;dbname=atlier_php;charset=utf8', 'root', '');
    $sth = $dbh->prepare('SELECT nom  from reclamation where traitement="non"');
    $sth->execute();
    $x=$sth->fetchAll();
    foreach ($x as $b)
    {foreach ($b as $i)
        return $i;
    }

}

    ?>

