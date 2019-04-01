<?php
include "../../core/produit_specifiqueC.php";
$s  = $_GET['id'];
$k=$s+0;
$p= new produit_specifiqueC();
$nmo=$p->recuperer_numero_tel($k);

 	$m=$nmo;
 	$msg="produit specifique";
 	$mobileno="+216".$m;
 	echo
     var_dump($mobileno);
     var_dump($msg); 
   
echo "fff";
	// Authorisation details.
	$username = "jmaiomar184@gmail.com";
	$hash = "8f6a2e4fb3f6ea06c086713f68ccc20b60236071d8e42d7859ffeb70dc54e3b5";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobileno"; // A single number or a comma-seperated list of numbers
	$message = "$msg";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

header('Location: afficher_produit_specii.php');
 
?>