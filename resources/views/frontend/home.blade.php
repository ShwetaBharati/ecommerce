@extends('frontend/layout')

@section('container')
<!--- Banner ----->
{{-- <slider>
    <div class="col-lg-12 col-md-12 main_slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            @foreach($banner as $list)
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('storage/media/'.$list->image)}}" class="d-block w-100 img-fluid" alt="s1">
                    <div class="carousel-caption container silder_text">
                        <p class="arrival">{{$list->name}}</p>
                        <h5 class="headding">{{$list->desc}}</h5>
                        <a type="btn" class="shop-now">Shop Now</a>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                            <img src="{{ asset('frontend_assets/img/s2.jpg') }}" class="d-block w-100 img-fluid"
                                alt="s2">
                            <div class="carousel-caption container silder_text">
                            <p class="arrival">{{$list->name}}</p>
                                <h5 class="headding">{{$list->desc}}</h5>
                                <a type="btn" class="shop-now">Shop Now</a>
                            </div>
                        </div> -->
            </div>
            @endforeach
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
        </div>
    </div>
</slider> --}}
<!--- Banner End ----->
<!-- Top Banner -->
<div class="container ">
    <div class="row">
        @foreach($top_banner as $list)
        <div class="col-12 col-lg-6 col-md-6 col-sm-6 col-xs-12 pb-xs-2">
            <div class="banner">
                <a href="#" class="off-banner">
                    <img src="{{asset('storage/media/'.$list->image)}}" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                </a>
                <div class="banner-text">
                    <h4 class="light-title">{{$list->name}}</h4>
                    <h3 class="dark-title">{{$list->desc}}</h3>
                    <a href="shop-left-sidebar.html">Shop Now</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Top banner End -->
<!-- Top Categories -->
<div class="categories">
    <div class="container   animate__animated animate__fadeInUp">
        <div class="row">
            <div class="col-12">
                <div class="title_outer">
                    <h5 class="font-weight-bolderer d-inline-block">Categories</h5>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div id="category_carousel" class="owl-carousel owl-theme pro_thumb">
                @foreach($home_categories as $list)
                <div class="item">
                    <div class="col-12">
                        <div class="category_thumb bg-white rounded">
                            <div class="cate_image">
                                <a href="single-product.html">
                                    <img src="{{ asset('storage/media/'.$list->image) }}" class="fst-image mx-auto d-block img-fluid" alt="product_1">
                                </a>
                            </div>
                            <div class="category_text">
                                <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">{{$list->category_name}}</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Top Categories End -->
<!-- Services Facility  -->
<div class="main_services">
    <div class="container ">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12 m_service ">
                <ul class="service service-1 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <li class="ser-svg d-lg-inline-block d-md-block  align-middle">
                        <span class="icon-image"></span>
                    </li>
                    <li class="ser-t d-lg-inline-block d-md-block  align-middle text-left">
                        <h6>24/7 free support</h6>
                        <p class="mb-0 text-muted">Online Support 24/7</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12 m_service">
                <ul class="service service-2 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                    </li>
                    <li class="ser-t d-lg-inline-block d-md-block align-middle text-left">
                        <h6>secure payment</h6>
                        <p class="mb-0 text-muted">100% Secure Payment</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12 m_service">
                <ul class="service service-3 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                    </li>
                    <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                        <h6>special gift cards</h6>
                        <p class="mb-0 text-muted">Give The Perfect Gift</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12 m_service">
                <ul class="service service-4 rounded text-center  animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <li class="ser-svg d-lg-inline-block d-md-block align-middle">
                        <span class="icon-image"></span>
                    </li>
                    <li class="ser-t d-lg-inline-block d-md-block align-middle  text-left">
                        <h6>world wide shipping</h6>
                        <p class="mb-0 text-muted">On Order Over $99</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- main_services -->
