<?PHP
/*include "../entities/cmnd.php";
include "../cores/commandeC.php";*/
require '../include.php';

$Commande = new CommandeC();
$panierC = new PanierC();
session_start();



/*ajouter au table detail_commmande */
if(isset($_POST['place_order']) && (!empty($_SESSION['cart']))) {
    if (isset($_POST['as']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cp']) and isset($_POST['ctry']) and isset($_POST['cty']) and isset($_POST['ph'])and isset($_POST['payment'])) {
        $Detail_Commande = new Detail_Commande($_POST['as'], $_POST['cp'], $_POST['ph'], $_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['ctry'], $_POST['cty'], $_POST['payment']);
        foreach($_SESSION['cart'] as $keys => $values) {
            $panier = new Panier($values['id'],$values['nom'],$values['qty'],$values['prix']);
            var_dump($panier);
            $panierC->AjouterPanier($panier, $_SESSION['id']);


        }
        unset($_SESSION['cart']);
        var_dump($Detail_Commande);

        $Commande->ajouterPricipalCommande($Commande->CalculNumCommande(),$_SESSION['id']);
        $Commande->ajouterCommande($Detail_Commande,$Commande->CalculNumCommande()-1);
        $Commande->ajouterFacture($Commande->CalculNumCommande()-1);



    } else {
        echo "vérifier les champs";
    }
}else {
    echo "erreur de button1";
}

header('location:commande.php');
?>