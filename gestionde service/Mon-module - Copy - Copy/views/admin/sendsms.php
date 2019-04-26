<?php
include "../../core/produit_specifiqueC.php";

if (isset($_POST['envoyer']) ) {
    $p = new produit_specifiqueC();
    $nmo = $p->recuperer_numero_tel($_POST['delete_id']);

    $m = $nmo;
    $msg = $_POST['msg'];
    $mobileno = "+216" . $m;
    var_dump($mobileno);
    var_dump($msg);


    // Authorisation details.
    $username = "jmaiomar184@gmail.com";
    $hash = "3cc1d94f781c15351b7af88a3d74b169c2caa796ed3f2c9f3363d2975768abd6";

    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "TXTLCL"; // This is who the message appears to be from.
    $numbers = $mobileno; // A single number or a comma-seperated list of numbers
    $message = "$msg";
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

header('Location: affiche_produit_sepcii.php');
}
?>