</div>
<!-- Services Facility End -->
<!-- Popular Product -->
<div class="main_top_pro_tab">
    <div class="container ">
        <div class="title_outer">
            <h5 class="font-weight-bolderer d-inline-block">popular Products</h5>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <ul class="nav nav-tabs mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="featured_tab" role="tab" data-toggle="tab" href="#featured_" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="latest_tab" role="tab" data-toggle="tab" href="#latest_" aria-selected="true">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="bags_tab" data-toggle="tab" role="tab" href="#bags" aria-selected="false">bestseller</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured_" role="tabpanel" aria-labelledby="featured_tab">
                        <div id="tab-products" class="tab-products pro_thumb">
                            @foreach($product as $list)
                            <!-- item -->
                            <div class="item">
                                <div class="product_thumb bg-white rounded">

                                    <div class="pro_image">
                                        <a href="single-product.html"><img src="{{asset('storage/media/'.$list->image)}}" class="fst-image mx-auto d-block img-fluid" alt="product_16"></a>
                                        <!-- <a href="single-product.html"><img src="{{ asset('frontend_assets/img/product/product_1.jpg') }}" class="second-img mx-auto d-block img-fluid" alt="product_1"></a> -->
                                    </div>
                                    <div class="text-center">
                                        <!-- <div class="button-group">
                                <a href="#" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                <a href="#" class="symbol pro_eye" data-toggle="modal" data-target="#eye_model"></a>
                                <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>
                            </div> -->
                                        <div class="main_text">
                                            <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">{{$list->name}}</a></h2>
                                            <div class="star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span class="text-center prices"><span class="font-weight-bolderer price">$69.00
                                                </span> <del class="text-muted">$100.00</del></span>
                                            <!-- <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                    + ADD TO CART
                                </a> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="latest_" role="tabpanel" aria-labelledby="latest_tab">
                        <div id="tab-products" class="tab-products pro_thumb">
                            @foreach($product as $list)
                            <!-- item -->
                            <div class="item">
                                <div class="product_thumb bg-white rounded">

                                    <div class="pro_image">
                                        <a href="single-product.html"><img src="{{asset('storage/media/'.$list->image)}}" class="fst-image mx-auto d-block img-fluid" alt="product_16"></a>
                                        <!-- <a href="single-product.html"><img src="{{ asset('frontend_assets/img/product/product_1.jpg') }}" class="second-img mx-auto d-block img-fluid" alt="product_1"></a> -->
                                    </div>
                                    <div class="text-center">
                                        <!-- <div class="button-group">
                                <a href="#" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                <a href="#" class="symbol pro_eye" data-toggle="modal" data-target="#eye_model"></a>
                                <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>
                            </div> -->
                                        <div class="main_text">
                                            <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">{{$list->name}}</a></h2>
                                            <div class="star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <span class="text-center prices"><span class="font-weight-bolderer price">$69.00
                                                </span> <del class="text-muted">$100.00</del></span>
                                            <!-- <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                    + ADD TO CART
                                </a> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="bags" role="tabpanel" aria-labelledby="bags_tab">
                            <div id="tab-products" class="tab-products pro_thumb">
                                @foreach($product as $list)
                                <!-- item -->
                                <div class="item">
                                    <div class="product_thumb bg-white rounded">

                                        <div class="pro_image">
                                            <a href="single-product.html"><img src="{{asset('storage/media/'.$list->image)}}" class="fst-image mx-auto d-block img-fluid" alt="product_16"></a>
                                            <!-- <a href="single-product.html"><img src="{{ asset('frontend_assets/img/product/product_1.jpg') }}" class="second-img mx-auto d-block img-fluid" alt="product_1"></a> -->
                                        </div>
                                        <div class="text-center">
                                            <!-- <div class="button-group">
                                <a href="#" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                <a href="#" class="symbol pro_eye" data-toggle="modal" data-target="#eye_model"></a>
                                <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>
                            </div> -->
                                            <div class="main_text">
                                                <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">{{$list->name}}</a></h2>
                                                <div class="star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <span class="text-center prices"><span class="font-weight-bolderer price">$69.00
                                                    </span> <del class="text-muted">$100.00</del></span>
                                                <!-- <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                    + ADD TO CART
                                </a> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Product End -->
