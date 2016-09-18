 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Ajouter une vache</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

    </head>

    <body class="grey lighten-3">
      <header>
        <?php require_once('include/header.php') ?>
      </header>

      <main>
        <div class="container">
          <div class="row">
            <h2>Ajouter une vache</h2>
            <form id="formAjouterVache" class="col s10 offset-s1 m10 offset-m1 l8 offset-l2 card">
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <input id="first_name" placeholder="" type="text" class="validate">
                  <label for="first_name">Nom de la vache</label>
                </div>
                <div class="ddn col s12 m6 l6">
                  <label for="datepicker">Date de naissance</label>
                  <input id="datepicker" type="date" class="datepicker">
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" placeholder="" class="materialize-textarea"></textarea>
                  <label for="textarea1">Description</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6 l6">
                  <select>
                    <option value="1">Zone 1</option>
                    <option value="2">Zone 2</option>
                    <option value="3">Zone 3</option>
                  </select>
                  <label>Zone</label>
                </div>

                <div class="input-field col s12 m6 l6">
                  <select>
                    <option value="1">Pompe 1</option>
                    <option value="2">Pompe 2</option>
                    <option value="3">Pompe 3</option>
                  </select>
                  <label>Pompe</label>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <p>
                    <input type="checkbox" id="test5" />
                    <label for="test5">Lorem ipsum lorem ipsum</label>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="file-field input-field col s12">
                  <button class="btn waves-effect waves-light right" type="submit" name="action">Ajouter

                    <i class="material-icons right">add</i>
                  </button>
                </div>
              </div>
            </form>
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
      <script type="text/javascript" src="js/bin/ajoutervache.js"></script>
    </body>
  </html>