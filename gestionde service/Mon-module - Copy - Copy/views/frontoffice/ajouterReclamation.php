<?PHP
include "../../entities/reclamation.php";
include "../../core/reclamationC.php";

if (isset($_POST['nom']) and isset($_POST[('mail')])  and isset($_POST['msg']) ){
    $rec=new reclamation($_POST['nom'],$_POST['mail'],$_POST['msg']);
//Partie2
    /*
    var_dump($employe1);
    }
    */
//Partie3
    $recl=new reclamationC();
    $recl->ajouterReclamation($rec);
    $_SESSION['message'] = "Address updated!";
header('Location: contact.html');

}
else{
    echo "vérifier les champs";
}


?>