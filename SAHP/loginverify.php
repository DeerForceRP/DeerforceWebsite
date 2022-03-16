<?php

session_set_cookie_params(1209600);
session_start();
ob_start();

if (isset($_SESSION['logged'])) {
    header('Location: home.php');
    die();
}

include 'verifyPanel.php';
loginconnect();

if (!$dbconL) {
    echo 'Database connection error';
    setcookie('conecFail', '1');
    header('Location: index.html');
    die();
} else {
    echo 'Database connected';

    if (isset($_COOKIE['conecFail'])):
        setcookie('conecFail', '', time() - 7000000, '/');
    endif;

    setcookie('conecFail', '0');
}

$callsign = mysqli_real_escape_string($dbconL, $_POST['callsign']);
$password = mysqli_real_escape_string($dbconL, $_POST['password']);

$encPass = hash('sha256', $password);

if ($username && $password) {
    if (!isset($_SESSION['failedLogin'])) {
        $sql = "SELECT * FROM access WHERE address = '$_SERVER[REMOTE_ADDR]'";
        $sqldata = mysqli_query($dbconL, $sql) or die('Connection could not be established - LOG');

        if (mysqli_num_rows($sqldata) == 0) {
            $sqli = "INSERT INTO access (address, failed) VALUES ('$_SERVER[REMOTE_ADDR]', 0)";
            $sqlinout = mysqli_query($dbconL, $sqli) or die('Connection colud not be establised - LOG');

            $sql = "SELECT * FROM access WHERE address = '$_SERVER[REMOTE_ADDR]'";
            $sqldata = mysqli_query($dbconL, $sql) or die('Connection could not be established - LOG');
        }
        $user = $sqldata->fetch_object();

        $_SESSION['failedLogin'] = $user->failed;

        if ($user->failed == 5) {
            echo 'something went wrong';
            header('Location: locked.php');
            die();
        }
    }
    $sqlget = "SELECT * FROM users WHERE callsign = '$callsign' ";
    $res = mysqli_query($dbconL, $sqlget);

    $numrows = mysqli_num_rows($res);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $dbcallsign = $row['callsign'];
            $dbpassword = $row['password'];

            if ($row['permissions'] !== '"[]"' && $row['permissions'] !== '') {
                $return = explode('],[', $row['permissions']);

                foreach ($return as $value) {
                    $val = remove($value);
                    $newVal = explode(',', $val);
                    if ($newVal[1] == 1) {
                        $perms[$newVal[0]] = 1;
                    } else {
                        $perms[$newVal[0]] = 0;
                    }
                }
            }
        }

        // Block
        if ($callsign == $dbusername && $encPass == $dbpassword) {
            if (isset($_COOKIE['conecFail'])):
                setcookie('conecFail', '', time() - 7000000, '/');
            endif;

            setcookie('fail', '0');

            if (isset($_COOKIE['fail'])):
                setcookie('fail', '', time() - 7000000, '/');
            endif;

            $_SESSION = array();
            $_SESSION['logged'] = 1;
            $_SESSION['user'] = $dbcallsign;
            $_SESSION['perms'] = $perms;
            $_SESSION['failedLogin'] = 0;

            $sqlget = "UPDATE access SET failed = 0 WHERE address = '$_SERVER[REMOTE_ADDR]'";
            $res = mysqli_query($dbconL, $sqlget);

            if ($_SESSION['failedLogin'] >= 5) {
                header('Location: locked.php');
                die();
            } else {
                header('Location: home.php');
                die();
            }
        } else {
            echo 'Dit callsign/password var forkert';
            setcookie('fail', '1');
            $_SESSION['failedLogin'] = $_SESSION['failedLogin'] + 1;
            if ($_SESSION['failedLogin'] >= 5) {
                header('Location: locked.php');
                die();
            } else {
                header('Location: index.html');
                die();
            }
        }
    } else {
        echo 'Den bruger findes ikke';
        setcookie('fail', '1');
        $_SESSION['failedLogin'] = $_SESSION['failedLogin'] + 1;
        if ($_SESSION['failedLogin'] >= 5) {
            header('Location: locked.php');
            die();
        } else {
            header('Location: index.html');
            die();
        }
    }
} else {
    echo 'Venligst indtast et callsign/password';
    setcookie('fail', '1');
    header('Location: index.html');
    die();
}
?>