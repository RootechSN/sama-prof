<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>SamaProf Site de Recrutement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/')}}"><i class="#"></i>SamaProf <br><small>Recrutement</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ url('/')}}" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="{{ url('/about')}}" class="nav-link">A propos</a></li>
            <li class="nav-item"><a href="{{ url('/school')}}" class="nav-link">Ecoles</a></li>
            <li class="nav-item"><a href="{{ url('/teacher')}}" class="nav-link">Professeurs</a></li>
            <li class="nav-item"><a href="{{ url('/blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ url('/contact')}}" class="nav-link">Contact</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta"><a href="{{ url('/connexion')}}" class="nav-link"><span>Connexion</span></a></li>
            <li class="nav-item cta"><a href="{{ url('/inscription')}}" class="nav-link"><span>Inscription</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

        <div class="contenu">
            @yield('content')
        </div>

  <!-- Start Footer -->
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/video_bg.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="{{ url('index') }}">samaprof <br><small>recrutement</small></a></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A architecto voluptas asperiores earum, rerum iure?</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Article récent</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/blog1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Même le pointage tout-puissant n'a aucun contrôle nous.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 12 Janvier 2020</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div class="like">
                      <span><a href="#"><i class="fas fa-thumbs-up"></i></a> 21</span> 
                    </div>
                    <div class="comment">
                      <span><a href="#"><i class="fas fa-comment-dots"></i></a> 14</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/blog2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Même le pointage tout-puissant n'a aucun contrôle sur nous.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 12 Julliet 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div class="like">
                      <span><a href="#"><i class="fas fa-thumbs-up"></i></a> 21</span> 
                    </div>
                    <div class="comment">
                      <span><a href="#"><i class="fas fa-comment-dots"></i></a> 14</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Navigation</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/home') }}" class="py-2 d-block">Accueil</a></li>
                <li><a href="{{ url('/about') }}" class="py-2 d-block">A propos</a></li>
                <li><a href="{{ url('/school') }}" class="py-2 d-block">Ecoles</a></li>
                <li><a href="{{ url('/teacher') }}" class="py-2 d-block">Professeurs</a></li>
                <li><a href="{{ url('/contact') }}" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Nous contactez</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">241 Htlm Grand Yoff / Dakar</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+221 33 000 00 00</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@samaprof.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés a <i class="icon-heart" aria-hidden="true"></i> <a href="{{url('home')}}" target="_blank">SamaProf</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>