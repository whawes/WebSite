
<?PHP
include "core/reclamationC.php";

$s  = $_GET['id'];
$recl=new reclamationC();
echo $s;
var_dump($s+0);
$k=$s+0;
$t=$recl->traiter($k);
    header('Location: afficherReclamation.php');
?>