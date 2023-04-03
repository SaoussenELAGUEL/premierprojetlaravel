@extends("layouts.template")
@section('titre','Bienvenue dans notre site web')
@section("slider")
<div class="slider-area">
    <div class="slider-active owl-carousel nav-style-1  owl-dot-none">
        <div class="single-slider-2 slider-height-2 d-flex align-items-center bg-img" style="background-image:url(assets/img/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-12 ms-auto">
                        <div class="slider-content-3 slider-animated-1 text-center">
                            <h3 class="animated">Stylish</h3>
                            <h1 class="animated">Male Clothes</h1>
                            <p class="animated">30% off Summer Vacation</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.html">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider-2 slider-height-2 d-flex align-items-center bg-img" style="background-image:url(assets/img/slider/slider-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-12 ms-auto">
                        <div class="slider-content-3 slider-animated-1 text-center">
                            <h3 class="animated">Stylish</h3>
                            <h1 class="animated">Male Clothes</h1>
                            <p class="animated">30% off Summer Vacation</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.html">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contenu')
<div class="suppoer-area pt-100 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 support-shape text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-1.png" alt="">
                        <h5>Free Shipping</h5>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 support-shape text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-2.png" alt="">
                        <h5>Support 24/7</h5>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="support-wrap-2 mb-30 text-center">
                    <div class="support-content-2">
                        <img class="animated" src="assets/img/icon-img/support-3.png" alt="">
                        <h5>Money Return</h5>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-60 section-padding-1">
    <div class="container-fluid">
        <div class="section-title-2 text-center mb-60">
            <h2>New Arrival</h2>
            <p>Lorem ipsum dolor sit amet conse ctetu.</p>
        </div>
        <div class="custom-row">
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-1.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-1.jpg" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Sheep Wool Sweater</a></h3>
                            <div class="price-2">
                                <span>$ 60.00</span>
                                <span class="old">$ 60.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-2.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-2.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Gray Backpack</a></h3>
                            <div class="price-2">
                                <span>$ 70.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-3.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-3.jpg" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Optical Instrument</a></h3>
                            <div class="price-2">
                                <span>$ 40.00</span>
                                <span class="old">$ 50.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-4.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-4.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Panama Hat</a></h3>
                            <div class="price-2">
                                <span>$ 80.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-5.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-5.jpg" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Timex Watch</a></h3>
                            <div class="price-2">
                                <span>$ 30.00</span>
                                <span class="old">$ 40.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-6.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-6.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Waist Belt</a></h3>
                            <div class="price-2">
                                <span>$ 90.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-7.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-7.jpg" alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Puma Shoes For Men</a></h3>
                            <div class="price-2">
                                <span>$ 20.00</span>
                                <span class="old">$ 30.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-8.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-8.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Jeans For Men</a></h3>
                            <div class="price-2">
                                <span>$ 50.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-9.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-9.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Wireless Headphone</a></h3>
                            <div class="price-2">
                                <span>$ 50.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-col-5">
                <div class="product-wrap-2 mb-25 scroll-zoom">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="assets/img/product/hm3-pro-10.jpg" alt="">
                            <img class="hover-img" src="assets/img/product/hm3-pro-10.jpg" alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action-2">
                            <a title="Add To Cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                            <a title="Compare" href="#"><i class="fa fa-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content-2">
                        <div class="title-price-wrap-2">
                            <h3><a href="product-details.html">Sports Shoes</a></h3>
                            <div class="price-2">
                                <span>$ 50.00</span>
                            </div>
                        </div>
                        <div class="pro-wishlist-2">
                            <a title="Wishlist" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pb-55">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h2>OUR BLOG</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                        <span class="pink">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-wrap mb-30 scroll-zoom">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" alt=""></a>
                        <span class="purple">Lifestyle</span>
                    </div>
                    <div class="blog-content-wrap">
                        <div class="blog-content text-center">
                            <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                            <span>By Shop <a href="#">Admin</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

