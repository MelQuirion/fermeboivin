<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="fichevache.php">Vache 1</a></li>
  <li><a href="fichevache.php">Vache 2</a></li>
  <li><a href="fichevache.php">Vache 3</a></li>
  <li><a href="fichevache.php">Vache 4</a></li>
  <li><a href="fichevache.php">Vache 5</a></li>
  <li><a href="fichevache.php">Vache 6</a></li>
</ul>

<nav>   
  <div class="nav-wrapper blue lighten-3">
    <div class="container">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

      <a href="sommaire.php" class="brand-logo"><img src="img/logo.png" alt="Ferme Boivin"></a>
      <ul class="right">
        <li class="hide-on-med-and-down"><a href="sommaire.php">Sommaire</a></li>
        <!-- Dropdown Trigger -->
        <li class="hide-on-med-and-down"><a class="dropdown-button" href="#!" data-activates="dropdown1">Vaches<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="ajoutervache.php">Ajouter</a></li>
      </ul>

      <ul id="slide-out" class="side-nav">
        <li><a href="sommaire.php">Sommaire</a></li>
        <li><a href="fichevache.php">Vache 1</a></li>
        <li><a href="fichevache.php">Vache 2</a></li>
        <li><a href="fichevache.php">Vache 3</a></li>
        <li><a href="fichevache.php">Vache 4</a></li>
        <li><a href="fichevache.php">Vache 5</a></li>
        <li><a href="fichevache.php">Vache 6</a></li>
      </ul>

    </div>
  </div>
</nav>