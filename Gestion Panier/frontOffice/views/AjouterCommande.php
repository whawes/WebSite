<?PHP
include "../entities/cmnd.php";
include "../cores/commandeC.php";
$Commande = new CommandeC();
/*ajouter au table detail_commmande */
if(isset($_POST['place_order']) && $Commande->TotalDeProduit()!=0) {
    if (isset($_POST['as']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cp']) and isset($_POST['ctry']) and isset($_POST['cty']) and isset($_POST['ph'])and isset($_POST['payment'])) {
        $Detail_Commande = new Detail_Commande($_POST['as'], $_POST['cp'], $_POST['ph'], $_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['ctry'], $_POST['cty'], $_POST['payment']);

        var_dump($Detail_Commande);


        $Commande->ajouterCommande($Detail_Commande,$Commande->CalculNumCommande());
        $Commande->ajouterFacture($Commande->CalculNumCommande());
        $Commande->ajouterPricipalCommande($Commande->CalculNumCommande());


    } else {
        echo "vérifier les champs";
    }
}else {
    echo "erreur de button1";
}

header('location:commande.php');
?>