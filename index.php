<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Eidgenössische Abstimmungen 1866-2017 (Kanton)</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/main.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Startseite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#suche">Suche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#ergebnisse">Ergebnisse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#anzahl">Anzahl Ergebnisse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white">
    <div class="container text-center">
        <h1>Eidgenössische Abstimmungen 1866-2017 (Kanton TG)</h1>
        <p class="lead"></p>
    </div>
</header>

<section id="suche">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Suche</h2>
                <p class="lead">Hier können Sie ganz einfach nach Ergebnissen der Abstimmungen von 1866 bis 2017, im Kanton Thurgau suchen.
                Unten können Sie ganz einfach den Namen eingeben. Darunter können Sie die gewünschte Zeitspanne eingeben und zuletzt können Sie
                noch weitere Filter einstellen um ein noch genaueres Resultat zu erhalten.</p>

                    <form name ="button1" action="index.php#ergebnisse" method="get">
                            <div class="titel2"><h3>Nach Abstimmung suchen</h3></div>
                            <input type="text" name="name" class="form-control input-lg" placeholder="Suchen"/>
                            <div class="titel3"><h3>Nach Jahr suchen</h3></div>
                            <div class="vonbis">
                                <div class="von">Von:</div>
                                <div class="bis">Bis:</div>
                            </div>
                            <div class="date">
                                <div class="datevon"><input name="datevon" type="number" min="1866" max="2017" value="1866"></div>
                                <div class="datebis"><input name="datebis" type="number" min="1866" max="2017" value="2017"></div>
                            </div>

                            <div class="titel4"><h3>Erweiterte Suche</h3></div>
                        <div class="titelVorlage">
                            <div class="artVorlage">Art der Vorlage</div>
                            <div class="ergebnisVorlage">Ergebnis der Vorlage</div>
                        </div>
                            <div class="dropdowns">
                                <div class="dropdownArt">
                                    <select class="custom-select" name="artderVorlage">
                                        <option value="Alle">Alle</option>
                                        <option value="Volksinitiative">Volksinitiative</option>
                                        <option value="Volksinitiative Mit Gegenentwurf: Initiative">Volksinitiative mit Gegenentwurf: Initiative</option>
                                        <option value="Volksinitiative mit Gegenentwurf: Gegenentwurf">Volksinitiative mit Gegenentwurf: Gegenentwurf</option>
                                        <option value="Volksinitiative mit Gegenentwurf: Stichfrage">Volksinitiative mit Gegenentwurf: Stichfrage</option>
                                        <option value="Volksinitiative mit Gegenvorschlag: Gegenvorschlag">Volksinitiative mit Gegenvorschlag: Gegenvorschlag</option>
                                        <option value="Volksinitiative mit Gegenvorschlag: Initiative">Volksinitiative mit Gegenvorschlag: Initiative</option>
                                        <option value="Obligatorisches Referendum">Obligatorisches Referendum</option>
                                        <option value="Fakultatives Referendum">Fakultatives Referendum</option>
                                        <option value="Plebiszit">Plebiszit</option>
                                    </select>
                                </div>
                                <div class="dropdownErgebnis">
                                    <select class="custom-select" name="ergebnis">
                                        <option value="Alle">Alle</option>
                                        <option value="Angenommen">Angenommen</option>
                                        <option value="Abgelehnt">Abgelehnt</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="es1">Gültige Stimmen:</div>
                                <div class="es2">Stimmberechtigte:</div>
                                <div class="es3">Stimmbeteiligung (%):</div>
                            </div>

                            <div class="erweiterteSuche">

                                <div class="form-row">
                                    <div class="es1"><input class="custom-select" name="gueltigeStimmMin" type="number" min="1" max="110000" placeholder="Mindestens"></div>
                                    <div class="es2"><input class="custom-select" name="stimmBerMin" type="number" min="1" max="180000" placeholder="Mindestens"></div>
                                    <div class="es3"><input class="custom-select" name="stimmBetMin" type="number" min="0" max="100" placeholder="Mindestens"></div>
                                </div>
                                <div class="form-row">
                                    <div class="es1max"><input class="custom-select" name="gueltigeStimmMax" type="number" min="1" max="110000" value="110000" placeholder="Maximal" ></div>
                                    <div class="es2max"><input class="custom-select" name="stimmBerMax" type="number" min="1" max="180000" value="180000" placeholder="Maximal" ></div>
                                    <div class="es3max"><input class="custom-select" name="stimmBetMax" type="number" min="0" max="100" value="100" placeholder="Maximal"></div>
                                </div>
                            </div>
                        <button name="button1" type="submit" class="btn btn-success">Suchen</button>
                    </form>
            </div>
        </div>
    </div>
</section>

