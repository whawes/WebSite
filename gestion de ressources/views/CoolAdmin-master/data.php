<?php

include "../../entities/editeur.php";
include "../../core/EditeurC.php";


$editeur1C=new EditeurC();


$result = $editeur1C->GetEditeurParVente();

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);