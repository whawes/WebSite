<?php
session_start();

session_destroy();

header('location:../viewsFO/login/login.html');


?>