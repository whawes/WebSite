<?php
include "../../core/notificationC.php";
include "../../config.php";

$notif=new NotificationC();
$notif->supprimerNotification((int)$_GET['id']);
var_dump( $_GET['id']);
header('Location: index.php');


?>