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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quaerat sed? Possimus tenetur veritatis necessitatibus....</p>
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
              <a href="#" ><h4>Ibrahima K. Ba</h4></a>
              <div class="meta d-flex align-items-center">
                <a href="#"><i class="fas fa-graduation-cap"></i> Français</a>
                <a href="regular-page.html"><i class="fas fa-rocket"></i> Scondaire</a>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quaerat sed? Possimus tenetur veritatis necessitatibus....</p>
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
              <a href="#" ><h4>Sadio Bakeli</h4></a>
              <div class="meta d-flex align-items-center">
                <a href="#"><i class="fas fa-graduation-cap"></i> Developpement web</a>
                <a href="regular-page.html"><i class="fas fa-rocket"> </i>Full stack</a>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quaerat sed? Possimus tenetur veritatis necessitatibus....</p>
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
          <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms" style="margin-top:15px; margin-bottom: 30px;">
            <a href="#" class="btn btn-primary px-4 py-3">En savoir plus</a>
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
	                <strong class="number" data-number="10300">0</strong>
	              </div>
	            </div>
            </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-graduation-cap"></i></span>
	                <strong class="number" data-number="7896">0</strong>
	                <span>Nombre d'ecoles</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-grin-hearts"></i></span>
	                <strong class="number" data-number="400">0</strong>
	                <span>Professeurs satisfaits</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate count-main">
	            <div class="block-18 text-center text-primary">
	              <div class="text">
                  <span style="font-size:30px"><i class="fas fa-grin-hearts"></i></span>
	                <strong class="number" data-number="200">0</strong>
	                <span>Ecoles satisfaits</span>
	              </div>
	            </div>
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
          <h2 class="mb-4">Ce que nos professeurs disent</h2>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12 ftco-animate">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">CSE Student</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Math Student</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">Science Students</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap text-center">
                <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  <p class="name">Dennis Green</p>
                  <span class="position">English Student</span>
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
          <h2 class="mb-4">Our Experience Advisor</h2>
        </div>
      </div>
      <div class="row">
      	<div class="col-lg-4 mb-sm-4 ftco-animate">
      		<div class="staff">
      			<div class="d-flex mb-4">
      				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
      				<div class="info ml-4">
      					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
      					<span class="position">CSE Teacher</span>
      					<p class="ftco-social d-flex">
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
	              </p>
      				</div>
      			</div>
      			<div class="text">
      				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
      			</div>
      		</div>
      	</div>
      	<div class="col-lg-4 mb-sm-4 ftco-animate">
      		<div class="staff">
      			<div class="d-flex mb-4">
      				<div class="img" style="background-image: url(images/person_2.jpg);"></div>
      				<div class="info ml-4">
      					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
      					<span class="position">CSE Teacher</span>
      					<p class="ftco-social d-flex">
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
	              </p>
      				</div>
      			</div>
      			<div class="text">
      				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
      			</div>
      		</div>
      	</div>
      	<div class="col-lg-4 mb-sm-4 ftco-animate">
      		<div class="staff">
      			<div class="d-flex mb-4">
      				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
      				<div class="info ml-4">
      					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
      					<span class="position">CSE Teacher</span>
      					<p class="ftco-social d-flex">
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
	                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
	              </p>
      				</div>
      			</div>
      			<div class="text">
      				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
      			</div>
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

    
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Nos derniers événements</h2>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">Sep. 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry d-flex align-self-stretch flex-column-reverse">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">Sep. 10, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">10 septembre 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mb-4"><a href="#">Stagiaire Bootcamp Meetup 2020</a></h3>
              <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10 h 30 à 15 h 30</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime optio exercitationem quas corrupti quasi officiis.</p>
              <p><a href="{{ url('event') }}">Participer <i class="ion-ios-arrow-forward"></i></a></p>
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
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Une petite rivière nommée Duden coule à leur place et lui fournit les regelialia nécessaires.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Une petite rivière nommée Duden coule à leur place et lui fournit les regelialia nécessaires.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        	<div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
            </a>
            <div class="text p-4 d-block">
            	<div class="meta mb-3">
                <div><a href="#">12 août 2019</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
              <h3 class="heading mt-3"><a href="#">Comment se démarquer au début de votre carrière UX</a></h3>
              <p>Une petite rivière nommée Duden coule à leur place et lui fournit les regelialia nécessaires.</p>
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