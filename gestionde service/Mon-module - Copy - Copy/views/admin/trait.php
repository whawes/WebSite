
<?PHP
include "../../core/reclamationC.php";

if (isset($_POST['envoyer']) ) {
    $recl = new reclamationC();
    $t = $recl->traiter($_POST['delete_id']);

    mail($recl->recuperer_mail($_POST['delete_id']), "Reclamation", $_POST['msg']);

    header('Location: afficherReclamation.php');

}



?>