<section id="ergebnisse" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Ergebnisse</h2>
                <p class="lead">Hier werden Ihre gesuchten Vorlagen sammt den dazugehörigen Daten angezeigt.</p>

                <?php

                //Hier wird das CSV File gelesen
                function readCSV($csvFile){
                    $file_handle = fopen($csvFile,'r');
                    while(!feof($file_handle)){
                        $line_of_text[] = fgetcsv($file_handle,1024,";");
                    }
                    fclose($file_handle);
                    return $line_of_text;
                }

                //Hier wird die Funktion ausgeführt und die Daten in einen Array eingelesen
                $abstimmungen = 'data/abstimmungen.csv';
                $array_abstg = readCSV($abstimmungen);
                $array_length = count($array_abstg);

                //Hier werden die eingegebenen Werte der Filter in Variabeln gepackt
                    $ges_name = strtolower($_GET['name']);
                    $suchbegriff = $ges_name;

                    $ges_jahrVon = $_GET['datevon'];
                    $ges_jahrBis = $_GET['datebis'];

                    $ges_artBez = $_GET['artderVorlage'];
                    $ges_ergebnis = $_GET['ergebnis'];

                    $ges_gueltigeStimmMin = $_GET['gueltigeStimmMin'];
                    $ges_StimmBerMin = $_GET['stimmBerMin'];
                    $ges_StimmBetMin = $_GET['stimmBetMin'];

                    $ges_gueltigeStimmMax = $_GET['gueltigeStimmMax'];
                    $ges_StimmBerMax = $_GET['stimmBerMax'];
                    $ges_StimmBetMax = $_GET['stimmBetMax'];
                    $count=0;

                //Hier wird der gesammte Array durchlaufen und die bestimmten Werte in weitere Variabeln gepackt
                //um weiter damit arbeiten zu können
                for ($i = 1; $i <= $array_length-1; $i++) {
                    $datum = $array_abstg[$i][0];
                    $jahr = substr($datum, -4);
                    $name = utf8_encode($array_abstg[$i][1]);
                    $use_name = strtolower($name);
                    $artNum = $array_abstg[$i][2];
                    $artBez = $array_abstg[$i][3];
                    $stimmberechtigte = $array_abstg[$i][4];
                    $eingelegteStimmen = $array_abstg[$i][5];
                    $leereStimmen = $array_abstg[$i][6];
                    $ungueltigeStimmen = $array_abstg[$i][7];
                    $gueltigeStimmen = $array_abstg[$i][8];
                    $jaStimmen = $array_abstg[$i][9];
                    $neinStimmen = $array_abstg[$i][10];
                    $stimmbeteiligung = $array_abstg[$i][11];
                    $jaStimmenProz = $array_abstg[$i][12];

                    //Hier werden die eingegebenen Werte mit den Werten der CSV-Datei im Array verglichen.
                    //Wenn die Werte übereinstimmen werden Sie übersichtlich untereinander angezeigt
                        if($ges_ergebnis == "Alle"){

                            if($ges_artBez =="Alle"){

                                if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                    $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                    $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                    $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax &&
                                    ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {
                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }

                            if ($artBez == $ges_artBez) {
                                if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                    $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                    $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                    $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax &&
                                    ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {

                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }
                        }

                        if($ges_artBez =="Alle"){

                            if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax&&
                                ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {

                                if ($ges_ergebnis == "Angenommen" && $jaStimmenProz > 50) {
                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }

                            if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax&&
                                ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {
                                if ($ges_ergebnis == "Abgelehnt" && $jaStimmenProz <= 50) {
                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }
                        }

                        if ($artBez == $ges_artBez) {
                            if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax &&
                                ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {
                                if ($ges_ergebnis == "Angenommen" && $jaStimmenProz > 50) {
                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }
                        }

                        if ($artBez == $ges_artBez) {
                            if ($ges_jahrVon <= $jahr && $jahr <= $ges_jahrBis &&
                                $ges_gueltigeStimmMin <= $gueltigeStimmen && $gueltigeStimmen <= $ges_gueltigeStimmMax &&
                                $ges_StimmBerMin <= $stimmberechtigte && $stimmberechtigte <= $ges_StimmBerMax &&
                                $ges_StimmBetMin <= $stimmbeteiligung && $stimmbeteiligung <= $ges_StimmBetMax &&
                                ((strpos($use_name, $ges_name))!==false||$ges_name=="")) {
                                if ($ges_ergebnis == "Abgelehnt" && $jaStimmenProz <= 50) {
                                    echo "<h3>$datum - $name</h3><br>";
                                    if($jaStimmen>$neinStimmen){
                                        echo "<b>Ergebnis: ANGENOMMEN</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%" . "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }else{
                                        echo "<b>Ergebnis: ABGELEHNT</b>";
                                        echo "<br>";
                                        echo "<b>JA: </b>"; echo $jaStimmenProz . "%"."<br>";
                                        echo "<b>NEIN: </b>"; echo (100-$jaStimmenProz) . "%". "<br>";
                                        echo "<b>Gültige Stimmen: </b>";  echo $gueltigeStimmen;
                                        echo "<br>";
                                        echo "<b>Stimmbeteiligung: </b> "; echo $stimmbeteiligung."%";
                                        $count++;
                                    }
                                }
                            }
                        }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section id="anzahl" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3>Anzahl Ergebnisse: <?php echo $count?></h3>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Andrés Soltermann & Lino Grisenti</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript"src= 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js'></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

</body>

</html>
