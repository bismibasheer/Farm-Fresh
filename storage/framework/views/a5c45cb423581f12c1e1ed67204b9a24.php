<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Farm Fresh</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('Guest/images/favicon.ico')); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo e(asset('Guest/images/apple-touch-icon.png')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('Guest/css/bootstrap.min.css')); ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('Guest/css/style.css')); ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('Guest/css/responsive.css')); ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('Guest/css/custom.css')); ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                       
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="login-box">
        <a class="nav-link" href="<?php echo e(route('login_page')); ?>">Login / Sign Up</a>
    </div>
</div>


                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('Guest/images/farm-fresh-.jpg')); ?>" class="logo" style="width: 250px; height: 75px;" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                       
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                       
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="<?php echo e(asset('Guest/images/img-pro-01.jpg')); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="<?php echo e(asset('Guest/images/img-pro-02.jpg')); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="<?php echo e(asset('Guest/images/img-pro-03.jpg')); ?>" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

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
                <img src="<?php echo e(asset('Guest/images/categories_img_03.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>Farm Fresh</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo e(asset('Guest/images/banner-02.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>Farm Fresh</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?php echo e(asset('Guest/images/blog-img-02.jpg')); ?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>Farm Fresh</strong></h1>
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

    <!-- Start Categories  -->
   
<!-- Start Categories -->
<div class="categories-shop">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="<?php echo e(asset('Customer/images/categories_img_03.jpg')); ?>" alt="" />
                    <a class="btn hvr-hover" href="#">Vegetables are the heart of a healthy diet</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="<?php echo e(asset('Customer/images/img-4.jpg')); ?>" alt="" />
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
                    <img class="img-fluid" src="<?php echo e(asset('Customer/images/add-img-01.jpg')); ?>" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="offer-box-products">
                    <img class="img-fluid" src="<?php echo e(asset('Customer/images/add-img-02.jpg')); ?>" alt="" />
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
                        <img class="img-fluid" src="<?php echo e(asset('Customer/images/blog-img.jpg')); ?>" alt="" />
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
                        <img class="img-fluid" src="<?php echo e(asset('Customer/images/Spinach-Thoran mix.jpg')); ?>" alt="" />
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
                        <img class="img-fluid" src="<?php echo e(asset('Customer/images/gallery-img-02.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(asset('Customer/images/instagram-img-01.jpg')); ?>" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo e(asset('Customer/images/instagram-img-02.jpg')); ?>" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo e(asset('Customer/images/instagram-img-03.jpg')); ?>" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?php echo e(asset('Customer/images/instagram-img-04.jpg')); ?>" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Instagram Feed -->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>"Connecting the world, one post at a time! 🌍✨ #SocialMedia"</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About  Farm Fresh</h4>
                            <p>Farm Fresh refers to agricultural produce and products directly sourced from farms, ensuring freshness and quality. It often includes vegetables and pre cut vegetable that are free from excessive processing or artificial preservatives.</p> 
							<p>FarmFresh products promote healthy living and environmentally friendly consumption.






</p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo e(asset('Guest/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/bootstrap.min.js')); ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo e(asset('Guest/js/jquery.superslides.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/inewsticker.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/bootsnav.js.')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/images-loded.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/isotope.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/baguetteBox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/form-validator.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/contact-form-script.js')); ?>"></script>
    <script src="<?php echo e(asset('Guest/js/custom.js')); ?>"></script>
</body>
<style>
.login-box {
    text-align: center;
    padding: 2px; /* Reduced padding for less height */
    max-width: 310px; /* Set a max width */
    margin: auto; /* Center the box */
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Subtle shadow */
}

.nav-link {
    display: inline-block;
    padding: 3px 8px; /* Smaller padding for a compact look */
    font-size: 14px; /* Smaller font size */
    color: #fff; /* White text */
    background-color: #b0b435; /* Mustard yellow background */
    border-radius: 5px; /* Rounded button */
    text-decoration: none; /* Remove underline */
    transition: background-color 0.3s, transform 0.3s; /* Smooth transitions */
}

.nav-link:hover {
    background-color: #c6a300; /* Darker mustard on hover */
    transform: scale(1.05); /* Slightly enlarge */
}
</style>
</html><?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Layouts/GuestMaster.blade.php ENDPATH**/ ?>