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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kriminelle trusler (§62 Stk. 1) " data-time="10" data-fine="0" onclick="addCharge(this)" title="En hver person der bevist truer med at begå kriminalitet, der vil resultere i død eller fysisk skade, kan straffes med op til 10 dages fængsel.">Kriminelle trusler (§62 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold/voldtægt (§62 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Bevidst og uretmæssigt brug af magt mod en anden person. Vold/Voldtægt straffes med 10 dages fængsel.">Vold/voldtægt (§62 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold mod embedsmand (§65)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Vold mod en embedsmand, Bevidst og uretmæssigt brug af magt mod en embedsmand straffes med fængsel op til 15 dage.">Vold mod embedsmand (§65)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Vold mod en dommer (§63)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Bevidst og uretmæssigt brug af magt mod en dommer. Bliver straffet med op til 30 dage i fængsel.">Vold mod en dommer (§63)</a></td>
                                </tr>
                                <tr class="description">
                                    <td>En hver person der bevist truer med at begå kriminalitet, der vil resultere i død eller fysisk skade, kan straffes med op til 10 dages fængsel.</td>
                                    <td><b>Vold/voldtægt (§62 Stk. 2): 10 dage.</b>
                                        <br> Bevidst og uretmæssigt brug af magt mod en anden person. Vold/Voldtægt straffes med 10 dages fængsel.</td>
                                    <td><b>Vold mod embedsmand (§65): 15 dage.</b>
                                        <br>Vold mod en embedsmand, Bevidst og uretmæssigt brug af magt mod en embedsmand straffes med fængsel op til 15 dage.</td>
                                    <td><b>Vold mod en dommer (§63): 30 dage.</b>
                                        <br>Vold mod en dommer, Bevidst og uretmæssigt brug af magt mod en dommer. Bliver straffet med op til 30 dage i fængsel.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald (49 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Overfald eller forsøg på at begå en voldelig skade mod en anden person. Kan medføre straf af fængsel på op til 10 dage.">Overfald (§49 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald med et dødeligt våben (§54)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Overfald med et dødeligt våben eller forsøg på at begå en voldelig skade mod en anden person et dødeligt våben. Straffes med op til 15 dage i fængsel.">Overfald med et dødeligt våben (§54)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald på en dommer (§51)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Overfald på en dommer eller forsøg på at begå en voldelig skade mod en dommer. kan medføre straf af fængsel op til 15 dage.">Overfald på en dommer (§51)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overfald på en embedsmand (§50)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Overfald på en embedsmand eller forsøg på at begå en voldelig skade mod en embedsmand. Kan medføre straf af fængsel op til 10 dage. ">Overfald på en embedsmand (§50)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Overfald (49 Stk. 2): 10 dage.</b>
                                        <br> Overfald eller forsøg på at begå en voldelig skade mod en anden person. Kan medføre straf af fængsel på op til 10 dage.</td>
                                    <td><b>Overfald med et dødeligt våben (§54): 15 dage.</b>
                                        <br>Overfald med et dødeligt våben eller forsøg på at begå en voldelig skade mod en anden person et dødeligt våben. Straffes med op til 15 dage i fængsel.</td>
                                    <td><b>Overfald på en dommer (§51): 15 dage.</b>
                                        <br>Overfald på en dommer eller forsøg på at begå en voldelig skade mod en dommer. kan medføre straf af fængsel op til 15 dage.</td>
                                    <td><b>Overfald på en embedsmand (§50): 10 dage.</b>
                                        <br> Overfald på en embedsmand eller forsøg på at begå en voldelig skade mod en embedsmand. Kan medføre straf af fængsel op til 10 dage. </td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord (§53)" data-time="1000" data-fine="0" onclick="addCharge(this)" title="Mord, Dræber en anden person med intentioner om at dræbe med forsætlighed og overvejelse. Giver 1000 dages fængsel.">Mord (§53)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord på en dommer (§59)" data-time="1500" data-fine="0" onclick="addCharge(this)" title="Dræber en dommer med intentioner om at dræbe med forsætlighed og overvejelse, som bliver erklæret død af en autoriseret læge eller Chief of Police straffes med 1500 dages fængsel.">Mord på en dommer (§59)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ufrivilligt manddrab (§58 Stk. 1)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Ufrivilligt manddrab, uforsvarligt og uagtsomt dræber en anden person giver op til 10 dage i fængsel.">Ufrivilligt manddrab (§58 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Forsøgt andengrads mord (§58 Stk. 3)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Forsøgt anden grads mord på en embedsmand, med intentioner om at dræbe, straffes med 20 dage.">Forsøgt andengrads mord (§58 Stk. 3)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Mord (§53): 1000 dage.</b>
                                        <br>Mord, Dræber en anden person med intentioner om at dræbe med forsætlighed og overvejelse. Giver 20 dages fængsel.</td>
                                    <td><b>Mord på en dommer (§59): 1500 dage.</b>
                                        <br>Dræber en dommer med intentioner om at dræbe med forsætlighed og overvejelse, som bliver erklæret død af en autoriseret læge eller Chief of Police straffes med 1500 dages fængsel.</td>
                                    <td><b>Ufrivilligt manddrab (§58 Stk. 1): 10 dage.</b>
                                        <br>Ufrivilligt manddrab, uforsvarligt og uagtsomt dræber en anden person giver op til 10 dage i fængsel.</td>
                                    <td><b>Forsøgt andengrads mord (§58 Stk. 3): 20 dage.</b>
                                        <br>Forsøgt anden grads mord på en embedsmand, med intentioner om at dræbe, straffes med 20 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads mord (§58 Stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Andengrads mord straffes med fængsel op til 15 dage. Dræber en anden person med intentioner om, at dræbe.">Andengrads mord (§58 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mord på en embedsmand (§64)" data-time="1200" data-fine="0" onclick="addCharge(this)" title="Dræber en embedsmand med intentioner om at dræbe med forsætlighed og overvejelse, som er in line of duty, som bliver erklæret død af en autoriseret læge eller Chief of Police. Straffes med fængsel op til 1200 dage">Mord på en embedsmand (§64)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads mord på en embedsmand (§64)" data-time="600" data-fine="0" onclick="addCharge(this)" title="Andengrads mord på en embedsmand.">Andengrads mord på en embedsmand (§64)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kidnapning (§59 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Kidnapper en anden person og holder dem imod deres egen vilje. Staffes med fængsel op til 10 dage.">Kidnapning (§59 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Andengrads mord (§58 Stk. 2): 15 dage.</b>
                                        <br>Andengrads mord straffes med fængsel op til 15 dage. Dræber en anden person med intentioner om, at dræbe.</td>
                                    <td><b>Mord på en embedsmand (§64): 1200 dage.</b>
                                        <br>Dræber en embedsmand med intentioner om at dræbe med forsætlighed og overvejelse, som er in line of duty, som bliver erklæret død af en autoriseret læge eller Chief of Police. Straffes med fængsel op til 1200 dage</td>
                                    <td><b>Andengrads mord på en embedsmand (§64): 600 dage</b>
                                        <br>Andengrads mord på en embedsmand.</td>
                                    <td><b>Kidnapning (§59 Stk. 2): 10 dage.</b>
                                        <br>Kidnapper en anden person og holder dem imod deres egen vilje. Staffes med fængsel op til 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gidseltagning (§59 Stk. 3)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Gidseltagning straffes med fængsel i 15 dage.">Gidseltagning (§59 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kidnapning eller gidseltagning af en dommer (§63 Stk. 2)" data-time="100" data-fine="0" onclick="addCharge(this)" title="Kidnapning og gidseltagning af dommer eller embedsmænd straffes med 100 dage.">Kidnapning eller gidseltagning af en dommer eller embedsmand (§63 Stk. 2)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bureaukratisk afstraffelse (69 Stk. 2)" data-time="90" data-fine="5000" onclick="addCharge(this)" title="Kan den dømte, kriminelle eller sagsøgte ikke findes eller lokaliseres, kan der tilskrives en dødsstraf/henrettelsesdom, hvis personen ikke overgiver sig. Vil individet melde sig og angre sin dom, kan henrettelsesstaffen bortses og hermed modtage fængselsstraf op til 90 dage og 50.000 i bøde. (Skal være jævnfør Stk. 1)">Bureaukratisk afstraffelse (69 Stk. 2) [#Dommergodkendelse]</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Gidseltagning (§59 Stk. 3): 15 dage.</b>
                                        <br>Gidseltagning straffes med fængsel i 15 dage.</td>
                                    <td><b>Kidnapning eller gidseltagning af en dommer eller embedsmand (§63 Stk. 2): 100 dage.</b>
                                        <br>Kidnapning og gidseltagning af dommer eller embedsmænd straffes med 100 dage.</td>
                                    <td><b>Bureaukratisk afstraffelse (§69 Stk. 2): 90 dage.</b>
                                        <br>Kan den dømte, kriminelle eller sagsøgte ikke findes eller lokaliseres, kan der tilskrives en dødsstraf/henrettelsesdom, hvis personen ikke overgiver sig. Vil individet melde sig og angre sin dom, kan henrettelsesstaffen bortses og hermed modtage fængselsstraf op til 90 dage og 50.000 i bøde. (Skal være jævnfør med §69 Stk. 1)</td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Smålig tyveri (§70)" data-time="0" data-fine="1000" onclick="addCharge(this)" title="Stjæler ejendele der er mindre værd end 1000 kr. fra en person. Straffes med hertil bøde.">Smålig tyveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig indtrængning (§140)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Det er ulovligt at færde på privatejet grund, uden tilladelse. Du kan herefter blive straffet for §95. Straf/bøde ligger hos politidiskretion.">Ulovlig indtrængning (§140)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Køb af sammenleje (§171 Stk. 3)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Køb af sammenleje er ulovligt og kan give en bødestraf på 5000 kroner.">Køb af sammenleje (§171 Stk. 3)</a></td>
                                    <td class="felony"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Prostitution (§171)" data-time="10" data-fine="5000" onclick="addCharge(this)" title="Prostitution er ulovligt i Los Santos og kan straffes med op til 10 dage og en bødestraf på 10.000 kroner.">Prostitution (§171)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Smålig tyveri (§70): 1000 DKK.</b>
                                        <br> Stjæler ejendele der er mindre værd end 1000 kr. fra en person. Straffes med hertil bøde.</td>
                                    <td><b>Ulovlig indtrængning (§140)</b>
                                        <br>Det er ulovligt at færde på privatejet grund, uden tilladelse. Du kan herefter blive straffet for §95. Straf/bøde ligger hos politidiskretion.</td>
                                    <td><b>Køb af sammenleje (§171 Stk. 3)</b>
                                        <br>Køb af sammenleje er ulovligt og kan give en bødestraf på 5000 kroner.</td>
                                    <td><b>Prostitution (§171): 10 dage</b>
                                        <br>Prostitution er ulovligt i Los Santos og kan straffes med op til 10 dage og en bødestraf på 10.000 kroner.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Groft  røveri (§70 Stk. 2)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Stjæler ejendele der er mere værd end 1000 kr. fra en person.">Groft røveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Røveri (§72)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Stjæler ejendele fra en person ved brug af magt i offentlighed.">Røveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Andengrads røveri (§74)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Stjæler ejendele fra en person ved brug af magt.">Andengrads røveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bankrøveri (§71)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Stjæler pengesum fra autoriseret bank.">Bankrøveri</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Groft  røveri (§70 Stk. 2): 5 dage.</b>
                                        <br>Stjæler ejendele der er mere værd end 1000 kr. fra en person.</td>
                                    <td><b>Røveri (§72): 10 dage.</b>
                                        <br>Stjæler ejendele fra en person ved brug af magt i offentlighed.</td>
                                    <td><b>Andengrads røveri (§74): 10 dage.</b>
                                        <br>Stjæler ejendele fra en person ved brug af magt.</td>
                                    <td><b>Bankrøveri (§71): 20 dage.</b>
                                        <br>Stjæler pengesum fra autoriseret bank.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Biltyveri (§73)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Biltyveri, Ulovligt tager et køretøj der tilhører en anden person, eller kører køretøjet uden ejermandens tilladelse, med intentionerne om at permanent eller midlertidigt fratage ejeren af køretøjet. Straffes med fængselsstraf på 15 dage.">Biltyveri</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Manipulation med et køretøj (§75)" data-time="5" data-fine="5000" onclick="addCharge(this)" title="Manipulation med et køretøj, Ingen personer skal individuelt eller i samarbejde med en eller flere personer bevist ødelægge eller manipulere med ethvert køretøj uden samtykke fra ejeren af bilen. 7500 kroner i bøde og op til 5 dage i fængsel.">Manipulation med et køretøj</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af stjålet ejendom (§86)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Besiddelse af stjålet ejendom f.eks. penge eller våben straffes med fængsel op til 10 dage.">Besiddelse af stjålet ejendom</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Udgiver sig for et andet ervherv (§150)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at udgive sig for at have et erhverv, som man ikke har erfaring eller uddannelse til. Straffen er fængsel op til 15 dage og tilbagebetaling af indkomst i den givende periode.">Udgiver sig for et andet erhverv</a></td>

                                </tr>
                                <tr class="description">
                                    <td><b>Biltvyeri (§73): 15 dage.</b>
                                        <br>Biltyveri, Ulovligt tager et køretøj der tilhører en anden person, eller kører køretøjet uden ejermandens tilladelse, med intentionerne om at permanent eller midlertidigt fratage ejeren af køretøjet. Straffes med fængselsstraf på 15 dage.</td>
                                    <td><b>Manipulation med et køretøj (§75): 5 dage.</b>
                                        <br>Manipulation med et køretøj, Ingen personer skal individuelt eller i samarbejde med en eller flere personer bevist ødelægge eller manipulere med ethvert køretøj uden samtykke fra ejeren af bilen. 7500 kroner i bøde og op til 5 dage i fængsel.</td>
                                    <td><b>Besiddelse af stjålet ejendom (§86): 10 dage.</b>
                                        <br>Besiddelse af stjålet ejendom f.eks. penge eller våben straffes med fængsel op til 10 dage.</td>
                                    <td><b>Udgiver sig for andet erhverv (§150): 15 dage.</b>
                                        <br>Det er ulovligt at udgive sig for at have et erhverv, som man ikke har erfaring eller uddannelse til. Straffen er fængsel op til 15 dage og tilbagebetaling af indkomst i den givende periode.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig nøgenfærden (§173)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at gå rundt nøgen eller lign. der kan støde andre og forstyrre offentligheden, her henvises til Kapitel 13, §90. Den skyldige kan straffes med op til 10 dage og 5000 i bøde.">Ulovlig nøgenfærden (§173)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gambling (§52)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at spille hasardspil i Los Santos. Hasardspil defineres når en person afsætter værdi på højkant ikke nødvendigvis penge, materiele goder, heriblandt også affektionsværdi da det kan medføre tvangssalg af gårde eller tvinge borgere i svære situationer. Overtrædelse medfører fængselsstraf på 10 dage.">Gambling (§52)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig indtrængen på statslig ejendom (§76)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Går bevidst/opholder dig på statslig ejendom eller privat grund ulovligt.">Ulovlig indtrængen på statslig ejendom (§76)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Indbrud (§77)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Går bevidst/opholder sig i en bygning med intention om at begå kriminalitet. Straffes med fængsel op til 15 dage.">Indbrud (§77)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig nøgenfærden (§173): 10 dage.</b>
                                        <br>Det er ulovligt at gå rundt nøgen eller lign. der kan støde andre og forstyrre offentligheden, her henvises til Kapitel 13, §90. Den skyldige kan straffes med op til 10 dage og 5000 i bøde.</td>
                                    <td><b>Gambling (§52): 10 dage.</b>
                                        <br>Det er ulovligt at spille hasardspil i Los Santos. Hasardspil defineres når en person afsætter værdi på højkant ikke nødvendigvis penge, materiele goder, heriblandt også affektionsværdi da det kan medføre tvangssalg af gårde eller tvinge borgere i svære situationer. Overtrædelse medfører fængselsstraf på 10 dage.</td>
                                    <td><b>Ulovlig indtrængen på statslig ejendom (§76): 10 dage.</b>
                                        <br>Går bevidst/opholder dig på statslig ejendom eller privat grund ulovligt.</td>
                                    <td><b>Indbrud (§77): 15 dage.</b>
                                        <br>Går bevidst/opholder sig i en bygning med intention om at begå kriminalitet. Straffes med fængsel op til 15 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Konspiration (§79)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Planlægning af en forbrydelse straffes med fængsel 10 dage.">Konspiration (§79)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Bestikkelse (§81)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Bestikkelse, der gives til en embedsmand eller anden magthaver eller kommende magthaver for at magthaveren skal særbehandle giveren eller personer eller virksomheder, som giveren har interesse i, eller som en tak for udførte tjenester. Straffes med fængsel op til 15 dage.">Bestikkelse (§81)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Underslæb (§82)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Underslæb omfatter salg af ting, som den pågældende har lånt eller lejet. Giver op til 30 dage i fængsel.">Underslæb (§82)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uautoriseret praksis af loven (§85)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Praktiserer loven uden en licens straffes med bøde på 5 dage.">Uautoriseret praksis af loven (§85)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Konspiration (§79): 10 dage.</b>
                                        <br>Planlægning af en forbrydelse straffes med fængsel 10 dage.</td>
                                    <td><b>Bestikkelse (§81): 15 dage.</b>
                                        <br>Bestikkelse, der gives til en embedsmand eller anden magthaver eller kommende magthaver for at magthaveren skal særbehandle giveren eller personer eller virksomheder, som giveren har interesse i, eller som en tak for udførte tjenester. Straffes med fængsel op til 15 dage.</td>
                                    <td><b>Underslæb (§82): 30 dage.</b>
                                        <br>Underslæb omfatter salg af ting, som den pågældende har lånt eller lejet. Giver op til 30 dage i fængsel.</td>
                                    <td><b>Uautoriseret praksis af loven (§85): 5 dage.</b>
                                        <br>Praktiserer loven uden en licens straffes med bøde på 5 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Dyremishandling (§88)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Ondskabsfuldt og bevidst skader eller dræber et dyr straffes med fængsel op til 10 dage.">Dyremishandling (§88)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Følger ikke en embedsmands anvisninger (§89)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Følger ikke en embedsmands anvisninger, bevidst nægter at følge ordrer, signaler eller retninger af embedsmand straffes med 5 dage i fængsel.">Følger ikke en embedsmands anvisninger (§89)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Gadeuorden (§90)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Handlinger der finder sted på gader, veje eller andre offentligt tilgængelige steder, og som kan forstyrre den offentlige orden eller medføre ulempe for andre tilstedeværende eller omkringboende straffes med fængsel op til 10 dage.">Gadeuorden (§90)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Forstyrre freden (§91)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Ulovligt strid, eller udfordrer en anden person til slåskamp I offentlighed. Forstyrre en anden person med høje lyde straffes med fængsel op til 5 dage.">Forstyrre freden (§91)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Dyremishandling (§88): 10 dage.</b>
                                        <br>Ondskabsfuldt og bevidst skader eller dræber et dyr straffes med fængsel op til 10 dage..</td>
                                    <td><b>Følger ikke en embedsmands anvisninger (§89): 5 dage.</b>
                                        <br>Følger ikke en embedsmands anvisninger, bevidst nægter at følge ordrer, signaler eller retninger af embedsmand straffes med 5 dage i fængsel.</td>
                                    <td><b>Gadeuorden (§90): 10 dage.</b>
                                        <br>Handlinger der finder sted på gader, veje eller andre offentligt tilgængelige steder, og som kan forstyrre den offentlige orden eller medføre ulempe for andre tilstedeværende eller omkringboende straffes med fængsel op til 10 dage.</td>
                                    <td><b>Forstyrre freden (§91): 5 dage.</b>
                                        <br>Ulovligt strid, eller udfordrer en anden person til slåskamp I offentlighed. Forstyrre en anden person med høje lyde straffes med fængsel op til 5 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Overtrædelse af politihold (§91 Stk. 3)" data-time="10" data-fine="2500" onclick="addCharge(this)" title="Bryder man et polititilhold, kan man blive retsforfulgt at dommer/politi. Man kan blive straffet op til 10 dage og bøde på 7500.">Overtrædelse af politihold (§91 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Falske anklager (§92)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Anmeldelse et falsk eller en ikke eksisterende kriminalitet straffes med fængsel i 10 dage.">Falske anklager (§92)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Chikane (§93)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Intimidere eller presser en anden person aggressiv med uvelkomne ord, gerninger, handlinger eller fagter gentagne gange (3 – 5 gange) straffes med op til 10 dage i fængsel.">Chikane (§93)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig overvågning (§100)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Udnytter en sporingsenhed til en telefon straffes med fængsel op til 20 dage.">Ulovlig overvågning (§100)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Overtrædelse af politihold (§91 Stk. 3): 10 dage.</b>
                                        <br>Bryder man et polititilhold, kan man blive retsforfulgt at dommer/politi. Man kan blive straffet op til 10 dage og bøde på 7500.</td>
                                    <td><b>Falske anklager (§92): 10 dage.</b>
                                        <br>Anmeldelse et falsk eller en ikke eksisterende kriminalitet straffes med fængsel i 10 dage.</td>
                                    <td><b>Chikane (§93): 10 dage.</b>
                                        <br>Intimidere eller presser en anden person aggressiv med uvelkomne ord, gerninger, handlinger eller fagter gentagne gange (3 – 5 gange) straffes med op til 10 dage i fængsel.</td>
                                    <td><b>Ulovlig overvågning (§100): 20 dage.</b>
                                        <br>Udnytter en sporingsenhed til en telefon straffes med fængsel op til 20 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Maskeringsforbudet (§135)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Den, der i forbindelse med møder, forsamlinger, optog eller lignende på offentligt sted færdes med ansigtet helt eller delvis tildækket med hætte, maske, bemaling eller lignende på en måde, der er egnet til at hindre identifikation, straffes med bøde eller fængsel indtil 5 dage.">Maskeringsforbudet (§135)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Handlen mod rettens gang (§148)" data-time="60" data-fine="-10000" onclick="addCharge(this)" title="Embedsmænd som handler imod rettens gang, eller handler hændeligt imod grundloven, fratages alle titler og straffes med fængsel op til 60 dage, og et bødeforlæg på 20.000 kroner. Ydermere bliver kørekortet frataget i 2 uger, og kan kun generhverves af påskønnelse fra en Dommer/Politichef.">Handlen mod rettens gang (§148 [#Politichefgodkendelse]</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mekanikers medvirken til kriminalitet (§149)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Er man som mekaniker fundet skyldig i §146, eller på anden måde hjælper en kriminel til deres fordel, evt. skjule bil imod ransagning straffes man med fængsel op til 15 dage.">Mekanikers medvirken til kriminalitet (§149)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Maskeringsforbudet (§135): 5 dage.</b>
                                        <br>Den, der i forbindelse med møder, forsamlinger, optog eller lignende på offentligt sted færdes med ansigtet helt eller delvis tildækket med hætte, maske, bemaling eller lignende på en måde, der er egnet til at hindre identifikation, straffes med bøde eller fængsel indtil 5 dage.</td>
                                    <td><b>Handlen mod rettens gang (§148): 60 dage.</b>
                                        <br>Embedsmænd som handler imod rettens gang, eller handler hændeligt imod grundloven, fratages alle titler og straffes med fængsel op til 60 dage, og et bødeforlæg på 20.000 kroner. Ydermere bliver kørekortet frataget i 2 uger, og kan kun generhverves af påskønnelse fra en Dommer/Politichef.</td>
                                    <td><b>Mekanikers medvirken til kriminalitet (§149): 15 dage.</b>
                                        <br>Er man som mekaniker fundet skyldig i §146, eller på anden måde hjælper en kriminel til deres fordel, evt. skjule bil imod ransagning straffes man med fængsel op til 15 dage.</td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Stride mod retskendelse (§80)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Bevidst strider imod retskendelsen straffes med 10 dage i fængsel.">Stride mod retskendelse (§80)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Undslipper varetægt (§83)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Undslipper en sigtet politiets varetægt straffes vedkommende med 15 dages fængsel.">Undslipper varetægt (§83)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Undgå anholdelse (§115)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Flygter fra en embedsmand for at undgå, at blive anholdt eller tilbageholdt. Straffes med fængsel op til 15 dage.">Undgå anholdelse (§115)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindrer EMS arbejde (§66)" data-time="90" data-fine="55000" onclick="addCharge(this)" title="Hindre en EMS i at fuldføre sit arbejde, hvis du Hindre en ems i at fuldføre sit arbejde, vil staten automatisk udstede en bøde på 100.000 DKK og hertil medføre en fængselsstraf på 90 dage.">Hindrer EMS arbejde (§66)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Stride mod retskendelse (§80): 10 dage.</b>
                                        <br>Bevidst strider imod retskendelsen straffes med 10 dage i fængsel.</td>
                                    <td><b>Undslipper varetægt (§83): 15 dage.</b>
                                        <br>Undslipper en sigtet politiets varetægt straffes vedkommende med 15 dages fængsel.</td>
                                    <td><b>Undgå anholdelse (§115): Antal dage.</b>
                                        <br>Flygter fra en embedsmand for at undgå, at blive anholdt eller tilbageholdt. Straffes med fængsel op til 15 dage.</td>
                                    <td><b>Hindrer EMS arbejde (§66): Antal dage.</b>
                                        <br>Hindre en EMS i at fuldføre sit arbejde, hvis du Hindre en ems i at fuldføre sit arbejde, vil staten automatisk udstede en bøde på 100.000 DKK og hertil medføre en fængselsstraf på 90 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Mened (§87)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Afgivelse af falsk vidneforklaring under ed i retten">Mened (§87)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Takseret kørsel i egen bil (§122)" data-time="15" data-fine="2500" onclick="addCharge(this)" title="Det er ulovligt at føre taxa i egen privat bil. I taxa erhverv skal man bruge byens beskikkede taxa, eller egen opkøbt taxa. Overtrædelse medfører bøde og fængselsstraf på henholdsvis 10.000 kroner og 15 dage i fængsel.">Takseret kørsel i egen bil (§122)</a></td>
                                    <td class="misdemeanor"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovligt ansættelsesgrundlag (§137 stk. 3)" data-time="0" data-fine="20000" onclick="addCharge(this)" title="En person tidligere dømt for mord eller anden grads mord må ikke være ansat i en virksomhed foruden 2 ugers frivilligt gennemgået rehabilitering. Personen modtager bødestraf på 20.000 kr.">Ulovligt ansættelsesgrundlag (§137 stk. 3)</a></td>
                                    <td class="misdemeanor"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig papirdokumentation (§137 stk. 4)" data-time="0" data-fine="40000" onclick="addCharge(this)" title="Arbejdsgiver kan straffes for at ansætte en person som er tidligere straffet for mord. Bliver en tidligere person som er dømt for mord opdaget, vil hans titler blive fjernet og arbejdsgiver vil modtage en bødestraf henholdsvis 40.000 kr. Udover dette vil virksomheden blive lukket ned i 3 dage.">Ulovlig papirdokumentation (§137 stk. 4)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Mened (§87): 30 dage.</b>
                                        <br>Afgivelse af falsk vidneforklaring under ed i retten.</td>
                                    <td><b>Takseret kørsel i egen bil (§122): 15 dage.</b>
                                        <br>Det er ulovligt at føre taxa i egen privat bil. I taxa erhverv skal man bruge byens beskikkede taxa, eller egen opkøbt taxa. Overtrædelse medfører bøde og fængselsstraf på henholdsvis 10.000 kroner og 15 dage i fængsel.</td>
                                    <td><b>Ulovligt ansættelsesgrundlag (§137 stk. 3)</b>
                                        <br>En person tidligere dømt for mord eller anden grads mord må ikke være ansat i en virksomhed foruden 2 ugers frivilligt gennemgået rehabilitering. Personen modtager bødestraf på 20.000 kr.</td>
                                    <td><b>Ulovlig papirdokumentation (§137 stk. 4)</b>
                                        <br>Arbejdsgiver kan straffes for at ansætte en person som er tidligere straffet for mord. Bliver en tidligere person som er dømt for mord opdaget, vil hans titler blive fjernet og arbejdsgiver vil modtage en bødestraf henholdsvis 40.000 kr. Udover dette vil virksomheden blive lukket ned i 3 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Landing på ukontrolleret landingspladser (§145)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at lande på ukontrolleret flyvepladser eller marker som vurderes til at passe til landingsbaner. Luftfartøj skal landes på kontrolleret flyvepladser eller helipads. Straffen er 5 dages fængsel og 2500 bøde.">Landing på ukontrolleret landingspladser (§145)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kriminelt organiserende (§139 Stk. 4)" data-time="0" data-fine="25000" onclick="addCharge(this)" title="Begår ejeren under lukningen af virksomheden, mere kriminalitet lukkes virksomheden yderligere i 2 dage. Begår ejeren forseelser påvirker det intet. Hvis ejeren åbner virksomheden under lukning, straffens han med en bøde på 25.000 første gang. 50.000 anden gang kontant til politichefen.">Kriminelt organiserende (§139 Stk. 4)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Luftnavigation uden den nødvendige licens (§142 Stk. 2)" data-time="15" data-fine="-2500" onclick="addCharge(this)" title="Flyver du i et luftfartøj uden radio eller pilotcertifikat anses dette som ulovligt, og du kan modtage fængsel på 15 dage inklusiv bøde på 5000 kr.">Luftnavigation uden den nødvendige licens (§142 Stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Slambert loven (§159)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Slambert loven gør det muligt for politiet at straffe bander/grupperinger/foreninger, som engagere sig i noget kriminelt. Kan politiet uden tvivl skaffe beviser i form af Lifeinvader opslag, Sms-beskeder, grupperingsbil, dashcam, video overvågning eller grupperinguniform kan gruppen straffes med 10 dage i fængsel og 5000 i bøde.">Slambert loven (§159)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Landing på ukontrolleret landingspladser (§145): 5 dage.</b>
                                        <br>Det er ulovligt at lande på ukontrolleret flyvepladser eller marker som vurderes til at passe til landingsbaner. Luftfartøj skal landes på kontrolleret flyvepladser eller helipads. Straffen er 5 dages fængsel og 2500 bøde.</td>
                                    <td><b>Kriminelt organiserende (§139 Stk. 4)</b>
                                        <br>Begår ejeren under lukningen af virksomheden, mere kriminalitet lukkes virksomheden yderligere i 2 dage. Begår ejeren forseelser påvirker det intet. Hvis ejeren åbner virksomheden under lukning, straffens han med en bøde på 25.000 første gang. 50.000 anden gang kontant til politichefen.</td>
                                    <td><b>Luftnavigation uden den nødvendige licens (§142 Stk. 2): 15 dage.</b>
                                        <br>Flyver du i et luftfartøj uden radio eller pilotcertifikat anses dette som ulovligt, og du kan modtage fængsel på 15 dage inklusiv bøde på 5000 kr.</td>
                                    <td><b>Slambert loven (§159): 10 dage.</b>
                                        <br>Slambert loven gør det muligt for politiet at straffe bander/grupperinger/foreninger, som engagere sig i noget kriminelt. Kan politiet uden tvivl skaffe beviser i form af Lifeinvader opslag, Sms-beskeder, grupperingsbil, dashcam, video overvågning eller grupperinguniform kan gruppen straffes med 10 dage i fængsel og 5000 i bøde.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Pligtforsømmelse (§160 Stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Pligtforsømmelse af anden grad. Har din forsømmelse medført fysisk eller fatal skade på en person kan du blive straffet med fængsel op til 15 dage.">Pligtforsømmelse (§160 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Pligtforsømmelse (§160 Stk. 2): 15 dage.</b>
                                        <br>Pligtforsømmelse af anden grad. Har din forsømmelse medført fysisk eller fatal skade på en person kan du blive straffet med fængsel op til 15 dage.</td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hærværk på statslig ejendom (§97)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Hærværk på statslig ejendom, dvs. skade på politi, advokat, eller læge bygninger/biler/transportgods. Straffes med fængsel op til 5 dage.">Hærværk på statslig ejendom (§97)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Aftjening af samfundet (§99)" data-time="10" data-fine="5000" onclick="addCharge(this)" title="Under tilbageholdelse har politiet tilladelse til at kontrollere om man udføre det job som individet har erhvervet sig. Kan det bevises uden tvivl at jobbet ikke bliver udført, bliver man straffet med 10 dage i fængsel og en bøde på 10.000 Kr.">Aftjening af samfundet (§99)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindring af retfærdigheden (§98)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Hindring af retfærdighed, Hæmmer opdagelsen, fængslingen, overbevisningen eller straffen af en person, der begik en forbrydelse, straffes med fængsel op til 10 dage.">Hindring af retfærdigheden (§98)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Hindring af fangetransport (§60 Stk. 2)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Det er ulovligt at hindre en fængselsbus transport på nogen måde. Straffen er 10 dage.">Hindring af fangetransport (§60 Stk. 2)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Hærværk på statslig ejendom (§97): 5 dage.</b>
                                        <br>Hærværk på statslig ejendom, dvs. skade på politi, advokat, eller læge bygninger/biler/transportgods. Straffes med fængsel op til 5 dage.</td>
                                    <td><b>Aftjening af samfundet (§99): 10 dage.</b>
                                        <br>Under tilbageholdelse har politiet tilladelse til at kontrollere om man udføre det job som individet har erhvervet sig. Kan det bevises uden tvivl at jobbet ikke bliver udført, bliver man straffet med 10 dage i fængsel og en bøde på 10.000 DKK.</td>
                                    <td><b>Hindring af retfærdigheden (§98): 10 dage.</b>
                                        <br>Hindring af retfærdighed, Hæmmer opdagelsen, fængslingen, overbevisningen eller straffen af en person, der begik en forbrydelse, straffes med fængsel op til 10 dage.</td>
                                    <td><b>Hindring af fangetransport (§60 Stk. 2): 10 dage.</b>
                                        <br>Det er ulovligt at hindre en fængselsbus transport på nogen måde. Straffen er 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Medvirken til flugt (§147)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Den der befrier en anholdt, såvel som den, der tilskynder eller hjælper en sådan person til at undvige eller holder den undvegne skjult. Straffes med fængsel op til 15 dage.">Medvirken til flugt (§147)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Fange flugt (§84)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Bryder ind i et fængsel, med intentionerne om, at bryde en fange ud. Straffes med 30 dages fængsel.">Fange flugt (§84)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Generhvervelse af frataget job (§99 stk. 3)" data-time="40" data-fine="0" onclick="addCharge(this)" title="Er et individ blevet fundet skyldig i anden overtrædelse af §99 stk. 1, vil politiet kunne fratage retten for at generhverve sig det arbejde, som personen ikke har udført. Hvis personen på anden vis får samme job, vil politiet kunne stoppe personen til hver en tid. Straffen ligger på 40 dage i fængsel.">Generhvervelse af frataget job (§99 stk. 3)</a></td>
                                    <td class="judge"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Terror (§116)" data-time="90" data-fine="0" onclick="addCharge(this)" title="Terror, Forårsager masseødelæggelse ved hjælp af sprængstoffer, sygdom eller ekstrem vold straffes med fængsel op til 90 dage.">Terror (§116) [#Dommergodkendelse]</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Medvirken til flugt (§147): 15 dage.</b>
                                        <br>Den der befrier en anholdt, såvel som den, der tilskynder eller hjælper en sådan person til at undvige eller holder den undvegne skjult. Straffes med fængsel op til 15 dage.</td>
                                    <td><b>Fange flugt (§84): 30 dage</b>
                                        <br>Bryder ind i et fængsel, med intentionerne om, at bryde en fange ud. Straffes med 30 dages fængsel.</td>
                                    <td><b>Generhvervelse af frataget job (§99 stk. 3): 40 dage</b>
                                        <br>Er et individ blevet fundet skyldig i anden overtrædelse af §99 stk. 1, vil politiet kunne fratage retten for at generhverve sig det arbejde, som personen ikke har udført. Hvis personen på anden vis får samme job, vil politiet kunne stoppe personen til hver en tid. Straffen ligger på 40 dage i fængsel.</td>
                                    <td><b>Terror (§116): 90 dage.</b>
                                        <br>Terror, Forårsager masseødelæggelse ved hjælp af sprængstoffer, sygdom eller ekstrem vold straffes med fængsel op til 90 dage.</td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Dyrkning af euforiserende stoffer (§101)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Dyrkning af Euforiserende stoffer, Høster et euforiserende stof straffes med fængsel op til 10 dage.">Dyrkning af euforiserende stoffer (§101)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Fremstilling af euforiserende stoffer (§102)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Fremstilling af et Euforiserende stoffer, Fremstiller et Euforiserende stof. Straffes med fængsel op til 10 dage.">Fremstilling af euforiserende stoffer (§102)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer – Første grad (§103)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - Første Grad: 31+ stk. Straffes med fængsel op til 15 dage.">Besiddelse af euforiserende stoffer – Første grad (§103)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer – Anden grad (§104)" data-time="10" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - Anden Grad. 11-30 stk. Straffes med fængsel op til 10 dage.">Besiddelse af euforiserende stoffer – Anden grad (§104)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Dyrkning af euforiserende stoffer (§101): 10 dage.</b>
                                        <br>Dyrkning af Euforiserende stoffer, Høster et euforiserende stof straffes med fængsel op til 10 dage. </td>
                                    <td><b>Fremstilling af euforiserende stoffer (§102): 10 dage.</b>
                                        <br>Fremstilling af et Euforiserende stoffer, Fremstiller et Euforiserende stof. Straffes med fængsel op til 10 dage. </td>
                                    <td><b>Besiddelse af euforiserende stoffer – Første grad (§103): 15 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - Første Grad: 31+ stk. Straffes med fængsel op til 15 dage.</td>
                                    <td><b>Besiddelse af euforiserende stoffer – Anden grad (§104): 10 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - Anden Grad. 11-30 stk. Straffes med fængsel op til 10 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Besiddelse af euforiserende stoffer – Tredje grad (§105)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer - Tredje Grad: 1-10 stk. Straffes med fængsel op til 5 dage.">Besiddelse af euforiserende stoffer – Tredje grad (§105)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Intentionen om at sælge euforiserende stoffer (§106)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Euforiserende stoffer med intentioner om at sælge. Straffes med fængsel op til 5 dage.">Intentionen om at sælge euforiserende stoffer (§106)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Salg af euforiserende stoffer (§107)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Salg af Euforiserende stoffer. Straffes med fængsel op til 15 dages fængsel.">Salg af euforiserende stoffer (§107)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af Class 1 våben (§110)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Class 1 våben, som er manipuleret og ikke registreret. Straffes med fængsel op til 15 dage. ">Ulovlig besiddelse af Class 1 våben (§110)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Besiddelse af euforiserende stoffer – Tredje grad (§105): 5 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer - Tredje Grad: 1-10 stk. Straffes med fængsel op til 5 dage.</td>
                                    <td><b>Intentionen om at sælge euforiserende stoffer (§106): 5 dage.</b>
                                        <br>Besiddelse af Euforiserende stoffer med intentioner om at sælge. Straffes med fængsel op til 5 dage.</td>
                                    <td><b>Salg af euforiserende stoffer (§107): 15 dage.</b>
                                        <br>Salg af Euforiserende stoffer. Straffes med fængsel op til 15 dages fængsel.</td>
                                    <td><b>Ulovlig besiddelse af Class 1 våben (§110): 15 dage.</b>
                                        <br>Besiddelse af Class 1 våben, som er manipuleret og ikke registreret. Straffes med fængsel op til 15 dage.</td>
                                </tr>
                                <tr class="felony">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af Class 1 våben – Uden licensbevis (§110 stk. 2)" data-time="15" data-fine="0" onclick="addCharge(this)" title="Ulovlig besiddelse af våben, uden et licensbevis (Class-1) Besiddelse af Class 1 våben uden korrekt licensbevis straffes med fængsel i 15 dage.">Ulovlig besiddelse af Class 1 våben – Uden licensbevis (§110 stk. 2)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig besiddelse af våben Class-2 (§113)" data-time="30" data-fine="0" onclick="addCharge(this)" title="Besiddelse af Class 2 eller 3 våben, straffes med fængsel op til 30 dage.">Ulovlig besiddelse af våben Class-2 (§113)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovligt salg af våben (§114)" data-time="25" data-fine="0" onclick="addCharge(this)" title="Ulovlig salg af våben, Salg eller distribution af våben. Straffes med fængsel op til 25 dage.">Ulovligt salg af våben (§114)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig besiddelse af Class 1 våben – Uden licensbevis: 15 dage.</b>
                                        <br>Ulovlig besiddelse af våben, uden et licensbevis (Class-1) Besiddelse af Class 1 våben uden korrekt licensbevis straffes med fængsel i 15 dage.</td>
                                    <td><b>Ulovlig besiddelse af våben Class-2 (§113): 30 dage.</b>
                                        <br>Besiddelse af Class 2 eller 3 våben, straffes med fængsel op til 30 dage.</td>
                                    <td><b>Ulovligt salg af våben (§114): 25 dage.</b>
                                        <br>Ulovlig salg af våben, Salg eller distribution af våben. Straffes med fængsel op til 25 dage.</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-shrink even-four">
                            <tbody>
                                <tr class="headliner-title">
                                    <td style="border-left:none;color:white"><strong>Stridigheder med våbenloven</strong></td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uduelig våbenhåndtering (§108 Stk. 3)" data-time="5" data-fine="0" onclick="addCharge(this)" title="Trækker du dit våben fra hylster uden at skyde anses det som ulovligt, eller udviser et dødbringende våben på en uhøflig, vred eller truende måde i nærvær af en anden person og ikke i selvforsvar eller til forsvar for nogen, straffes med fængsel op til 5 dage.">Uduelig våbenhåndtering (§108 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig brug af våben (§111)" data-time="20" data-fine="0" onclick="addCharge(this)" title="Brug af skydevåben uden nogen lovlig grund eller viser det i en by straffes med fængsel op til 20 dage.">Ulovlig brug af våben (§111)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Uduelig våbenhåndtering (§108 Stk. 3): 5 dage.</b>
                                        <br>Trækker du dit våben fra hylster uden at skyde anses det som ulovligt, eller udviser et dødbringende våben på en uhøflig, vred eller truende måde i nærvær af en anden person og ikke i selvforsvar eller til forsvar for nogen, straffes med fængsel op til 5 dage.</td>
                                    <td><b>Ulovlig brug af våben (§111): 20 dage.</b>
                                        <br>Brug af skydevåben uden nogen lovlig grund eller viser det i en by straffes med fængsel op til 20 dage.</td>
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
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Manglende overholdelse af lysregulering (§121 Stk. 1)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Ikke at overholde regulerede skilte og signaler, Manglende overholdelse af lysregulering straf ligger hos politidiskretion, eller bøde på 5000kr.">Manglende overholdelse af lysregulering (§121 Stk. 1)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Første grads hastighedsoverskridelse (§124)" data-time="0" data-fine="10000" onclick="addCharge(this)" title="Første grads hastighedsoverskridelse, Overskridelse af den maksimale hastighedsbegrænsning med 90 km/t eller mere. Straf ligger hos politidiskretion.">Første grads hastighedsoverskridelse (§124)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Anden grads hastighedsoverskridelse (§127)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Anden grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegrænsning mellem 60 km/t og 90 km/t. Straf ligger hos politidiskretion.">Anden grads hastighedsoverskridelse (§127)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Tredje grads hastighedsoverskridelse (§128)" data-time="0" data-fine="2500" onclick="addCharge(this)" title="Tredje grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegrænsning mellem 0 km/t og 60 km/t. Straf ligger hos politidiskretion.">Tredje grads hastighedsoverskridelse (§128)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Manglende overholdelse af lysregulering (§121 Stk. 1)</b>
                                        <br>Ikke at overholde regulerede skilte og signaler, Manglende overholdelse af lysregulering straf ligger hos politidiskretion, eller bøde på 5000kr.</td>
                                    <td><b>Første grads hastighedsoverskridelse (§124)</b>
                                        <br>Første grads hastighedsoverskridelse, Overskridelse af den maksimale hastighedsbegrænsning med 90 km/t eller mere. Straf ligger hos politidiskretion.</td>
                                    <td><b>Anden grads hastighedsoverskridelse (§127)</b>
                                        <br>Anden grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegrænsning mellem 60 km/t og 90 km/t. Straf ligger hos politidiskretion.</td>
                                    <td><b>Tredje grads hastighedsoverskridelse (§128)</b>
                                        <br>Tredje grads hastighedsoverskridelse Overskridelse af den maksimale hastighedsbegrænsning mellem 0 km/t og 60 km/t. Straf ligger hos politidiskretion.</td>
                                </tr>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kørsel uden nummerplade (§125 Stk. 3)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Det er ulovligt at føre et køretøj på offentlige tilgængelige veje uden nummerplade. Har man et køretøj uden nummerplade, må man ansøge om lov til at køre på asfalterede veje 5000kr i bøde.">Kørsel uden nummerplade (§125 Stk. 3)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Færden i et ikke funktionelt køretøj (§125)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Bevidst fordagesager skade på ejendom, som personen ikke ejer.">Færden i et ikke funktionelt køretøj (§125)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Uansvarlig kørsel (§126)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Kører på en måde, der er uagtsom uden hensyn til grundlæggende trafikregler. Kørekort vil blive fjernet og bøde ligger hos politidiskretion.">Uansvarlig kørsel (§126)</a></td>
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Kørsel uden den nødvendige licens (§130)" data-time="0" data-fine="5000" onclick="addCharge(this)" title="Brug af køretøj uden den nødvendige licens. Straf ligger hos politidiskretion.">Kørsel uden den nødvendige licens (§130)</a></td>
                                </tr>
                                <tr class="description">
                                    <td><b>Kørsel uden nummerplade (§125 Stk. 3)</b>
                                        <br>Det er ulovligt at føre et køretøj på offentlige tilgængelige veje uden nummerplade. Har man et køretøj uden nummerplade, må man ansøge om lov til at køre på asfalterede veje 5000kr i bøde.</td>
                                    <td><b>Færden i et ikke funktionelt køretøj (§125)</b>
                                        <br>Kører i et ikke-funktionelt køretøj, f.eks. ødelagte vinduer eller døre. 5000 DKK i bøde.</td>
                                    <td><b>Uansvarlig kørsel (§126)</b>
                                        <br>Kører på en måde, der er uagtsom uden hensyn til grundlæggende trafikregler. Kørekort vil blive fjernet og bøde ligger hos politidiskretion.</td>
                                    <td><b>Kørsel uden den nødvendige licens (§130)</b>
                                        <br>Brug af køretøj uden den nødvendige licens. Straf ligger hos politidiskretion.</td>
                                </tr>
                                <tr class="misdemeanor">
                                    <td><a href="javascript:void(0);" data-toggle="tooltip" data-name="Ulovlig parkering (§129)" data-time="0" data-fine="2500" onclick="addCharge(this)" title="Ulovligt parkeret, du må ikke holde parkeret ved farvede kantsten.">Ulovlig parkering (§129)</a></td>
                                    <td class="felony">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-name="Påvirket kørsel (§117)" data-time="10" onclick="addCharge(this)" title="Kører imens personen er påvirket af alkohol eller stoffer. Straffes med fængsel op til 10 dage.">Påvirket kørsel (§117)</a>
                                    </td>
                                    <td class="felony"><a href="javascript:void(0);" data-toggle="tooltip" data-name="Flygter fra en embedsmand i en bil (§118)" data-time="10" onclick="addCharge(this)" title="Flygter fra en embedsmand i en bil for at undgå at blive anholdt eller tilbageholdt straffes med fængsel op til 10 dage.">Flygter fra en embedsmand i en bil (§118)</a>
                                    </td>
                                    <td class="felony">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-name="Kørsel der forvolder fysisk skade (§119)" data-time="15" onclick="addCharge(this)" title="Uforsvarligt kørsel der forvolder fysisk skade, Kører uforsigtig og ingen respekt for menneskeliv. Kørekort vil blive fjernet og man vil få en fængselsstraf på 15 dage.">Kørsel der forvolder fysisk skade (§119)</a>
                                    </td>
                                </tr>
                                <tr class="description">
                                    <td><b>Ulovlig parkering (§129)</b>
                                        <br>Ulovligt parkeret, du må ikke holde parkeret ved farvede kantsten.</td>
                                    <td><b>Påvirket kørsel (§117)</b>
                                        <br>Kører imens personen er påvirket af alkohol eller stoffer. Straffes med fængsel op til 10 dage.</td>
                                    <td><b>Flygter fra en embedsmand i en bil (§118)</b>
                                        <br>Flygter fra en embedsmand i en bil for at undgå at blive anholdt eller tilbageholdt straffes med fængsel op til 10 dage.</td>
                                    <td><b>Kørsel der forvolder fysisk skade (§119)</b>
                                        <br>Uforsvarligt kørsel der forvolder fysisk skade, Kører uforsigtig og ingen respekt for menneskeliv. Kørekort vil blive fjernet og man vil få en fængselsstraf på 15 dage.</td>
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