@extends('layouts.user')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"  style="background-image: url({{ asset('assets/img/bg-img/bg-5.jpg);') }}">
        <div class="bradcumbContent">
            <h2>Agir Avec Nous</h2>
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

    <section class="services-intro">
        <div class="container">
            <div class="row align-items-center">
                <!-- Service Intro Text -->
                <div class="col-12 col-lg-6">
                    <div class="service-intro-text mb-100">
                        <div class="section-heading">
                            <div class="line-"></div>
                            <h2>Nous Soutenir</h2>
                        </div>
                        <p>Quand vous faites un don à la Fondation DAKOLE DAISSALA, vous donnez les moyens d’agir à des acteurs de terrain engagés au service de l’intérêt général.</p>
                        <p>À la Fondation de F2D, nous avons une exigence : être à la hauteur de la confiance de nos donateurs. C’est pourquoi nous sélectionnons avec rigueur les initiatives soutenues et les accompagnons au quotidien.</p>
                        <a href="#" class="btn palatin-btn mt-50">Faire Un Don</a>
                    </div>
                </div>

                <!-- Services Features -->
                <div class="col-12 col-lg-6">
                    <div class="row mb-100">

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-wallet"></i>
                                    <p>Orange Money</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-wallet"></i>
                                    <p>Mobile Money</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Cool Facts -->
                        <div class="col-12 col-sm-4">
                            <div class="single-cool-fact">
                                <div class="scf-text">
                                    <i class="icon-credit-card"></i>
                                    <p>Carte de Credit</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Agir Avec Nous
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Cela nous permet chaque jour d’apporter des solutions concrètes et innovantes pour répondre aux maux de la société et venir en aide aux populations les plus vulnérables.
                                    Nous assurons également la plus grande transparence et nous nous engageons à vous rendre des comptes régulièrement quant à l’utilisation et l’efficacité de votre don.
                                </p>
                                <p>En faisant un don à la F2D, vous avez la possibilité de soutenir la ou les causes qui vous tiennent à cœur (précarité, isolement des personnes âgées, éducation, santé, culture…). Vous pouvez également laisser la F2D décider de l'affectation de votre don en fonction des besoins et actions prioritaires.C’est la garantie d’un don efficace et utile.
                                </p>
                                <p>Notre action s’appuie sur une gestion rigoureuse des fonds issus de votre générosité. Les dons affectés à une cause servent uniquement cette cause. Tous les projets que nous soutenons sont suivis par des bénévoles sur le terrain. Ainsi, en donnant à la F2D, vous avez l’assurance que votre don sert directement aux missions sociales et aux projets soutenus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ##### -->

@endsection
