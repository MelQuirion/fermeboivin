 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Sommaire</title>
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

      <main class="container">
        <h2>Sommaire</h2>

        <!--GRAPHIQUES-->
        <div class="row">
          <div class="col s12 m12 l8">
            <div class="card chart-wrap chartHeure">
              <h3>Production par heure</h3>
              <div id="prodHeure" class="chart"></div>
            </div>
          </div>

          <div class="col s12 m8 l4">
            <div class="card chart-wrap chartVache">
              <h3>Production par vache</h3>
              <div id="prodVache" class="chart"></div>
            </div>
          </div>
        </div>
        <!--FIN GRAPHIQUES-->

        <h2>Les vaches</h2>
          <div class="row">

           <!-- VACHE 1 -->
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 1<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- CONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
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
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div> 
            <!-- FIN VACHE 1 -->

            <!-- VACHE 2 -->
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-2.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 2<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- CONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
                    <div class="switch">
                      <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        <span class="textSwitch">Pompes</span>
                      </label>
                    </div>

                    <div class="range-field">
                      <input type="range" id="test5" min="0" max="100" />
                    </div>
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div>
            <!-- FIN VACHE 2 -->

            <!-- VACHE 3 --> 
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-3.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 3<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- CONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
                    <div class="switch">
                      <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        <span class="textSwitch">Pompes</span>
                      </label>
                    </div>

                    <div class="range-field">
                      <input type="range" id="test5" min="0" max="100" />
                    </div>
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div> 
            <!-- FIN VACHE 3 -->

            <!-- VACHE 4 -->
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-4.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 4<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- ONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
                    <div class="switch">
                      <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        <span class="textSwitch">Pompes</span>
                      </label>
                    </div>

                    <div class="range-field">
                      <input type="range" id="test5" min="0" max="100" />
                    </div>
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div>
            <!-- FIN VACHE 4 -->

            <!-- VACHE 5 -->
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-5.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 5<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- CONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
                    <div class="switch">
                      <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        <span class="textSwitch">Pompes</span>
                      </label>
                    </div>

                    <div class="range-field">
                      <input type="range" id="test5" min="0" max="100" />
                    </div>
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div> 
            <!-- FIN VACHE 5 -->

            <!-- VACHE 6 -->
            <div class="col s6 m4 l3">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator img-circle" src="img/cow-6.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Vache 6<i class="material-icons right">settings</i></span>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta quam nec cursus imperdiet.</p>
                </div>
                <div class="card-action">
                    <a href="fichevache.php" class="teal-text text-lighten-2">> Lien vers la fiche</a>
                </div>

                <!-- CONTRÔLES -->
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Contrôles<i class="material-icons right">close</i></span>
                    <div class="switch">
                      <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        <span class="textSwitch">Pompes</span>
                      </label>
                    </div>

                    <div class="range-field">
                      <input type="range" id="test5" min="0" max="100" />
                    </div>
                    <hr>

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
                <!-- FIN CONTRÔLES -->
              </div>
            </div> 
            <!-- FIN VACHE 6 -->
          </div>
      </main>
      
      <!-- FOOTER -->
      <?php require_once('include/footer.php') ?>
      <!-- /FOOTER -->

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/bin/materialize.min.js"></script>
      <script type="text/javascript" src="js/bin/script.js"></script>
      <script type="text/javascript" src="js/bin/sommaire.js"></script>
    </body>
  </html>