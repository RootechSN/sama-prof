@extends('layouts.samaprof')

@section('content')   
  <div class="hero-wrap" style="background-image: url('images/bakeli_bg1.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <h1 class="mb-4">Aucune nation ne peut prospérer dans la vie sans éducation</h1>
          <p><a href="#" class="btn btn-primary px-4 py-3">Recruter</a> <a href="#" class="btn btn-secondary px-4 py-3">Postuler</a></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-search-course">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="courseSearch-wrap d-md-flex flex-column-reverse">
    				<div class="full-wrap d-flex ftco-animate">
    					<div class="one-third order-last p-5">
    						<span>Vous savez ce que vous cherchez?</span>
    						<h3>Je recrute des professeurs</h3>
    						<form action="#" class="course-search-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Trouvez vos professeurs">
		                <input type="submit" value="Rechercher" class="submit">
		              </div>
		            </form>
		            <p>Vous parcourez simplement? <a href="#"> Voir la liste de nos professeurs</a></p>
    					</div>
    					<div class="one-forth order-first img" style="background-image: url(images/bakeli_search.jpg);"></div>
    				</div>
    				<div class="full-wrap ftco-animate">
    					<div class="one-half">
    						<div class="featured-blog d-md-flex">
    							<div class="image d-flex order-last">
    								<a href="#" class="img" style="background: url(images/bakeli_2.jpg);"></a>
    							</div>
    							<div class="text order-first">
    								<span class="date">07 Mars 2020</span>
    								<h3><a href="#">Bakeli Workshop</a></h3>
										<p>vous serez formés en Marketing Digital. Vous apprendrez à créer des images pour Facebook, LinkedIn,...</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
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
    
  <!-- ##### les professeur populaire ##### -->
  <section class="popular-courses-area section-padding-100">
    <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Les professeurs les plus populaires</h2>
        </div>
      </div>
      <div class="row">
        <!-- Single teacher N1-->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
            <img src="images/sadio_js.jpg" alt="image du professeur" style="height:35vh;">
            <!--  Content -->
            <div class="course-content">
              <a href="#" ><h4>Sadio Bakeli</h4></a>
              <div class="meta d-flex align-items-center">
                <a href="#"><i class="fas fa-graduation-cap"></i> Developpement web</a>
                <a href="regular-page.html"><i class="fas fa-rocket"></i> Full stack</a>
              </div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
            </div>
            <!-- Seat Rating Fee -->
            <div class="seat-rating-fee d-flex justify-content-between">
              <div class="seat-rating h-100 d-flex align-items-center">
                <div class="seat">
                  <span><i class="fas fa-eye"></i> 10</span> 
                </div>
                <div class="rating">
                  <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                </div>
              </div>
              <div class="course-fee h-100">
                <a href="#" class="free">5000f/h</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Single teacher N2-->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
            <img src="images/coach.jpg" alt="image du professeur" style="height:35vh;">
            <!--  Content -->
            <div class="course-content">
              <a href="#" ><h4>Coach Inconnue</h4></a>
              <div class="meta d-flex align-items-center">
                <a href="#"><i class="fas fa-graduation-cap"></i> Français</a>
                <a href="regular-page.html"><i class="fas fa-rocket"></i> Scondaire</a>
              </div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
            </div>
            <!-- Seat Rating Fee -->
            <div class="seat-rating-fee d-flex justify-content-between">
              <div class="seat-rating h-100 d-flex align-items-center">
                <div class="seat">
                  <span><i class="fas fa-eye"></i> 10</span> 
                </div>
                <div class="rating">
                  <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                </div>
              </div>
              <div class="course-fee h-100">
                <a href="#" class="free">5000f/h</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Single teacher N1-->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
            <img src="images/coach-sarr.jpg" alt="image du professeur" style="height:35vh;">
            <!--  Content -->
            <div class="course-content">
              <a href="#" ><h4>Coach sarr</h4></a>
              <div class="meta d-flex align-items-center">
                <a href="#"><i class="fas fa-graduation-cap"></i> Developpement web</a>
                <a href="regular-page.html"><i class="fas fa-rocket"> </i>Full stack</a>
              </div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
            </div>
            <!-- Seat Rating Fee -->
            <div class="seat-rating-fee d-flex justify-content-between">
              <div class="seat-rating h-100 d-flex align-items-center">
                <div class="seat">
                  <span><i class="fas fa-eye"></i> 10</span> 
                </div>
                <div class="rating">
                  <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                </div>
              </div>
              <div class="course-fee h-100">
                <a href="#" class="free">5000f/h</a>
              </div>
            </div>
          </div>
        </div>
      </div>
           
      <div class="row">
        <div class="col-12">
          <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms" style="margin-top:30px; margin-bottom: 60px;">
            <a href="#" class="btn btn-primary px-4 py-3">Voir les professeurs</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Top Teacher Area End ##### -->

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

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Récent du blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/blog1.jpg'); height:35vh;">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#"><span class="icon-calendar"></span> 12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aperiam dolores accusamus molestiae vero at. <a href="#" class="free text-primary">Lire plus</a></p></p>
            </div>
            <!-- like comment share Fee -->
            <div class="like-comment-fee d-flex justify-content-between">
              <div class="like-comment h-100 d-flex align-items-center">
                <div class="like">
                  <span><a href="#"><i class="fas fa-thumbs-up"></i></a> 21</span> 
                </div>
                <div class="comment">
                  <span><a href="#"><i class="fas fa-comment-dots"></i></a> 14</span>
                </div>
              </div>
              <div class="share h-100">
                partager
                  <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                  <span><a href="#"><i class="fab fa-whatsapp-square"></i></a></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/blog2.jpg'); height:35vh;">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#"><span class="icon-calendar"></span> 12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nobis, corrupti qui maxime eos libero. <a href="#" class="free text-primary">Lire plus</a></p></p>
            </div>
            <!-- like comment share Fee -->
            <div class="like-comment-fee d-flex justify-content-between">
              <div class="like-comment h-100 d-flex align-items-center">
                <div class="like">
                  <span><a href="#"><i class="fas fa-thumbs-up"></i></a> 21</span> 
                </div>
                <div class="comment">
                  <span><a href="#"><i class="fas fa-comment-dots"></i></a> 14</span>
                </div>
              </div>
              <div class="share h-100">
                partager
                  <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                  <span><a href="#"><i class="fab fa-whatsapp-square"></i></a></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/blog3.jpg'); height:35vh;">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#"><span class="icon-calendar"></span> 12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, aliquid voluptas corporis asperiores officia totam. <a href="#" class="free text-primary">Lire plus</a></p>
            </div>
            <!-- like comment share Fee -->
            <div class="like-comment-fee d-flex justify-content-between">
              <div class="like-comment h-100 d-flex align-items-center">
                <div class="like">
                  <span><a href="#"><i class="fas fa-thumbs-up"></i></a> 21</span> 
                </div>
                <div class="comment">
                  <span><a href="#"><i class="fas fa-comment-dots"></i></a> 14</span>
                </div>
              </div>
              <div class="share h-100">
                partager
                  <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                  <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                  <span><a href="#"><i class="fab fa-whatsapp-square"></i></a></span>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12">
          <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms" style="margin-top:30px; margin-bottom: 60px;">
            <a href="#" class="btn btn-primary px-4 py-3">En savoir plus</a>
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