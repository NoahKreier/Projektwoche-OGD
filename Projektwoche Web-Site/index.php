<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="js/jquery.min.js"></script>

    <script src="//d3js.org/d3.v3.min.js"></script>
    <script src="//d3js.org/topojson.v1.min.js"></script>

    <script src="js/d3.v3.min.js"></script>
    <script src="js/topojson.v1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Favicon einfügen -->
    <link rel="shortcut icon" href="favicon.ico">


    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link rel="stylesheet" href="css/fontAwesome.css">


    <title>Grossratswahlen im Thurgau</title>


</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Thurgau</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Über diese Seite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Filter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Impressum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white">
    <div class="container text-center">
        <img src="img/tglogo.png" alt="tglogo">
        <h1>Informationen zu den Grossratswahlen im Kanton Thurgau</h1>
        <p class="lead">2008-2016 auf Gemeindeebene</p>
    </div>
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Über diese Seite</h2>
                <p class="lead">Die Idee dieser Web-Site ist, dass man verschiedenste Informationen über die
                    Grossratswahlen im Kanton Thurgau von 2008-2016 erhält. Man kann die Informationen individuell
                    Filtern und vergleichen z.B. nach Gemeinde und Wahljahr. Ausserdem gibt es zu jeder Gemeinde noch
                    ein paar allgemeine Informationen über die Wahlbeteiligung, Wahlberechtigten und das Wahlverhalten.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="bg-light">
    <div class="container">
        <h2>Filter</h2>
        <div id="graph"></div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form method="get" action="index.php">
                    <label>Jahr</label>
                    <select class="custom-select" name="jahre">
                        <option value="Bitte Auswählen">Bitte Auswählen</option>
                        <option value="2008">2008</option>
                        <option value="2012">2012</option>
                        <option value="2016">2016</option>
                    </select>
                    <label>Gemeinden</label>
                    <select class="custom-select" name="bezirk">
                        <option value="Bitte Auswählen">Bitte Auswählen</option>
                        <option value="Aadorf">Aadorf</option>
                        <option value="Affeltrangen">Affeltrangen</option>
                        <option value="Altnau">Altnau</option>
                        <option value="Amlikon-Bissegg">Amlikon-Bissegg</option>
                        <option value="Amriswil">Amriswil</option>
                        <option value="Arbon">Arbon</option>
                        <option value="Basadingen-Schlattingen">Basadingen-Schlattingen</option>
                        <option value="Berg">Berg</option>
                        <option value="Berlingen">Berlingen</option>
                        <option value="Bettwiesen">Bettwiesen</option>
                        <option value="Bichelsee-Balterswil">Bichelsee-Balterswil</option>
                        <option value="Birwinken">Birwinken</option>
                        <option value="Bischofszell">Bischofszell</option>
                        <option value="Bottighofen">Bottighofen</option>
                        <option value="Braunau">Braunau</option>
                        <option value="Bürglen">Bürglen</option>
                        <option value="Bussnang">Bussnang</option>
                        <option value="Diessenhofen">Diessenhofen</option>
                        <option value="Dozwil">Dozwil</option>
                        <option value="Egnach">Egnach</option>
                        <option value="Erlen">Erlen</option>
                        <option value="Ermatingen">Ermatingen</option>
                        <option value="Eschenz">Eschenz</option>
                        <option value="Eschlikon">Eschlikon</option>
                        <option value="Felben-Wellhausen">Felben-Wellhausen</option>
                        <option value="Fischingen">Fischingen</option>
                        <option value="Frauenfeld">Frauenfeld</option>
                        <option value="Gachnang">Gachnang</option>
                        <option value="Gottlieben">Gottlieben</option>
                        <option value="Güttlingen">Güttingen</option>
                        <option value="Hauptwil-Gottshaus">Hauptwil-Gottshaus</option>
                        <option value="Hefenhofen">Hefenhofen</option>
                        <option value="Herdern">Herdern</option>
                        <option value="Hohentannen">Hohentannen</option>
                        <option value="Homburg">Homburg</option>
                        <option value="Horn">Horn</option>
                        <option value="Hüttlingen">Hüttlingen</option>
                        <option value="Hüttwilen">Hüttwilen</option>
                        <option value="Kemmental">Kemmental</option>
                        <option value="Kesswil">Kesswil</option>
                        <option value="Kradolf-Schönenberg">Kradolf-Schönenberg</option>
                        <option value="Kreuzlingen">Kreuzlingen</option>
                        <option value="Langrickenbach">Langrickenbach</option>
                        <option value="Lengwil">Lengwil</option>
                        <option value="Lommis">Lommis</option>
                        <option value="Mammern">Mammern</option>
                        <option value="Märstetten">Märstetten</option>
                        <option value="Matzingen">Matzingen</option>
                        <option value="Müllheim">Müllheim</option>
                        <option value="Münchwilen">Münchwilen</option>
                        <option value="Münsterlingen">Münsterlingen</option>
                        <option value="Neunforn">Neunforn</option>
                        <option value="Pfyn">Pfyn</option>
                        <option value="Raperswilen">Raperswilen</option>
                        <option value="Rickenbach">Rickenbach</option>
                        <option value="Roggwil">Roggwil</option>
                        <option value="Romanshorn">Romanshorn</option>
                        <option value="Salenstein">Salenstein</option>
                        <option value="Salmsach">Salmsach</option>
                        <option value="Schlatt">Schlatt</option>
                        <option value="Schönholzerswilen">Schönholzerswilen</option>
                        <option value="Sirnach">Sirnach</option>
                        <option value="Sommeri">Sommeri</option>
                        <option value="Steckborn">Steckborn</option>
                        <option value="Stettfurt">Stettfurt</option>
                        <option value="Sulgen">Sulgen</option>
                        <option value="Tägerwilen">Tägerwilen</option>
                        <option value="Thundorf">Thundorf</option>
                        <option value="Tobel-Tägerschen">Tobel-Tägerschen</option>
                        <option value="Uesslingen-Buch">Uesslingen-Buch</option>
                        <option value="Uttwil">Uttwil</option>
                        <option value="Wagenhausen">Wagenhausen</option>
                        <option value="Wäldi">Wäldi</option>
                        <option value="Wängi">Wängi</option>
                        <option value="Warth-Weiningen">Warth-Weiningen</option>
                        <option value="Weinfelden">Weinfelden</option>
                        <option value="Wigoltingen">Wigoltingen</option>
                        <option value="Wilen">Wilen</option>
                        <option value="Wuppenau">Wuppenau</option>
                        <option value="Zihlschlacht-Sitterdorf">Zihlschlacht-Sitterdorf</option>


                    </select>
                    <br>
                    <br>
                    <button name="submit" class="btn btn-success">Suchen</button>
                    <br>
                    <button name="reset" class="btn btn-success">Reset</button>
                    <br>
                    <br>


                    <?php

                    error_reporting(0);
                    ini_set("display_errors", 1);


                    function readCSV($csvFile)
                    {
                        $file_handle = fopen($csvFile, 'r');
                        while (!feof($file_handle)) {
                            $line_of_text[] = fgetcsv($file_handle, 1024, ";");
                        }
                        fclose($file_handle);
                        return $line_of_text;
                    }

                    //execute function
                    $wawa2008 = 'data/Wahlberechtigte_Wahlbeteiligung_2008.csv';
                    $array_abstg = readCSV($wawa2008);

                    $array_length = count($array_abstg);

                    $gemeinden = $_GET['bezirk'];
                    $jahre = $_GET['jahre'];


                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg[$i][4];
                        $gemeindename = utf8_encode($array_abstg[$i][1]);
                        $wahlbeteiligung = $array_abstg[$i][5];
                        $berechtigte = $array_abstg[$i][6];
                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "Gemeinde: " . $gemeinden . "<br>";
                                echo "Wahljahr: " . $jahre . "<br>";
                                echo "Wahlbeteiligung: " . $wahlbeteiligung . "%" . "<br>";
                                echo "Wahlberechtigte: " . $berechtigte . "<br>";

                            }
                        }
                    }


                    $waga2008 = 'data/Wahlverhalten_nach_Gemeinden_2008.csv';
                    $array_abstg7 = readCSV($waga2008);

                    $array_length = count($array_abstg7);
                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */


                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg7[$i][4];
                        $gemeindename = utf8_encode($array_abstg7[$i][1]);
                        $abstimmungen = $array_abstg7[$i][5];
                        $berechtigtevg = $array_abstg7[$i][9];
                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "Von insgesamt " . $berechtigtevg . " Wahlberechtigten haben " . $abstimmungen . " abgestimmt" . "<br>";
                                echo "<br>";

                            }
                        }
                    }


                    //execute function
                    $pa2008 = 'data/Parteistimmen_2008.csv';
                    $array_abstg1 = readCSV($pa2008);

                    $array_length = count($array_abstg1);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg1[$i][4];
                        $gemeindename = utf8_encode($array_abstg1[$i][1]);
                        $ja = $array_abstg1[$i][5];
                        $FDP = $array_abstg1[$i][6];
                        $SVP = $array_abstg1[$i][7];
                        $ALGP = $array_abstg1[$i][8];
                        $EVP = $array_abstg1[$i][9];
                        $SP = $array_abstg1[$i][10];
                        $CVP = $array_abstg1[$i][11];
                        $EDU = $array_abstg1[$i][12];
                        $GP = $array_abstg1[$i][13];
                        $glp = $array_abstg1[$i][14];

                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "Pateistimmen:" . "<br>";
                                echo "<br>";
                                if($ja == ""){
                                    echo "ja: -"."<br>";
                                }else{
                                    echo "ja: " . $ja  . "<br>";
                                }
                                echo "FDP: " . $FDP . "<br>";
                                echo "SVP: " . $SVP . "<br>";
                                if($ALGP == ""){
                                    echo "ALGP: -"."<br>";
                                }else{
                                    echo "ALGP: " . $ALGP  . "<br>";
                                }
                                echo "EVP: " . $EVP . "<br>";
                                echo "SP: " . $SP . "<br>";
                                echo "CVP: " . $CVP . "<br>";
                                if($EDU == ""){
                                    echo "EDU: -"."<br>";
                                }else{
                                    echo "EDU: " . $EDU . "<br>";
                                }
                                if($GP == ""){
                                    echo "GP: -"."<br>";
                                }else{
                                    echo "GP: " . $GP  . "<br>";
                                }
                                if($glp == ""){
                                    echo "glp: -"."<br>";
                                }else{
                                    echo "glp: " . $glp  . "<br>";
                                }


                            }
                        }
                    }


                    //execute function
                    $pa2012 = 'data/Parteistimmen_2012.csv';
                    $array_abstg2 = readCSV($pa2012);
                    $array_length = count($array_abstg2);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg2[$i][4];
                        $gemeindename = utf8_encode($array_abstg2[$i][1]);
                        $EDU = $array_abstg2[$i][5];
                        $GP = $array_abstg2[$i][6];
                        $SPGEW = $array_abstg2[$i][7];
                        $JCVP = $array_abstg2[$i][8];
                        $EVP = $array_abstg2[$i][9];
                        $BDP = $array_abstg2[$i][10];
                        $Juso = $array_abstg2[$i][11];
                        $FDP = $array_abstg2[$i][12];
                        $SVP = $array_abstg2[$i][13];
                        $EVPFN = $array_abstg2[$i][14];
                        $glp = $array_abstg2[$i][15];
                        $CVP = $array_abstg2[$i][16];


                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "Pateistimmen:" . "<br>";
                                echo "<br>";
                                echo "EDU: " . $EDU . "<br>";
                                echo "GP: " . $GP . "<br>";
                                echo "SPGEW: " . $SPGEW . "<br>";
                                echo "JCVP: " . $JCVP . "<br>";
                                echo "EVP: " . $EVP . "<br>";
                                echo "BDP: " . $BDP . "<br>";
                                echo "Juso: " . $Juso . "<br>";
                                echo "FDP: " . $FDP . "<br>";
                                echo "SVP: " . $SVP . "<br>";
                                echo "EVPFN: " . $EVPFN . "<br>";
                                echo "glp: " . $glp . "<br>";
                                echo "CVP: " . $CVP . "<br>";


                            }
                        }
                    }


                    $pa2016 = 'data/Parteistimmen_2016.csv';
                    $array_abstg3 = readCSV($pa2016);

                    $array_length = count($array_abstg3);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg3[$i][4];
                        $gemeindename = utf8_encode($array_abstg3[$i][1]);
                        $EDU = $array_abstg3[$i][5];
                        $JCVP = $array_abstg3[$i][6];
                        $EVP = $array_abstg3[$i][7];
                        $GP = $array_abstg3[$i][8];
                        $SP = $array_abstg3[$i][9];
                        $Juso = $array_abstg3[$i][10];
                        $CVP = $array_abstg3[$i][11];
                        $FDP = $array_abstg3[$i][12];
                        $JEVP = $array_abstg3[$i][13];
                        $SVP = $array_abstg3[$i][14];
                        $glp = $array_abstg3[$i][15];
                        $BDP = $array_abstg3[$i][16];


                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "Pateistimmen:" . "<br>";
                                echo "<br>";
                                echo "EDU: " . $EDU . "<br>";
                                echo "JCVP: " . $JCVP . "<br>";
                                echo "EVP: " . $EVP . "<br>";
                                echo "GP: " . $GP . "<br>";
                                echo "SP: " . $SP . "<br>";
                                echo "Juso: " . $Juso . "<br>";
                                echo "CVP: " . $CVP . "<br>";
                                echo "FDP: " . $FDP . "<br>";
                                echo "JEVP: " . $JEVP . "<br>";
                                echo "SVP: " . $SVP . "<br>";
                                echo "glp: " . $glp . "<br>";
                                echo "BDP: " . $BDP . "<br>";


                            }
                        }
                    }


                    //execute function
                    $papa2008 = 'data/Parteistaerken_Gemeinde_2008.csv';
                    $array_abstg4 = readCSV($papa2008);
                    $array_length = count($array_abstg4);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg4[$i][4];
                        $gemeindename = utf8_encode($array_abstg4[$i][1]);
                        $ja = $array_abstg4[$i][5];
                        $FDP = $array_abstg4[$i][6];
                        $SVP = $array_abstg4[$i][7];
                        $ALGP = $array_abstg4[$i][8];
                        $EVP = $array_abstg4[$i][9];
                        $SP = $array_abstg4[$i][10];
                        $CVP = $array_abstg4[$i][11];
                        $EDU = $array_abstg4[$i][12];
                        $GP = $array_abstg4[$i][13];
                        $glp = $array_abstg4[$i][14];








                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "<br>";
                                echo "Pateistärke:" . "<br>";
                                echo "<br>";
                               if($ja == ""){
                                   echo "ja: 0%"."<br>";
                               }else{
                                   echo "ja: " . $ja . "%" . "<br>";
                               }
                                echo "FDP: " . $FDP . "%" . "<br>";
                                echo "SVP: " . $SVP . "%" . "<br>";
                                if($ALGP == ""){
                                    echo "ALGP: 0%"."<br>";
                                }else{
                                    echo "ALGP: " . $ALGP . "%" . "<br>";
                                }
                                echo "EVP: " . $EVP . "%" . "<br>";
                                echo "SP: " . $SP . "%" . "<br>";
                                echo "CVP: " . $CVP . "%" . "<br>";
                                if($EDU == ""){
                                    echo "EDU: 0%"."<br>";
                                }else{
                                    echo "EDU: " . $EDU . "%" . "<br>";
                                }
                                if($GP == ""){
                                    echo "GP: 0%"."<br>";
                                }else{
                                    echo "GP: " . $GP . "%" . "<br>";
                                }
                                if($glp == ""){
                                    echo "glp: 0%"."<br>";
                                }else{
                                    echo "glp: " . $glp . "%" . "<br>";
                                }


                            }
                        }
                    }

                    //execute function
                    $papa2012 = 'data/Parteistaerke_Gemeinde_2012.csv';
                    $array_abstg5 = readCSV($papa2012);
                    $array_length = count($array_abstg5);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg5[$i][4];
                        $gemeindename = utf8_encode($array_abstg5[$i][1]);
                        $EDU = $array_abstg5[$i][5];
                        $GP = $array_abstg5[$i][6];
                        $SPGEW = $array_abstg5[$i][7];
                        $CVP = $array_abstg5[$i][8];
                        $EVP = $array_abstg5[$i][9];
                        $BDP = $array_abstg5[$i][10];
                        $FDP = $array_abstg5[$i][11];
                        $SVP = $array_abstg5[$i][12];
                        $glp = $array_abstg5[$i][13];


                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "<br>";
                                echo "Pateistärke:" . "<br>";
                                echo "<br>";
                                echo "EDU: " . $EDU . "%" . "<br>";
                                echo "GP: " . $GP . "%" . "<br>";
                                echo "SPGEW: " . $SPGEW . "%" . "<br>";
                                echo "CVP: " . $CVP . "%" . "<br>";
                                echo "EVP: " . $EVP . "%" . "<br>";
                                echo "BDP: " . $BDP . "%" . "<br>";
                                echo "FDP: " . $FDP . "%" . "<br>";
                                echo "SVP: " . $SVP . "%" . "<br>";
                                echo "glp: " . $glp . "%" . "<br>";


                            }
                        }
                    }

                    //execute function
                    $papa2016 = 'data/Parteistaerke_Gemeinde_2016.csv';
                    $array_abstg6 = readCSV($papa2016);
                    $array_length = count($array_abstg6);

                    /*
                                        $gemeinden = $_GET['bezirk'];
                                        $jahre = $_GET['jahre'];
                    */

                    for ($i = 1; $i <= $array_length - 1; $i++) {
                        $wahljahr = $array_abstg6[$i][4];
                        $gemeindename = utf8_encode($array_abstg6[$i][1]);
                        $EDU = $array_abstg6[$i][5];
                        $EVP = $array_abstg6[$i][6];
                        $GP = $array_abstg6[$i][7];
                        $SP = $array_abstg6[$i][8];
                        $CVP = $array_abstg6[$i][9];
                        $FDP = $array_abstg6[$i][10];
                        $SVP = $array_abstg6[$i][11];
                        $glp = $array_abstg6[$i][12];
                        $BDP = $array_abstg6[$i][13];


                        if ($gemeinden == $gemeindename && $jahre == $wahljahr) {
                            if (isset($_GET['submit'])) {
                                echo "<br>";
                                echo "Pateistärke:" . "<br>";
                                echo "<br>";
                                echo "EDU: " . $EDU . "%" . "<br>";
                                echo "EVP: " . $EVP . "%" . "<br>";
                                echo "GP: " . $GP . "%" . "<br>";
                                echo "SP: " . $SP . "%" . "<br>";
                                echo "CVP: " . $CVP . "%" . "<br>";
                                echo "FDP: " . $FDP . "%" . "<br>";
                                echo "SVP: " . $SVP . "%" . "<br>";
                                echo "glp: " . $glp . "%" . "<br>";
                                echo "BDP: " . $BDP . "%" . "<br>";


                            }
                        }
                    }


                    ?>


            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Impressum</h2>
                <p class="lead">Sie finden auf dieser Seite vielfältige Informationen über die Grossratswahlen von
                    2008-2016 des Kantons Thurgau.<br>
                    <br>
                    <b>Kontakt</b><br>
                    Kantonale Verwaltung<br>
                    Staatskanzlei<br>
                    Informationsdienst<br>
                    Regierungsgebäude<br>
                    TG 8510 Frauenfeld<br>
                    <br>
                    Tel. 0041 58 345 53 20<br>
                    <br>
                    infodienst.sk@tg.ch<br>
                    <br>
                    <b>Betrieb und Technik</b><br>
                    Amt für Informatik<br>
                    Im Roos 6<br>
                    8570 Weinfelden<br>
                    <a href="https://informatik.tg.ch/">www.informatik.tg.ch</a><br>
                    <br>
                    <b>Webdesign</b><br>
                    nuun gmbh<br>
                    Dorfstrasse 3<br>
                    8560 Märstetten<br>
                    <a href="https://www.nuun.ch/">www.nuun.ch</a><br>
                    <br>
                    <b>Umsetzungspartner</b><br>
                    backslash AG<br>
                    Internetagentur<br>
                    Zürcherstrasse 300<br>
                    8501 Frauenfeld<br>
                    <a href="https://www.backslash.ch/">www.backslash.ch</a><br>
                    <br>
                    <b>Projektberatung</b><br>
                    DIVID Unternehmensagentur<br>
                    Fürstenlandstrasse 41<br>
                    9000 St. Gallen<br>
                    <a href="https://www.divid.ch/">www.divid.ch</a><br>
                    <br>
                    <b>Copyright</b><br>
                    Die auf dieser Site angebotenen Inhalte können für private Zwecke ohne Einschränkungen verwendet
                    werden. Für professionellen/gewerblichen Gebrauch muss die Einwilligung des Herausgebers eingeholt
                    werden.</p><br>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Kanton Thurgau 2018</p>
        <ul>
            <a href="https://www.tg.ch/"><i class="fa fa-info"></i> Info</a>
            <li><a href="https://opendata.swiss/de/dataset/grossratswahlen-kanton-thurgau-ebene-gemeinden"><i
                            class="fa fa-file"></i> Daten</a>
            </li>

        </ul>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>


<script src="js/main.js"></script>
<script src="js/app.js"></script>


</body>

</html>
