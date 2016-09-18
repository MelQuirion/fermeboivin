 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Fiche d'une vache</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    </head>

    <body class="grey lighten-3">
      <header>
        <?php require_once('include/header.php') ?>
      </header>

      <main>
        <div class="container">
          <h2>Vache 1</h2>

          <div class="row">
            <div class="col s12 l3">
              <!-- INFOS VACHE 1 -->
              <div class="col s12 m6 l12 ">
                <div class="card">
                  <div class="card-image">
                    <img class="img-circle" src="img/cow-1.jpg">
                  </div>
                  <div class="card-content">
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                  </div>
                </div>
              </div>
              <!-- FIN INFOS VACHE 1 -->

              <!-- CONTRÔLES -->
              <div class="col s12 m6 l12 ">
                <div class="card">
                  <div class="card-content">
                     <span class="card-title grey-text text-darken-4">Contrôles</span>
                      <div class="switch">
                        <label>
                          <input type="checkbox">
                          <span class="lever"></span>
                          <span class="textSwitch">Pompes</span>
                        </label>
                      </div>

                      <div class="range-field">
                        <input type="range" id="barre" min="0" max="100" />
                      </div>
                      <hr class="ligneControle">

                      <div class="switch">
                        <label>
                          <input type="checkbox">
                          <span class="lever"></span>
                          <span class="textSwitch">Éclairage</span>
                        </label>
                      </div>

                      <div class="switch">
                        <label>
                          <input type="checkbox">
                          <span class="lever"></span>
                          <span class="textSwitch">Nourriture</span>
                        </label>
                      </div>
                  </div>
                </div>
              </div>
              <!-- FIN CONTRÔLES -->
            </div>

            <div class="col s12 l9">
              <div class="card chart-wrap chartJour">
                <h3>Production par jour</h3>
                <div id="prodJour" class="chart"></div>
              </div>
            </div>
          </div>

      </main>
      
      <!-- FOOTER -->
      <?php require_once('include/footer.php') ?>
      <!-- /FOOTER -->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script>
      <script type="text/javascript" src="js/bin/script.js"></script>
      <script type="text/javascript" src="js/bin/fichevache.js"></script>
    </body>
  </html>