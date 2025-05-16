@extends('Layouts.CustomerMaster')
@section('content')

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{asset('Customer/images/categories_img_03.jpg')}}" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="m-b-20"><strong>Welcome To <br> Farm Fresh</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('Customer/images/banner-02.jpg')}}" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="m-b-20"><strong>Welcome To <br> Farm Fresh</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('Customer/images/blog-img-02.jpg')}}" alt="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h1 class="m-b-20"><strong>Welcome To <br> Farm Fresh</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories -->
<div class="categories-shop">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{asset('Customer/images/categories_img_03.jpg')}}" alt="" />
                    <a class="btn hvr-hover" href="#">Vegetables are the heart of a healthy diet</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{asset('Customer/images/img-4.jpg')}}" alt="" />
                    <a class="btn hvr-hover" href="#">Pre-cut vegetables for a quick and healthy meal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<!-- Start Box Add Products -->
<!-- <div class="box-add-products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="offer-box-products">
                    <img class="img-fluid" src="{{asset('Customer/images/add-img-01.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="offer-box-products">
                    <img class="img-fluid" src="{{asset('Customer/images/add-img-02.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Box Add Products -->

<!-- Start Blog -->
<div class="latest-blog">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all">
                    <h1>Products</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4 text-center">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{asset('Customer/images/blog-img.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Cauliflower</h3>
                            <p>Cauliflower is a nutritious and versatile vegetable that belongs to the Brassica family, which also includes broccoli, cabbage, and kale. It is characterized by its white, compact head (or "curd") surrounded by green leaves. Cauliflower is rich in vitamins, minerals, and antioxidants, making it a healthy addition to any diet.</p>
                        </div>
                        <!-- <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-md- col-lg-5 col-xl-4 text-center">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{asset('Customer/images/Spinach-Thoran mix.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                        <h3></h3>
                            <h3></h3>
                            <h3></h3>
                            <h3>Red Spinach</h3>
                            
                            <h3></h3>
                            <h3></h3>
                            <h3></h3>
                            <p>Red spinach, also known as Amaranthus tricolor or Indian spinach, is a vibrant leafy green vegetable with dark red or purple stems and leaves. It is commonly used in various cuisines, particularly in South and Southeast Asia, and is known for its unique flavor and numerous health benefits.                                       </p>
                        </div>

                        <!-- <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4 text-center">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="{{asset('Customer/images/gallery-img-02.jpg')}}" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Tomato</h3>
                            <h3></h3>
                            <h3></h3>
                            <p>Tomatoes are a popular fruit from the Solanaceae family, native to South America. They are rich in vitamins C and K, potassium, and antioxidants like lycopene. Used in various dishes like sauces, salads, and soups, tomatoes come in different colors, including red, yellow, and green. They thrive in warm climates and well-drained soil.</p>
                        </div>
                        <!-- <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<!-- Start Instagram Feed -->
<!-- <div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('Customer/images/instagram-img-01.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('Customer/images/instagram-img-02.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('Customer/images/instagram-img-03.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('Customer/images/instagram-img-04.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Instagram Feed -->

@endsection
