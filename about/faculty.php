<!DOCTYPE html>
<html lang="en">

<?php include_once('../config/head.php'); ?>

<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div id="backtotop">
        <a href="#" id="scroll">
            <i class="las la-arrow-up"></i>
        </a>
    </div>
    <?php include_once('../config/header.php'); ?>
    <main>


        <!-- breadcrumb-section - start
			================================================== -->
        <section id="breadcrumb-section" class="breadcrumb-section d-flex align-items-center decoration-wrap clearfix" data-background="../assets/images/background/bg_1.jpg">
            <div class="container text-center">
                <h1 class="page-title mb-3">Shop Page</h1>
                <div class="breadcrumb-nav ul-li-center clearfix">
                    <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-grid-3-column.html">Shop</a></li>
                        <li class="active">Shop Grid 4 Columns</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- breadcrumb-section - end
			================================================== -->


        <!-- shop-section - start
			================================================== -->
        <section class="shop-section sec-ptb-100 pb-0 decoration-wrap clearfix">
            <div class="container">
                <div class="section-title text-center mb-60">
                    <h2 class="title-text mb-0">ผู้บริหารคณะพยาบาลศาสตร์</h2>
                </div>

                <div class="filter-wrap border-bottom clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                            <div class="dropdown select-option">
                                <button class="dropdown-toggle" type="button" id="filter-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="las la-filter mr-1"></i> Filter
                                </button>
                                <div aria-labelledby="filter-options" class="dropdown-menu ul-li-block clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!">Option 1</a></li>
                                        <li><a href="#!">Option 2</a></li>
                                        <li><a href="#!">Option 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center">
                            <p class="result-text">We found <span>62</span> products are available for you</p>
                        </div>

                        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                            <div class="dropdown select-option float-right">
                                <button class="dropdown-toggle" type="button" id="shorting-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="las la-bars"></i> Default Shorting
                                </button>
                                <div aria-labelledby="shorting-options" class="dropdown-menu ul-li-block clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!">Option 1</a></li>
                                        <li><a href="#!">Option 2</a></li>
                                        <li><a href="#!">Option 3</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-70 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-grid text-center clearfix">
                            <div class="item-image">
                                <a href="shop-details-1.html" class="image-wrap">
                                    <img src="../assets/images/product/img_1.jpg" alt="image_not_found">
                                </a>
                                <div class="btns-group ul-li-center clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
                                        <li>
                                            <a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
                                                <i class="las la-dot-circle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                    <a href="shop-details-1.html">รศ. ดร. นันทพร แสนศิริพันธ์</a>
                                    <h6>อีเมล : nantaporn.san@cmu.ac.th</h6>
                                    <h6>โทรศัพท์ : 0-53-949-042</h6>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-grid text-center clearfix">
                            <div class="item-image">
                                <a href="shop-details-1.html" class="image-wrap">
                                    <img src="../assets/images/product/img_2.jpg" alt="image_not_found">
                                </a>
                                <div class="btns-group ul-li-center clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
                                        <li>
                                            <a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
                                                <i class="las la-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                    <a href="shop-details-1.html">อ. ดร. นงลักษณ์ เฉลิมสุข</a>
                                    <h6>อีเมล : nonglak.c@cmu.ac.th</h6>
                                    <h6>โทรศัพท์ : 0-53-949-035</h6>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-grid text-center clearfix">
                            <div class="item-image">
                                <a href="shop-details-1.html" class="image-wrap">
                                    <img src="../assets/images/product/img_3.jpg" alt="image_not_found">
                                </a>
                                <div class="btns-group ul-li-center clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
                                        <li>
                                            <a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
                                                <i class="las la-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                    <a href="shop-details-1.html">ผศ. ดร.ปรียกมล ไกรกิจราษฎร์</a>
                                    <h6>อีเมล : preeyakamon.lert@cmu.ac.th</h6>
                                    <h6>โทรศัพท์ : 0 53 935039</h6>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-grid text-center clearfix">
                            <div class="item-image">
                                <a href="shop-details-1.html" class="image-wrap">
                                    <img src="../assets/images/product/img_4.jpg" alt="image_not_found">
                                </a>
                                <div class="btns-group ul-li-center clearfix">
                                    <ul class="clearfix">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="las la-shopping-basket"></i></a></li>
                                        <li>
                                            <a class="tooltipes" href="#!" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quickview-modal">
                                                <i class="las la-dot-circle"></i>
                                            </a>
                                        </li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Compare Product"><i class="las la-sync"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="lar la-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">
                                    <a href="shop-details-1.html">รศ. ดร.ปิยะนุช ชูโต</a>
                                    <h6>อีเมล : piyanut.x@cmu.ac.th</h6>
                                    <h6>โทรศัพท์ : 0 53 949039,0 53 949035</h6>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-nav ul-li-center clearfix">
                    <ul class="clearfix">
                        <li><a href="#!"><i class="las la-angle-left"></i></a></li>
                        <li><a href="#!">1</a></li>
                        <li><a href="#!">2</a></li>
                        <li><a href="#!">3</a></li>
                        <li><a href="#!">...</a></li>
                        <li><a href="#!">10</a></li>
                        <li><a href="#!"><i class="las la-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>


        <section id="instagram-section" class="instagram-section sec-ptb-100 clearfix">
  
        </section>

    </main>
    <!-- main body - end
		================================================== -->


    <!-- footer-section - start
		================================================== -->
    <footer id="footer-section" class="footer-section sec-ptb-100 pb-0 bg-gray clearfix">
        <div class="container">

            <div class="widget-area mb-60 clearfix">
                <div class="row justify-content-lg-between justify-content-md-center justify-content-md-center">

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <div class="brand-logo mb-4 clearfix">
                                <a href="index.html" class="brand-link">
                                    <img src="../assets/images/logo/medicia_1.png" alt="logo_not_found">
                                </a>
                            </div>
                            <p class="mb-30">
                                Medicia is an online medical service and
                                medicinewooCommerce theme for your ultimate
                                online store and medical service.
                            </p>
                            <div class="social-icon-circle ul-li clearfix">
                                <ul class="clearfix">
                                    <li><a href="#!"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#!"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                        <div class="useful-links ul-li-block clearfix">
                            <h3 class="widget-title">Products</h3>
                            <ul class="clearfix">
                                <li><a href="#!">Medicines</a></li>
                                <li><a href="#!">Vitamins &amp; Supplements</a></li>
                                <li><a href="#!">Accessories</a></li>
                                <li><a href="#!">Medical Equipment</a></li>
                                <li><a href="#!">All Products</a></li>
                                <li><a href="#!">Doctor Equipment</a></li>
                                <li><a href="#!">Offer Sale</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                        <div class="useful-links ul-li-block clearfix">
                            <h3 class="widget-title">Quick Link</h3>
                            <ul class="clearfix">
                                <li><a href="#!">Support</a></li>
                                <li><a href="#!">Refund Policy</a></li>
                                <li><a href="#!">Shipping &amp; Returns</a></li>
                                <li><a href="#!">Tearms &amp; Condition</a></li>
                                <li><a href="#!">Help Center</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="payment-cards ul-li mb-30 clearfix">
                            <h3 class="widget-title">Payments</h3>
                            <p class="mb-3">Secure Payments</p>
                            <ul class="mb-3 clearfix">
                                <li><a href="#!"><img src="../assets/images/payment_card/card_1.png" alt="_not_found"></a></li>
                                <li><a href="#!"><img src="../assets/images/payment_card/card_2.png" alt="_not_found"></a></li>
                                <li><a href="#!"><img src="../assets/images/payment_card/card_3.png" alt="_not_found"></a></li>
                                <li><a href="#!"><img src="../assets/images/payment_card/card_4.png" alt="_not_found"></a></li>
                                <li><a href="#!"><img src="../assets/images/payment_card/card_5.png" alt="_not_found"></a></li>
                            </ul>
                            <p class="mb-0">Powred by <a href="#!">stripe</a></p>
                        </div>
                        <div class="btns-group ul-li-block">
                            <ul class="clearfix">
                                <li>
                                    <a href="#!" class="store-btn bg-royal-blue">
                                        <span class="icon-wrap">
                                            <i class="lab la-apple"></i>
                                        </span>
                                        <span class="content-wrap">
                                            <small>available on</small>
                                            <strong>Apple Store</strong>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="store-btn bg-default-black">
                                        <span class="icon-wrap">
                                            <i class="lab la-google-play"></i>
                                        </span>
                                        <span class="content-wrap">
                                            <small>available on</small>
                                            <strong>Google Play</strong>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom text-center border-top clearfix">
                <p class="mb-0">©Copyright 2020 <a href="#!">Marvel_Theme</a>. All Rights Reserved.</p>
            </div>

        </div>
    </footer>
    <!-- footer-section - end
		================================================== -->


    <!-- jquery include -->
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/jquery-ui.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/magnific-popup.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/owl.carousel2.thumbs.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/countdown.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="../assets/js/gmaps.min.js"></script>

    <!-- mobile menu - jquery include -->
    <script src="../assets/js/mCustomScrollbar.js"></script>

    <!-- custom - jquery include -->
    <script src="../assets/js/custom.js"></script>


</body>

</html>