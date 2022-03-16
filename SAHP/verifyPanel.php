<?php

include "functions.php";

function masterconnect() {
    global $dbcon;
    $dbcon = mysqli_connect('localhost', 'root', '', 'sahp', '3306') or die ('Database connection failed');
}

function loginconnect() {
    global $dbconL;
    $dbconL = mysqli_connect('localhost', 'root', '', 'sahp', '3306');
}

function Rconconnect() {
    global $rcon;
    $rcon = new \Nizarii\ArmaRConClass\ARC('localhost', 0, '0');
}

global $DBHost;
$DBHost = 'localhost';
global $DBUser;
$DBUser = 'root';
global $DBPass;
$DBPass = '';
global $DBName;
$DBName = 'sahp';

global $RconHost;
$RconHost = 'localhost';
global $RconPort;
$RconPort = 0;
global $RconPass;
$RconPass = '0';

global $maxCop;
$maxCop = 0;
global $maxMedic;
$maxMedic = 0;
global $maxAdmin;
$maxAdmin = 0;
global $maxDonator;
$maxDonator = 0;

global $apiUser;
$apiUser = 'default';
global $apiPass;
$apiPass = 'password';
global $apiEnable;
$apiEnable = 0;

?>