@extends('layouts.user')

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('assets/img/bg-img/bg-1.jpg);') }}"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">FONDATION DAKOLE DAISSALA</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">La Fondation est basée sur un modèle  de philanthropie encourageant toutes les envies d’agir au service de l’intérêt général pour une avancée de la société.</p>
                                <a href="/" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('assets/img/bg-img/bg-2.jpg);') }}"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Qui Sommes-Nous ?</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">La F2D a pour objetifs la préservation, la pérennisation et la poursuite des œuvres sociales, culturelles et caritatives de feu DAKOLE DAISSALA par diverses actions au profit des couches défavorisées et vulnérables.</p>
                                <a href="{{ route('about-us') }}" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{ asset('assets/img/bg-img/bg-3.jpg);') }}"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Agir Avec Nous</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Nous sommes le partenaire de tous ceux qui veulent s’engager au service de l’intérêt général, en faisant un don, un legs, une donation.</p>
                                <a href="{{ route('donation') }}" class="btn palatin-btn mt-50" data-animation="fadeInUp" data-delay="900ms">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <select class="form-control" id="select1">
                                  <option>19 June</option>
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <select class="form-control" id="select2">
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                  <option>26 June</option>
                                  <option>27 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3">
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4">
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->

    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>Nos moyens d’action</h2>
                        </div>
                        <p>La FONDATION DAKOLE DAISSALA, en abrégé « F2D » a pour slogan « chœur de vies ». La Fondation est basée sur un modèle  de philanthropie encourageant toutes les envies d’agir au service de l’intérêt général pour une avancée de la société. Un outil moderne et inédit de philanthropie</p>
                        <p>Pour l’atteinte de ses objectifs, avec la synergie des moyens humains, matériels et financiers, la FONDATION DAKOLE DAISSALA, <strong> « chœur de vies » </strong> procède de la manière suivante :</p>
                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Plaidoyer et accompagnement des pouvoirs publics en vue de renforcer les actions en faveur de la fille et de la femme </h6>
                            <h6><span class="fa fa-check"></span> L’ouverture d’un orphelinat </h6>
                            <h6><span class="fa fa-check"></span> La coopération avec les organisations nationales et internationales de promotion du développement et de l’épanouissement de la jeune fille et de la femme </h6>
                            <h6><span class="fa fa-check"></span> La formation et la sensibilisation </h6>
                            <h6><span class="fa fa-check"></span> L’assistance technique, matérielle et financière, s’il y a lieu </h6>
                            <h6><span class="fa fa-check"></span> Toute autre action compatible avec ses objectifs </h6>
                        </div>
                        <a href="#" class="btn palatin-btn mt-50">Lire Plus</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ asset('assets/img/bg-img/5.jpg') }}" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('assets/img/bg-img/6.jpg') }}" alt="">
                        </div>
                        <!-- Third Img-->
                        <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{ asset('assets/img/bg-img/7.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url({{ asset('assets/img/bg-img/4.png);') }}">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Notre gouvernance</h2>
                            <p>la Fondation prend ses décisions de manière totalement indépendante et agit grâce à la générosité de ses donateurs et mécènes. Pour guider sa gouvernance, elle s’appuie sur deux principes directeurs : la transparence et la collégialité. <br> Elle est constituée des organes suivants :</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>L’Assemblée Générale</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Le Comité de direction</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Le Coordonaateur général</p>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <a href="#" class="btn palatin-btn mt-50">En Savoir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Nos dernières actualités</h2>
                        <p>Retrouvez l'ensemble de nos dernières publications portant sur nos différents activités.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/1.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">Actualité</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe news</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Consulter</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/8.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">Actualité</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Double news</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Consulter</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/9.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">Actualité</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Single news</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Consulter</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact-area d-flex flex-wrap align-items-center">
        <div class="home-map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
        </div>
        <!-- Contact Info -->
        <div class="contact-info">
            <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                <div class="line-"></div>
                <h2>Nous Contacter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <h4 class="wow fadeInUp" data-wow-delay="300ms">Bafoussam, Ouest, Cameroun</h4>
            <h5 class="wow fadeInUp" data-wow-delay="400ms">+53 345 7953 32453</h5>
            <h5 class="wow fadeInUp" data-wow-delay="500ms">yourmail@gmail.com</h5>
            <!-- Social Info -->
            <div class="social-info mt-50 wow fadeInUp" data-wow-delay="600ms">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

@endsection
