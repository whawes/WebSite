<?PHP
include "../../entities/produit_specifique.php";
include "../../core/produit_specifiqueC.php";
$n=238;
if (isset($_POST['submit']) ){
    $pr=new produit_specifiqueC();
    $pr->modifier_Produit_specifique($n,$_POST['titre'],$_POST['auteur'],$_POST['categorie']);
header('Location: modifier_prod_spec.php');

}
else{
    echo "vérifier les champs";
}
?>