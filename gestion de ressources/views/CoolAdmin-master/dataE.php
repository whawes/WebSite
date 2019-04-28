<?php

include "../../entities/packs.php";
include "../../core/PacksC.php";


$packs1C=new PacksC();


$result = $packs1C->GetPacksParPrix();

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);