<!DOCTYPE html>
<html class="" lang="en">

<head>
    <title>Luxury Gold</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/img/Favicon.png') }}">
    <!-- bootstrap min-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/fontawesome.min.css') }}">
    <!-- OwlCarousel2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/slick.css') }}">
    <!-- slick-theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/slick-theme.css') }}">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/owl.carousel.css') }}">
    <!-- fancybox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/jquery.fancybox.css') }}">
    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/media.css') }}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <!-- googleapis -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- cart-model -->
    <div class="modal fade" id="cart_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title f_13 font-weight-bolder">Product successfully added to your shopping cart
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 mb-3  ">
                            <img src="{{ asset('frontend_assets/img/product/product_13.jpg') }}"
                                class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                        </div>
                        <div class="col-sm-8 col-xs-12 ">
                            <h6 class="font-weight-bolder">Product Name</h6>
                            <div class="font-weight-bolder pb-1">$19.12</div>
                            <span class="font-weight-bolder f_13 pb-1">Size: S</span><br>
                            <span class="font-weight-bolder f_13 pb-1">Color: White</span><br>
                            <span class="font-weight-bolder f_13 pb-1">Qty: 2</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-12 ">
                            <div class="border rounded final_payment">
                                <div class="card-body  border-bottom">
                                    <p class="text-muted">5 items</p>
                                    <p class="font-weight-bolderer">show details</p>
                                    <div>
                                        <span class="font-weight-bolder">subtotal</span>
                                        <span class="float-right font-weight-bolder">$94.00</span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bolder">shipping</span>
                                        <span class="float-right font-weight-bolder">$9.00</span>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div>
                                        <span class="font-weight-bolder">total(tax excl.)</span>
                                        <span class="float-right font-weight-bolder">$94.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary mt-2 f_13 px-3 py-2 rounded" data-dismiss="modal">close</a>
                    <a href="checkout.html" class="btn btn-primary mt-2 f_13 px-3 py-2 rounded">continue</a>
                </div>
            </div>
        </div>
    </div>
    <!-- cart_model -->
    <!-- eye-model -->
    <div class="modal fade" id="eye_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 col-12">
                            <img src="{{ asset('frontend_assets/img/product/product_13.jpg') }}"
                                class="fst-image mx-auto d-block img-fluid border rounded" alt="product_13">
                        </div>
                        <div class="col-sm-7 col-12">
                            <h5 class="border-bottom me_name">Product Name</h5>
                            <div class="font-weight-bolder border-bottom me_price">$19.12</div>
                            <div class="my-2 border-bottom me_des">Fashion has been creating well-designed collections
                                since 2010. </div>
                            <div class="me_quan">
                                <div class="sp_counter ">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number"
                                                disabled="disabled" data-type="minus" data-field="quant[1]"><span
                                                    class="minus">-</span></button>
                                        </span>
                                        <input type="number" name="quant[1]" class="form-control input-number"
                                            value="1" min="1" max="10">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number"
                                                data-type="plus" data-field="quant[1]"><span
                                                    class="plus">+</span></button>
                                        </span>
                                    </div>
                                </div>
                                <span>
                                    <a href="cart.html" class="btn btn-primary primary mt-3">add to cart</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- eye_model -->
    <!-- compare-model -->
    <div class="modal fade" id="compare_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="checked"></p>
                    <h5>Compare list updated!</h5>
                    <p class="text-muted font-weight-bolder">Product successfully removed from the product comparison!
                    </p>
                    <div class="text-danger font-weight-bolder"><a href="compare.html">Go to Compare</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- compare_model -->
    <!-- heart-model -->
    <div class="modal fade" id="heart_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="checked"></p>
                    <p class="text-muted font-weight-bolder">You must be logged in to manage your wishlist.</p>
                    <div class="text-danger font-weight-bolder"><a href="wishlist.html">Go to wishlist</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- heart_model -->
    <!-- shipping -->
    <div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>Fashion has been creating well-designed collections since 2010. </li>
                        <li>The brand offers feminine designs delivering stylish separates and statement dresses which
                            have since evolved into a full ready-to-wear collection in which every item is a vital part
                            of a woman's wardrobe. </li>
                        <li>The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style.
                        </li>
                        <li>All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now
                            Fashion extends to a range of accessories including shoes, hats, belts and more!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- shipping -->
    <!-- ask about product -->
    <div class="modal fade" id="question_Modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">shipping</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body que_form">
                    <h6>have a any question?</h6>
                    <form>
                        <div>
                            <div class="col-12 sp_form pl-0 pb-3">
                                <textarea class="form-control" rows="3" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="col-12 sp_form pl-0 pb-3">
                                <input type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="col-12 sp_form pl-0 pb-3">
                                <input type="email" class="form-control" placeholder="Enter Your Mail">
                            </div>
                            <div class="col-12 sp_form pl-0 pb-3 ">
                                <input type="tel" pattern=".{10}" class="form-control" id="other_number"
                                    oninput="check(this)" required="" placeholder="Enter Your Phone">
                            </div>
                            <div class="col-12 sp_form pl-0 pb-3">
                                <button type="submit" class="btn btn-primary">submit review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ask about product -->
    <!-- add to wishlist -->
    <div class="modal fade" id="wish_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    Please login and you will add product to your wishlist
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add to wishlist -->
    <div class="preloader"></div>
    <!-- header area -->
    <header>
        <div class="topbar-outer py-2 border-bottom d-md-none d-none d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-4 topbar_left">
                        <ul>
                            <li>
                                <span class="font-weight-bolderer">Get 30% Off On Selected Items</span>
                            </li>
                        </ul>
                    </div>
                    <!-- col-lg-5 col-md-4 col-sm-4 hidden-md-down topbar_left -->
                    <div class="col-lg-7 col-md-8 col-sm-8 text-xs-right  topbar_right text-right">
                        <nav class="navbar d-flex align-items-center  justify-content-end">
                            <div class="dropdown right1 md_2 hr_">
                                <span class="dropdown-toggle lng-select-menu" role="menu" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <select class=" select-menu form-select d-none d-sm-block">
                                        <option value="selected">English <i class="fas fa-angle-down"></i></option>
                                        <option value="1">Polski</option>
                                        <option value="2">Romana</option>
                                        <option value="3">Deutsch</option>
                                    </select>
                                </span>
                            </div>
                            <div class="dropdown right1 md_1">
                                <span class="dropdown-toggle lng-select-menu" role="menu" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <select class=" select-menu form-select d-none d-sm-block">
                                        <option value="selected">EUR €<i class="fas fa-angle-down"></i></option>
                                        <option value="1">USD $</option>
                                    </select>
                                </span>
                            </div>

                        </nav>
                    </div>
                    <!-- col-lg-7 col-md-8 col-sm-8 text-xs-right hidden-md-down topbar_right text-right -->
                </div>
                <!-- row -->
            </div>
            <!-- container  -->
        </div>
        <!-- topbar-outer py-2 border-bottom<-->
        <!-- second row -->
        <div class="header-top py-1  sticky-md-top">
            <div class="header-top-container">
                <div class="container ">
                    <div class="row header_row">
                        <div class="col-xl-2 col-lg-3 col-6 col-md-6  head-logo pl-md-0">
                            <div class="text-left header-top-left"><a href="index.html"><img
                                        src="{{ asset('frontend_assets/img/logo.png') }}" class="img-responsive img"
                                        alt="logo"></a>
                            </div>
                        </div>
                        <!-- col-xl-2 col-lg-2 col-md-2 col-sm-3 head-logo -->
                        <div class="col-xl-7 col-lg-6 col-6  head-search">
                      
                        {!!getTopNavCat()!!}
                            <!-- row -->
                        </div>
                        <!-- col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 head-search -->
                        <div class="col-xl-3 col-lg-3 col-6 col-md-6 head-right text-right">
                            <ul class="top_cart">
                                <li class="search">
                                    <div class="search-icon"></div>
                                    <div class="search-overlay">
                                        <form method="Get" class="search-bar">
                                            <select class="search-select form-select">
                                                <option selected="">All Category</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <input type="search" name="search" placeholder="Search here..."
                                                class="search-field">
                                            <input type="submit" name="search" class="search-btn">
                                        </form>
                                    </div>
                                </li>
                                <li class="dropdown right1 md_acc md_acco">
                                    <span class="account-block">
                                    </span>
                                    <span class="dropdown-toggle my_account" role="menu" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <a href="#">
                                        </a>
                                    </span>
                                    <span class="dropdown-menu r_menu dropdown-menu-right">
                                        <a class="dropdown-item font-weight-bolderer" href="login.html">log in</a>
                                        <a class="dropdown-item font-weight-bolderer"
                                            href="registration.html">register</a>
                                    </span>
                                </li>
                                <li class="dropdown d-inline-block my-cart md_acco">
                                    <a href="#" class="cart-qty">
                                        <span class="cart-contents">
                                        </span>
                                        <span
                                            class="d-lg-inline-block d-md-none d-sm-none d-none align-middle font-weight-bolderer"></span><span
                                            class="price_cart d-md-inline-block align-middle font-weight-bolderer">2</span>
                                    </a>
                                    <span class="dropdown-toggle Price-amount" role="menu" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        $230.00
                                    </span>
                                    <div class="dropdown-menu s_cart dropdown-menu-right">
                                        <ul class="shopping-cart pr-2 ">
                                            <li class="pb-2 d-block cart-remove cart_cross">
                                                <div class="media">

                                                    <div>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend_assets/img/product/product_13.jpg') }}"
                                                                class="fst-image img-fluid align-self-center"
                                                                alt="product_13"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 f_15">Media heading</h6>
                                                        <p><span class="f_13">1 x $ 299.00</span></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="pb-2 d-block cart-remove border-bottom pl-0 cart_cross wblastcart">
                                                <!-- <span class=""></span> -->
                                                <div class="media ">

                                                    <div>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend_assets/img/product/product_21.jpg') }}"
                                                                class="fst-image img-fluid align-self-center"
                                                                alt="product_21"></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-0 f_15">Media heading</h6>
                                                        <p><span>1 x $ 299.00</span></p>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="d-block text-muted font-weight-bolderer p-2 border-bottom">
                                                <span class="text-left">subtotal:</span>
                                                <span class="float-right">$230.00</span>
                                            </li>
                                            <li class="d-block font-weight-bolderer pt-2">
                                                <span class="text-left"><a href="cart.html">view cart</a></span>
                                                <span class="float-right"><a href="checkout.html">check out</a></span>
                                            </li>
                                        </ul>
                                        <p class="text-center cartempty">Your Shopping cart is empty!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- col-sm-4 head-right text-right -->
                    </div>
                    <!-- row -->
                </div>
            </div>
            <!--  container  -->
        </div>
        <!-- header-top py-4 border-bottom-->
        <!-- header area end -->
        <!-- vertical -->
        <div id="home_vertical_menu" class="menu_slider ">
            <div class="row ">
                <div class="col-lg-3 vertical_menu ">
                    <div class="v_menu bg-white rounded">
                        <div class="cat_menu bg-warning rounded-top"><a href="#"
                                class="pe-auto text-uppercase d-md-none d-sm-none d-none d-lg-block font-weight-bolder"><i
                                    class="fas fa-bars"></i>all categories</a></div>
                        <div class="navbar-header d-xl-none d-lg-none">
                            <button type="button" class="btn-navbar navbar-toggle" onclick="openNav()"
                                data-toggle="collapse" data-target=".navbar-ex1-collapse"><i
                                    class="fas fa-bars"></i></button>
                        </div>
                        <div id="mySidenav" class="sidenav ">
                            <div class="close-nav d-xl-none d-lg-none">
                                <span class="categories">Menu</span>
                                <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()"><i
                                        class="fas fa-times"></i></a>
                            </div>
                            <ul class="vertical_main_menu h_menu navbar navbar-nav">
                                {{-- <li><a href="index.html">Home</a></li> --}}
                                @foreach($home_categories as $list)
                                    <li>
                                        <a href="index.html">{{$list->category_name}}</a>
                                    </li>
                                @endforeach
                                {{-- <li class="">
                                    <a class="dropdown-toggle" href="shop-left-sidebar.html">shop&nbsp;</a>
                                </li>
                                <li class="dropdown mega_menu level-1 font-weight-bolderer">
                                    <a class="dropdown-toggle" href="single-product.html" role="button"
                                        data-toggle="dropdown" aria-expanded="false">Category&nbsp;<span
                                            class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <ul class="row mx-0">
                                                <li class="mg_menu col-lg-3 col-md-12 ">
                                                    <ul class="sub-category">
                                                        <li
                                                            class="h_title text-uppercase font-weight-bolder border-bottom d-block">
                                                            Rings</li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Sliver Ring</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Gold Ring</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Diamond Ring</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Moissanite Rings</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Birthstone Rings</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mg_menu col-lg-3 col-md-12 ">
                                                    <ul class="sub-category">
                                                        <li
                                                            class="h_title text-uppercase font-weight-bolder border-bottom d-block">
                                                            Hairpin</li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Birthstone Rings</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Corolla</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Diadem</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Pearls</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Crowns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mg_menu col-lg-3 col-md-12 ">
                                                    <ul class="sub-category">
                                                        <li
                                                            class="h_title text-uppercase font-weight-bolder border-bottom d-block">
                                                            Classic</li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Anniversary Gift</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Birthday Gift</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Rings</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">DailyWear</a></li>
                                                        <li class="d-block"><a
                                                                class="dropdown-item font-weight-bolderer"
                                                                href="shop-left-sidebar.html">Coronet</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown level-1 font-weight-bolderer">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">pages&nbsp;<span class="float-right mt-1"><i
                                                class="fas fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item font-weight-bolderer" href="about-us.html">about
                                                us</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer" href="login.html">login</a>
                                        </li>
                                        <li><a class="dropdown-item font-weight-bolderer"
                                                href="registration.html">registration</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer"
                                                href="single-product.html">single product</a></li>
                                        <li class="d-block"><a class="dropdown-item font-weight-bolderer"
                                                href="portfolio-grid-4.html">Portfolio</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer" href="cart.html">cart</a>
                                        </li>
                                        <li><a class="dropdown-item font-weight-bolderer"
                                                href="compare.html">compare</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer"
                                                href="wishlist.html">wishlist</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer" href="checkout.html">check
                                                out</a></li>
                                        <li><a class="dropdown-item font-weight-bolderer" href="forgot.html">forgot
                                                password</a></li>
                                    </ul>
                                </li>
                                <li class="level-1 font-weight-bolderer"><a href="contact-us.html">contact-us</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <!-- v_menu bg-white rounded -->
                </div>
                <!-- col-md-3 vertical_menu -->
            </div>
            <!-- row -->
        </div>
        <!-- vertical menu-->
    </header>
    <!-- header -->
    @section('container')
    @show
    <!-- footer -->
    <div class="footer animate__animated animate__fadeInUp">
        <div class="first_footer">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 d-none d-sm-none d-md-block news-letter">
                        <div class="newsletter d-inline-block align-middle">
                            <h4 class="">Sign up to Newsletter</h4>
                            <p class="mb-0">Make sure that you never miss our interesting news and exclusive
                                promotion. No spam, Ever!</p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control border-white"
                                placeholder="Subscribe newsletter..." aria-label="Subscribe newsletter..."
                                aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary text-uppercase" type="button"
                                    id="button-addon2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
        <div class="third_footer">
            <div class="container ">
                <div class="th_foo">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12 f_col">
                            <div class="first_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">About us<button class="toggle collapsed"
                                            data-toggle="collapse" data-target="#f_product"></button></h5>
                                </div>
                                <div class="categorie collapse" id="f_product">
                                    <p>A type specimen book. It has survived not only five centuries, but also the leap
                                        into electronic typ...</p>
                                </div>
                            </div>
                            <div class="footer_bottom text-center">
                                <div class="footer_title">
                                    <h5 class="text-uppercase text-left pt-2 pt-xs-0">Socials<button
                                            class="toggle collapsed" data-toggle="collapse"
                                            data-target="#social"></button></h5>
                                </div>
                                <div class="collapse" id="social">
                                    <div class="d-flex justify-content-start">
                                        <div class="social_links">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                        <div class="social_links">
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                        <div class="social_links">
                                            <a href="#">
                                                <i class="fab fa-skype"></i>
                                            </a>
                                        </div>
                                        <div class="social_links">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="social_links whatsapp">
                                            <a href="#">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="fth_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">information<button class="toggle collapsed"
                                            data-toggle="collapse" data-target="#fh_product"></button></h5>
                                </div>
                                <div class="categorie collapse" id="fh_product">
                                    <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="information.html">Delivery Infomations</a></li>
                                        <li><a href="policy.html">Privacy Policy</a></li>
                                        <li><a href="service.html">Custom Service</a></li>
                                        <li><a href="condition.html">Terms & Condition</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="th_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">categories<button class="toggle collapsed"
                                            data-toggle="collapse" data-target="#tproduct"></button></h5>
                                </div>
                                <div class="categorie collapse" id="tproduct">
                                    <ul>
                                        <li><a href="shop-left-sidebar.html">Titanium Rings</a></li>
                                        <li><a href="shop-left-sidebar.html">Platinum Rings</a></li>
                                        <li><a href="shop-left-sidebar.html">Promise Rings</a></li>
                                        <li><a href="shop-left-sidebar.html">Fascinator</a></li>
                                        <li><a href="shop-left-sidebar.html">Ear cuff</a></li>
                                        <li><a href="shop-left-sidebar.html">Crowns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                            <div class="fst_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">contact us<button class="toggle collapsed"
                                            data-toggle="collapse" data-target="#fproduct"></button></h5>
                                </div>
                                <div class="categorie collapse " id="fproduct">
                                    <ul class="add_row">
                                        <li>
                                            <div class="data1 add contact-ic">
                                                <a href="#">Address B - 3 Maxo Street,<br> Puffinville India</a>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="contact-ic call_ic">+911234567890</a>
                                        </li>
                                        <li>
                                            <a href="#" class="mail_f contact-ic mail_ic"><span
                                                    class="__cf_email__"
                                                    data-cfemail="80f7e5e2f3e9f4e5c0e7ede1e9ecaee3efed">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="snd_col">
                                <div class="footer_title">
                                    <h5 class="text-uppercase">payment<button class="toggle collapsed"
                                            data-toggle="collapse" data-target="#payment"></button></h5>
                                </div>
                                <div class="categorie collapse " id="payment">
                                    <ul class="foo_pay">
                                        <li>
                                            <a href="#"><i class="fab fa-cc-mastercard"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-cc-visa"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-credit-card"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-cc-paypal"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
        <div class="fifth_footer">
            <div class="container ">
                <div class="">
                    <div class="text-center demo_link d-block">2022 @ All rights reserved Powered by <a
                            href="#">demo.com</a></div>
                </div>
            </div>
        </div>
        <!-- row first_footer -->
    </div>
    <!-- footer -->
    <!-- footer end -->
    <!-- scroll -->
    <a href="#" id="scroll"></a>
    <!-- jquery-3.4.1 -->
    <script data-cfasync="false"
        src="{{ asset('frontend_assets/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('frontend_assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- owl.carousel -->
    <script src="{{ asset('frontend_assets/js/owl.carousel.js') }}"></script>
    <!-- bootstrap.min -->
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <!-- slick -->
    <script src="{{ asset('frontend_assets/js/slick.js') }}"></script>
    <!-- popper.min -->
    <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
    <!-- wow.js - v1.2.1 -->
    <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
    <!-- Font Awesome Free 5.15.1 -->
    <script src="{{ asset('frontend_assets/js/all.min.js') }}"></script>
    <!--   fancybox -->
    <script src="{{ asset('frontend_assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
    <script></script>
</body>

</html>
