<?PHP
include "../../core/produit_specifiqueC.php";

$n=225;

    $pr=new produit_specifiqueC();

    $pr->supprimer_Produit_specifique($n);
    header('Location: demande_de_produit.html');



?>