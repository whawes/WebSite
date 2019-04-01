<?PHP
include "../../entities/produit_specifique.php";
include "../../core/produit_specifiqueC.php";

if (isset($_POST['submit']) ){
        $p=new produit_specifique($_POST['titre'],$_POST[('auteur')],$_POST['categorie'],$_POST['tel'],$_POST['mail'],$_POST['autre']);

    $pr=new produit_specifiqueC();
    $pr->ajouter_produit_specifique($p);
header('Location: demande_de_produit.html');

}
else{
    echo "vérifier les champs";
}


?>