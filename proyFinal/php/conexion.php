<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$user = "arquiweb";
$password = "Arquiw3b";
$host = "cemapp.cnav7rvnbde6.us-east-2.rds.amazonaws.com";
$openSession = new mysqli($host, $user, $password);
