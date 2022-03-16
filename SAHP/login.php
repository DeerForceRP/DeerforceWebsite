<!DOCTYPE html>
<html>
    <head>
        <title>San Andreas Highway Patrol | Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="apple-touch-icon" size="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="img/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                h = checkTime(h);
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            
            function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
        </script>
    </head>
    <body>
        <center><div id="txt"></div></center>
        <script>startTime();</script>
        <div id="login">
            <form action="loginverify.php" method="post">
                <div class="login-block">
                    <h1>SAHP Login</h1>
                    <input type="text" value="" placeholder="Callsign" id="callsign" name="callsign">
                    <input type="password" value="" placeholder="Password" id="password" name="password">
                    <?php
                    if (isset($_COOKIE['conecFail']) && $_COOKIE['conecFail'] == '1') {
                        echo '<div style="color:red"><center>Database connection failed!</center></div>';
                    }

                    if (isset($_COOKIE['fail']) && $_COOKIE['fail'] == '1') {
                        echo '<div style="color:red"><center>Callsign eller Passowrd var forkert.</center></div>';
                    }
                    ?>
                    <button>Log in</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>