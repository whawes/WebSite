<?php

include "../../entities/auteur.php";
include "../../core/AuteurC.php";


$auteur1C=new AuteurC();


$result = $auteur1C->GetAuteurParVente();

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);