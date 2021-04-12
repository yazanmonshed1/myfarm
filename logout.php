<?php

require_once("etc/config.php");
$objUser= new Users();
$objUser->logout();
 session_destroy();  

    header("location:index.php");
    exit;
?>