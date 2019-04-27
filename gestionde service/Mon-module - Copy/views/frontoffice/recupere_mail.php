<?PHP
include "trait.php";

mail("$mail", "Reclamation", "aaa");
$msg= $_POST['msg'];
echo $msg;

header('Location: afficherReclamation.php');
?>