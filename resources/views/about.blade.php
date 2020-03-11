@extends('layouts.samaprof')

@section('content')
  <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bakeli_bg1.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread">A propos</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section">
  	<div class="container">
  		<div class="row d-flex">
  			<div class="col-md-6 d-flex ftco-animate">
  				<div class="img img-about align-self-stretch" style="background-image: url(images/welcom-about.jpg); width: 100%;"></div>
  			</div>
  			<div class="col-md-6 pl-md-5 ftco-animate">
  				<h2 class="mb-4">Bienvenu sur <a href="{{ ('/home')}}">SamaProf</a>, votre site de recrutement de professeurs</h2>
  				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consequuntur laboriosam tenetur illum unde nostrum sunt suscipit quaerat nisi. Maiores ab cum explicabo, molestiae labore sapiente porro. Laborum, vel dignissimos!</p>
  				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum at placeat illum reiciendis ex nulla iure. Ex corrupti laborum rerum beatae architecto! Itaque cupiditate harum atque, ullam obcaecati quibusdam vero libero odit fugiat placeat tenetur perspiciatis quia est mollitia necessitatibus non id architecto dolorem, consectetur, soluta iusto similique tempora officia.</p>
  			</div>
  		</div>
  	</div>
  </section>
  
  <section class="ftco-section">
    <div class="container">
    	<div class="row">
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
            <div class="media-body px-3">
              <h3 class="heading">Notre Mission</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore totam atque quos earum?</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
            <div class="media-body px-3">
              <h3 class="heading">Notre Vison</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium exercitationem a fugiat assumenda.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
            <div class="media-body px-3">
              <h3 class="heading">Notre Particularite</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ex alias. Mollitia, expedita!</p>
            </div>
          </div>    
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-counter bg-light" id="section-counter">
  	<div class="container">
  		<div class="row justify-content-center">
  			<div class="col-md-10">
	    		<div class="row">
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-briefcase"></i></span>
	                <strong class="number text-primary" data-number="10300">0</strong>
	                <span>Nombre de professeurs</span>
	              </div>
	            </div>
            </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-graduation-cap"></i></span>
	                <strong class="number text-primary" data-number="7896">0</strong>
	                <span>Nombre d'ecoles</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-grin-hearts"></i></span>
	                <strong class="number text-primary" data-number="400">0</strong>
	                <span>Professeurs satisfaits</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center text-primary">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-grin-hearts"></i></span>
	                <strong class="number text-primary" data-number="200">0</strong>
	                <span>Ecoles satisfaits</span>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
      </div>
  	</div>
  </section>

  <section class="ftco-section-3 img" style="background-image: url(images/video_bg.jpg);">
  	<div class="overlay"></div>
  	<div class="container">
  		<div class="row d-md-flex justify-content-center">
  			<div class="col-md-9 about-video text-center">
  				<h2 class="ftco-animate">SamaProf le meilleur site web pour le recrutement de vos professeur!</h2>
  				<div class="video d-flex justify-content-center">
  					<a href="https://www.youtube.com/watch?v=_hvMJmCNCQU" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  
  <section class="ftco-freeTrial">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="d-flex align-items-center">
		    		<div class="free-trial ftco-animate">
		    			<h3>Nos evenements</h3>
		    			<p>Nous serons ravis de vous recevoir a nos evenements! </p>
		    		</div>
		    		<div class="btn-join ftco-animate">
		    			<p><a href="{{ url('/event') }}" class="btn btn-primary py-3 px-4">Nos evenements</a></p>
		    		</div>
		    	</div>
  			</div>
  		</div>
  	</div>
  </section>

  

  
  <section class="ftco-section testimony-section">
    <div class="container">
    	<div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Ce qu'ils disent de SamaProf!</h2>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12 ftco-animate">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/temoin1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nostrum blanditiis ad fugiat expedita voluptas.</p>
                  <p class="name">Bakeli</p>
                  <span class="position">Numerique</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/temoin2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, nulla? Odio recusandae corporis dolorem ipsam!</p>
                  <p class="name">Monsieur x</p>
                  <span class="position">Professeur</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/temoin3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, ullam necessitatibus vero nesciunt ad amet.</p>
                  <p class="name">Madame x</p>
                  <span class="position">Professeur</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/temoin4.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ipsam minus laborum blanditiis totam vel.</p>
                  <p class="name">Ecole</p>
                  <span class="position">Business</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Notre equipe</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/team.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="#">Omar SOW</a></h3>
        					<span class="position">Developpeur web/mobile</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/team2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Mouhamad BA</a></h3>
        					<span class="position">Developpeur web/mobile</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/team-thiam.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Moussa THIAM</a></h3>
        					<span class="position">Developpeur web/mobile</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    
	<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Abonnez-vous à notre newsletter</h2>
            <p>Ne rien rater! Recevez nos nouvelle en temps réel...</p>
            <div class="row d-flex justify-content-center mt-5">
              <div class="col-md-8">
                <form method="POST" action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Entrer un adresse e-mail">
                    <input type="submit" value="Envoyer" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
    