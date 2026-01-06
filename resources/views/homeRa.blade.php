@extends('layout.app')
<style>
    /* Icon container */
    .counter-box-items .icon {
        width: 80px;
        height: 80px;
        background: #5f8f4e;
        border-radius: 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 15px;
    }

    /* Flaticon fix */
    .counter-box-items .icon i::before {
        font-family: "flaticon";
        font-style: normal;
        font-weight: normal;
        line-height: 1;
    }

    /* Icon size & color */
    .counter-box-items .icon i {
        font-size: 36px;
        color: #ffffff;
        display: block;
        line-height: 1;
    }

    /*promotions*/
    /* ===============================
   AGRON NEWS CARD – FINAL FIX
================================ */

    /* 1. Let floating elements show */
    .news-section-5,
    .news-wrapper-5,
    .news-box-items-5,
    .news-box-items-5 .news-image {
        overflow: visible;
    }

    /* 2. Position image properly */
    .news-box-items-5 .news-image {
        position: relative;
    }

    /* 3. Floating date badge */
    .news-box-items-5 .post-date {
        position: absolute;
        left: 50%;
        bottom: -30px;
        transform: translateX(-50%);
        z-index: 10;

        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #5b8c51;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    /* 4. Date text */
    .news-box-items-5 .post-date h4 {
        margin: 0;
        font-size: 18px;
        color: #fff;
        line-height: 1;
    }

    .news-box-items-5 .post-date p {
        margin: 0;
        font-size: 12px;
        color: #fff;
    }
</style>
@section('content')
<section class="counter-section-3 section-padding fix pt-0">
    <div class="bottom-shape">
        <img src="frontend/img/home-1/service/bottom-shape.png" alt="img">
    </div>
    <div class="container">
        <div class="counter-wrapper-3">
            <div class="counter-box-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <i class="flaticon-market"></i>
                </div>
                <div class="content">
                    <h2><span class="odometer" data-count="163">00</span>+</h2>
                    <p>Exhibitors</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="counter-box-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="flaticon-farmer"></i>
                </div>
                <div class="content">
                    <h2><span class="odometer" data-count="68">00</span></h2>
                    <p>Speakers</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="counter-box-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="flaticon-commodity"></i>
                </div>
                <div class="content">
                    <h2><span class="odometer" data-count="333">00</span></h2>
                    <p>B2B Connects</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="counter-box-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="flaticon-agriculture-1"></i>
                </div>
                <div class="content">
                    <h2><span class="odometer" data-count="30">00</span>+</h2>
                    <p>Sessions</p>
                </div>
            </div>
            <div class="line"></div>
            <div class="counter-box-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="flaticon-fruit"></i>
                </div>
                <div class="content">
                    <h2><span class="odometer" data-count="20">00</span>+</h2>
                    <p>Food Stalls</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-section-2 section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">Publicity and Promotions</span>
            <h2 class="text-anim">Our Publicity and Promotions</h2>
        </div>
    </div>
    <div class="project-wrapper-2">
        <div class="swiper project-slide-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/home-2/project/project-01.jpg" alt="img">
                        <div class="content">
                            <span>Publicity and Promotions</span>
                            <h3><a href="project-details.html">
                                    World Soil Day
                                </a></h3>
                            <p>

                                Celebration of World Soil Day on 5th December 2024 at Department of
                                Agriculture Bengaluru

                            </p>
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/home-2/project/project-02.jpg" alt="img">
                        <div class="content">
                            <span>Publicity and Promotions</span>
                            <h3><a href="project-details.html">World Soil Day</a></h3>
                            <p>
                                Celebration of World Soil Day on 5th December 2024 at Department of
                                Agriculture Bengaluru.
                            </p>
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/home-2/project/project-03.jpg" alt="img">
                        <div class="content">
                            <span>Publicity and Promotions</span>
                            <h3><a href="project-details.html">
                                    Organic World Congress
                                </a></h3>
                            <p>

                                Organic World Congress held in Taiwan from November 29-December 4th 2024


                            </p>
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-dot">
                <div class="dot2"></div>
            </div>
        </div>
    </div>
</section>

<!-- gallery Section Start -->
<div class="gallery-line">
    <img src="frontend/img/home-3/project-line.png" alt="">
</div>
<section class="gallery-section-3 fix section-padding">

    <div class="left-shape d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-3/gallery/left-shape.png" alt="img">
    </div>
    <div class="right-shape d-none d-xl-block float-bob-y">
        <img src="frontend/img/home-3/gallery/right-shape.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp"><img src="assets/img/sub-title.svg" alt="img">Our Gallery Image</span>
            <h2 class="text-anim">Organics & Millets</h2>

        </div>
    </div>
    <div class="gallery-wrapper-3">
        <div class="swiper gallery-slide-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-image-box-3">
                        <img src="frontend/img/home-3/gallery/gallery-01.jpg" alt="img">
                        <div class="content">
                            <p>Gallery</p>
                            <h3><a href="project-details.html">Organics & Millets</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image-box-3">
                        <img src="frontend/img/home-3/gallery/gallery-02.jpg" alt="img">
                        <div class="content">
                            <p>Gallery</p>
                            <h3><a href="project-details.html">Organics & Millets</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image-box-3">
                        <img src="frontend/img/home-3/gallery/gallery-03.jpg" alt="img">
                        <div class="content">
                            <p>Gallery</p>
                            <h3><a href="project-details.html">Organics & Millets</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-image-box-3">
                        <img src="frontend/img/home-3/gallery/gallery-04.jpg" alt="img">
                        <div class="content">
                            <p>Gallery</p>
                            <h3><a href="project-details.html">Organics & Millets</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="gallery-line2">
    <img src="frontend/img/home-3/project-line2.png" alt="">
</div>
<div class="section-animation-shape1-1 animation-infinite-test line-shape-animation animation-infinite rice-flower2"
    style="background-image: url('frontend/img/home-3/rice-flower2.png');"></div>

<!-- Faq Section Start -->
<section class="faq-section-5 section-padding fix">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/home-5/faq-shape.png" alt="img">
    </div>
    <div class="container">
        <div class="faq-wrapper-2">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="faq-left-items">
                        <div class="section-title mb-0">
                            <span class="wow fadeInUp"><img src="assets/img/sub-title.svg" alt="img">Our FAQs</span>
                            <h2 class="text-anim">Frequently Asked Questions About Us</h2>
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5>Call Us</h5>
                                    <p><a href="tel:+69009494094">+69 009 494 094</a></p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h5>Our Location</h5>
                                    <p>147 New Yors, NY Adipisicing 123</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5>Mail us</h5>
                                    <p><a href="mailto:hello@agron.com">hello@agron.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="faq-page-items mt-0">
                        <ul class="accordion-box">
                            <!--Block-->
                            <li class="accordion block active-block wow fadeInUp">
                                <div class="acc-btn active">
                                    1. What services does your agricultural company offer?
                                    <div class="icon far fa-chevron-down"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            You can place an order through our website by selecting your desired products, adding them to the cart, and checking out.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".2s">
                                <div class="acc-btn">
                                    2. Do you specialize in organic farming?
                                    <div class="icon far fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            You can place an order through our website by selecting your desired products, adding them to the cart, and checking out.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                <div class="acc-btn">
                                    3. What types of crops do you grow?
                                    <div class="icon far fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            You can place an order through our website by selecting your desired products, adding them to the cart, and checking out.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                <div class="acc-btn">
                                    4. Do you sell seeds and farming equipment?
                                    <div class="icon far fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            You can place an order through our website by selecting your desired products, adding them to the cart, and checking out.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".8s">
                                <div class="acc-btn">
                                    5. How can I place an order for your products?
                                    <div class="icon far fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            You can place an order through our website by selecting your desired products, adding them to the cart, and checking out.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Section Start -->
<div class="brand-section">
    <div class="container">
        <div class="top-text text-center wow fadeInUp">
            <p></p>
        </div>
        <div class="swiper brand-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-01.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-02.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-03.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-04.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-05.png" alt="img">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-image text-center">
                        <img src="frontend/img/home-1/brand/brand-06.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection