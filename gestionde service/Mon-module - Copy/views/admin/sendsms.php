<?php
include "../../core/produit_specifiqueC.php";
include "../../config.php";

if (isset($_POST['envoyer']) ) {
    $p = new produit_specifiqueC();
    $nmo = $p->recuperer_numero_tel($_POST['id']);
     $p->traiter_prod($_POST['id']);
    $m = $nmo;
    $msg = $_POST['msg'];
    $messagee="bonjour Mr,Mrs, votre livre  ".$_POST['produit']." de ".$_POST['auteur']." est acheter".$msg;
    $mobileno = "+216" . $m;
    var_dump($mobileno);
    var_dump($msg);


    // Authorisation details.
    $username = "jmaiomarr6@gmail.com";
    $hash = "f777e86bf22c0d86574e793ed5e2d150badffa1a035123d2c2a0622eaeaf2e03";
    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = $mobileno; // A single number or a comma-seperated list of numbers
    $message = "$messagee";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    echo "$result";
    echo "$message";
    echo "$numbers";

//header('Location: affiche_produit_sepcii.php');
}
?>