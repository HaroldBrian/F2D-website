@extends('layouts.user')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"  style="background-image: url({{ asset('assets/img/bg-img/bg-2.jpg);') }}">
        <div class="bradcumbContent">
            <h2>A Propos De Nous</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

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
                    <div class="about-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Qui sommes-nous ?</h2>
                        </div>
                        <p>Monsieur DAKOLE DAISSALA, décédé le 09 août 2022 à Yaoundé, fut un homme d’Etat, Ministre de la République, homme politique, Député de la Nation, Sénateur  et Chef traditionnel dont le parcours a marqué la vie publique de son pays.</p>
                        <p>Il fut un bâtisseur invétéré et rassembleur infatigable dont les œuvres sont aussi nombreuses que variées dans les domaines politique, social, culturelle et constituent pour nombre de nos concitoyens un héritage à préserver. </p>
                        <p>Désireux de poursuivre et de pérenniser les œuvres de DAKOLE DAISSALA sur les plans social, caritatif et culturel,  les membres fondateurs, descendants et parents et amis de DAKOLE DAISSALA ont mis sur pied la présente association régie par la loi n°90/053 du 29 décembre 1990 relative à la liberté d’association et tous textes subséquents. </p>

                        <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel single-accordion">
                                <h6>
                                    <a role="button" aria-expanded="false" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Lire plus a propos de nous
                                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                                </h6>
                                <div id="collapseThree" class="accordion-content collapse" style="">
                                    <p>La presnte organisation non gouvernementale dénommée  Fondation DAKOLE DAISSALA (F2D) est ainsi née de la volonté de créer un outil pour mobiliser la générosité privée au service de l’intérêt général.</p>
                                    <p>Telles sont les premières bases de la construction d’une philanthropie qui ne se limite pas à l’engagement de quelques grands mécènes, mais qui réunit des donateurs, fondateurs, bénévoles, acteurs de terrain, décidés à prendre leur part d’intérêt général,  une mobilisation qui fait avancer la société.</p>
                                    <p>La Fondation s’attèle à des problématiques sociétales jusque-là peu prises en compte.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="{{ asset('assets/img/bg-img/2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-milestones section-padding-100-0 bg-img bg-overlay bg-fixed" style="background-image: url({{ asset('assets/img/bg-img/bg-4.jpg);') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center white">
                        <div class="line-"></div>
                        <h2>Agir Avec Nous</h2>
                        <p>Nous sommes le partenaire de tous ceux qui veulent s’engager au service de l’intérêt général, en faisant un don, un legs, une donation.
                        Nous mobilisons notre savoir-faire et notre réseau d’experts pour vous aider à agir le plus efficacement possible au service de toutes les causes de l’intérêt général,et toute cause touchant les personnes vulnerables (recherche médicale, précarité, personnes âgées isolées, environnement, culture, éducation…).
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="scf-text">
                            <i class="icon-binoculars"></i>
                            <h2><span class="counter">231</span></h2>
                            <p>Personnes aidées</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="scf-text">
                            <i class="icon-landmark"></i>
                            <h2><span class="counter">3</span></h2>
                            <p>Entreprises</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="scf-text">
                            <i class="icon-around"></i>
                            <h2><span class="counter">79</span></h2>
                            <p>Partenaires</p>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <div class="scf-text">
                            <i class="icon-postcard"></i>
                            <h2><span class="counter">25</span></h2>
                            <p>Employés</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Nos Missions</h2>
                        <p>La F2D a pour objetifs la préservation, la pérennisation et la poursuite des œuvres sociales, culturelles et caritatives de feu DAKOLE DAISSALA par diverses actions au profit des couches défavorisées et vulnérables. A ce titre, elle promeut :</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> L’alphabétisation des couches défavorisées </h6>
                            <h6><span class="fa fa-check"></span> L’éducation de la jeune fille </h6>
                            <h6><span class="fa fa-check"></span> La lutte contre le mariage précoce </h6>
                        </div>
                        <div class="hotel-img">
                            <img src="{{ asset('assets/img/bg-img/3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> La protection de la femme contre les discriminations, les inégalités et les violences basées sur le genre </h6>
                            <h6><span class="fa fa-check"></span> L’insertion socio-professionnelle de la femme rurale et le recul de la pauvreté </h6>
                        </div>
                        <div class="hotel-img">
                            <img src="{{ asset('assets/img/bg-img/10.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Hotel Info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
                        <div class="hotel-info-text">
                            <h6><span class="fa fa-check"></span> L’aide aux personnes vulnérables et défavorisées</h6>
                            <h6><span class="fa fa-check"></span> La formation à la citoyenneté de la femme rurale et des jeunes déscolarisés et bien plus encore...</h6>
                        </div>
                        <div class="hotel-img">
                            <img src="{{ asset('assets/img/bg-img/11.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-area section-padding-100 bg-img" style="background-image: url({{ asset('assets/img/core-img/pattern.png);') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-content">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>Nos Témoignages</h2>
                        </div>
                        
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">
                            
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Michael Smith, <span>Partenaire</span></h6>
                                <img src="{{ asset('assets/img/core-img/trip.png') }}" alt="">
                            </div>
                            
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                <h6>Nazrul Islam, <span>Partenaire</span></h6>
                                <img src="{{ asset('assets/img/core-img/trip.png') }}" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
