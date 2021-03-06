<?php
session_start();
ob_start();

if (!isset($_SESSION['logged'])) {
    header('Location: login.php');
    die();
}

$staffPerms = $_SESSION['perms'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>San Andreas Highway Patrol | Politi lommeregner</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Custom fonts -->
        <script src="https://kit.fontawesome.com/a771545788.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
            type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles -->
        <link rel="stylesheet" href="css/agency.min.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">

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

        <!-- Calulator files -->
        <script src="./Calculator_files/jquery.min.js"></script>
        <script src="./Calculator_files/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="./Calculator_files/popper.min.js"></script>
        <link rel="stylesheet" href="./Calculator_files/style_keyvalue.css">
        <link href="./Calculator_files/icon" rel="stylesheet">
        <script src="./Calculator_files/script_keyvalue.js"></script>
        <!-- <script src="Calculator_files/script_loadtable.js"></script> -->
    </head>

    <body>
        <?php
        include 'nav.php'
        ?>
        <div class="container-fluid site">
            <div class="row">
                <div class="col-lg-8 charge-list">

                    <div id="myPopup" class="myPopup">Hey!</div>
                    <div id="myPopup2" class="myPopup two">Hey!</div>
                    <div id="myPopup3" class="myPopup three">Hey!</div>
                    <div id="myPopup4" class="myPopup four">Hey!</div>

                    <table class="table table-bordered table-shrink even-four">
                        <tbody>
                            <tr class="headliner-title">
                                <td style="border-left:none;color:white"><strong>Personfarlig kriminalitet</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered table-shrink even-four">
                        <tbody>
                            <tr class="felony-grad-top">
                                <td style="border-left:none;color:white"><strong>Forbrydelser</strong></td>
                                <td class="judge-grad-top" style="border-right:none;color:white"><strong>Godkendelser</strong></td>
                                <td class="misdemeanor-grad-top" style="border-right:none;color:white"><strong>Forseelser</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">

                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kriminelle trusler (??62 Stk. 1) " data-time="10" data-fine="0" onclick="addCharge(this)" title="En hver person der bevist truer med at beg?? kriminalitet, der vil resultere i d??d eller fysisk skade, kan straffes med op til 10 dages f??ngsel.">Kriminelle trusler (??62 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold/voldt??gt (??62 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Bevidst og uretm??ssigt brug af magt mod en anden person. Vold/Voldt??gt straffes med 10 dages f??ngsel.">Vold/voldt??gt (??62 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold mod embedsmand (??65)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Vold mod en embedsmand, Bevidst og uretm??ssigt brug af magt mod en embedsmand straffes med f??ngsel op til 15 dage.">Vold mod embedsmand (??65)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold mod en dommer (??63)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Bevidst og uretm??ssigt brug af magt mod en dommer. Bliver straffet med op til 30 dage i f??ngsel.">Vold mod en dommer (??63)</a></td>
                                </tr>
                                <tr class="description">
                                    <td>En hver person der bevist truer med at beg?? kriminalitet, der vil resultere i d??d eller fysisk skade, kan straffes med op til 10 dages f??ngsel.</td>
                                    <td><b>Vold/voldt??gt (??62 Stk. 2): 10 dage.</b>
                                        <br> Bevidst og uretm??ssigt brug af magt mod en anden person. Vold/Voldt??gt straffes med 10 dages f??ngsel.</td>
                                    <td><b>Vold mod embedsmand (??65): 15 dage.</b>
                                        <br>Vold mod en embedsmand, Bevidst og uretm??ssigt brug af magt mod en embedsmand straffes med f??ngsel op til 15 dage.</td>
                                    <td><b>Vold mod en dommer (??63): 30 dage.</b>
                                        <br>Vold mod en dommer, Bevidst og uretm??ssigt brug af magt mod en dommer. Bliver straffet med op til 30 dage i f??ngsel.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald (49 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Overfald eller fors??g p?? at beg?? en voldelig skade mod en anden person. Kan medf??re straf af f??ngsel p?? op til 10 dage.">Overfald (??49 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald med et d??deligt v??ben (??54)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Overfald med et d??deligt v??ben eller fors??g p?? at beg?? en voldelig skade mod en anden person et d??deligt v??ben. Straffes med op til 15 dage i f??ngsel.">Overfald med et d??deligt v??ben (??54)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald p?? en dommer (??51)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Overfald p?? en dommer eller fors??g p?? at beg?? en voldelig skade mod en dommer. kan medf??re straf af f??ngsel op til 15 dage.">Overfald p?? en dommer (??51)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald p?? en embedsmand (??50)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Overfald p?? en embedsmand eller fors??g p?? at beg?? en voldelig skade mod en embedsmand. Kan medf??re straf af f??ngsel op til 10 dage. ">Overfald p?? en embedsmand (??50)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Overfald (49 Stk. 2): 10 dage.</b>
                                        <br> Overfald eller fors??g p?? at beg?? en voldelig skade mod en anden person. Kan medf??re straf af f??ngsel p?? op til 10 dage.</td>
                                    <td><b>Overfald med et d??deligt v??ben (??54): 15 dage.</b>
                                        <br>Overfald med et d??deligt v??ben eller fors??g p?? at beg?? en voldelig skade mod en anden person et d??deligt v??ben. Straffes med op til 15 dage i f??ngsel.</td>
                                    <td><b>Overfald p?? en dommer (??51): 15 dage.</b>
                                        <br>Overfald p?? en dommer eller fors??g p?? at beg?? en voldelig skade mod en dommer. kan medf??re straf af f??ngsel op til 15 dage.</td>
                                    <td><b>Overfald p?? en embedsmand (??50): 10 dage.</b>
                                        <br> Overfald p?? en embedsmand eller fors??g p?? at beg?? en voldelig skade mod en embedsmand. Kan medf??re straf af f??ngsel op til 10 dage. </td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord (??53)" data-time="1000" data-fine="0" onclick="addCharge(this)" title="Mord, Dr??ber en anden person med intentioner om at dr??be med fors??tlighed og overvejelse. Giver 1000 dages f??ngsel.">Mord (??53)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord p?? en dommer (??59)" data-time="1500" data-fine="0" onclick="addCharge(this)" title="Dr??ber en dommer med intentioner om at dr??be med fors??tlighed og overvejelse, som bliver erkl??ret d??d af en autoriseret l??ge eller Chief of Police straffes med 1500 dages f??ngsel.">Mord p?? en dommer (??59)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ufrivilligt manddrab (??58 Stk. 1)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Ufrivilligt manddrab, uforsvarligt og uagtsomt dr??ber en anden person giver op til 10 dage i f??ngsel.">Ufrivilligt manddrab (??58 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Fors??gt andengrads mord (??58 Stk. 3)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Fors??gt anden grads mord p?? en embedsmand, med intentioner om at dr??be, straffes med 20 dage.">Fors??gt andengrads mord (??58 Stk. 3)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Mord (??53): 1000 dage.</b>
                                        <br>Mord, Dr??ber en anden person med intentioner om at dr??be med fors??tlighed og overvejelse. Giver 20 dages f??ngsel.</td>
                                    <td><b>Mord p?? en dommer (??59): 1500 dage.</b>
                                        <br>Dr??ber en dommer med intentioner om at dr??be med fors??tlighed og overvejelse, som bliver erkl??ret d??d af en autoriseret l??ge eller Chief of Police straffes med 1500 dages f??ngsel.</td>
                                    <td><b>Ufrivilligt manddrab (??58 Stk. 1): 10 dage.</b>
                                        <br>Ufrivilligt manddrab, uforsvarligt og uagtsomt dr??ber en anden person giver op til 10 dage i f??ngsel.</td>
                                    <td><b>Fors??gt andengrads mord (??58 Stk. 3): 20 dage.</b>
                                        <br>Fors??gt anden grads mord p?? en embedsmand, med intentioner om at dr??be, straffes med 20 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads mord (??58 Stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Andengrads mord straffes med f??ngsel op til 15 dage. Dr??ber en anden person med intentioner om, at dr??be.">Andengrads mord (??58 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord p?? en embedsmand (??64)" data-time="1200" data-fine="0" onclick="addCharge(this)" title="Dr??ber en embedsmand med intentioner om at dr??be med fors??tlighed og overvejelse, som er in line of duty, som bliver erkl??ret d??d af en autoriseret l??ge eller Chief of Police. Straffes med f??ngsel op til 1200 dage">Mord p?? en embedsmand (??64)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads mord p?? en embedsmand (??64)" data-time="600" data-fine="0" onclick="addCharge(this)" title="Andengrads mord p?? en embedsmand.">Andengrads mord p?? en embedsmand (??64)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kidnapning (??59 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Kidnapper en anden person og holder dem imod deres egen vilje. Staffes med f??ngsel op til 10 dage.">Kidnapning (??59 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Andengrads mord (??58 Stk. 2): 15 dage.</b>
                                        <br>Andengrads mord straffes med f??ngsel op til 15 dage. Dr??ber en anden person med intentioner om, at dr??be.</td>
                                    <td><b>Mord p?? en embedsmand (??64): 1200 dage.</b>
                                        <br>Dr??ber en embedsmand med intentioner om at dr??be med fors??tlighed og overvejelse, som er in line of duty, som bliver erkl??ret d??d af en autoriseret l??ge eller Chief of Police. Straffes med f??ngsel op til 1200 dage</td>
                                    <td><b>Andengrads mord p?? en embedsmand (??64): 600 dage</b>
                                        <br>Andengrads mord p?? en embedsmand.</td>
                                    <td><b>Kidnapning (??59 Stk. 2): 10 dage.</b>
                                        <br>Kidnapper en anden person og holder dem imod deres egen vilje. Staffes med f??ngsel op til 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gidseltagning (??59 Stk. 3)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Gidseltagning straffes med f??ngsel i 15 dage.">Gidseltagning (??59 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kidnapning eller gidseltagning af en dommer (??63 Stk. 2)" data-time="100" data-fine="0" onclick="addCharge(this)" title="Kidnapning og gidseltagning af dommer eller embedsm??nd straffes med 100 dage.">Kidnapning eller gidseltagning af en dommer eller embedsmand (??63 Stk. 2)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bureaukratisk afstraffelse (69 Stk. 2)" data-time="90" data-fine="5000" onclick="addCharge(this)" title="Kan den d??mte, kriminelle eller sags??gte ikke findes eller lokaliseres, kan der tilskrives en d??dsstraf/henrettelsesdom, hvis personen ikke overgiver sig. Vil individet melde sig og angre sin dom, kan henrettelsesstaffen bortses og hermed modtage f??ngselsstraf op til 90 dage og 50.000 i b??de. (Skal v??re j??vnf??r Stk. 1)">Bureaukratisk afstraffelse (69 Stk. 2) [#Dommergodkendelse]</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Gidseltagning (??59 Stk. 3): 15 dage.</b>
                                        <br>Gidseltagning straffes med f??ngsel i 15 dage.</td>
                                    <td><b>Kidnapning eller gidseltagning af en dommer eller embedsmand (??63 Stk. 2): 100 dage.</b>
                                        <br>Kidnapning og gidseltagning af dommer eller embedsm??nd straffes med 100 dage.</td>
                                    <td><b>Bureaukratisk afstraffelse (??69 Stk. 2): 90 dage.</b>
                                        <br>Kan den d??mte, kriminelle eller sags??gte ikke findes eller lokaliseres, kan der tilskrives en d??dsstraf/henrettelsesdom, hvis personen ikke overgiver sig. Vil individet melde sig og angre sin dom, kan henrettelsesstaffen bortses og hermed modtage f??ngselsstraf op til 90 dage og 50.000 i b??de. (Skal v??re j??vnf??r med ??69 Stk. 1)</td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Offentlig orden, korruption og tyveri</strong></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Sm??lig tyveri (??70)" data-time="0" data-fine="1000" onclick="addCharge(this)" title="Stj??ler ejendele der er mindre v??rd end 1000 kr. fra en person. Straffes med hertil b??de.">Sm??lig tyveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig indtr??ngning (??140)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Det er ulovligt at f??rde p?? privatejet grund, uden tilladelse. Du kan herefter blive straffet for ??95. Straf/b??de ligger hos politidiskretion.">Ulovlig indtr??ngning (??140)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="K??b af sammenleje (??171 Stk. 3)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="K??b af sammenleje er ulovligt og kan give en b??destraf p?? 5000 kroner.">K??b af sammenleje (??171 Stk. 3)</a></td>
                                    <td class="felony"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Prostitution (??171)" data-time="10" data-fine="5000" onclick="addCharge(this)" title="Prostitution er ulovligt i Los Santos og kan straffes med op til 10 dage og en b??destraf p?? 10.000 kroner.">Prostitution (??171)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Sm??lig tyveri (??70): 1000 DKK.</b>
                                        <br> Stj??ler ejendele der er mindre v??rd end 1000 kr. fra en person. Straffes med hertil b??de.</td>
                                    <td><b>Ulovlig indtr??ngning (??140)</b>
                                        <br>Det er ulovligt at f??rde p?? privatejet grund, uden tilladelse. Du kan herefter blive straffet for ??95. Straf/b??de ligger hos politidiskretion.</td>
                                    <td><b>K??b af sammenleje (??171 Stk. 3)</b>
                                        <br>K??b af sammenleje er ulovligt og kan give en b??destraf p?? 5000 kroner.</td>
                                    <td><b>Prostitution (??171): 10 dage</b>
                                        <br>Prostitution er ulovligt i Los Santos og kan straffes med op til 10 dage og en b??destraf p?? 10.000 kroner.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Groft  r??veri (??70 Stk. 2)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Stj??ler ejendele der er mere v??rd end 1000 kr. fra en person.">Groft r??veri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="R??veri (??72)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Stj??ler ejendele fra en person ved brug af magt i offentlighed.">R??veri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads r??veri (??74)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Stj??ler ejendele fra en person ved brug af magt.">Andengrads r??veri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bankr??veri (??71)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Stj??ler pengesum fra autoriseret bank.">Bankr??veri</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Groft  r??veri (??70 Stk. 2): 5 dage.</b>
                                        <br>Stj??ler ejendele der er mere v??rd end 1000 kr. fra en person.</td>
                                    <td><b>R??veri (??72): 10 dage.</b>
                                        <br>Stj??ler ejendele fra en person ved brug af magt i offentlighed.</td>
                                    <td><b>Andengrads r??veri (??74): 10 dage.</b>
                                        <br>Stj??ler ejendele fra en person ved brug af magt.</td>
                                    <td><b>Bankr??veri (??71): 20 dage.</b>
                                        <br>Stj??ler pengesum fra autoriseret bank.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Biltyveri (??73)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Biltyveri, Ulovligt tager et k??ret??j der tilh??rer en anden person, eller k??rer k??ret??jet uden ejermandens tilladelse, med intentionerne om at permanent eller midlertidigt fratage ejeren af k??ret??jet. Straffes med f??ngselsstraf p?? 15 dage.">Biltyveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Manipulation med et k??ret??j (??75)" data-time="5" data-fine="5000" onclick="addCharge(this)" title="Manipulation med et k??ret??j, Ingen personer skal individuelt eller i samarbejde med en eller flere personer bevist ??del??gge eller manipulere med ethvert k??ret??j uden samtykke fra ejeren af bilen. 7500 kroner i b??de og op til 5 dage i f??ngsel.">Manipulation med et k??ret??j</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af stj??let ejendom (??86)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Besiddelse af stj??let ejendom f.eks. penge eller v??ben straffes med f??ngsel op til 10 dage.">Besiddelse af stj??let ejendom</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Udgiver sig for et andet ervherv (??150)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at udgive sig for at have et erhverv, som man ikke har erfaring eller uddannelse til. Straffen er f??ngsel op til 15 dage og tilbagebetaling af indkomst i den givende periode.">Udgiver sig for et andet erhverv</a></td>

                                </tr>
                                <tr class="description">
                                    <td><b>Biltvyeri (??73): 15 dage.</b>
                                        <br>Biltyveri, Ulovligt tager et k??ret??j der tilh??rer en anden person, eller k??rer k??ret??jet uden ejermandens tilladelse, med intentionerne om at permanent eller midlertidigt fratage ejeren af k??ret??jet. Straffes med f??ngselsstraf p?? 15 dage.</td>
                                    <td><b>Manipulation med et k??ret??j (??75): 5 dage.</b>
                                        <br>Manipulation med et k??ret??j, Ingen personer skal individuelt eller i samarbejde med en eller flere personer bevist ??del??gge eller manipulere med ethvert k??ret??j uden samtykke fra ejeren af bilen. 7500 kroner i b??de og op til 5 dage i f??ngsel.</td>
                                    <td><b>Besiddelse af stj??let ejendom (??86): 10 dage.</b>
                                        <br>Besiddelse af stj??let ejendom f.eks. penge eller v??ben straffes med f??ngsel op til 10 dage.</td>
                                    <td><b>Udgiver sig for andet erhverv (??150): 15 dage.</b>
                                        <br>Det er ulovligt at udgive sig for at have et erhverv, som man ikke har erfaring eller uddannelse til. Straffen er f??ngsel op til 15 dage og tilbagebetaling af indkomst i den givende periode.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig n??genf??rden (??173)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at g?? rundt n??gen eller lign. der kan st??de andre og forstyrre offentligheden, her henvises til Kapitel 13, ??90. Den skyldige kan straffes med op til 10 dage og 5000 i b??de.">Ulovlig n??genf??rden (??173)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gambling (??52)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at spille hasardspil i Los Santos. Hasardspil defineres n??r en person afs??tter v??rdi p?? h??jkant ikke n??dvendigvis penge, materiele goder, heriblandt ogs?? affektionsv??rdi da det kan medf??re tvangssalg af g??rde eller tvinge borgere i sv??re situationer. Overtr??delse medf??rer f??ngselsstraf p?? 10 dage.">Gambling (??52)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig indtr??ngen p?? statslig ejendom (??76)" data-time="10" data-fine="0" onclick="addCharge(this)" title="G??r bevidst/opholder dig p?? statslig ejendom eller privat grund ulovligt.">Ulovlig indtr??ngen p?? statslig ejendom (??76)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Indbrud (??77)" data-time="15" data-fine="0" onclick="addCharge(this)" title="G??r bevidst/opholder sig i en bygning med intention om at beg?? kriminalitet. Straffes med f??ngsel op til 15 dage.">Indbrud (??77)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig n??genf??rden (??173): 10 dage.</b>
                                        <br>Det er ulovligt at g?? rundt n??gen eller lign. der kan st??de andre og forstyrre offentligheden, her henvises til Kapitel 13, ??90. Den skyldige kan straffes med op til 10 dage og 5000 i b??de.</td>
                                    <td><b>Gambling (??52): 10 dage.</b>
                                        <br>Det er ulovligt at spille hasardspil i Los Santos. Hasardspil defineres n??r en person afs??tter v??rdi p?? h??jkant ikke n??dvendigvis penge, materiele goder, heriblandt ogs?? affektionsv??rdi da det kan medf??re tvangssalg af g??rde eller tvinge borgere i sv??re situationer. Overtr??delse medf??rer f??ngselsstraf p?? 10 dage.</td>
                                    <td><b>Ulovlig indtr??ngen p?? statslig ejendom (??76): 10 dage.</b>
                                        <br>G??r bevidst/opholder dig p?? statslig ejendom eller privat grund ulovligt.</td>
                                    <td><b>Indbrud (??77): 15 dage.</b>
                                        <br>G??r bevidst/opholder sig i en bygning med intention om at beg?? kriminalitet. Straffes med f??ngsel op til 15 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Konspiration (??79)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Planl??gning af en forbrydelse straffes med f??ngsel 10 dage.">Konspiration (??79)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bestikkelse (??81)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Bestikkelse, der gives til en embedsmand eller anden magthaver eller kommende magthaver for at magthaveren skal s??rbehandle giveren eller personer eller virksomheder, som giveren har interesse i, eller som en tak for udf??rte tjenester. Straffes med f??ngsel op til 15 dage.">Bestikkelse (??81)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Undersl??b (??82)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Undersl??b omfatter salg af ting, som den p??g??ldende har l??nt eller lejet. Giver op til 30 dage i f??ngsel.">Undersl??b (??82)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uautoriseret praksis af loven (??85)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Praktiserer loven uden en licens straffes med b??de p?? 5 dage.">Uautoriseret praksis af loven (??85)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Konspiration (??79): 10 dage.</b>
                                        <br>Planl??gning af en forbrydelse straffes med f??ngsel 10 dage.</td>
                                    <td><b>Bestikkelse (??81): 15 dage.</b>
                                        <br>Bestikkelse, der gives til en embedsmand eller anden magthaver eller kommende magthaver for at magthaveren skal s??rbehandle giveren eller personer eller virksomheder, som giveren har interesse i, eller som en tak for udf??rte tjenester. Straffes med f??ngsel op til 15 dage.</td>
                                    <td><b>Undersl??b (??82): 30 dage.</b>
                                        <br>Undersl??b omfatter salg af ting, som den p??g??ldende har l??nt eller lejet. Giver op til 30 dage i f??ngsel.</td>
                                    <td><b>Uautoriseret praksis af loven (??85): 5 dage.</b>
                                        <br>Praktiserer loven uden en licens straffes med b??de p?? 5 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Dyremishandling (??88)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Ondskabsfuldt og bevidst skader eller dr??ber et dyr straffes med f??ngsel op til 10 dage.">Dyremishandling (??88)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="F??lger ikke en embedsmands anvisninger (??89)" data-time="5" data-fine="0" onclick="addCharge(this)" title="F??lger ikke en embedsmands anvisninger, bevidst n??gter at f??lge ordrer, signaler eller retninger af embedsmand straffes med 5 dage i f??ngsel.">F??lger ikke en embedsmands anvisninger (??89)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gadeuorden (??90)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Handlinger der finder sted p?? gader, veje eller andre offentligt tilg??ngelige steder, og som kan forstyrre den offentlige orden eller medf??re ulempe for andre tilstedev??rende eller omkringboende straffes med f??ngsel op til 10 dage.">Gadeuorden (??90)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Forstyrre freden (??91)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Ulovligt strid, eller udfordrer en anden person til sl??skamp I offentlighed. Forstyrre en anden person med h??je lyde straffes med f??ngsel op til 5 dage.">Forstyrre freden (??91)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Dyremishandling (??88): 10 dage.</b>
                                        <br>Ondskabsfuldt og bevidst skader eller dr??ber et dyr straffes med f??ngsel op til 10 dage..</td>
                                    <td><b>F??lger ikke en embedsmands anvisninger (??89): 5 dage.</b>
                                        <br>F??lger ikke en embedsmands anvisninger, bevidst n??gter at f??lge ordrer, signaler eller retninger af embedsmand straffes med 5 dage i f??ngsel.</td>
                                    <td><b>Gadeuorden (??90): 10 dage.</b>
                                        <br>Handlinger der finder sted p?? gader, veje eller andre offentligt tilg??ngelige steder, og som kan forstyrre den offentlige orden eller medf??re ulempe for andre tilstedev??rende eller omkringboende straffes med f??ngsel op til 10 dage.</td>
                                    <td><b>Forstyrre freden (??91): 5 dage.</b>
                                        <br>Ulovligt strid, eller udfordrer en anden person til sl??skamp I offentlighed. Forstyrre en anden person med h??je lyde straffes med f??ngsel op til 5 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overtr??delse af politihold (??91 Stk. 3)" data-time="10" data-fine="2500" onclick="addCharge(this)" title="Bryder man et polititilhold, kan man blive retsforfulgt at dommer/politi. Man kan blive straffet op til 10 dage og b??de p?? 7500.">Overtr??delse af politihold (??91 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Falske anklager (??92)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Anmeldelse et falsk eller en ikke eksisterende kriminalitet straffes med f??ngsel i 10 dage.">Falske anklager (??92)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Chikane (??93)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Intimidere eller presser en anden person aggressiv med uvelkomne ord, gerninger, handlinger eller fagter gentagne gange (3 ??? 5 gange) straffes med op til 10 dage i f??ngsel.">Chikane (??93)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig overv??gning (??100)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Udnytter en sporingsenhed til en telefon straffes med f??ngsel op til 20 dage.">Ulovlig overv??gning (??100)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Overtr??delse af politihold (??91 Stk. 3): 10 dage.</b>
                                        <br>Bryder man et polititilhold, kan man blive retsforfulgt at dommer/politi. Man kan blive straffet op til 10 dage og b??de p?? 7500.</td>
                                    <td><b>Falske anklager (??92): 10 dage.</b>
                                        <br>Anmeldelse et falsk eller en ikke eksisterende kriminalitet straffes med f??ngsel i 10 dage.</td>
                                    <td><b>Chikane (??93): 10 dage.</b>
                                        <br>Intimidere eller presser en anden person aggressiv med uvelkomne ord, gerninger, handlinger eller fagter gentagne gange (3 ??? 5 gange) straffes med op til 10 dage i f??ngsel.</td>
                                    <td><b>Ulovlig overv??gning (??100): 20 dage.</b>
                                        <br>Udnytter en sporingsenhed til en telefon straffes med f??ngsel op til 20 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Maskeringsforbudet (??135)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Den, der i forbindelse med m??der, forsamlinger, optog eller lignende p?? offentligt sted f??rdes med ansigtet helt eller delvis tild??kket med h??tte, maske, bemaling eller lignende p?? en m??de, der er egnet til at hindre identifikation, straffes med b??de eller f??ngsel indtil 5 dage.">Maskeringsforbudet (??135)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Handlen mod rettens gang (??148)" data-time="60" data-fine="-10000" onclick="addCharge(this)" title="Embedsm??nd som handler imod rettens gang, eller handler h??ndeligt imod grundloven, fratages alle titler og straffes med f??ngsel op til 60 dage, og et b??deforl??g p?? 20.000 kroner. Ydermere bliver k??rekortet frataget i 2 uger, og kan kun generhverves af p??sk??nnelse fra en Dommer/Politichef.">Handlen mod rettens gang (??148 [#Politichefgodkendelse]</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mekanikers medvirken til kriminalitet (??149)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Er man som mekaniker fundet skyldig i ??146, eller p?? anden m??de hj??lper en kriminel til deres fordel, evt. skjule bil imod ransagning straffes man med f??ngsel op til 15 dage.">Mekanikers medvirken til kriminalitet (??149)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Maskeringsforbudet (??135): 5 dage.</b>
                                        <br>Den, der i forbindelse med m??der, forsamlinger, optog eller lignende p?? offentligt sted f??rdes med ansigtet helt eller delvis tild??kket med h??tte, maske, bemaling eller lignende p?? en m??de, der er egnet til at hindre identifikation, straffes med b??de eller f??ngsel indtil 5 dage.</td>
                                    <td><b>Handlen mod rettens gang (??148): 60 dage.</b>
                                        <br>Embedsm??nd som handler imod rettens gang, eller handler h??ndeligt imod grundloven, fratages alle titler og straffes med f??ngsel op til 60 dage, og et b??deforl??g p?? 20.000 kroner. Ydermere bliver k??rekortet frataget i 2 uger, og kan kun generhverves af p??sk??nnelse fra en Dommer/Politichef.</td>
                                    <td><b>Mekanikers medvirken til kriminalitet (??149): 15 dage.</b>
                                        <br>Er man som mekaniker fundet skyldig i ??146, eller p?? anden m??de hj??lper en kriminel til deres fordel, evt. skjule bil imod ransagning straffes man med f??ngsel op til 15 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Offentlig procedure og fremgangsmetoder</strong></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Stride mod retskendelse (??80)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Bevidst strider imod retskendelsen straffes med 10 dage i f??ngsel.">Stride mod retskendelse (??80)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Undslipper varet??gt (??83)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Undslipper en sigtet politiets varet??gt straffes vedkommende med 15 dages f??ngsel.">Undslipper varet??gt (??83)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Undg?? anholdelse (??115)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Flygter fra en embedsmand for at undg??, at blive anholdt eller tilbageholdt. Straffes med f??ngsel op til 15 dage.">Undg?? anholdelse (??115)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindrer EMS arbejde (??66)" data-time="90" data-fine="55000" onclick="addCharge(this)" title="Hindre en EMS i at fuldf??re sit arbejde, hvis du Hindre en ems i at fuldf??re sit arbejde, vil staten automatisk udstede en b??de p?? 100.000 DKK og hertil medf??re en f??ngselsstraf p?? 90 dage.">Hindrer EMS arbejde (??66)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Stride mod retskendelse (??80): 10 dage.</b>
                                        <br>Bevidst strider imod retskendelsen straffes med 10 dage i f??ngsel.</td>
                                    <td><b>Undslipper varet??gt (??83): 15 dage.</b>
                                        <br>Undslipper en sigtet politiets varet??gt straffes vedkommende med 15 dages f??ngsel.</td>
                                    <td><b>Undg?? anholdelse (??115): Antal dage.</b>
                                        <br>Flygter fra en embedsmand for at undg??, at blive anholdt eller tilbageholdt. Straffes med f??ngsel op til 15 dage.</td>
                                    <td><b>Hindrer EMS arbejde (??66): Antal dage.</b>
                                        <br>Hindre en EMS i at fuldf??re sit arbejde, hvis du Hindre en ems i at fuldf??re sit arbejde, vil staten automatisk udstede en b??de p?? 100.000 DKK og hertil medf??re en f??ngselsstraf p?? 90 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mened (??87)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Afgivelse af falsk vidneforklaring under ed i retten">Mened (??87)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Takseret k??rsel i egen bil (??122)" data-time="15" data-fine="2500" onclick="addCharge(this)" title="Det er ulovligt at f??re taxa i egen privat bil. I taxa erhverv skal man bruge byens beskikkede taxa, eller egen opk??bt taxa. Overtr??delse medf??rer b??de og f??ngselsstraf p?? henholdsvis 10.000 kroner og 15 dage i f??ngsel.">Takseret k??rsel i egen bil (??122)</a></td>
                                    <td class="misdemeanor"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovligt ans??ttelsesgrundlag (??137 stk. 3)" data-time="0" data-fine="20000" onclick="addCharge(this)" title="En person tidligere d??mt for mord eller anden grads mord m?? ikke v??re ansat i en virksomhed foruden 2 ugers frivilligt gennemg??et rehabilitering. Personen modtager b??destraf p?? 20.000 kr.">Ulovligt ans??ttelsesgrundlag (??137 stk. 3)</a></td>
                                    <td class="misdemeanor"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig papirdokumentation (??137 stk. 4)" data-time="0" data-fine="40000" onclick="addCharge(this)" title="Arbejdsgiver kan straffes for at ans??tte en person som er tidligere straffet for mord. Bliver en tidligere person som er d??mt for mord opdaget, vil hans titler blive fjernet og arbejdsgiver vil modtage en b??destraf henholdsvis 40.000 kr. Udover dette vil virksomheden blive lukket ned i 3 dage.">Ulovlig papirdokumentation (??137 stk. 4)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Mened (??87): 30 dage.</b>
                                        <br>Afgivelse af falsk vidneforklaring under ed i retten.</td>
                                    <td><b>Takseret k??rsel i egen bil (??122): 15 dage.</b>
                                        <br>Det er ulovligt at f??re taxa i egen privat bil. I taxa erhverv skal man bruge byens beskikkede taxa, eller egen opk??bt taxa. Overtr??delse medf??rer b??de og f??ngselsstraf p?? henholdsvis 10.000 kroner og 15 dage i f??ngsel.</td>
                                    <td><b>Ulovligt ans??ttelsesgrundlag (??137 stk. 3)</b>
                                        <br>En person tidligere d??mt for mord eller anden grads mord m?? ikke v??re ansat i en virksomhed foruden 2 ugers frivilligt gennemg??et rehabilitering. Personen modtager b??destraf p?? 20.000 kr.</td>
                                    <td><b>Ulovlig papirdokumentation (??137 stk. 4)</b>
                                        <br>Arbejdsgiver kan straffes for at ans??tte en person som er tidligere straffet for mord. Bliver en tidligere person som er d??mt for mord opdaget, vil hans titler blive fjernet og arbejdsgiver vil modtage en b??destraf henholdsvis 40.000 kr. Udover dette vil virksomheden blive lukket ned i 3 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Landing p?? ukontrolleret landingspladser (??145)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at lande p?? ukontrolleret flyvepladser eller marker som vurderes til at passe til landingsbaner. Luftfart??j skal landes p?? kontrolleret flyvepladser eller helipads. Straffen er 5 dages f??ngsel og 2500 b??de.">Landing p?? ukontrolleret landingspladser (??145)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kriminelt organiserende (??139 Stk. 4)" data-time="0" data-fine="25000" onclick="addCharge(this)" title="Beg??r ejeren under lukningen af virksomheden, mere kriminalitet lukkes virksomheden yderligere i 2 dage. Beg??r ejeren forseelser p??virker det intet. Hvis ejeren ??bner virksomheden under lukning, straffens han med en b??de p?? 25.000 f??rste gang. 50.000 anden gang kontant til politichefen.">Kriminelt organiserende (??139 Stk. 4)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Luftnavigation uden den n??dvendige licens (??142 Stk. 2)" data-time="15" data-fine="-2500" onclick="addCharge(this)" title="Flyver du i et luftfart??j uden radio eller pilotcertifikat anses dette som ulovligt, og du kan modtage f??ngsel p?? 15 dage inklusiv b??de p?? 5000 kr.">Luftnavigation uden den n??dvendige licens (??142 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Slambert loven (??159)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Slambert loven g??r det muligt for politiet at straffe bander/grupperinger/foreninger, som engagere sig i noget kriminelt. Kan politiet uden tvivl skaffe beviser i form af Lifeinvader opslag, Sms-beskeder, grupperingsbil, dashcam, video overv??gning eller grupperinguniform kan gruppen straffes med 10 dage i f??ngsel og 5000 i b??de.">Slambert loven (??159)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Landing p?? ukontrolleret landingspladser (??145): 5 dage.</b>
                                        <br>Det er ulovligt at lande p?? ukontrolleret flyvepladser eller marker som vurderes til at passe til landingsbaner. Luftfart??j skal landes p?? kontrolleret flyvepladser eller helipads. Straffen er 5 dages f??ngsel og 2500 b??de.</td>
                                    <td><b>Kriminelt organiserende (??139 Stk. 4)</b>
                                        <br>Beg??r ejeren under lukningen af virksomheden, mere kriminalitet lukkes virksomheden yderligere i 2 dage. Beg??r ejeren forseelser p??virker det intet. Hvis ejeren ??bner virksomheden under lukning, straffens han med en b??de p?? 25.000 f??rste gang. 50.000 anden gang kontant til politichefen.</td>
                                    <td><b>Luftnavigation uden den n??dvendige licens (??142 Stk. 2): 15 dage.</b>
                                        <br>Flyver du i et luftfart??j uden radio eller pilotcertifikat anses dette som ulovligt, og du kan modtage f??ngsel p?? 15 dage inklusiv b??de p?? 5000 kr.</td>
                                    <td><b>Slambert loven (??159): 10 dage.</b>
                                        <br>Slambert loven g??r det muligt for politiet at straffe bander/grupperinger/foreninger, som engagere sig i noget kriminelt. Kan politiet uden tvivl skaffe beviser i form af Lifeinvader opslag, Sms-beskeder, grupperingsbil, dashcam, video overv??gning eller grupperinguniform kan gruppen straffes med 10 dage i f??ngsel og 5000 i b??de.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Pligtfors??mmelse (??160 Stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Pligtfors??mmelse af anden grad. Har din fors??mmelse medf??rt fysisk eller fatal skade p?? en person kan du blive straffet med f??ngsel op til 15 dage.">Pligtfors??mmelse (??160 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Pligtfors??mmelse (??160 Stk. 2): 15 dage.</b>
                                        <br>Pligtfors??mmelse af anden grad. Har din fors??mmelse medf??rt fysisk eller fatal skade p?? en person kan du blive straffet med f??ngsel op til 15 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Forbrydelser mod staten</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="H??rv??rk p?? statslig ejendom (??97)" data-time="5" data-fine="0" onclick="addCharge(this)" title="H??rv??rk p?? statslig ejendom, dvs. skade p?? politi, advokat, eller l??ge bygninger/biler/transportgods. Straffes med f??ngsel op til 5 dage.">H??rv??rk p?? statslig ejendom (??97)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Aftjening af samfundet (??99)" data-time="10" data-fine="5000" onclick="addCharge(this)" title="Under tilbageholdelse har politiet tilladelse til at kontrollere om man udf??re det job som individet har erhvervet sig. Kan det bevises uden tvivl at jobbet ikke bliver udf??rt, bliver man straffet med 10 dage i f??ngsel og en b??de p?? 10.000 Kr.">Aftjening af samfundet (??99)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindring af retf??rdigheden (??98)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Hindring af retf??rdighed, H??mmer opdagelsen, f??ngslingen, overbevisningen eller straffen af en person, der begik en forbrydelse, straffes med f??ngsel op til 10 dage.">Hindring af retf??rdigheden (??98)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindring af fangetransport (??60 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at hindre en f??ngselsbus transport p?? nogen m??de. Straffen er 10 dage.">Hindring af fangetransport (??60 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>H??rv??rk p?? statslig ejendom (??97): 5 dage.</b>
                                        <br>H??rv??rk p?? statslig ejendom, dvs. skade p?? politi, advokat, eller l??ge bygninger/biler/transportgods. Straffes med f??ngsel op til 5 dage.</td>
                                    <td><b>Aftjening af samfundet (??99): 10 dage.</b>
                                        <br>Under tilbageholdelse har politiet tilladelse til at kontrollere om man udf??re det job som individet har erhvervet sig. Kan det bevises uden tvivl at jobbet ikke bliver udf??rt, bliver man straffet med 10 dage i f??ngsel og en b??de p?? 10.000 DKK.</td>
                                    <td><b>Hindring af retf??rdigheden (??98): 10 dage.</b>
                                        <br>Hindring af retf??rdighed, H??mmer opdagelsen, f??ngslingen, overbevisningen eller straffen af en person, der begik en forbrydelse, straffes med f??ngsel op til 10 dage.</td>
                                    <td><b>Hindring af fangetransport (??60 Stk. 2): 10 dage.</b>
                                        <br>Det er ulovligt at hindre en f??ngselsbus transport p?? nogen m??de. Straffen er 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Medvirken til flugt (??147)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Den der befrier en anholdt, s??vel som den, der tilskynder eller hj??lper en s??dan person til at undvige eller holder den undvegne skjult. Straffes med f??ngsel op til 15 dage.">Medvirken til flugt (??147)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Fange flugt (??84)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Bryder ind i et f??ngsel, med intentionerne om, at bryde en fange ud. Straffes med 30 dages f??ngsel.">Fange flugt (??84)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Generhvervelse af frataget job (??99 stk. 3)" data-time="40" data-fine="0" onclick="addCharge(this)" title="Er et individ blevet fundet skyldig i anden overtr??delse af ??99 stk. 1, vil politiet kunne fratage retten for at generhverve sig det arbejde, som personen ikke har udf??rt. Hvis personen p?? anden vis f??r samme job, vil politiet kunne stoppe personen til hver en tid. Straffen ligger p?? 40 dage i f??ngsel.">Generhvervelse af frataget job (??99 stk. 3)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Terror (??116)" data-time="90" data-fine="0" onclick="addCharge(this)" title="Terror, For??rsager masse??del??ggelse ved hj??lp af spr??ngstoffer, sygdom eller ekstrem vold straffes med f??ngsel op til 90 dage.">Terror (??116) [#Dommergodkendelse]</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Medvirken til flugt (??147): 15 dage.</b>
                                        <br>Den der befrier en anholdt, s??vel som den, der tilskynder eller hj??lper en s??dan person til at undvige eller holder den undvegne skjult. Straffes med f??ngsel op til 15 dage.</td>
                                    <td><b>Fange flugt (??84): 30 dage</b>
                                        <br>Bryder ind i et f??ngsel, med intentionerne om, at bryde en fange ud. Straffes med 30 dages f??ngsel.</td>
                                    <td><b>Generhvervelse af frataget job (??99 stk. 3): 40 dage</b>
                                        <br>Er et individ blevet fundet skyldig i anden overtr??delse af ??99 stk. 1, vil politiet kunne fratage retten for at generhverve sig det arbejde, som personen ikke har udf??rt. Hvis personen p?? anden vis f??r samme job, vil politiet kunne stoppe personen til hver en tid. Straffen ligger p?? 40 dage i f??ngsel.</td>
                                    <td><b>Terror (??116): 90 dage.</b>
                                        <br>Terror, For??rsager masse??del??ggelse ved hj??lp af spr??ngstoffer, sygdom eller ekstrem vold straffes med f??ngsel op til 90 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Forbrydelser fra det sorte marked</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Dyrkning af euforiserende stoffer (??101)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Dyrkning af Euforiserende stoffer, H??ster et euforiserende stof straffes med f??ngsel op til 10 dage.">Dyrkning af euforiserende stoffer (??101)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Fremstilling af euforiserende stoffer (??102)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Fremstilling af et Euforiserende stoffer, Fremstiller et Euforiserende stof. Straffes med f??ngsel op til 10 dage.">Fremstilling af euforiserende stoffer (??102)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer ??? F??rste grad (??103)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - F??rste Grad: 31+ stk. Straffes med f??ngsel op til 15 dage.">Besiddelse af euforiserende stoffer ??? F??rste grad (??103)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer ??? Anden grad (??104)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - Anden Grad. 11-30 stk. Straffes med f??ngsel op til 10 dage.">Besiddelse af euforiserende stoffer ??? Anden grad (??104)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Dyrkning af euforiserende stoffer (??101): 10 dage.</b>
                                        <br>Dyrkning af Euforiserende stoffer, H??ster et euforiserende stof straffes med f??ngsel op til 10 dage. </td>
                                    <td><b>Fremstilling af euforiserende stoffer (??102): 10 dage.</b>
                                        <br>Fremstilling af et Euforiserende stoffer, Fremstiller et Euforiserende stof. Straffes med f??ngsel op til 10 dage. </td>
                                    <td><b>Besiddelse af euforiserende stoffer ??? F??rste grad (??103): 15 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - F??rste Grad: 31+ stk. Straffes med f??ngsel op til 15 dage.</td>
                                    <td><b>Besiddelse af euforiserende stoffer ??? Anden grad (??104): 10 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - Anden Grad. 11-30 stk. Straffes med f??ngsel op til 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer ??? Tredje grad (??105)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - Tredje Grad: 1-10 stk. Straffes med f??ngsel op til 5 dage.">Besiddelse af euforiserende stoffer ??? Tredje grad (??105)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Intentionen om at s??lge euforiserende stoffer (??106)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer med intentioner om at s??lge. Straffes med f??ngsel op til 5 dage.">Intentionen om at s??lge euforiserende stoffer (??106)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Salg af euforiserende stoffer (??107)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Salg af Euforiserende stoffer. Straffes med f??ngsel op til 15 dages f??ngsel.">Salg af euforiserende stoffer (??107)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af Class 1 v??ben (??110)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Class 1 v??ben, som er manipuleret og ikke registreret. Straffes med f??ngsel op til 15 dage. ">Ulovlig besiddelse af Class 1 v??ben (??110)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Besiddelse af euforiserende stoffer ??? Tredje grad (??105): 5 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - Tredje Grad: 1-10 stk. Straffes med f??ngsel op til 5 dage.</td>
                                    <td><b>Intentionen om at s??lge euforiserende stoffer (??106): 5 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer med intentioner om at s??lge. Straffes med f??ngsel op til 5 dage.</td>
                                    <td><b>Salg af euforiserende stoffer (??107): 15 dage.</b>
                                        <br>Salg af Euforiserende stoffer. Straffes med f??ngsel op til 15 dages f??ngsel.</td>
                                    <td><b>Ulovlig besiddelse af Class 1 v??ben (??110): 15 dage.</b>
                                        <br>Besiddelse af Class 1 v??ben, som er manipuleret og ikke registreret. Straffes med f??ngsel op til 15 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af Class 1 v??ben ??? Uden licensbevis (??110 stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Ulovlig besiddelse af v??ben, uden et licensbevis (Class-1) Besiddelse af Class 1 v??ben uden korrekt licensbevis straffes med f??ngsel i 15 dage.">Ulovlig besiddelse af Class 1 v??ben ??? Uden licensbevis (??110 stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af v??ben Class-2 (??113)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Class 2 eller 3 v??ben, straffes med f??ngsel op til 30 dage.">Ulovlig besiddelse af v??ben Class-2 (??113)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovligt salg af v??ben (??114)" data-time="25" data-fine="0" onclick="addCharge(this)" title="Ulovlig salg af v??ben, Salg eller distribution af v??ben. Straffes med f??ngsel op til 25 dage.">Ulovligt salg af v??ben (??114)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig besiddelse af Class 1 v??ben ??? Uden licensbevis: 15 dage.</b>
                                        <br>Ulovlig besiddelse af v??ben, uden et licensbevis (Class-1) Besiddelse af Class 1 v??ben uden korrekt licensbevis straffes med f??ngsel i 15 dage.</td>
                                    <td><b>Ulovlig besiddelse af v??ben Class-2 (??113): 30 dage.</b>
                                        <br>Besiddelse af Class 2 eller 3 v??ben, straffes med f??ngsel op til 30 dage.</td>
                                    <td><b>Ulovligt salg af v??ben (??114): 25 dage.</b>
                                        <br>Ulovlig salg af v??ben, Salg eller distribution af v??ben. Straffes med f??ngsel op til 25 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Stridigheder med v??benloven</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uduelig v??benh??ndtering (??108 Stk. 3)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Tr??kker du dit v??ben fra hylster uden at skyde anses det som ulovligt, eller udviser et d??dbringende v??ben p?? en uh??flig, vred eller truende m??de i n??rv??r af en anden person og ikke i selvforsvar eller til forsvar for nogen, straffes med f??ngsel op til 5 dage.">Uduelig v??benh??ndtering (??108 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig brug af v??ben (??111)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Brug af skydev??ben uden nogen lovlig grund eller viser det i en by straffes med f??ngsel op til 20 dage.">Ulovlig brug af v??ben (??111)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Uduelig v??benh??ndtering (??108 Stk. 3): 5 dage.</b>
                                        <br>Tr??kker du dit v??ben fra hylster uden at skyde anses det som ulovligt, eller udviser et d??dbringende v??ben p?? en uh??flig, vred eller truende m??de i n??rv??r af en anden person og ikke i selvforsvar eller til forsvar for nogen, straffes med f??ngsel op til 5 dage.</td>
                                    <td><b>Ulovlig brug af v??ben (??111): 20 dage.</b>
                                        <br>Brug af skydev??ben uden nogen lovlig grund eller viser det i en by straffes med f??ngsel op til 20 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Stridigheder med trafikloven</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered even-four" id="mainTable">
                            <tbody>
                                <!-- Create table from database -->

                                <script language="javascript">
                                    var getDesc = localStorage.getItem('desc');
                                    var desc = document.getElementsByClassName('description');
                                    var table = document.getElementById('mainTable');
                                </script>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Manglende overholdelse af lysregulering (??121 Stk. 1)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Ikke at overholde regulerede skilte og signaler, Manglende overholdelse af lysregulering straf ligger hos politidiskretion, eller b??de p?? 5000kr.">Manglende overholdelse af lysregulering (??121 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="F??rste grads hastighedsoverskridelse (??124)" data-time="0" data-fine="10000" onclick="addCharge(this)" title="F??rste grads hastighedsoverskridelse, Overskridelse af den maksimale hastighedsbegr??nsning med 90 km/t eller mere. Straf ligger hos politidiskretion.">F??rste grads hastighedsoverskridelse (??124)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Anden grads hastighedsoverskridelse (??127)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Anden grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegr??nsning mellem 60 km/t og 90 km/t. Straf ligger hos politidiskretion.">Anden grads hastighedsoverskridelse (??127)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Tredje grads hastighedsoverskridelse (??128)" data-time="0" data-fine="2500" onclick="addCharge(this)" title="Tredje grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegr??nsning mellem 0 km/t og 60 km/t. Straf ligger hos politidiskretion.">Tredje grads hastighedsoverskridelse (??128)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Manglende overholdelse af lysregulering (??121 Stk. 1)</b>
                                        <br>Ikke at overholde regulerede skilte og signaler, Manglende overholdelse af lysregulering straf ligger hos politidiskretion, eller b??de p?? 5000kr.</td>
                                    <td><b>F??rste grads hastighedsoverskridelse (??124)</b>
                                        <br>F??rste grads hastighedsoverskridelse, Overskridelse af den maksimale hastighedsbegr??nsning med 90 km/t eller mere. Straf ligger hos politidiskretion.</td>
                                    <td><b>Anden grads hastighedsoverskridelse (??127)</b>
                                        <br>Anden grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegr??nsning mellem 60 km/t og 90 km/t. Straf ligger hos politidiskretion.</td>
                                    <td><b>Tredje grads hastighedsoverskridelse (??128)</b>
                                        <br>Tredje grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegr??nsning mellem 0 km/t og 60 km/t. Straf ligger hos politidiskretion.</td>
                                </tr>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="K??rsel uden nummerplade (??125 Stk. 3)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Det er ulovligt at f??re et k??ret??j p?? offentlige tilg??ngelige veje uden nummerplade. Har man et k??ret??j uden nummerplade, m?? man ans??ge om lov til at k??re p?? asfalterede veje 5000kr i b??de.">K??rsel uden nummerplade (??125 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="F??rden i et ikke funktionelt k??ret??j (??125)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Bevidst fordagesager skade p?? ejendom, som personen ikke ejer.">F??rden i et ikke funktionelt k??ret??j (??125)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uansvarlig k??rsel (??126)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="K??rer p?? en m??de, der er uagtsom uden hensyn til grundl??ggende trafikregler. K??rekort vil blive fjernet og b??de ligger hos politidiskretion.">Uansvarlig k??rsel (??126)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="K??rsel uden den n??dvendige licens (??130)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Brug af k??ret??j uden den n??dvendige licens. Straf ligger hos politidiskretion.">K??rsel uden den n??dvendige licens (??130)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>K??rsel uden nummerplade (??125 Stk. 3)</b>
                                        <br>Det er ulovligt at f??re et k??ret??j p?? offentlige tilg??ngelige veje uden nummerplade. Har man et k??ret??j uden nummerplade, m?? man ans??ge om lov til at k??re p?? asfalterede veje 5000kr i b??de.</td>
                                    <td><b>F??rden i et ikke funktionelt k??ret??j (??125)</b>
                                        <br>K??rer i et ikke-funktionelt k??ret??j, f.eks. ??delagte vinduer eller d??re. 5000 DKK i b??de.</td>
                                    <td><b>Uansvarlig k??rsel (??126)</b>
                                        <br>K??rer p?? en m??de, der er uagtsom uden hensyn til grundl??ggende trafikregler. K??rekort vil blive fjernet og b??de ligger hos politidiskretion.</td>
                                    <td><b>K??rsel uden den n??dvendige licens (??130)</b>
                                        <br>Brug af k??ret??j uden den n??dvendige licens. Straf ligger hos politidiskretion.</td>
                                </tr>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig parkering (??129)" data-time="0" data-fine="2500" onclick="addCharge(this)" title="Ulovligt parkeret, du m?? ikke holde parkeret ved farvede kantsten.">Ulovlig parkering (??129)</a></td>
                                    <td class="felony">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-name="P??virket k??rsel (??117)" data-time="10" onclick="addCharge(this)" title="K??rer imens personen er p??virket af alkohol eller stoffer. Straffes med f??ngsel op til 10 dage.">P??virket k??rsel (??117)</a>
                                    </td>
                                    <td class="felony"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Flygter fra en embedsmand i en bil (??118)" data-time="10" onclick="addCharge(this)" title="Flygter fra en embedsmand i en bil for at undg?? at blive anholdt eller tilbageholdt straffes med f??ngsel op til 10 dage.">Flygter fra en embedsmand i en bil (??118)</a>
                                    </td>
                                    <td class="felony">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-name="K??rsel der forvolder fysisk skade (??119)" data-time="15" onclick="addCharge(this)" title="Uforsvarligt k??rsel der forvolder fysisk skade, K??rer uforsigtig og ingen respekt for menneskeliv. K??rekort vil blive fjernet og man vil f?? en f??ngselsstraf p?? 15 dage.">K??rsel der forvolder fysisk skade (??119)</a>
                                    </td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig parkering (??129)</b>
                                        <br>Ulovligt parkeret, du m?? ikke holde parkeret ved farvede kantsten.</td>
                                    <td><b>P??virket k??rsel (??117)</b>
                                        <br>K??rer imens personen er p??virket af alkohol eller stoffer. Straffes med f??ngsel op til 10 dage.</td>
                                    <td><b>Flygter fra en embedsmand i en bil (??118)</b>
                                        <br>Flygter fra en embedsmand i en bil for at undg?? at blive anholdt eller tilbageholdt straffes med f??ngsel op til 10 dage.</td>
                                    <td><b>K??rsel der forvolder fysisk skade (??119)</b>
                                        <br>Uforsvarligt k??rsel der forvolder fysisk skade, K??rer uforsigtig og ingen respekt for menneskeliv. K??rekort vil blive fjernet og man vil f?? en f??ngselsstraf p?? 15 dage.</td>
                                </tr>

                                <script language="javascript">
                                    if (getDesc == '1' || getDesc == null) {
                                        document.getElementById('btnDescriptions').innerText = 'Gem Beskrivelse';
                                    } else {
                                        document.getElementById('btnDescriptions').innerText = 'Vis Beskrivelse';
                                        for (i = 0; i < desc.length; i++) {
                                            desc[i].style.display = 'none';
                                        }
                                    }

                                    < /div> < script type = "text/javascript
                                    " >
                                    $(function() {
                                        $('[data-toggle="tooltip"]').tooltip({
                                            trigger: "hover"
                                        })
                                    })
                                </script>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div id="crimesTable" class="col-lg-4 theyAllFloat">
                    <table class="table table-bordered table-shrink even-four">
                        <tbody>
                            <tr class="headliner-title">
                                <td style="border-left:none;color:white" align="center"><strong>Sigtelser</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div id="charge-table">
                                <p>Der er ingen sigtelser</p>
                            </div>
                        </div>

                        <div class="panel-footer"><a class="btn btn-primary" href="javascript:void(0);" onclick="copyToClipboard()">Kopier Sigtelser til Clipboard</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        include 'footer.php'
        ?>
    </body>
</html>