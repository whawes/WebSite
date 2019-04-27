<?PHP
include "../../entities/reclamation.php";
include "../../core/reclamationC.php";
$n=454;
if (isset($_POST['modifier']) ){
    $rec=new reclamationC();
    var_dump($_POST['text_modifier']);
    $rec->modifierReclamation($n,$_POST['text_modifier']);
    header('Location: suivit.php');

}
else{
    echo "vérifier les champs";
}
?>