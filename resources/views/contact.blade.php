@extends('layouts.samaprof')

@section('content')
  <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bakeli_bg1.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3 bread">Nous contactez</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
      <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Informations de contact</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> 	241 Htlm Grand Yoff / Dakar</p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://1234567920">	+221 33 000 00 00</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@samaprof.com</a></p>
        </div>
      </div>
      <div class="row">
          <p style="font-size:40px;">
            <span><a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a></span>
            <span><a href="#" class="text-primary"><i class="fab fa-twitter"></i></a></span>
            <span><a href="#" class="text-primary"><i class="fab fa-linkedin"></i></a></span>
          </p>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
        	<h4 class="mb-4">Nous contactez</h4>
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