<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ici votre titre</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">50nuancesdePHP</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Rubrique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.html">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">connecfion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Rubriques</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!-- fil d'ariane -->
                <div class="fil_ariane row">
                    <!-- changer par function php -->
                    <h4>Afficher les rubriques par:</h4>
                    <form class="col-lg-6" action="#" method="POST"><!-- start form -->
                        <select name="nav-rubrique" size="1"><!-- start select -->
                            <option value="action">Action</option>
                            <option value="aventure">Aventure</option>
                            <option value="bdsm">BDSM</option>
                            <option value="biographique">Biographique</option>
                            <option value="drame">Drame</option>
                            <option value="fantastique">Fantastique</option>
                            <option value="historique">Historique</option>
                            <option value="romance">Romance</option>
                            <option value="thriller">Thriller</option>
                        </select> <!-- end select -->
                    </form><!-- end form -->
                </div>

            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                              </span>
                          </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                            <span class="fa-stack fa-lg">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                          </span>
                      </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
      </div>
  </div>
</div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>