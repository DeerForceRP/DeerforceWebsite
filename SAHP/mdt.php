<?php
$currentPage = 'mdt';
session_start();
ob_start();
if (!isset($_SESSION['logged'])) {
    header('Location: login.php');
    die();
}
include 'verifyPanel.php';

$staffPerms = $_SESSION['perms'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>San Andreas Highway Patrol | MDT</title>
  

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <script src="https://kit.fontawesome.com/a771545788.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link rel="stylesheet" href="css/mdt.css">

  <!-- Favicon -->
  <link rel="apple-touch-icon" size="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/site.webmanifest">
  <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
</head>

<body id="page-top">

  <?php
  include 'nav.php'
  ?>

  <!-- MDT -->
  <section class="page-section" id="mdt">
    <div class="container">
        <h5>Office of the Chiefs</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Daniel Harrelson</td> <!-- Navn -->
                    <td>Cheif Of Police</td> <!-- Rank -->
                    <td>147</td> <!-- Callsing -->
                    <td>&#10004;</td> <!-- MC -->
                    <td>&#10004;</td> <!-- AIR -->
                    <td>&#10004;</td> <!-- APU -->
                    <td>&#10004;</td> <!-- UM -->
                    <td>&#10004;</td> <!-- SWAT -->
                    <td>&#10004;</td> <!-- DIVING -->
                    <td class="active">ACTIVE</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>05011190</td> <!-- Telefon nummer -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>                       
                </tr>
                <tr>
                    <td>Frank Hansen</td> <!-- Navn -->
                    <td>Chief Inspector</td> <!-- Rank -->
                    <td>148</td> <!-- Callsign -->
                    <td>&#10060;</td> <!-- MC -->
                    <td>&#10060;</td> <!-- AIR -->
                    <td>&#10060;</td> <!-- APU -->
                    <td>&#10004;</td> <!-- UM -->
                    <td>&#10060;</td> <!-- SWAT -->
                    <td>&#10060;</td> <!-- DIVING -->
                    <td class="active">ACTIVE</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>05623039</td> <!-- Telefon nummer -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>High Command</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsing -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Command Officer of Patrol</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">FTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Executive Officer of Patrol</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">FTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Patrol</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">FTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Commanding Officer of Academy</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">FTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Executive Officer of Academy</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">FTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Acitvity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- FTO -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Academy</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">K</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lars Hansen</td> <!-- Navn -->
                    <td>Cadet</td> <!-- Rank -->
                    <td>360</td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td class="active">ACTIVE</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>09068228</td> <!-- Telefon nummer -->
                    <td></td> <!-- K -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td>Robert Kowalski</td> <!-- Navn -->
                    <td>Cadet</td> <!-- Rank -->
                    <td>361</td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td class="active">ACTIVE</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>01015635</td> <!-- Telefon nummer -->
                    <td></td> <!-- K -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td>Bent Andersen</td> <!-- Navn -->
                    <td>Cadet</td> <!-- Rank -->
                    <td>362</td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td class="sl">SL</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>06071932</td> <!-- Telefon nummer -->
                    <td></td> <!-- K -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td>Jack Russel</td> <!-- Navn -->
                    <td>Cadet</td> <!-- Rank -->
                    <td>363</td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td class="active">ACTIVE</td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td>04160570</td> <!-- Telefon nummer -->
                    <td></td> <!-- K -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
        <h5>Investigation Bureau</h5>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Navn</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Callsign</th>
                    <th scope="col">MC</th>
                    <th scope="col">AIR</th>
                    <th scope="col">APU</th>
                    <th scope="col">UM</th>
                    <th scope="col">SWAT</th>
                    <th scope="col">DIVING</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Strikes</th>
                    <th scope="col">Tlf nr.</th>
                    <th scope="col">IA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- IA -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
                <tr>
                    <td></td> <!-- Navn -->
                    <td></td> <!-- Rank -->
                    <td></td> <!-- Callsign -->
                    <td></td> <!-- MC -->
                    <td></td> <!-- AIR -->
                    <td></td> <!-- APU -->
                    <td></td> <!-- UM -->
                    <td></td> <!-- SWAT -->
                    <td></td> <!-- DIVING -->
                    <td></td> <!-- Activity -->
                    <td></td> <!-- Strikes -->
                    <td></td> <!-- Telefon nummer -->
                    <td></td> <!-- IA -->
                    <?php 
                    if ($staffPerms['superUser'] == '1') {
                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>Edit</button></td>";
                    }?>
                </tr>
            </tbody>
        </table>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Navn</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Rank</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Chief Of Police</option>
                            <option>Chief Inspector</option>
                            <option>Captain</option>
                            <option>Lieutenant</option>
                            <option>Sergeant</option>
                            <option>Corporal</option>
                            <option>Senior Trooper</option>
                            <option>Detective 1st grade</option>
                            <option>Detective 2nd grade</option>
                            <option>Detective 3rd grade</option>
                            <option>Trooper</option>
                            <option>Cadet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Callsign</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">MC</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">AIR</label>
                        <select class="form-control" id="exampleFormControlSelect3">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect4">APU</label>
                        <select class="form-control" id="exampleFormControlSelect4">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect5">UM</label>
                        <select class="form-control" id="exampleFormControlSelect5">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect6">SWAT</label>
                        <select class="form-control" id="exampleFormControlSelect6">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect7">DIVING</label>
                        <select class="form-control" id="exampleFormControlSelect7">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect8">ACTIVITY</label>
                        <select class="form-control" id="exampleFormControlSelect8">
                            <option>Active</option>
                            <option>Semi-Active</option>
                            <option>LOA</option>
                            <option>SL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect9">STRIKES</label>
                        <select class="form-control" id="exampleFormControlSelect9">
                            <option>&nbsp;</option>
                            <option>X</option>
                            <option>XX</option>
                            <option>XXX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Telefon nummer</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect10">FTO</label>
                        <select class="form-control" id="exampleFormControlSelect10">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect11">K</label>
                        <select class="form-control" id="exampleFormControlSelect11">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">IA</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option>&#10004;</option>
                            <option>&#10060;</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

  <?php
  include 'footer.php'
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
    integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>