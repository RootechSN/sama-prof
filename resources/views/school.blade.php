@extends('layouts.samaprof')

@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bakeli_bg1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>School</span></p>
            <h1 class="mb-3 bread">Nos ecoles</h1>
          </div>
        </div>
      </div>
	</div> 
	
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3" style="margin-top:60px; margin-bottom:30px">
                <div class="col-md-7 heading-section ftco-animate text-center">
                  <h2 class="mb-4">Liste des ecoles</h2>
                </div>
            </div>
    		
    		<div class="row" style="margin-top: 0px; margin-bottom:20px">
                <!-- Single teacher N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole1.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Numerique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Formation Professionnelle</a>
                            </div>
                            <a href="#" ><h4>Ecole N1</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Single school N2-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole2.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Business</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-2</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single school N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole3.jpg" alt="image de l'ecole" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Polytechnique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"> </i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-3</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
    	    </div>
    	    <div class="row" style="margin-top: 0px; margin-bottom:20px">
                <!-- Single teacher N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole1.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Numerique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Formation Professionnelle</a>
                            </div>
                            <a href="#" ><h4>Ecole N1</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Single school N2-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole2.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Business</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-2</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single school N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole3.jpg" alt="image de l'ecole" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Polytechnique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"> </i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-3</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="row" style="margin-top: 0px; margin-bottom:20px">
                <!-- Single teacher N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole1.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Numerique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Formation Professionnelle</a>
                            </div>
                            <a href="#" ><h4>Ecole N1</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Single school N2-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole2.jpg" alt="image du professeur" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Business</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"></i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-2</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
							   <a  class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single school N1-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="images/ecole3.jpg" alt="image de l'ecole" style="height:35vh;">
                        <!--  Content -->
                        <div class="course-content">
						    <div class="meta d-flex align-items-center">
                                <a href="#"><i class="fas fa-graduation-cap"></i> Polytechnique</a>
                                <a href="regular-page.html"><i class="fas fa-rocket"> </i> Etude superieure</a>
                            </div>
                            <a href="#" ><h4>Ecole N-3</h4></a>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem, sapiente consequuntur dolore corrupti odio alias voluptates obcaecati reiciendis ipsam. Dolore! <a href="#" class="free text-primary">Lire plus</a></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <span><i class="fas fa-thumbs-up"></i> 10</span> 
                                </div>
                                <div class="rating">
                                    <span><i class="fa fa-star" aria-hidden="true"></i> 4.5</span>
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a  class="free"  style="width:202px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">contactez-nous ici</a>
                            </div>
                        </div>
                    </div>
                </div>
    	    </div>
    	    
            <div class="row mt-5" style="margin-top: 0px; margin-bottom:60px">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                          <li><a href="#">&lt;</a></li>
                          <li class="active"><span>1</span></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="staticBackdropLabel">Nous contactez ici</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom complet">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Adresse Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Sujet">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Nous suivre</button>
            </div>
        </div>
    </div>
    </div>

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