<!-- Testimonials -->
<div class="testimonial">
    <div class="container ">
        <div class="title_outer">
            <h5 class="font-weight-bolderer d-inline-block"> Testimonials </h5>
        </div>
        <div id="testimonial_carousel" class="owl-carousel owl-theme pro_thumb row">
            <div class="item">
                <div class="col-12">
                    <div class="mr-jhon">
                        <p class="">
                            Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal
                            semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna
                            semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                    </div>
                    <div class="designer">
                        <div class="">
                            <img src="{{ asset('frontend_assets/img/Testi-1.png') }}" alt="Testi-1" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                            <h5 class="">mr.John doe</h5>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <div class="mr-jhon">
                        <p class="">
                            Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal
                            semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna
                            semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                    </div>
                    <div class="designer">
                        <div class="">
                            <img src="{{ asset('frontend_assets/img/Testi-2.png') }}" alt="Testi-2" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                            <h5 class="">mr.John doerrrr</h5>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <div class="mr-jhon">
                        <p class="">
                            Sed elit quam the iaculis sed semper or sit amet the udin vitae nibh at magna akal
                            semper Fusce commodo molestie elit quam, iaculis sum sempervitae nibh at magna
                            semperusce commodo ltieelit semper quam molestie iaculis...
                        </p>
                    </div>
                    <div class="designer">
                        <div class="">
                            <img src="{{ asset('frontend_assets/img/Testi-3.png') }}" alt="Testi-3" class="jhon-img img-fluid">
                        </div>
                        <div class="name">
                            <h5 class="">mr.John doehhhh</h5>
                            <span>Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</ <!-- Testimonials End -->
<!-- Bottom Banner -->
<div class="container long-banner">
    <div class="row">
        @foreach($bottom_banner as $list)
        <div class="col-12">
            <div class="banner">
                <a href="#" class="off-banner">
                    <img src="{{asset('storage/media/'.$list->image)}}" class=" img-fluid  animate__animated animate__fadeInUp " data-wow-duration="0.8s" data-wow-delay="0.4s" alt="sm1">
                </a>
                <div class="banner-text">
                    <h4 class="light-title">{{$list->name}}</h4>
                    <h3 class="dark-title">{{$list->desc}}</h3>
                    <a href="shop-left-sidebar.html">Shop Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
<!-- Bottom Banner End -->
<!-- Latest Product -->
<div class="Lastest-Products">
    <div class="container   animate__animated animate__fadeInUp">
        <div class="row">
            <div class="col-12">
                <div class="title_outer">
                    <h5 class="font-weight-bolderer d-inline-block">Lastest Products</h5>
                </div>
                <!-- title_outer -->
            </div>
            <!-- col-12 -->
        </div>
        <!-- row -->

        <div class="row">
            <div id="lastest_carousel" class="owl-carousel owl-theme pro_thumb">
                @foreach($product as $list)
                <!-- item -->
                <div class="item">
                    <div class="product_thumb bg-white rounded">

                        <div class="pro_image">
                            <a href="single-product.html"><img src="{{asset('storage/media/'.$list->image)}}" class="fst-image mx-auto d-block img-fluid" alt="product_16"></a>
                            <!-- <a href="single-product.html"><img src="{{ asset('frontend_assets/img/product/product_1.jpg') }}" class="second-img mx-auto d-block img-fluid" alt="product_1"></a> -->
                        </div>
                        <div class="text-center">
                            <!-- <div class="button-group">
                                        <a href="#" class="symbol pro_heart" data-toggle="modal" data-target="#heart_model"></a>
                                        <a href="#" class="symbol pro_eye" data-toggle="modal" data-target="#eye_model"></a>
                                        <a href="#" class="symbol pro_compare" data-toggle="modal" data-target="#compare_model "></a>
                                    </div> -->
                            <div class="main_text">
                                <h2 class="text-center pro-heading my-2"><a href="single-product.html" class="font-weight-bolderer">{{$list->name}}</a></h2>
                                <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span class="text-center prices"><span class="font-weight-bolderer price">Rs.69.00
                                    </span> <del class="text-muted">Rs. 100.00</del></span>
                                <!-- <a href="#" class="symbol add_to_cart" data-toggle="modal" data-target="#cart_model">
                                            + ADD TO CART
                                        </a> -->
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center">
            <button type="btn" type="submit" class="products-btn"><a href="shop-left-sidebar.html">View
                    More</a></button>
        </div>
    </div>
</div>
<!-- Latest Product End -->
<!-- Brand -->
<div class="logo-carousel">
    <div class="container ">
        <div class="row">
            <div id="logo_carousel" class="owl-carousel owl-theme ">
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo1.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo1">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo2.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo2">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo3.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo3">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo4.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo4">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo1.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo1">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo2.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo2">
                        </a>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="col-12">
                        <a href="#">
                            <img src="{{ asset('frontend_assets/img/logo3.png') }}" class="second-img mx-auto d-block img-fluid" alt="logo3">
                        </a>
                    </div>
                </div>
                <!-- item -->
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->



@endsection
