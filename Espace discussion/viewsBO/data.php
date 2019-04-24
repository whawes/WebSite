<?php

require "../config.php";
require '../core/livretFunction.php';

$sujetF=new SujetF();
$DB = new config();

$result = $sujetF->stat();

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//now print the data
print json_encode($data);