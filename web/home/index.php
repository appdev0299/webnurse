<!doctype html>
<html class="no-js" lang="zxx">
<!-- head area start -->
<?php include_once('../config/head.php'); ?>
<!-- head area start -->

<body>
    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg id="loader">
                    <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
                </svg>
                <img src="../assets/img/favicon.png" alt="">
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <?php include_once('../config/header.php'); ?>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__content">
                            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                                <div class="offcanvas__logo logo">
                                    <a href="index.html">
                                        <img src="../assets/img/logo/logo.svg" alt="logo">
                                    </a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas__search mb-25">
                                <form action="#">
                                    <input type="text" placeholder="What are you searching for?">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="mobile-menu fix"></div>
                            <div class="offcanvas__text d-none d-lg-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore</p>
                            </div>
                            <div class="offcanvas__map d-none d-lg-block mb-15">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                            </div>
                            <div class="offcanvas__contact mt-30 mb-20">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="mailto:support@gmail.com">088889797697</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="tel:+012-345-6789">support@mail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas__social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- slider area start -->
        <section class="slider__area">
            <div class="slider__active swiper-container">
                <div class="swiper-wrapper">
                    <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                        <div class="slider__bg slider__overlay include-bg" data-background="../assets/img/slider/slider-3.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-10">
                                    <div class="slider__content p-relative z-index-1">
                                        <span data-animation="fadeInUp" data-delay=".3s">eduker University</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Institution of Higher Education</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the opportunity to create progress through technolog.</p>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="course-v1.html" class="tp-btn">Find Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item swiper-slide p-relative slider__height d-flex align-items-center z-index-1">
                        <div class="slider__bg slider__overlay include-bg" data-background="../assets/img/slider/slider-2.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-10 col-sm-10">
                                    <div class="slider__content p-relative z-index-1">
                                        <span data-animation="fadeInUp" data-delay=".3s">eduker University</span>
                                        <h2 class="slider__title" data-animation="fadeInUp" data-delay=".6s">Together We'll Explore New Things</h2>
                                        <p data-animation="fadeInUp" data-delay=".9s">We believe everyone should have the opportunity <br> to create progress through technolog.</p>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="course-v1.html" class="tp-btn">Find Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-paginations">
                    <button class="slider-button-next"><i class="fa-regular fa-arrow-right"></i></button>
                    <button class="slider-button-prev"><i class="fa-regular fa-arrow-left"></i></button>
                </div>
            </div>
        </section>
        <!-- slider area end -->

        <!-- features area start -->
        <section class="features__area pb-160">
            <div class="container">
                <div class="features__inner p-relative z-index-1 white-bg">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="features__item features__border-right d-sm-flex align-items-start white-bg mb-30">
                                <div class="features__icon mr-25">
                                    <svg width="42" height="44" viewBox="0 0 42 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.6013 2.11585L3.95694 10.3704C-0.0968136 13.0169 -0.0968136 18.94 3.95694 21.5865L16.6013 29.841C18.8697 31.3323 22.6084 31.3323 24.8769 29.841L37.4582 21.5865C41.491 18.94 41.491 13.0379 37.4582 10.3914L24.8769 2.13685C22.6084 0.624568 18.8697 0.624569 16.6013 2.11585Z" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.3176 24.275L7.2966 34.1259C7.2966 36.7934 9.35499 39.6499 11.8755 40.4901L18.5757 42.7165C19.7309 43.0945 21.6423 43.0945 22.8185 42.7165L29.5188 40.4901C32.0392 39.6499 34.0976 36.7934 34.0976 34.1259V24.38" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M40.4408 28.3077V15.7054" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="features__content">
                                    <h3 class="features__title">
                                        <a href="about.html">Graduation</a>
                                    </h3>
                                    <p>Euucal University was established it is recognized.</p>

                                    <a href="about.html" class="link-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="features__item features__border-right d-sm-flex align-items-start white-bg mb-30">
                                <div class="features__icon mr-25">
                                    <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.7168 31.4941V18.0775" stroke="#FF9000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.3835 31.4941V18.0775" stroke="#FF9000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22.0501 31.4941V18.0775" stroke="#FF9000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M29.7168 31.4941V18.0775" stroke="#FF9000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M37.3835 31.4941V18.0775" stroke="#FF9000" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M41.2168 39.1608H2.88347V33.4108C2.88347 32.3566 3.74597 31.4941 4.80014 31.4941H39.3001C40.3543 31.4941 41.2168 32.3566 41.2168 33.4108V39.1608Z" stroke="#031220" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22.7593 1.115L40.0093 8.01495C40.6801 8.28329 41.2168 9.08827 41.2168 9.79744V16.1608C41.2168 17.215 40.3543 18.0775 39.3001 18.0775H4.80014C3.74597 18.0775 2.88347 17.215 2.88347 16.1608V9.79744C2.88347 9.08827 3.42014 8.28329 4.09098 8.01495L21.341 1.115C21.7243 0.961667 22.376 0.961667 22.7593 1.115Z" stroke="#031220" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M0.966797 39.1608H43.1335" stroke="#031220" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22.0501 13.2858C23.6379 13.2858 24.9251 11.9986 24.9251 10.4108C24.9251 8.82295 23.6379 7.53577 22.0501 7.53577C20.4623 7.53577 19.1751 8.82295 19.1751 10.4108C19.1751 11.9986 20.4623 13.2858 22.0501 13.2858Z" stroke="#031220" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="features__content">
                                    <h3 class="features__title">
                                        <a href="about.html">University Life</a>
                                    </h3>
                                    <p>Euucal University was established it is recognized.</p>

                                    <a href="about.html" class="link-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="features__item d-sm-flex align-items-start white-bg mb-30">
                                <div class="features__icon mr-25">
                                    <svg width="41" height="38" viewBox="0 0 41 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M39.3333 27.9821V4.84788C39.3333 2.54788 37.455 0.84205 35.1742 1.03372H35.0592C31.0342 1.37872 24.92 3.42955 21.5083 5.57622L21.1825 5.78705C20.6267 6.13205 19.7067 6.13205 19.1508 5.78705L18.6717 5.49955C15.26 3.37205 9.165 1.34038 5.14 1.01455C2.85917 0.822883 1 2.54788 1 4.82872V27.9821C1 29.8221 2.495 31.547 4.335 31.777L4.89083 31.8537C9.05 32.4096 15.4708 34.5179 19.1508 36.5304L19.2275 36.5687C19.745 36.8562 20.5692 36.8562 21.0675 36.5687C24.7475 34.537 31.1875 32.4096 35.3658 31.8537L35.9983 31.777C37.8383 31.547 39.3333 29.8221 39.3333 27.9821Z" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20.1666 6.41956V35.1696" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0209 12.1696H7.70837" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.4584 17.9196H7.70837" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="features__content">
                                    <h3 class="features__title">
                                        <a href="about.html">Education Services</a>
                                    </h3>
                                    <p>Euucal University was established it is recognized.</p>

                                    <a href="about.html" class="link-btn">Learn More <i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features area end -->

        <!-- about area start -->
        <section class="about__area pb-120 p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="about__thumb-wrapper d-sm-flex mr-20 p-relative">
                            <div class="about__shape">
                                <img class="about__shape-1 d-none d-sm-block" src="../assets/img/about/about-shape-1.png" alt="">
                                <img class="about__shape-2 d-none d-sm-block" src="../assets/img/about/about-shape-2.png" alt="">
                                <img class="about__shape-3" src="../assets/img/about/about-shape-3.png" alt="">
                            </div>
                            <div class="about__thumb-left mr-10">
                                <div class="about__thumb-1 mb-10">
                                    <img src="../assets/img/about/about-1.jpg" alt="">
                                </div>
                                <div class="about__thumb-1 mb-10 text-end">
                                    <img src="../assets/img/about/about-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="about__thumb-2 mb-10">
                                <img src="../assets/img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="about__content pl-70 pr-25">
                            <div class="section__title-wrapper mb-15">
                                <span class="section__title-pre">About eduker</span>
                                <h2 class="section__title">Degrees in Various academic Didciplines</h2>
                            </div>
                            <p>Not only can university offer an environment rich in our social an cultural experiences.</p>

                            <div class="about__list mb-40">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i> Access to all our courses</li>
                                    <li><i class="fa-solid fa-check"></i> Learn the latest skills</li>
                                    <li><i class="fa-solid fa-check"></i> Upskill your organization</li>
                                </ul>
                            </div>

                            <div class="about__btn">
                                <a href="about.html" class="tp-btn tp-btn-2">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- counter area start -->
        <section class="counter__area pb-120">
            <div class="container">
                <div class="counter__inner grey-bg-2">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="counter__item d-flex align-items-start counter__item-border">
                                <div class="counter__icon mr-15">
                                    <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37 19.1667C37 9.23075 28.936 1.16675 19 1.16675C9.064 1.16675 1 9.23075 1 19.1667C1 29.1027 9.064 37.1667 19 37.1667" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11.8 2.9668H13.6C10.09 13.4788 10.09 24.8548 13.6 35.3668H11.8" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M24.4 2.9668C26.146 8.2228 27.028 13.6948 27.028 19.1668" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.80005 26.3667V24.5667C8.05605 26.3127 13.528 27.1947 19 27.1947" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2.80005 13.7665C13.312 10.2565 24.688 10.2565 35.2001 13.7665" stroke="#031220" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="search" d="M30.16 36.0867C33.3412 36.0867 35.92 33.5078 35.92 30.3267C35.92 27.1455 33.3412 24.5667 30.16 24.5667C26.9789 24.5667 24.4 27.1455 24.4 30.3267C24.4 33.5078 26.9789 36.0867 30.16 36.0867Z" stroke="#FF9000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="search" d="M37.0001 37.1667L35.2001 35.3667" stroke="#FF9000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="counter__content">
                                    <h4><span class="counter">17</span>+</h4>
                                    <p>Years of Language Education Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="counter__item d-flex align-items-start counter__item-border">
                                <div class="counter__icon mr-15">
                                    <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6984 27.5676V25.3757H16.1609V27.5676H14.6984Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M18.9289 27.5676V25.3757H20.3914V27.5676H18.9289Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M17.5234 25.9512C14.1936 25.9512 11.7765 23.4538 11.7765 20.0065V19.0436H13.239V20.0065C13.239 21.2677 13.6787 22.3416 14.436 23.1004C15.1932 23.8591 16.2649 24.2997 17.5234 24.2997C18.7821 24.2997 19.8538 23.8591 20.611 23.1004C21.3682 22.3416 21.8078 21.2677 21.8078 20.0065V14.6279H23.2703V20.006C23.2707 23.4538 20.8532 25.9512 17.5234 25.9512Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M15.2448 8.89414L25.4444 8.89327V12.1213C25.4444 14.2014 23.9423 15.8832 22.1085 15.8832H13.9511C13.5654 15.8832 13.262 16.2371 13.262 16.6588V23.2591L9.42375 18.0384V13.3221C9.42375 11.6064 10.6626 10.221 12.1734 10.221H12.6784H12.7032L12.7182 10.2013C13.3495 9.37396 14.2661 8.89414 15.2448 8.89414ZM10.8859 17.4764H10.911L11.7096 18.5626L11.7999 18.6854V18.533V16.6588C11.7999 15.3145 12.7704 14.2316 13.9515 14.2316H22.1085C23.1468 14.2316 23.9816 13.2789 23.9816 12.1213V10.5948V10.5448H23.9316L15.2445 10.5448L15.2444 10.5448C14.6109 10.5457 14.0256 10.9051 13.6774 11.5015C13.6774 11.5015 13.6774 11.5015 13.6774 11.5015L13.4607 11.8725H12.173C11.4577 11.8725 10.8859 12.5288 10.8859 13.3221V17.4264V17.4764Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M42.9272 32.716V21.0804H44.3897V32.716H42.9272Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M7.07152 32.7159H5.60862V6.08232C5.60862 4.82863 6.51389 3.81892 7.61448 3.81892H26.0965V5.4705H7.61487C7.3095 5.4705 7.07152 5.75095 7.07152 6.08232V32.7159Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M10.2844 32.0648H8.82229V30.104C8.82229 28.2623 10.2812 26.7664 12.0711 26.7664H23.1184C24.9083 26.7664 26.3668 28.2627 26.3668 30.104V31.5266H24.9043V30.104C24.9043 29.1711 24.1002 28.418 23.1184 28.418H12.0707C11.0885 28.418 10.2844 29.1715 10.2844 30.104V32.0648Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path d="M0.34435 35.8766L0.344278 35.8765L0.05 35.6292V31.807H49.95V35.6292L49.6558 35.8773C49.5603 35.9573 49.0814 36.3514 48.4465 36.7253C47.81 37.1002 47.0245 37.4499 46.3141 37.4499H3.68516C2.9745 37.4499 2.18909 37.1002 1.55278 36.7252C0.918101 36.3512 0.439536 35.9568 0.34435 35.8766ZM1.5125 34.7592V34.7844L1.5328 34.7994C1.84194 35.0277 2.22749 35.2768 2.61064 35.469C2.99207 35.6603 3.3778 35.7988 3.68516 35.7988H46.3145C46.6216 35.7988 47.0073 35.6603 47.3888 35.469C47.772 35.2768 48.1578 35.0277 48.4676 34.7994L48.4879 34.7844V34.7592V33.509V33.459H48.4379H1.5625H1.5125V33.509V34.7592Z" fill="#031220" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path class="video" d="M31.8141 23.2115V19.0489V18.9989H31.7641H30.2215C29.1088 18.9989 28.1863 17.876 28.1863 16.4732V2.57745C28.1863 1.17324 29.1089 0.05 30.2215 0.05H45.3773C46.4916 0.05 47.4164 1.17335 47.4164 2.57745V16.4732C47.4164 17.8759 46.492 18.9989 45.3773 18.9989H36.2426H36.2225L36.208 19.0127L31.8141 23.2115ZM30.1715 1.70158V1.70539C30.0271 1.72498 29.9017 1.82807 29.8117 1.97022C29.7108 2.12959 29.6488 2.34555 29.6488 2.57789V16.4732C29.6488 16.7051 29.7108 16.9206 29.8117 17.0797C29.912 17.2377 30.0562 17.3473 30.2215 17.3473H33.2766V19.5336V19.6506L33.3611 19.5698L35.6865 17.3473H45.3769C45.543 17.3473 45.6882 17.2379 45.7893 17.0798C45.891 16.9208 45.9535 16.7052 45.9535 16.4732V2.57745C45.9535 2.34526 45.8911 2.12925 45.7895 1.96982C45.6885 1.81136 45.5433 1.70158 45.3769 1.70158H30.2215H30.1715Z" fill="#FF9000" stroke="#F5F6F8" stroke-width="0.1" />
                                        <path class="video" d="M36.2705 6.36712L36.1933 6.3168V6.40902V11.6887V11.7809L36.2705 11.7306L40.3256 9.09143L40.39 9.04954L40.3256 9.00763L36.2705 6.36712ZM43.318 9.04952L34.7308 14.6386V3.45831L43.318 9.04952Z" fill="#FF9000" stroke="#F5F6F8" stroke-width="0.1" />
                                    </svg>
                                </div>
                                <div class="counter__content">
                                    <h4><span class="counter">26</span>k</h4>
                                    <p>Innovative Foreign Online Courses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="counter__item d-flex align-items-start counter__item-border">
                                <div class="counter__icon mr-15">
                                    <svg width="44" height="41" viewBox="0 0 44 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.3422 18.3518C23.5378 18.3322 23.7725 18.3322 23.9877 18.3518C28.6435 18.1953 32.3408 14.3806 32.3408 9.68568C32.3408 4.89291 28.4675 1 23.6551 1C18.8624 1 14.9695 4.89291 14.9695 9.68568C14.989 14.3806 18.6863 18.1953 23.3422 18.3518Z" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.8983 4.91248C7.10324 4.91248 4.05152 7.98376 4.05152 11.7593C4.05152 15.4566 6.98587 18.4692 10.644 18.6061C10.8005 18.5866 10.9766 18.5866 11.1526 18.6061" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M33.1235 25.5703C37.8576 28.7394 37.8576 33.9039 33.1235 37.0534C27.7438 40.6529 18.9212 40.6529 13.5416 37.0534C8.80748 33.8843 8.80748 28.7198 13.5416 25.5703C18.9016 21.9904 27.7243 21.9904 33.1235 25.5703Z" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.12298 36.2123C5.71449 35.9188 4.38426 35.3515 3.28876 34.5103C0.237038 32.2215 0.237038 28.446 3.28876 26.1572C4.36469 25.3356 5.67537 24.7879 7.06429 24.4749" stroke="#031220" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="star" d="M35.8077 22.6875L37.3377 25.7729C37.5464 26.2024 38.1027 26.6143 38.5722 26.6932L41.3454 27.1578C43.1188 27.4558 43.5361 28.7531 42.2582 30.0328L40.1022 32.2066C39.7371 32.5747 39.5372 33.2847 39.6502 33.7931L40.2674 36.484C40.7542 38.614 39.6328 39.4379 37.7637 38.3247L35.1644 36.7733C34.6949 36.4928 33.9212 36.4928 33.4431 36.7733L30.8437 38.3247C28.9834 39.4379 27.8532 38.6052 28.34 36.484L28.9573 33.7931C29.0703 33.2847 28.8703 32.5747 28.5052 32.2066L26.3492 30.0328C25.08 28.7531 25.4886 27.4558 27.2621 27.1578L30.0353 26.6932C30.496 26.6143 31.0524 26.2024 31.261 25.7729L32.7911 22.6875C33.6256 21.0133 34.9818 21.0133 35.8077 22.6875Z" fill="#F5F6F8" stroke="#FF9000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="counter__content">
                                    <h4><span class="counter">44</span>+</h4>
                                    <p>Qualified Teachers and language experts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="counter__item d-flex align-items-start">
                                <div class="counter__icon mr-15">
                                    <svg x="0px" y="0px"
                                        viewBox="0 0 67.4 70.6" xml:space="preserve">
                                        <path class="st0" d="M59.7,25.4c0,0.1,0.4,2.8,6.4,12.2c0.6,0.8,0.8,1.8,0.6,2.8c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.8,0.8-1.2,1
                             c-1.7,0.9-3.4,1.8-5.2,2.5c0.4,3.7,0.4,7.4,0,11.1c-0.7,3.7-7.1,4.3-10.8,4.3c-0.3,0-0.7,0-1,0.1c-0.3,0.1-0.6,0.3-0.8,0.5
                             c-0.2,0.2-0.4,0.5-0.5,0.8c-0.1,0.3-0.2,0.6-0.1,1v5c0,0.1,0,0.3-0.1,0.4c0,0.1-0.1,0.2-0.2,0.4c-0.1,0.1-0.2,0.2-0.3,0.2
                             c-0.1,0.1-0.3,0.1-0.4,0.1s-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.1-0.1-0.3-0.1-0.4v-5
                             c0-0.6,0.1-1.2,0.3-1.8c0.2-0.6,0.6-1.1,1-1.5c0.4-0.4,1-0.7,1.5-0.9c0.6-0.2,1.2-0.3,1.8-0.2c4.9,0,8.4-1,8.7-2.6
                             c0.7-3.6-0.1-10.8-0.1-11.3c0,0,0,0,0,0c0-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.3,0.5-0.4c1.9-0.8,3.8-1.7,5.6-2.7
                             c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.2,0.3-0.4,0.4-0.6c0.1-0.4,0-0.9-0.3-1.2c-6.4-10.1-6.8-12.9-6.8-13.2C55.1,4.4,38,2.7,32.8,2.7
                             c-0.5,0-0.9,0-1.2,0l0,0c-0.2,0-0.4,0-0.5,0c-3.2,0-15.6,0.7-21.9,10.1h11c0.8,0,1.6,0.2,2.3,0.6c0.7,0.4,1.3,0.9,1.8,1.5
                             c0.5-0.6,1.1-1.2,1.8-1.5c0.7-0.4,1.5-0.6,2.3-0.6h18c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.5,0.3,0.7V52c0,0.1,0,0.3-0.1,0.4
                             c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.3,0.1-0.4,0.1h-18c-0.8,0-1.6,0.3-2.2,0.9s-0.9,1.4-0.9,2.2
                             c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.8-0.3-1.6-0.9-2.2
                             c-0.6-0.6-1.4-0.9-2.2-0.9h-4.5c0,0,0,0,0,0.1c0,0,0.1,0.1,0.1,0.1c2.2,4.8,2.3,14.5,2.3,14.9c0,0.3-0.1,0.5-0.3,0.7
                             c-0.2,0.2-0.5,0.3-0.7,0.3h0c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7l0,0c0-0.2-0.1-9.7-2.1-14c-0.2-0.4-0.4-0.7-0.6-1.1
                             H2.2c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7V13.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h4.5
                             C13.5,1.2,28.8,0.7,31,0.7l0.5,0c0.3,0,0.8,0,1.3,0C38.4,0.7,57,2.5,59.7,25.4z M26.2,15.8c-0.6,0.6-0.9,1.4-0.9,2.2v34
                             c0.9-0.7,2-1,3.1-1h17V14.9h-17C27.6,14.9,26.8,15.2,26.2,15.8z M22.4,15.8c-0.6-0.6-1.4-0.9-2.2-0.9h-17V51h17c1.1,0,2.2,0.4,3.1,1
                             V18C23.3,17.2,22.9,16.4,22.4,15.8z M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                             c-0.2-0.2-0.5-0.3-0.7-0.3H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z
                              M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z M18.8,37.9H7.7c-0.1,0-0.3,0-0.4-0.1
                             c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3
                             c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3
                             c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C19,37.9,18.9,37.9,18.8,37.9z
                              M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8z M40.9,22.2H29.8
                             c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h11.1c0.3,0,0.5,0.1,0.7,0.3
                             s0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7C41.5,22.1,41.2,22.2,40.9,22.2z M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3
                             c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7
                             s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z M40.9,37.9H29.8c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2
                             c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2
                             c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.3,0.1,0.4
                             c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C41.2,37.9,41,37.9,40.9,37.9z M29.8,45.8h5.5
                             c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5c-0.3,0-0.5,0.1-0.7,0.3
                             c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8z" />
                                        <path class="st1" d="M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z" />
                                        <path class="st1" d="M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z" />
                                        <path class="st1" d="M7.7,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H7.7c-0.1,0-0.3,0-0.4,0.1
                             C7.2,36,7.1,36.1,7,36.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C7.4,37.9,7.6,37.9,7.7,37.9L7.7,37.9z" />
                                        <path class="st1" d="M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8L7.7,45.8z" />
                                        <path class="st1" d="M29.8,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.7-0.3H29.8
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C29.3,22.1,29.6,22.2,29.8,22.2L29.8,22.2z" />
                                        <path class="st1" d="M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z" />
                                        <path class="st1" d="M29.8,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H29.8c-0.1,0-0.3,0-0.4,0.1
                             c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C29.6,37.9,29.7,37.9,29.8,37.9L29.8,37.9z" />
                                        <path class="st1" d="M29.8,45.8h5.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8L29.8,45.8z" />
                                    </svg>
                                </div>
                                <div class="counter__content">
                                    <h4><span class="counter">52</span>+</h4>
                                    <p>Learners Enrolled in eduker Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter area end -->

        <!-- course area start -->
        <section class="course__area pt-115 pb-90 grey-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <span class="section__title-pre">Top Courses</span>
                            <h2 class="section__title section__title-44">Our Featured Courses</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>$74</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">Digital</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">University seminar series global.</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-1.jpg" alt="">Brian Cumin</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            12 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>Free</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">UX Design</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">Web coding and apache basics</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-2.jpg" alt="">Jack Morkel</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            12 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>$52</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">Economics</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">Economics historical development</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-3.jpg" alt="">Hilary Ouse</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            8 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>Free</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">Beginner</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">Learn algebra the easy way!</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-4.jpg" alt="">Phanta Bear</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            3 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>$104</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">Economics</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">Angular the complete guide</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-5.jpg" alt="">Hilary Ouse</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            8 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="course__item white-bg transition-3 mb-30">
                            <div class="course__thumb w-img fix">
                                <a href="course-details.html">
                                    <img src="../assets/img/course/course-6.jpg" alt="">
                                </a>
                            </div>
                            <div class="course__content p-relative">
                                <div class="course__price">
                                    <span>$32</span>
                                </div>
                                <div class="course__tag">
                                    <a href="#">IT Specialist</a>
                                </div>
                                <h3 class="course__title">
                                    <a href="course-details.html">Intelligence analyst course 2022</a>
                                </h3>
                                <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                    <div class="course__tutor">
                                        <a href="#"><img src="../assets/img/course/tutor/course-tutor-6.jpg" alt="">Oliver Porter</a>
                                    </div>
                                    <div class="course__lesson">
                                        <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            3 Lessons
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- campus area start -->
        <section class="campus__area pt-120 pb-120">
            <div class="container">
                <div class="row grid">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="campus__wrapper">
                            <div class="section__title-wrapper mb-25">
                                <span class="section__title-pre">Campus life</span>
                                <h2 class="section__title section__title-40">University Campus</h2>
                                <p>Our research has an impact globally join us in tackling the big issues.</p>
                            </div>
                            <div class="campus__btn mb-80">
                                <a href="about.html" class="tp-btn tp-btn-border">More Research</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 grid-item">
                        <div class="campus__thumb w-img mb-30">
                            <img src="../assets/img/campus/campus-2.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=AjgD3CvWzS0" class="play-btn popup-video pulse-btn">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 8.13397C16.1667 8.51888 16.1667 9.48113 15.5 9.86603L2 17.6603C1.33333 18.0452 0.5 17.564 0.5 16.7942V1.20577C0.5 0.43597 1.33333 -0.0451542 2 0.339746L15.5 8.13397Z" fill="#FF9000" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 grid-item">
                        <div class="campus__thumb w-img mb-25">
                            <img src="../assets/img/campus/campus-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 grid-item">
                        <div class="campus__thumb w-img mb-30">
                            <img src="../assets/img/campus/campus-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 grid-item">
                        <div class="campus__thumb w-img mb-30">
                            <img src="../assets/img/campus/campus-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus area end -->

        <!-- research area start -->
        <section class="research__area research__border grey-bg-3 pt-115 pb-90 p-relative z-index-1">
            <div class="research__shape">
                <img class="research__shape-1 d-none d-sm-block" src="../assets/img/research/research-shape-1.png" alt="">
                <img class="research__shape-2 d-none d-sm-block" src="../assets/img/research/research-shape-2.png" alt="">
                <img class="research__shape-3" src="../assets/img/research/research-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-50 text-center">
                            <span class="section__title-pre">Discover Research</span>
                            <h2 class="section__title section__title-44">Life Changing Research</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item research__item-border text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="../assets/img/research/research-1.jpg" alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">Frontier Research</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa lorem aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item research__item-border active text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="../assets/img/research/research-2.jpg" alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">Global Research</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa lorem aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="research__item text-center mb-30 transition-3">
                            <div class="research__thumb mb-35">
                                <img src="../assets/img/research/research-3.jpg" alt="">
                            </div>
                            <div class="research__content">
                                <h3 class="research__title">Public Engagement</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa lorem aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- research area end -->

        <!-- blog area start -->
        <section class="blog__area pt-120 pb-85 p-relative">
            <div class="blog__shape">
                <img class="blog__shape-1" src="../assets/img/blog/blog-shape-1.png" alt="">
                <img class="blog__shape-2" src="../assets/img/blog/blog-shape-2.png" alt="">
                <img class="blog__shape-3" src="../assets/img/blog/blog-shape-3.png" alt="">
                <img class="blog__shape-4" src="../assets/img/blog/blog-shape-4.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-60 text-center">
                            <span class="section__title-pre">Latest News</span>
                            <h2 class="section__title section__title-44">The latest news from eduker</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-xl-6">
                        <div class="blog__item-float blog__item-float-overlay p-relative fix transition-3 mb-30 d-flex align-items-end">
                            <div class="blog__thumb-bg w-img fix" data-background="../assets/img/blog/blog-1.jpg"></div>
                            <div class="blog__content-float">
                                <div class="blog__tag-float mb-15">
                                    <a href="#">Uncategorized</a>
                                </div>
                                <h3 class="blog__title-float">
                                    <a href="blog-details.html">Individual master Courses For degree students.</a>
                                </h3>
                                <div class="blog__meta-float">
                                    <ul>
                                        <li>
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">Dec 28, 2022</a></span>
                                        </li>
                                        <li>
                                            <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">1,526 views</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="blog__item mb-30 white-bg transition-3 mb-30">
                            <div class="blog__thumb w-img fix">
                                <a href="blog-details.html">
                                    <img src="../assets/img/blog/blog-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog__content">
                                <div class="blog__tag">
                                    <a href="#">University</a>
                                </div>
                                <h3 class="blog__title">
                                    <a href="blog-details.html">How stay calm from the First time.</a>
                                </h3>
                                <div class="blog__meta">
                                    <ul>
                                        <li>
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">Jun 14, 2022</a></span>
                                        </li>
                                        <li>
                                            <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">1,526 views</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="blog__item mb-30 white-bg transition-3 mb-30">
                            <div class="blog__thumb w-img fix">
                                <a href="blog-details.html">
                                    <img src="../assets/img/blog/blog-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog__content">
                                <div class="blog__tag">
                                    <a href="#">HR and L&D</a>
                                </div>
                                <h3 class="blog__title">
                                    <a href="blog-details.html">Classroom adapts for the future of learning</a>
                                </h3>
                                <div class="blog__meta">
                                    <ul>
                                        <li>
                                            <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.4998 9C16.4998 13.14 13.1398 16.5 8.99976 16.5C4.85976 16.5 1.49976 13.14 1.49976 9C1.49976 4.86 4.85976 1.5 8.99976 1.5C13.1398 1.5 16.4998 4.86 16.4998 9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11.7822 11.3848L9.45723 9.99732C9.05223 9.75732 8.72223 9.17982 8.72223 8.70732V5.63232" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">Jun 14, 2022</a></span>
                                        </li>
                                        <li>
                                            <span><svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.6848 6.99994C10.6848 8.48494 9.48476 9.68494 7.99976 9.68494C6.51476 9.68494 5.31476 8.48494 5.31476 6.99994C5.31476 5.51494 6.51476 4.31494 7.99976 4.31494C9.48476 4.31494 10.6848 5.51494 10.6848 6.99994Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.99976 13.2025C10.6473 13.2025 13.1148 11.6425 14.8323 8.94254C15.5073 7.88504 15.5073 6.10754 14.8323 5.05004C13.1148 2.35004 10.6473 0.790039 7.99976 0.790039C5.35226 0.790039 2.88476 2.35004 1.16726 5.05004C0.492261 6.10754 0.492261 7.88504 1.16726 8.94254C2.88476 11.6425 5.35226 13.2025 7.99976 13.2025Z" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg><a href="#">1,526 views</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

        <!-- cta area start -->
        <section class="cta__area pb-120">
            <div class="container">
                <div class="cta__inner">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="cta__item cta__item-border pt-40 pb-15 d-sm-flex align-items-start pr-110">
                                <div class="cta__icon mr-30">
                                    <span>
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.0801 0C8.84004 0 4.58002 4.26003 4.58002 9.50006C4.58002 14.6401 8.60004 18.8001 13.8401 18.9801C14.0001 18.9601 14.1601 18.9601 14.2801 18.9801C14.3201 18.9801 14.3401 18.9801 14.3801 18.9801C14.4001 18.9801 14.4001 18.9801 14.4201 18.9801C19.5401 18.8001 23.5601 14.6401 23.5801 9.50006C23.5801 4.26003 19.3201 0 14.0801 0Z" fill="#192A88" />
                                            <path d="M24.2401 24.2998C18.6601 20.5798 9.56006 20.5798 3.94002 24.2998C1.40001 25.9998 0 28.2998 0 30.7598C0 33.2198 1.40001 35.4998 3.92002 37.1799C6.72004 39.0599 10.4001 39.9999 14.0801 39.9999C17.7601 39.9999 21.4401 39.0599 24.2401 37.1799C26.7602 35.4798 28.1602 33.1998 28.1602 30.7198C28.1402 28.2598 26.7602 25.9798 24.2401 24.2998Z" fill="#192A88" />
                                            <path d="M35.0602 10.6802C35.3802 14.5603 32.6202 17.9603 28.8002 18.4203C28.7802 18.4203 28.7802 18.4203 28.7602 18.4203H28.7002C28.5802 18.4203 28.4602 18.4203 28.3602 18.4603C26.4202 18.5603 24.6402 17.9403 23.3002 16.8003C25.3602 14.9603 26.5402 12.2002 26.3002 9.20023C26.1602 7.58022 25.6002 6.10021 24.7602 4.8402C25.5202 4.4602 26.4002 4.2202 27.3002 4.1402C31.2202 3.8002 34.7202 6.72021 35.0602 10.6802Z" fill="#FF7648" />
                                            <path d="M39.0602 29.1799C38.9002 31.1199 37.6602 32.7999 35.5802 33.9399C33.5802 35.0399 31.0602 35.5599 28.5602 35.4999C30.0002 34.1999 30.8402 32.5799 31.0002 30.8599C31.2002 28.3799 30.0202 25.9998 27.6601 24.0998C26.3201 23.0398 24.7601 22.1998 23.0601 21.5798C27.4801 20.2998 33.0402 21.1598 36.4602 23.9198C38.3002 25.3998 39.2402 27.2599 39.0602 29.1799Z" fill="#FF7648" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="cta__content">
                                    <h3 class="cta__title">Become an Instructor</h3>
                                    <p>Teach what you love. Learned gives you neccessary tools to become an instructor.</p>
                                    <a href="contact.html" class="tp-btn tp-btn-3">Start Teaching</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="cta__item pl-85 pt-40 pb-15 d-sm-flex align-items-start">
                                <div class="cta__icon mr-30">
                                    <span>
                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.2575 29.977C33.5417 29.1336 35.2283 30.0536 35.2283 31.587V34.0595C35.2283 36.4936 33.3308 39.1003 31.05 39.867L24.9358 41.8986C23.8625 42.2628 22.1183 42.2628 21.0642 41.8986L14.95 39.867C12.65 39.1003 10.7717 36.4936 10.7717 34.0595V31.5678C10.7717 30.0536 12.4583 29.1336 13.7233 29.9578L17.6717 32.5261C19.1858 33.542 21.1025 34.0403 23.0192 34.0403C24.9358 34.0403 26.8525 33.542 28.3667 32.5261L32.2575 29.977Z" fill="#FF7648" />
                                            <path d="M38.295 12.3817L26.8142 4.84924C24.7442 3.4884 21.3325 3.4884 19.2625 4.84924L7.72416 12.3817C4.02499 14.7776 4.02499 20.2017 7.72416 22.6167L10.7908 24.6101L19.2625 30.1301C21.3325 31.4909 24.7442 31.4909 26.8142 30.1301L35.2283 24.6101L37.8542 22.8851V28.7501C37.8542 29.5359 38.5058 30.1876 39.2917 30.1876C40.0775 30.1876 40.7292 29.5359 40.7292 28.7501V19.3201C41.4958 16.8476 40.71 13.9726 38.295 12.3817Z" fill="#192A88" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="cta__content">
                                    <h3 class="cta__title">Apply for Admission</h3>
                                    <p>Course completed? Then its time apply the certificate Do it in simplesteps with Learned.</p>
                                    <a href="contact.html" class="tp-btn tp-btn-4">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end -->

    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area">
            <div class="footer__top grey-bg-4 pt-95 pb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer-col-1 mb-50">
                                <div class="footer__logo">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="../assets/img/logo/logo.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__widget-info">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus, nulla utlaoki comm odo sagittis.</p>
                                        <div class="footer__social">
                                            <h4>Follow Us</h4>

                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget mb-50">
                                <h3 class="footer__widget-title">Explore</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Success story</a>
                                        </li>
                                        <li>
                                            <a href="#">Courses</a>
                                        </li>
                                        <li>
                                            <a href="#">About us</a>
                                        </li>
                                        <li>
                                            <a href="#">Instructor</a>
                                        </li>
                                        <li>
                                            <a href="#">Events</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="footer__widget mb-50">
                                <h3 class="footer__widget-title">Links</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li>
                                            <a href="#">News & Blogs</a>
                                        </li>
                                        <li>
                                            <a href="#">Library</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms of service</a>
                                        </li>
                                        <li>
                                            <a href="#">Membership</a>
                                        </li>
                                        <li>
                                            <a href="#">Career</a>
                                        </li>
                                        <li>
                                            <a href="#">Partners</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer__widget footer-col-4 mb-50">
                                <h3 class="footer__widget-title">Sign up for our newsletter</h3>

                                <div class="footer__subscribe">
                                    <p>Receive weekly newsletter with educational materials, popular books and much more!</p>
                                    <form action="#">
                                        <div class="footer__subscribe-input">
                                            <input type="text" placeholder="Email">
                                            <button type="submit" class="tp-btn-subscribe">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom grey-bg-4">
                <div class="container">
                    <div class="footer__bottom-inner">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__copyright text-center">
                                    <p>© 2022 Eduker. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="../assets/js/vendor/jquery.js"></script>
    <script src="../assets/js/vendor/waypoints.js"></script>
    <script src="../assets/js/bootstrap-bundle.js"></script>
    <script src="../assets/js/meanmenu.js"></script>
    <script src="../assets/js/swiper-bundle.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/magnific-popup.js"></script>
    <script src="../assets/js/parallax.js"></script>
    <script src="../assets/js/backtotop.js"></script>
    <script src="../assets/js/nice-select.js"></script>
    <script src="../assets/js/counterup.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/isotope-pkgd.js"></script>
    <script src="../assets/js/imagesloaded-pkgd.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>