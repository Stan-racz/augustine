<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <!-- définit la forme du bouton lorsque la barre de menu n'est plus visible
                   (3 icon-bar ici)
               -->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/Accueil.png" height="30" width="97"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="actualite.php">&nbsp;&nbsp;Actualités&nbsp;&nbsp;</a>
                </li>
                <li><a href="galerie.php">&nbsp;&nbsp;Galerie&nbsp;&nbsp;</a>
                </li>
                <li><a href="historique.php">&nbsp;&nbsp;Historique&nbsp;&nbsp;</a>
                </li>
                <li><a href="contact.php">&nbsp;&nbsp;Contact&nbsp;&nbsp;</a>
                </li>
                <li><a href="sponsors.php">&nbsp;&nbsp;Sponsors</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://facebook.com/projetaugustinemelun" target="_blank"><font color="#3b5998"><i class="fa fa-facebook-square"></i></font></a>
                </li>
                <li><a href="http://twitter.com/ProjetAugustine" target="_blank"><font color="#4099FF"><i class="fa fa-twitter"></i></font></a>
                </li>
                <ul class="nav navbar-nav navbar-right navcompte">
                  <li class="dropdown" id="menuLogin">
                <?php if (isset($_SESSION['user'])) : ?>
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">&nbsp;&nbsp;Admin &nbsp;&nbsp;</a>
                       <div class="dropdown-menu" style="padding:17px;">
                         <?php if ($_SESSION['authlevel'] == 3) : ?>
                           <p style="padding:7px;"><a
                             href="user.php"><span class="fa fa-group"></span> Gestion utilisateurs</a>
                           </p><hr><?php endif; ?>
                         <?php if ($_SESSION['authlevel'] >= 2) : ?>
                             <p style="padding:7px;"><a
                               href="actualite.php"><span class="fa fa-bullhorn"></span> Gestion actualités</a>
                              </p><hr><?php endif; ?>
                         <?php if ($_SESSION['authlevel'] >= 1) : ?>
                            <p style="padding:7px;"><a
                               href="commentaire.php"><span class="fa fa-comments"></span> Gestion commentaires</a>
                            </p><hr><?php endif; ?>
                        <p style="padding:7px;"><a href="options.php"><span class="fa fa-cog"></span> Options</a></p>
                        <hr>
                        <p style="padding:7px;"><a href="logout.php?out=1"><span
                             class="fa fa-sign-out"></span>D&eacute;connexion</a></p>
                      </div>
                       <?php
                         else  : // Si l'utilisateur n'est pas connecté.
                        ?>
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">S'identifier</a>
                          <div class="dropdown-menu" style="padding:15px;">
                               <form role="form" id="formLogin" action="doLogin.php" method="POST">
                                   <div class="form-group">
                                       <label for="username">Identifiant :</label>
                                       <input name="username" type="text" class="form-control" id="username">
                                   </div>
                                   <div class="form-group">
                                       <label for="pwd">Mot de passe :</label>
                                       <input name="password" type="password" class="form-control" id="pwd">
                                   </div>
                                   <center><button type="submit" class="btn btn-default">Login</button></center>
                               </form>

                          </div>
                        <?php endif;?>
                    </li>
                </ul>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<?php  if (!empty($_SESSION['flash'])) : ?>
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Information:</span>
  <?php echo $_SESSION['flash'];
    // now, we can delete it
    unset($_SESSION['flash']);
  ?>
</div>
<div>
<?php endif; ?>
