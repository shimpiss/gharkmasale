<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery</title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
    <?php include 'modal.php'; ?>
    <style>
        .goog-logo-link {
            display: none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-gadget .goog-te-combo {
            margin: 7px 5px;
            width: 120px;
            border-radius: 4px;
        }
        .btn-enquiry{
            background-color: #ff7800;
            color: white;
            height: 50px;
            width: 120px;
        }
        .btn-enquiry-product{
            height: 40px;
            color: white;
        }
    .inner-banner {
    /* background: url(../images/gallerybanner.jpg) no-repeat center; */
        background-image: url("assets/images/gallerybanner.jpg");
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        position: relative;
        z-index: 0;
    }
    .inner-banner:before {
        content: "";
        background: var(--layer1);
        position: absolute;
        top: 0;
        min-height: 100%;
        left: 0;
        right: 0;
        z-index: -1;
    }
    .gallery-products{
        width: 80%;
        border: 1px solid transparent;
        margin: auto;
        margin-bottom: 30px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .gallery-products-div{
        border: 1px solid transparent;
        margin: auto;
        box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
    }
    .gallery-products-div-button{
        display: flex;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .gallery-products-div-button button{
        border-radius: 20px;
        width: 130px;
        background-color: #ff7800;
        border: 1px solid darkgray;
    }
    .gallery-products-img{
        width: 260px;
        height: 200px;
        border: 1px solid transparent;
        margin: auto;
    }
    .gallery-products-img img{
        width: 260px;
        height: 200px;
    }
    .product-heading{
        text-align: center;
    }
    .w3l-footer-16 {
        height: 450px;
    }
    @media(max-width: 991px){
            .email-address{
                display: none;
            }
            .language{
                display: none;
            }
        }
    </style>
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <span class="w3yellow">GKM</span>MASALE
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="services.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <div class="language">
                            <a id="google_translate_element"></a>
                        </div>

                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <li class="nav-item search-right">
                            <!-- <a href="#search" class="btn search-btn btn-primary" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span> Search</a> -->
                            <!-- search popup -->
                            <!-- <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div> -->
                            <!-- /search popup -->
                            <p class="email-address" style="text-align: center; color: grey;">+91-9893693303 <br> rgkm.avv@gmail.com</p>
                        </li>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->

            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5 gallerybanner">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Gallery</h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-arrow-right mx-2"></span> Gallery </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-index3-->
    <section class="w3l-index-about py-5" id="about2">
        <div class="container py-md-5 py-2">
            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <div class="w3l-abouthny-img">
                        <img src="assets/images/gallery-image2.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="w3l-abouthny-info">
                        <h6 class="title-subw3hny">What We Do</h6>
                        <h3 class="title-w3l">100% authentic, handpicked and hand grinded</h3>
                        <p class="mt-4">We source all spices from certified organic farms, our farms and offer no-pesticide and fully organic spices.</p>
                        <ul class="w3l-right-book w3l-right-book-grid mt-md-5 mt-4">
                            <li><span class="fas fa-check"></span> Ayurvedic Herbs</li>
                            <li><span class="fas fa-check"></span> Dry Fruits</li>
                            <li><span class="fas fa-check"></span> Masala Powder</li>
                            <li><span class="fas fa-check"></span> Turmeric Powder</li>
                            <li><span class="fas fa-check"></span> Coriander Powder</li>
                            <li><span class="fas fa-check"></span> Black Pepper</li>
                        </ul>
                        <!-- <a href="#services" class="btn btn-style btn-primary mt-4">Read More</a> -->
                        <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-index3-->
    <!--/features-section-->
    <section class="w3l-features w3l-services-page py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <!-- <h6 class="title-subw3hny mb-1">Our Services</h6> -->
                <h3 class="title-w3l">What We Offer</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-egg"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">World Wide Exporting</a></h4>
                                <p class="text-para">Option to pay via Internet banking, credit card & Paypal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Inventory</a></h4>
                                <p class="text-para">Maintenance refers to a range of activities on a daily basis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-kiwi-bird"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Expert Management</a></h4>
                                <p class="text-para">Management of resources to attain organizational goals</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-feather"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Best Quality</a></h4>
                                <p class="text-para">Spreading the pure spice that is handpick only for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-sign-language"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Cutomer Relationships</a></h4>
                                <p class="text-para">Our business is focused on healthy customers relations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-fan"></i>
                            </div>
                            <div class="icon-info text-left">
                                <h4><a href="#service" class="title-head mt-0">Tested & Approved</a></h4>
                                <p class="text-para">Check our reviews to know our customer experiences. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features-section -->

    <!--/w3l-grids-->
    <!-- <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            
            <div class="witemshny-grids row">
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img">We are one of leading company</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> The primary goal of all business</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
                <div class="col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"> Learn how to grow Business</a>
                    </h4>
                    <p class="mt-md-2">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam.</p>
                </div>
            </div>

        </div>
    </section> -->
    <!--//w3l-grids-->

    <!-- Gallery Products -->
    <div class="gallery-products">
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp-1.jpg" alt="">
            </div>
            <h5 class="product-heading">Haldi Powder</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (1).jpg" alt="">
            </div>
            <h5 class="product-heading">Corn</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (2).jpg" alt="">
            </div>
            <h5 class="product-heading">Kaali Mirch</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (3).jpg" alt="">
            </div>
            <h5 class="product-heading">Clove</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (4).jpg" alt="">
            </div>
            <h5 class="product-heading">Masala Powder</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (5).jpg" alt="">
            </div>
            <h5 class="product-heading">Elaichi</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (6).jpg" alt="">
            </div>
            <h5 class="product-heading">Red chillie</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp1 (7).jpg" alt="">
            </div>
            <h5 class="product-heading">Laung</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp-1(8).jpg" alt="">
            </div>
            <h5 class="product-heading">Mustard Seeds</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        
    </div>
    <!-- Gallery Products -->

    <!--/footer-->
    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                <span class="w3yellow">GKM</span> MASALE
                            </a></h2>
                        <p class="mt-3">We know how valuable your time is which is why we've made it easy for you to shop with us. Our simple and user-friendly website makes it easy to find what you need in just a few clicks!</p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li> -->
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Information</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="home.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- <div class="col-6 column">
                                <h3>Services</h3>
                                <ul class="footer-gd-16">

                                    <li><a href="#care">
                                            Brown Eggs</a></li>
                                    <li><a href="#meal">Chicken Broiler</a></li>
                                    <li><a href="#clean">
                                            Free Shipping</a></li>
                                    <li><a href="#medicine">
                                            Quality Matters</a></li>
                                    <li><a href="#setting">
                                            Poultry Cages</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Instagram Feed</h3>
                        <div class="end-column row">
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g1.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g2.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g3.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g4.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g5.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g6.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>


                        </div>
                    </div> -->
                    <div class="bwt-logo" style="width: 300px; height: 100px;">
                        <img src="./assets/images/bwt-white.png" alt="" style="width: 300px; height: 100px; margin-top: 50px;">
                    </div>
                </div>
                <!-- <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2022 Poultry Field. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#terms">Terms
                            </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#policy">Privacy Policy</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>





    <!-- Language Converter -->
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
				pageLanguage: 'en'
			}, 'google_translate_element');
		}
	</script>
	<script type="text/javascript">
		(function () {
			var gtConstEvalStartTime = new Date();
			/*
	  	
			 Copyright The Closure Library Authors.
			 SPDX-License-Identifier: Apache-2.0
			*/
			var h = this || self,
				l = /^[\w+/_-]+[=]{0,2}$/,
				m = null;

			function n(a) {
				return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
			}

			function p(a, b) {
				function c() { }
				c.prototype = b.prototype;
				a.i = b.prototype;
				a.prototype = new c;
				a.prototype.constructor = a;
				a.h = function (g, f, k) {
					for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
					return b.prototype[f].apply(g, e)
				}
			}

			function q(a) {
				return a
			};

			function r(a) {
				if (Error.captureStackTrace) Error.captureStackTrace(this, r);
				else {
					var b = Error().stack;
					b && (this.stack = b)
				}
				a && (this.message = String(a))
			}
			p(r, Error);
			r.prototype.name = "CustomError";

			function u(a, b) {
				a = a.split("%s");
				for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
				r.call(this, c + a[g])
			}
			p(u, r);
      
			u.prototype.name = "AssertionError";

			function v(a, b) {
				throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
			};
			var w;

			function x(a, b) {
				this.g = b === y ? a : ""
			}
			x.prototype.toString = function () {
				return this.g + ""
			};
			var y = {};

			function z(a) {
				var b = document.getElementsByTagName("head")[0];
				b || (b = document.body.parentNode.appendChild(document.createElement("head")));
				b.appendChild(a)
			}

			function _loadJs(a) {
				var b = document;
				var c = "SCRIPT";
				"application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
				c = b.createElement(c);
				c.type = "text/javascript";
				c.charset = "UTF-8";
				if (void 0 === w) {
					b = null;
					var g = h.trustedTypes;
					if (g && g.createPolicy) {
						try {
							b = g.createPolicy("goog#html", {
								createHTML: q,
								createScript: q,
								createScriptURL: q
							})
						} catch (t) {
							h.console && h.console.error(t.message)
						}
						w = b
					} else w = b
				}
				a = (b = w) ? b.createScriptURL(a) : a;
				a = new x(a, y);
				a: {
					try {
						var f = c && c.ownerDocument,
							k = f && (f.defaultView || f.parentWindow);
						k = k || h;
						if (k.Element && k.Location) {
							var e = k;
							break a
						}
					} catch (t) { }
					e = null
				}
				if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
					e = typeof c;
					if ("object" == e && null != c || "function" == e) try {
						var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
					} catch (t) {
						d = "<object could not be stringified>"
					} else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
					v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
						"HTMLScriptElement", d)
				}
				a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
				c.src = d;
				(d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
				d && c.setAttribute("nonce", d);
				z(c)
			}

			function _loadCss(a) {
				var b = document.createElement("link");
				b.type = "text/css";
				b.rel = "stylesheet";
				b.charset = "UTF-8";
				b.href = a;
				z(b)
			}

			function _isNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c)
					if (!(b = b[a[c]])) return !1;
				return !0
			}

			function _setupNS(a) {
				a = a.split(".");
				for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
				return b
			}
			window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
				document.readyState = "complete"
			}, !1);
			if (_isNS('google.translate.Element')) {
				return
			} (function () {
				var c = _setupNS('google.translate._const');
				c._cest = gtConstEvalStartTime;
				gtConstEvalStartTime = undefined;
				c._cl = 'en';
				c._cuc = 'googleTranslateElementInit';
				c._cac = '';
				c._cam = '';
				c._ctkk = '449532.3786053938';
				var h = 'translate.googleapis.com';
				var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
				var b = s + h;
				c._pah = h;
				c._pas = s;
				c._pbi = b + '/translate_static/img/te_bk.gif';
				c._pci = b + '/translate_static/img/te_ctrl3.gif';
				c._pli = b + '/translate_static/img/loading.gif';
				c._plla = h + '/translate_a/l';
				c._pmi = b + '/translate_static/img/mini_google.png';
				c._ps = b + '/translate_static/css/translateelement.css';
				c._puh = 'translate.google.com';
				_loadCss(c._ps);
				_loadJs(b + '/translate_static/js/element/main.js');
			})();
		})();
	</script>
	<!-- End Language Converter -->
	<!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-min.js"  defer></script>
    <script src="assets/js/vendor/js.cookie.js"  defer></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js " defer></script>
    <script src="assets/js/main.js"  defer></script>
	<!--Newsletter Popup Cookies-->
	<script>
		function newsletter_popup() {
			var cookieSignup = "cookieSignup", date = new Date();
			if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
				setTimeout(function () {
					$.magnificPopup.open({
						items: {
							src: '#newsletter-modal'
						}
						, type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
					}
					);
				}
					, 5000);
			}
			$.magnificPopup.instance.close = function () {
				if ($("#dontshow").prop("checked") == true) {
					$.cookie(cookieSignup, 'true', {
						expires: 1, path: '/'
					}
					);
				}
				$.magnificPopup.proto.close.call(this);
			}
		}
		newsletter_popup();
    </script>

</body>

</html>
