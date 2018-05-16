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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Informationen zu den Grossratswahlen im Kanton Thurgau</h1>
        <p class="lead">2008-2016 auf Gemeindeebene</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Über diese Seite</h2>
            <p class="lead">Die Idee dieser Web-Site ist, dass man verschiedenste Informationen über die Grossratswahlen im Kanton Thurgau von 2008-2016 erhält. Man kann die Informationen individuell Filtern und vergleichen z.B. nach Gemeinde und Wahljahr. Ausserdem gibt es zu jeder Gemeinde noch ein paar allgemeine Informationen über die Wahlbeteiligung, Wahlberechtigten und das Wahlverhalten.
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
            <form method="post" action="index.php">
              <label>Gemeinden</label>
              <select class="form-control" name="bezirk">
                <option>Bitte Auswählen</option>
                <option>Aadorf</option>
                <option>Affeltrangen</option>
                <option>Altnau</option>
                <option>Amlikon-Bissegg</option>
                <option>Amriswil</option>
                <option>Arbon</option>
                <option>Basadingen-Schlattingen</option>
                <option>Berg</option>
                <option>Berlingen</option>
                <option>Bettwiesen</option>
                <option>Bichelsee-Balterswil</option>
                <option>Birwinken</option>
                <option>Bischofszell</option>
                <option>Bottighofen</option>
                <option>Braunau</option>
                <option>Bürglen</option>
                <option>Bussnang</option>
                <option>Diessenhofen</option>
                <option>Dozwil</option>
                <option>Egnach</option>
                <option>Erlen</option>
                <option>Ermatingen</option>
                <option>Eschenz</option>
                <option>Eschlikon</option>
                <option>Felben-Wellhausen</option>
                <option>Fischingen</option>
                <option>Frauenfeld</option>
                <option>Gachnang</option>
                <option>Gottlieben</option>
                <option>Güttingen</option>
                <option>Hauptwil-Gottshaus</option>
                <option>Hefenhofen</option>
                <option>Herdern</option>
                <option>Hohentannen</option>
                <option>Homburg</option>
                <option>Horn</option>
                <option>Hüttlingen</option>
                <option>Hüttwilen</option>
                <option>Kemmental</option>
                <option>Kesswil</option>
                <option>Kradolf-Schönenberg</option>
                <option>Kreuzlingen</option>
                <option>Langrickenbach</option>
                <option>Lengwil</option>
                <option>Lommis</option>
                <option>Mammern</option>
                <option>Märstetten</option>
                <option>Matzingen</option>
                <option>Müllheim</option>
                <option>Münchwilen</option>
                <option>Münsterlingen</option>
                <option>Neunforn</option>
                <option>Pfyn</option>
                <option>Raperswilen</option>
                <option>Rickenbach</option>
                <option>Roggwil</option>
                <option>Romanshorn</option>
                <option>Salenstein</option>
                <option>Salmsach</option>
                <option>Schlatt</option>
                <option>Schönholzerswilen</option>
                <option>Sirnach</option>
                <option>Sommeri</option>
                <option>Steckborn</option>
                <option>Stettfurt</option>
                <option>Sulgen</option>
                <option>Tägerwilen</option>
                <option>Thundorf</option>
                <option>Tobel-Tägerschen</option>
                <option>Uesslingen-Buch</option>
                <option>Uttwil</option>
                <option>Wagenhausen</option>
                <option>Wäldi</option>
                <option>Wängi</option>
                <option>Warth-Weiningen</option>
                <option>Weinfelden</option>
                <option>Wigoltingen</option>
                <option>Wilen</option>
                <option>Wuppenau</option>
                <option>Zihlschlacht-Sitterdorf</option>

              </select>
              <br>
              <br>
              <input type="submit" value="Anschauen" />
              <br>
              <br>
              <?php

              if (isset($_POST["bezirk"])) {
              $bezirk = $_POST["bezirk"];

              diese1($bezirk);
              }

              function diese1($bezirk){
              if ($bezirk == "Amriswil"){
              echo "gut";
              }
              if ($bezirk == "Arbon"){
              echo"gut";
              }
              if ($bezirk == "Dozwil"){
              echo"gut";
              }
              if ($bezirk == "Egnach"){
              echo"gut";
              }
              if ($bezirk == "Hefenhofen"){
              echo"gut";
              }
              if ($bezirk == "Horn"){
              echo"gut";
              }
              if ($bezirk == "Kesswil"){
              echo"gut";
              }
              if ($bezirk == "Roggwil"){
              echo "";
              }
              if ($bezirk == "Romanshorn"){
              echo"gut";
              }
              if ($bezirk == "Salmsach"){
              echo"gut";
              }
              if ($bezirk == "Sommeri"){
              echo"gut";
              }
              if ($bezirk == "Uttwil"){
              echo"gut";
              }
              if ($bezirk == "Basadingen-Schlattingen"){
              echo"gut";
              }
              if ($bezirk == "Berlingen"){
              echo"gut";
              }
              if ($bezirk == "Diessenhofen"){
              echo"gut";
              }
              if ($bezirk == "Eschenz"){
              echo"gut";
              }
              if ($bezirk == "Felben-Wellhausen"){
              echo"gut";
              }
              if ($bezirk == "Frauenfeld"){
              echo"gut";
              }
              if ($bezirk == "Gachnang"){
              echo"gut";
              }
              if ($bezirk == "Herdern"){
              echo"gut";
              }
              if ($bezirk == "Homburg"){
              echo"gut";
              }
              if ($bezirk == "Hüttlingen"){
              echo"gut";
              }
              if ($bezirk == "Mammern"){
              echo"gut";
              }
              if ($bezirk == "Matzingen"){
              echo"gut";
              }
              if ($bezirk == "Müllheim"){
              echo"gut";
              }
              if ($bezirk == "Neunforn"){
              echo"gut";
              }
              if ($bezirk == "Phyn"){
              echo"gut";
              }
              if ($bezirk == "Schlatt"){
              echo"gut";
              }
              if ($bezirk == "Steckborn"){
              echo"gut";
              }
              if ($bezirk == "Stettfurt"){
              echo"gut";
              }
              if ($bezirk == "Thundorf"){
              echo"gut";
              }
              if ($bezirk == "Uesslingen-Buch"){
              echo"gut";
              }
              if ($bezirk == "Wagenhausen"){
              echo"gut";
              }
              if ($bezirk == "Warth-Weiningen"){
              echo"gut";
              }
              if ($bezirk == "Altnau"){
              echo"gut";
              }
              if ($bezirk == "Bottighofen"){
              echo"gut";
              }
              if ($bezirk == "Ermatingen"){
              echo"gut";
              }
              if ($bezirk == "Gottlieben"){
              echo"gut";
              }
              if ($bezirk == "Güttingen"){
              echo"gut";
              }
              if ($bezirk == "Kemmental"){
              echo"gut";
              }
              if ($bezirk == "Kreuzlingen"){
              echo"gut";
              }
              if ($bezirk == "Langenrickenback"){
              echo"gut";
              }
              if ($bezirk == "Lengwil"){
              echo"gut";
              }
              if ($bezirk == "Münsterlingen"){
              echo"gut";
              }
              if ($bezirk == "Raperswil"){
              echo"gut";
              }
              if ($bezirk == "Salenstein"){
              echo"gut";
              }
              if ($bezirk == "Tägerwilen"){
              echo"gut";
              }
              if ($bezirk == "Wäldi"){
              echo"gut";
              }
              if ($bezirk == "Aadorf"){
              echo"gut";
              }
              if ($bezirk == "Bettwiesen"){
              echo"gut";
              }
              if ($bezirk == "Bichelsee-Balterswil"){
              echo"gut";
              }
              if ($bezirk == "Braunau"){
              echo"gut";
              }
              if ($bezirk == "Eschlikon"){
              echo"gut";
              }
              if ($bezirk == "Fischingen"){
              echo"gut";
              }
              if ($bezirk == "Lommis"){
              echo"gut";
              }
              if ($bezirk == "Münchwilen"){
              echo"gut";
              }
              if ($bezirk == "Rickenbach"){
              echo"gut";
              }
              if ($bezirk == "Sirnach"){
              echo"gut";
              }
              if ($bezirk == "Tobel-Tägerschen"){
              echo"gut";
              }
              if ($bezirk == "Sulgen"){
              echo"gut";
              }
              if ($bezirk == "Wängi"){
              echo"gut";
              }
              if ($bezirk == "Wilen"){
              echo"gut";
              }
              if ($bezirk == "Affeltrangen"){
              echo"gut";
              }
              if ($bezirk == "Amlikon-Bissegg"){
              echo"gut";
              }
              if ($bezirk == "Berg"){
              echo"gut";
              }
              if ($bezirk == "Birwinken"){
              echo"gut";
              }
              if ($bezirk == "Bischofszell"){
              echo"gut";
              }
              if ($bezirk == "Erlen"){
              echo"gut";
              }
              if ($bezirk == "Hauptwil-Gottshaus"){
              echo"gut";
              }
              if ($bezirk == "Hohentannen"){
              echo"gut";
              }
              if ($bezirk == "Kradolf-Schönenberg"){
              echo"gut";
              }
              if ($bezirk == "Märstetten"){
              echo"gut";
              }
              if ($bezirk == "Schönholzerswilen"){
              echo"gut";
              }
              if ($bezirk == "Sulgen"){
              echo"gut";
              }
              if ($bezirk == "Weinfelden"){
              echo"gut";
              }
              if ($bezirk == "Wigoltingen"){
              echo"gut";
              }
              if ($bezirk == "Wuppenau"){
              echo"gut";
              }
              if ($bezirk == "Zihlschlacht-Sitterdorf"){
              echo"gut";
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
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
          <a href="#"><i class="fa fa-twitter"></i></a>
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
