@extends('layouts.user')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center"  style="background-image: url({{ asset('assets/img/bg-img/bg-6.jpg);') }}">
        <div class="bradcumbContent">
            <h2>Actualités</h2>
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
    
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="palatin-blog-posts">

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="{{ asset('assets/img/blog-img/1.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">The program for the Summer of 2018</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="{{ asset('assets/img/blog-img/2.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">June opening for our Pool Bar</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                        <!-- ##### Single Blog Post ##### -->
                        <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb">
                                <img src="{{ asset('assets/img/blog-img/3.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <!-- Post Date-->
                                <a href="#" class="post-date btn palatin-btn">June 25, 2018</a>
                                <!-- Post Title -->
                                <a href="#" class="post-title">3 Tip for the perfect vacation</a>
                                <!-- Post Meta -->
                                <div class="post-meta d-flex justify-content-center">
                                    <!-- Catagory -->
                                    <a href="#" class="post-catagory">In Hotel</a>
                                    <!-- Comments -->
                                    <a href="#" class="post-comments">3 comments</a>
                                </div>
                                <!-- Post Excerpt -->
                                <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem, id feugiat quam egestas et. Donec porttitor varius diam in vulputate. Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut, auctor</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="btn palatin-btn">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Nos dernières actualités</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/1.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Deluxe Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/8.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">From $150/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Double Suite</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <!-- Single Rooms Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumbnail -->
                        <div class="bg-thumbnail bg-img" style="background-image: url({{ asset('assets/img/bg-img/9.jpg);') }}"></div>
                        <!-- Price -->
                        <p class="price-from">From $100/night</p>
                        <!-- Rooms Text -->
                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Single Room</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
                        </div>
                        <!-- Book Room -->
                        <a href="#" class="book-room-btn btn palatin-btn">Book Room</a>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Pagination -->
                    <div class="pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

@endsection