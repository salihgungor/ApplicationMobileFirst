<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ali Baba</title>
  <link rel="stylesheet" href="bootstrap-v3/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="bootstrap-v3/css/bootstrap.min.css">
  <script src="bootstrap-v3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="pingback" href="http://icofont.com/xmlrpc.php">
  <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script>
$(document).ready(function() {
    $('.container').fadeIn(1000);
});
</script>
<header>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header" style="width:auto;">
        <a href="index.php">
          <img class="img-responsive" src="img/alibaba2.png" alt="logo alibaba" >
        </a>
      </div>
          <ul class="nav navbar-nav">
            <li>
              <a href="#">ACCUEIL</a>
            </li>
            <li>
              <a class="link" href="pages/menus.php">NOS MENUS</a>
            </li>
            <li>
              <a href="#" class="livraisonItem" ></i>LIVRAISON</a>
            </li>
          </ul>
    </div>
  </nav>

</header>
<body>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" date-interval="500">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/1.jpg" alt="" style="width:100%;">
            <div class="carousel-caption">
              <h2>Kebab</h2>
              <h3>Pour plus de fun manger wech!</h3>
            </div>
          </div>

          <div class="item">
            <img src="img/2.jpg" alt="" style="width:100%;">
            <div class="carousel-caption">
              <h2>Kebab</h2>
              <h3>Pour plus de fun manger wech!</h3>
            </div>
          </div>

          <div class="item">
            <img src="img/3.jpg" alt="" style="width:100%;">
            <div class="carousel-caption">
              <h2>Kebab</h2>
              <h3>Pour plus de fun manger wech!</h3>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Précedent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
  </div>
  <footer class="footer">
    <section class="bg-white" style="position:relative">
      <div class="container2">
        <div class="row">
		      <div class="col-xs-12 col-sm-4">
		                    <h3>Contacter nous</h3>
		                    <ul class="footer--info--contact">
		                        <li><i class="fas fa-envelope-square fa-w-16 fa-lg"></i><a href="mailto:alibaba@gmail.com">  alibaba@gmail.com</a></li>
		                        <li><i class="fas fa-phone-square fa-w-16 fa-lg"></i><a href="tel:+33321445950">  03 21 44 59 50</a></li>
		                        <li><i class="fas fa-map-marker fa-w-16 fa-lg"></i><a>  2, Rue François Courtin<br>62800 Liévin<br>France</a></li>
		                    </ul>
		                </div>
		      <div class="col-xs-12 col-sm-4">
		                    <h3>Reseaux sociaux</h3>
		                    <ul class="footer--info--connect">
		                        <li style="padding-bottom:15px;"><a><i class="fab fa-instagram fa-w-16 fa-3x"></i></a></li>
		                        <li><a><i class="fab fa-facebook-f fa-w-16 fa-3x"></i></a></li>
		                    </ul>
		                </div>
          <div class="clearfix visible-xs-block"></div>
		      <div class="col-xs-12 col-sm-4">
		                    <h3>Naviguer</h3>
		                    <ul class="footer--info--navigate">
		                        <li><a href="#">ACCUEIL</a></li>
		                        <li><a href="#">NOS MENUS</a></li>
		                        <li><a href="#">Livraison</a></li>
		                        <li><a href="#">Vos avis</a></li>
		                    </ul>
		                </div>
        </div>
		  </div>
    </section>
    <section class="bg-whitelight" style="position:relative;">
		    <div class="footer--copyright centered">
		                <p>© Copyright 2018 - Ali Baba<br/> SARL Atakan.</p>
		            </div>
		</section>
  </footer>
</body>
</html>
