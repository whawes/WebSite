<?php 
include "../entities/employe.php";
include "../core/employee.php";

$Employee1=new Employee() ;
if (isset($_POST["modifier"]))
{

$Tabemploye=$Employee1->modifierEmploye($_POST['Salaire'],$_GET['id']);
}
if (isset($_POST["supprimer"]))
{

$Tabemploye=$Employee1->supprimerEmploye($_GET['id']);
}




header('Location: tableemployee.php');

?>