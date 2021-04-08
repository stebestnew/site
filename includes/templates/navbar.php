<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Gestion Vente</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav">
        <li><a href="#">N°Bien </a></li>
        <li><a href="#">Client</a></li>
        <li><a href="#">Versement</a></li>
      	<li><a href="#">Etat</a></li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parametre <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	 <li><a href="membre.php?do=Add">Utilisateur</a></li>
            <li><a href="membre.php?do=Edit&userID=<?php echo $_SESSION['ID'] ?>">Edit Utilisateur</a></li>
            <li><a href="#">Parametre</a></li>
            <li><a href="Logout.php">Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>