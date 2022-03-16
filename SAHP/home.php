<?php
$currentPage = 'forside';
session_start();
ob_start();

if (!isset($_SESSION['logged'])) {
    header('Location: login.php');
    die();
}

$staffPerms = $_SESSION['perms'];
$user = $_SESSION['user'];

$conecG = 'work';
$_SESSION['conecFail'] = $conecG;

include 'verifyPanel.php';
masterconnect();

$players = 0;
$money = 0;

$sqlgetVeh = 'SELECT * FROM users';
$sqldataVeh = mysqli_query($dbcon, $sqlgetVeh) or die('Connection could not be established');
$users = mysqli_num_rows($sqldataVeh);

$sqlgetVeh = 'SELECT * FROM sigtelser';
$sqldataVeh = mysqli_query($dbcon, $sqlgetVeh) or die('Connection could not be established');
$sigtelser = mysqli_num_rows($sqldataVeh);

$sqlgetVeh = 'SELECT * FROM driverlicense';
$sqldataVeh = mysqli_query($dbcon, $sqlgetVeh) or die('Connection could not be established');
$driverlicense = mysqli_num_rows($sqldataVeh);

$sqlgetVeh = 'SELECT * FROM weapon';
$sqldataVeh = mysqli_query($dbcon, $sqlgetVeh) or die('Connection could not be established');
$weapon = mysqli_num_rows($sqldataVeh);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/navbar.css">
    <title>San Andreas Highway Patrol</title>
    <script>
        if (typeof module === 'object') {
            window.module = module;
            module = undefined;
        }
    </script>
    <script>
        if (window.module) {
            module = window.module;
        }
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

<body>
    <?php
    include 'nav.php'
    ?>
    <?php
    include 'footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>