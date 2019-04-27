<?PHP
include "../../core/reclamationC.php";
include "../../config.php";

if(isset($_POST['delete'])) {
    $recl=new reclamationC();

    $t=$recl->supprimerReclamation($_POST['delete_id']);
    header('Location: afficherReclamation.php');

}

/*$s  = $_GET['id'];
$recl=new reclamationC();
echo $s;
var_dump($s+0);
$k=$s+0;*/

?>