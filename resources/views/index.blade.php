@extends('layouts.master')

@section('contenu')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/s1.jpg)">
          <div class="container">
            <h2>Bienvenue à <span> la Fabrique</span></h2>
            <p>Dans le cadre du respect des mesures sanitaires du à la pandémie COVID-19 
              nous vous donnons la possibilités de participer a nos programme de formaion</p>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s3.jpg)">
          <div class="container">
            <h2>Quelque information sur l'application</h2>
            <p>Une application qui permettra l'accès au 25 premiers apprenants ayant reserver une place sur la platform a tous de reserver une place afin de participer a la formation </p>
            <a href="#about" class="btn-get-started scrollto">En savoir plus</a>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s2.png)">
          <div class="container">
             <h2>L'objectif de la fabrique</h2>
            <p>Reduction le taux de chomage sur le marché d'emploi.</p>
            <a href="#counts" class="btn-get-started scrollto">Savoir plus</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">              
              <h4 class="title"><a href="">HTML5/CSS3</a></h4>
              <p class="description">Maitrise et manipulation des balise</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">             
              <h4 class="title"><a href="">PHP</a></h4>
              <p class="description">Mieux comprendre le php pour pouvoir meilleur gerer son Back-end</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">              
              <h4 class="title"><a href="">CMS</a></h4>
              <p class="description">Créer en moin d'une journée un site très dinamique sans bug</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">              
              <h4 class="title"><a href="">FRAMWORKS</a></h4>
              <p class="description">Telque JS, Laravel..... sont des acquis</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Nos conditions</h3>
          <p>Cet application vise directement les apprenants de la fabrique pour en savoir plus veiillez nous envoyez un message</p>
          <a class="cta-btn scrollto" href="#contact">En savoir plus</a>
        </div>
      </div>
    </section><!-- fin Cta Section -->
<section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-computer"></i>
              <span data-toggle="counter-up">85</span>
              <p><strong>Domaine:</strong>formation en developpeur web et web mobile</p>
              <a href="#">Avoir plus &raquo;</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-bag-alt"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Objectif:</strong>Reduire le nombre de chomeur au burkina</p>
              <a href="#">Avoir plus &raquo;</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-code"></i>
              <span data-toggle="counter-up">60</span>
              <p><strong>Accompagnement:</strong> Vous accompagne tout au long de votre 
              apprentissage</p>
              <a href="#">Avoir plus &raquo;</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-clock-time"></i>
              <span data-toggle="counter-up">100</span>
              <p><strong>Toujours</strong> Ouvert du lundi au dimanche</p>
              <a href="#">Avoir plus &raquo;</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- Fin Counts Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Quelque images du personnel tout au long de la formation et meme apres la formation toujours disponible pour vous écoutez et vous aidez. Quelqu'en soit votre difficultés</p>
        </div>
        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
          <a href="assets/img/gallery/g8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g8.jpg" alt=""></a>
          <a href="assets/img/gallery/g2.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g2.jpg" alt=""></a>
          <a href="assets/img/gallery/g3.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g10.jpg" alt=""></a>
          <a href="assets/img/gallery/g4.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g4.jpg" alt=""></a>
          <a href="assets/img/gallery/g5.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g5.jpg" alt=""></a>
          <a href="assets/img/gallery/g6.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g6.jpg" alt=""></a>
          <a href="assets/img/gallery/g7.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g7.jpg" alt=""></a>
          <a href="assets/img/gallery/g8.jpg" class="venobox" data-gall="gallery-carousel"><img src="assets/img/gallery/g5.jpg" alt=""></a>
        </div>
      </div>
    <!-- ======= debut Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Reponses a quelque question</h2>
          <p>tout d'abord se application est mis a la disposition des apprenants qui souhaite reelement apprendre du code et qui desir se spécifier encore plus dans le code</p>
        </div>
        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" class="" href="#faq1">A savoir nos différents horaires, jours et places disponibles? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                  Du lundi au vendredi de 17h-20h, <br>
                  Samedi et dimanche de 9h-20h;
                  Du lundi au dimanche nous avons 25places disponibles
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Quelle sont les caracteristique d'un Developpeur <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Un developpeur a tendance a ........................................................?
              </p>
            </div>       
    </section><!-- Fin Questioins Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Situation Géographique de la fabrique</p>
        </div>
      </div>
      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7356.936101023081!2d-1.4891370539612747!3d12.369453022630914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebe5be36fc8e3%3A0x8fe8b00975254abd!2scin%C3%A9%20Wemtenga!5e0!3m2!1sfr!2sbf!4v1615365127978!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Nos Address</h3>
                  <p>B29 Yarbanga&Ariane, Ouagadougou, Wemtenga</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Appelez-nous</h3>
                  <p>+226 57863502<br>+226 76140233</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Adress email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Messsage bien envoyer. mersi!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyez</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- Fin Contact Section -->
    @endsection