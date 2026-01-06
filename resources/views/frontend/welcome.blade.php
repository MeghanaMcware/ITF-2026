@extends('layout.app')

@section('content')
<!-- Hero Section Start -->
<section class="hero-section hero-4 fix">
            <div class="shape-1">
                <img src="assets/img/home-4/hero/shape-1.png" alt="img">
            </div>
            <div class="shape-2">
                <img src="assets/img/home-4/hero/organic-shape.png" alt="img">
            </div>
            <div class="array-button">
               <button class="array-prev">
                    <i class="fal fa-long-arrow-left"></i>
                </button>
                <button class="array-next">
                   <i class="fal fa-long-arrow-right"></i>
                </button>
            </div>
            <div class="swiper banner-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-height">
                            <div class="hero-bg bg-cover" style="background-image: url('assets/img/home-4/hero/hero-bg.jpg');"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="hero-content">
                                            <h1>Agricultural and Organic</h1>
                                            <p>Elders is headquartered in Adelaide, South Australia, where our story began in 1839, but our expansive network.</p>
                                        </div>
                                        <!-- <div class="hero-button">
                                            <a href="shop.html" class="theme-btn">
                                                View Our Products
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                            <a href="service.html" class="theme-btn style-2">
                                                Our Services
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="hero-height">
                            <div class="hero-bg bg-cover" style="background-image: url('assets/img/home-4/hero/hero-bg2.jpg');"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="hero-content">
                                            <h1>Agricultural and Organic</h1>
                                            <p>Elders is headquartered in Adelaide, South Australia, where our story began in 1839, but our expansive network.</p>
                                        </div>
                                        <!-- <div class="hero-button">
                                            <a href="shop.html" class="theme-btn">
                                                View Our Products
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                            <a href="service.html" class="theme-btn style-2">
                                                Our Services
                                                <i class="far fa-arrow-right"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 <!-- Choose Us Section Start -->
      <section class="choose-us-section-3 section-padding fix">
    <div class="container">
        <div class="choose-us-wrapper-3">
            <div class="row align-items-center g-4">

                <!-- LEFT SIDE IMAGE -->
                <div class="col-lg-6">
                    <div class="choose-us-image-items white-style">
                        <img src="{{ asset('frontend/img/glimseseng.png') }}" alt="Choose Us Image">
                    </div>
                </div>

                <!-- RIGHT SIDE CONTENT -->
                <div class="col-lg-6">
                    <div class="choose-us-content">

                        <div class="section-title mb-3">
                            <span>
                                <img src="{{ asset('frontend/img/sub-title.svg') }}" alt="img">
                                Why Choose Us
                            </span>
                            <h2>Glimpse of ITF 2025</h2>
                        </div>

                        <p class="choose-text mb-4">
                            The Government of Karnataka has implemented various initiatives and interventions to support organics and millets, including the organisation of annual organic & millet trade fairs since 2017 to promote millets as a people’s movement, striving to position Bangalore as the ‘global hub for millets”. Owing to these concerted efforts, once near-extinct minor millets have experienced a remarkable revival and are now in high demand as healthy traditional foods. In line with its commitment to supporting farmers and enhancing market access, the Department of Agriculture, Government of Karnataka, is once again organising the 6th edition of the “International Trade Fair 2025: Organics & Millets” on 23, 24, and 25 January 2025 at Tripuravasini, Palace Grounds, Bengaluru. This event aims to showcase the opportunities and export potential of Karnataka's organic and millet sectors, with the primary objective of strengthening both global and domestic market linkages for the state’s produce.
                        </p>

                        <p>This event offers a valuable platform to foster a conducive knowledge-sharing and market ecosystem for all stakeholders in the organic and millet sectors, enabling them to showcase their expertise, strengths, and innovations, or to fulfil their business requirements.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

 <!-- Brand Section Start -->
        <div class="brand-section section-padding pt-0">
            <div class="container">
                <div class="top-text text-center wow fadeInUp">
                    <p>International Trade Fair Organics & Millets 2025 Highlights</p>
                </div>
                <div class="swiper brand-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                 <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                 <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                 <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('frontend/img/logo/eng-logo.jpeg') }}" alt="ENG Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection