
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Diarycious - Smooth & Creamy Yogurt</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/logo-dairycious.png" type="image/x-icon">
<link rel="icon" href="images/logo-dairycious.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader preloader-flex">
        <img src="images/logo2.png" alt="" title="" style="width: 250px;">
    </div>
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!-- Main box -->
        <div class="main-box">
            <div class="menu-box">
                <div class="logo"><a href="/"><img src="images/logo-dairycious.png" alt="" title=""></a></div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation menu-left clearfix">
                                <li class="current"><a href="/">Home</a></li>
                                <li><a href="/reseller">Reseller</a></li>
                                <li class="dropdown"><a href="{{ url ('/product') }}">Order</a>
                                    <ul>
                                        <li><a href="{{ url ('/product') }}">Produk</a></li>
                                        <li><a href="/cara-order">Cara Order</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="navigation menu-right clearfix">
                                <li><a href="{{ url ('/articles') }}">Artikel</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                                <li><a href="/faq">FAQ</a></li>                                
                            </ul>
                        </div> 
                    </nav>
                    <!-- Main Menu End-->

                   
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo">
                    <a href="#" title="Sticky Logo"><img src="images/logo2.png"  style="width: 175px;" alt="Sticky Logo"></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
        
        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="/"><img src="images/logo2.png" style="width: 175px;" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="images/logo2.png" style="height: auto !important;" alt="" title=""></a></div> 
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </nav>
        </div><!-- End Mobile Menu -->

       
    </header>
    <!--End Main Header -->
    
    <!--Main Slider-->
    <section class="main-slider">
        <div class="slider_wave"></div>
        <div class="slider-carousel owl-carousel owl-theme">
            <img src="images/slider/1.png" class="img-slider" alt="">
            <img src="images/slider/2.png" class="img-slider" alt="">
        </div>
    </section>
    <!--End Main Slider-->
    
    <!-- Services Section Six -->
    {{-- <section class="services-section-six">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="divider"><img src="images/icons/divider_12.png" alt=""></div>
            </div>

            <div class="row">
                <!-- Service Block Six -->
                @foreach ($produk as $gambar)
                <div class="service-block-six col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                                <figure class="image"><img src="assets/admin/assets/media/derma_produk/500/{{$gambar->image}}" alt=""></figure>
                        </div>
                        <h3><a href="/product/{{$gambar->id_produk}}">{{$gambar->judul}}</a></h3>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </section> --}}
    <!--End Services Section Six -->

    <!-- Call to Action Two -->
    <section class="call-to-action-two style-three mt-5">
        <div class="shape_wrapper shape_seven_up">
            <div class="shape_inner shape_seven_down" style="background-image: url(images/banner/bg-purple.png);"></div>
        </div>

        <div class="auto-container">
            <div class="content-box">
                <img src="images/logo putih.png" alt="" style="width: 150px;margin-bottom: 100px;">
                <h2>Tersedia di Supermarket</h2>
                <span class="devider"><img src="images/icons/icon-devider-light.png" alt=""></span>
            </div>
            <br> <br>
            <div class="retail-carousel owl-carousel owl-theme">
            @foreach ($mitra as $mit)
                <img src="assets/admin/assets/media/derma_gallery/500/{{$mit->image}}" class="img-retail" alt="">
            @endforeach            
            </div>
        </div>
    </section>
    <!-- End Call to Action Two -->

    <!-- Portfolio Sections -->
    <section class="portfolio-section pull-up">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="divider"><img src="images/icons/divider_12.png" alt=""></div>
                <h2>Gallery</h2>
            </div>

            <div class="row">
            @foreach ($galery as $gal)
                <!-- Portfolio Block -->
                <div class="portfolio-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box"><figure class="image"><img src="assets/admin/assets/media/derma_gallery/500/{{$gal->image}}" alt=""></figure></div>
                        <div class="portfolio-hover">
                            <div class="hover-effect">
                                <svg x="0px" y="0px" viewBox="79 -202.7 1000 1000">
                                    <path d="M5459-1110.4L579.1-202.7c10.7,0,21.6,1.5,32.5,4.4c22.3,6,41.3,17,58,26.6c11.9,6.9,23,13.3,31.1,15.5 c6.8,1.8,19.4,1.8,26.2,1.8h12.9c27.5,0,59.4,1.4,89.3,18.7c32.8,19,50.2,49.3,64.1,73.7c6.2,10.9,12.6,22.1,17.8,27.3 c5.9,5.9,17.1,12.3,28.9,19.1c24,13.8,53.8,31,72.2,63c18.6,32.3,18.5,67,18.4,94.8c0,13.5-0.1,26.1,2,33.7 c2.1,7.7,8.4,18.7,15.2,30.3c14,24.1,31.4,54.1,31.4,91.3c0,36.8-17.2,66.6-31,90.6c-6.9,11.9-13.3,23-15.5,31.1 c-1.6,6.1-1.9,16.3-1.9,26.9c5.5,35.9-0.9,71-18.5,101.6c-18.9,32.7-49.1,50-73.4,63.9c-11.4,6.5-22.5,12.9-27.8,18.2 c-5.9,5.9-12.3,17-19,28.7c-14,24.2-31.1,54.1-63.1,72.5c-29.5,17-60.5,18.5-89.7,18.5h-10.3c-10.6,0-21.6,0.2-28.4,2 c-7.6,2-18.5,6.5-30.1,13.2c-24.1,14-54,29.6-91.3,29.6H579c-36.8,0-66.6-15.3-90.6-29.2c-11.8-6.8-22.9-12.3-31-14.4 c-6-1.6-16.1-1.4-26.1-1.4l-12.8,0.3c-17.5,0-37.9-0.3-58.4-5.8c-11.2-3-21.4-7.1-31-12.7c-33-19.1-50.3-49.4-64.3-73.8 c-6.2-10.8-12.6-22-17.8-27.2c-5.9-5.9-17-12.3-28.8-19.1c-24-13.8-53.8-31-72.3-63c-18.6-32.3-18.5-67-18.4-94.9 c0-13.4,0.1-26.1-2-33.7c-2-7.7-8.4-18.6-15.2-30.2c-14-24.1-31.4-54-31.4-91.3c0-36.8,17.2-66.7,31.1-90.7 c6.8-11.8,13.3-22.9,15.4-31c1.9-7.2,1.9-20.1,1.8-32.6c-0.1-28.1-0.2-63.1,18.8-95.9c19-32.9,49.3-50.2,73.6-64.2 c10.9-6.2,22.1-12.7,27.3-17.9c5.9-5.9,12.3-17.1,19.2-28.9c13.8-24,31-53.8,62.9-72.2c29.5-17,60.3-18.5,89.3-18.5h11 c10,0,21.3-0.2,28.2-2c7.6-2.1,18.6-8.4,30.1-15.1c24.3-14.1,54.3-31.5,91.4-31.6l4856-83.7l64-2888l-12016,96l-16,7000l7344,32 l4760,96L5459-1110.4z M909.2,106.8c-10.2-17.7-28.5-28.3-46.3-38.5c-12.2-7.1-23.8-13.7-32.4-22.3c-8.1-8.1-14.5-19.3-21.3-31.2 C798.8-3.3,788.1-22,769.7-32.7s-40-10.6-60.8-10.5c-13.7,0.1-26.6,0.1-37.7-2.9c-11.8-3.2-23.3-9.8-35.6-16.9 C623-70.3,610-77.8,596.2-81.5c-5.6-1.5-11.3-2.4-17.1-2.4c-20.7,0-39.2,10.8-57,21.1c-12.1,7-23.5,13.7-35,16.8s-24.7,3-38.6,3 c-20.6-0.1-42-0.1-59.9,10.3c-17.7,10.2-28.3,28.6-38.5,46.3c-7.1,12.3-13.7,23.8-22.3,32.5c-8.1,8.1-19.4,14.6-31.2,21.4 c-18.1,10.4-36.8,21.1-47.4,39.5c-10.7,18.5-10.6,40-10.5,60.9c0,13.7,0.1,26.6-2.9,37.8c-3.2,11.8-9.8,23.3-16.9,35.5 C208.6,259,198,277.4,198,297.8c0,20.8,10.7,39.2,21.1,57.1c7,12.1,13.6,23.5,16.7,35c3.1,11.5,3,24.6,3,38.6 c-0.1,20.7-0.1,42,10.2,60.1c10.2,17.7,28.5,28.3,46.3,38.5c12.2,7.1,23.8,13.7,32.4,22.3c8.1,8.1,14.5,19.3,21.3,31.2 c10.4,18.2,21.1,36.9,39.5,47.5c5.1,2.9,10.6,5.2,16.7,6.8c14.1,3.8,29.3,3.7,44,3.7c13.8-0.1,26.7-0.1,37.8,2.9 c11.8,3.2,23.3,9.8,35.5,16.9c17.8,10.3,36.1,20.9,56.6,20.9c20.8,0,39.2-10.8,57-21.2c12.1-7,23.5-13.7,35-16.7 c11.5-3.1,24.6-3,38.6-3c20.7,0,42.1,0.1,60.1-10.3c17.7-10.2,28.4-28.6,38.6-46.3c7.1-12.3,13.9-23.8,22.5-32.4 c8.1-8.1,19.6-14.5,31.5-21.3c18.2-10.4,37.7-21.1,48.4-39.6c10.6-18.5,8.9-87.6,11.9-98.7c3.2-11.8,9.8-23.3,16.9-35.6 c10.3-17.8,20.9-36.1,20.9-56.6c0-20.8-10.7-39.2-21.1-57.1c-7-12.1-13.6-23.5-16.7-35c-3.1-11.5-3-24.7-3-38.7 C919.5,146.2,919.5,124.8,909.2,106.8z"></path>
                                </svg>
                            </div>
                            <a href="assets/admin/assets/media/derma_gallery/500/{{$gal->image}}" class="lightbox-image link" data-fancybox="portfolio"></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!--End Projects Sections -->

    <!-- Services Section Seven -->
    <section class="services-section-seven">
        <div class="shape_wrapper shape_seven_up">
            <div class="shape_inner shape_seven_down" style="background-image: url(images/banner/bg-purple.png);"></div>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center light">
                <img src="images/logo putih.png" alt="" style="width: 150px;margin-bottom: 100px;">
                <h2>High Quality Services</h2>
            </div>
            <br><br>
            <div class="row">
                <!-- Feature Block seven -->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <img src="images/icons/susu-segar.png" alt="" style="width: 80px;margin-bottom:20px">
                        <h3>100% <br> Susu Segar</h3>
                        
                    </div>
                </div> 

                <!-- Feature Block seven -->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <img src="images/icons/bacteria.png" alt="" style="width: 80px;margin-bottom:20px">
                        <h3>Mengandung <br> Bakteri Baik</h3>
                       
                       
                    </div>
                </div>

                <!-- Feature Block seven -->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <img src="images/icons/smooth.png" alt="" style="width: 80px;margin-bottom:20px">
                        <h3>Lembut <br> & Creamy</h3>
                       
                        
                    </div>
                </div>

                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><div class="icon flaticon-strawberry"></div></div>
                        <h3>Buah Asli</h3>
                       
                        
                    </div>
                </div> 

                <!-- Feature Block seven -->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <img src="images/icons/less-sugar.png" alt="" style="width: 80px;margin-bottom:20px">

                        <h3>Less Sugar</h3>
                       
                       
                    </div>
                </div>

                <!-- Feature Block seven -->
                <div class="service-block-seven col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <img src="images/icons/vit.png" alt="" style="width: 80px;margin-bottom:20px">

                        <h3>Kaya Vitamin & Serat</h3>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section Seven -->

    <!-- Testimonial Section Three-->
    <section class="testimonial-section-three">
        <div class="shape_wrapper shape_seven_up">
            <div class="shape_inner shape_seven_down" style="background-image: url(images/landing/);"></div>
        </div>
        <br><br><br>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="divider"><img src="images/icons/divider_12.png" alt=""></div>
                <h2>Testimonial</h2>
            </div>

            <!-- Testimonial Carousel -->
            <div class="testimonial-carousel-two owl-carousel owl-theme">
                @foreach ($testimoni as $testi)
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="testimonial_img">
                            <svg class="div_left" fill="#ffffff" viewBox="0 0 25 8"><path d="M1.7,5.2C2,5.4,2.1,5.7,1.9,6C1.8,6.2,1.7,6.3,1.5,6.3c-0.4,0.1-1-0.4-0.7,0.4c0.1,0.4,0.6,0.4,0.9,0.5 c1.8,0.2,3.6-1.2,5.1-1.9c-0.9-0.5-2-1.1-2.3-2.1c-0.2-0.8,0-1.8,0.6-2.4C5.7,0,6.8-0.2,7.7,0.3C8,0.6,8.2,1.2,8.1,1.6 C7.9,2.3,7.6,2.5,7,2.5C7,2.1,7.2,1.3,6.8,1C6.5,0.8,6,0.9,5.7,1.2C4.8,1.9,5.2,3.1,6,3.7C6.5,4,6.9,4.2,7.4,4.4 c0.6,0.2,0.9,0,1.5-0.2c1.3-0.6,2.6-1,3.9-1.4c1.4-0.4,2.8-0.5,4.2-0.4c1.1,0.1,2.2,0.5,3.2,1.1c1,0.6,2.1,0.9,3.2,0.9 c0.4,0,1.6,0,1.6,0.4c0,0.4-1.5,0.1-1.7,0.5c0.2,0.1,0.9,0.3,0.7,0.7c-0.2,0.4-0.9,0-1-0.2c-0.4-0.4-1-0.7-1.6-0.6 c-1,0.1-2.1,0.3-3.1,0.4c-1,0.1-1.8,0.1-2.7,0.2C13.7,6.1,11.7,6.2,9.8,6C9.1,5.7,8.2,5.8,7.5,6.1C6.7,6.5,6,7,5.2,7.3 C4,7.9,1.7,8.4,0.5,7.4S0.5,4.3,1.7,5.2z M20.3,4.2c-1.3-1-3-1.4-4.6-1.1c-0.9,0.2-1.9,0.5-2.8,0.7c-0.5,0.1-1,0.3-1.6,0.5 S10.3,4.5,10.4,5L20.3,4.2z"></path></svg>
                        
                            <!-- Thumb Box -->
                            <figure class="thumb-box"><img src="assets/admin/assets/media/posting/{{$testi->image}}" alt=""></figure>

                            <svg class="div_right" fill="#ffffff" viewBox="0 0 25 8"><path d="M23.31,5.22a.59.59,0,0,0,.22,1.1c.36.08,1-.38.75.38-.13.4-.57.43-.93.46-1.77.17-3.6-1.21-5.11-1.95.87-.51,2-1.09,2.33-2.1A2.43,2.43,0,0,0,19.94.73,2,2,0,0,0,17.36.34a1.25,1.25,0,0,0-.43,1.29c.17.67.5.84,1.13.88-.05-.42-.28-1.17.12-1.49a1,1,0,0,1,1.17.15c.91.76.42,1.94-.38,2.54a4.91,4.91,0,0,1-1.37.66c-.64.22-.89,0-1.51-.22a25.55,25.55,0,0,0-3.94-1.39,13.51,13.51,0,0,0-4.2-.44A7.77,7.77,0,0,0,4.77,3.43a6.29,6.29,0,0,1-3.21.87c-.37,0-1.59,0-1.56.43s1.48.08,1.74.54c-.24.07-.89.29-.66.71s.86,0,1-.18a1.85,1.85,0,0,1,1.58-.6c1,.06,2.06.33,3.09.44s1.81.11,2.72.19a21.75,21.75,0,0,0,5.7.13,3.18,3.18,0,0,1,2.39.15c.76.37,1.47.84,2.23,1.2,1.25.6,3.56,1.12,4.74.13S24.51,4.34,23.31,5.22Zm-18.64-1a6.16,6.16,0,0,1,4.58-1.1c.93.19,1.86.45,2.78.69.52.14,1,.28,1.55.46s1.14.21,1.08.75Z"></path></svg>
                        </div>
                        <div class="text">{!!$testi->content!!}</div>
                        <div class="name">{{$testi->seo}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- Pricing Section -->
    <section class="pricing-section style-two">
        <div class="shape_wrapper shape_seven_up">
            <div class="shape_inner" style="background-image: url(images/landing/REK_9414\ \(1\).jpg);"><div class="overlay"></div></div>
        </div>

        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="divider"><img src="images/icons/divider_12.png" alt=""></div>
                <h2>Paket Yogurt</h2>
            </div>

            <div class="row">
                <!-- Pricing Table -->
                @foreach ($harga as $item)
                <div class="pricing-table tagged col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/admin/assets/media/derma_produk/{{$item->image}}" alt=""></figure>
                        </div>
                        <div class="pricing-svg">
                            <svg viewBox="0 0 1000 690">
                                <path class="st0" d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z"></path>
                            </svg>
                        </div>
                        <div class="title-box"><h3>{{$item->judul}}</h3></div>
                        <div class="price-box">
                            <div class="price">{{$item->resume}}</div>
                            <div class="title">{!!$item->deskripsi!!}</div>
                        </div>
                        <!-- <div class="table-content">
                            <ul>
                                <li><span>1 x Sweet Aniseed</span></li>
                                <li><span>1 x Soft Fruits </span></li>
                                <li><span>1 x Assorted </span></li>
                                <li><span>1 x Flavour Mix  </span></li>
                            </ul>
                        </div> -->
                        <div class="table-footer">
                            <a href="https://wa.link/cg0j18" target="blank" class="theme-btn btn-style-two regular"><span></span>Order Now<span></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

     <!-- Main Footer -->
     <footer class="main-footer">
        <div class="shape_wrapper shape_one">
            <div class="shape_inner" style="background-image: url(images/background/35.jpg);"><div class="overlay"></div></div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget social-widget">
                            <div class="widget-title">
                                <h3>Follow Us</h3>
                                <svg viewBox="0 0 850.4 410.3">
                                    <path d="M351.6,300.8c45.5,20.8,90.4,42.8,136.4,62.5c23,9.8,43.7,15,68.7,16.8c24.2,1.7,26.9-11.4,47.7-17.2 c36.4-10.2,50.6,30.7,12.4,39.4c-47,10.7-90.1,11.7-135.8-5.3c-43.6-16.2-84-40.4-125.5-61.1c-19.3-9.6-41-21.4-63.2-19.4 c-25.3,2.3-48.4,14.1-74.3,15.3c-33.4,1.5-101.6-4.4-107.8-47.3c-8-55.4,62.8-44,94.4-37.5c27.8,5.7,54.3,16.5,81.9,22 c27.9,5.7,49.2-4.2,74.5-15.3c49.2-21.6,108.5-37,152.6-67.4c-73-44.3-144.1-91.2-222.1-126.4c-68.4-30.9-157.2-64-226-12.7 c-11.1,8.3-20.3,19.6-26,32.2c-6.4,14-2.7,29.4-7.8,42.9C27.4,133.4,16,141,4.9,129.5c-10.1-10.4-2-33.4,2.1-44.6 C28.2,27.4,86.9,0.5,145,0c78.1-0.7,153.1,31.3,222.4,64.4c35.5,16.9,70.1,35.7,103.2,56.8c30.6,19.5,61.9,54.4,100.8,39.3 c68.6-26.4,131.4-75.9,210-57.7c57.6,13.4,99.3,84.7,40.5,125.7c-32.5,22.7-74.6,30.1-113.6,30c-42.6-0.1-77.9-19.1-117-32.7 c-41.5-14.4-84.9,10.2-124.1,24.2C448.9,256.6,351.9,281.1,351.6,300.8z M604.7,191.1c24.8,28.8,71.1,34.9,107.4,34.4 c31.8-0.4,94.3-7.9,110.4-41.2c23.9-49.5-49.1-56-77.9-51.8C695.1,139.9,649,169.4,604.7,191.1z M131.1,283.8 c25.5,27.4,91,30.7,122.6,7.1C212.6,263.8,153.1,259.8,131.1,283.8z"></path>
                                </svg>
                            </div>

                            <!-- Social Icons -->
                            <ul class="social-icon-one">
                                <li><a href="https://www.facebook.com/dairycious" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i>
                                    <svg viewBox="0 0 850.4 850.4"><path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path></svg></a>
                                </li>

                                <li><a href="https://www.instagram.com/dairycious.id/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i>
                                    <svg viewBox="0 0 850.4 850.4"><path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path></svg></a>
                                </li>

                                <li><a href="https://twitter.com/dairycious_id" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i>
                                    <svg viewBox="0 0 850.4 850.4"><path class="st0" d="M825.8,466.7L825.8,466.7l3-0.9l-3.3,0.8c-3.9-14.6-7.7-28.4-7.7-41.1c0-13.5,3.9-27.7,7.9-42.8 c5.9-21.9,11.9-44.5,6.1-66.3c-6-22.2-22.6-38.8-38.8-54.8c-11-10.9-21.3-21.2-27.8-32.6c-6.6-11.4-10.3-25.5-14.3-40.5 c-5.8-22.1-11.8-44.9-28-61.1c-15.9-16-38.5-22.1-60.4-27.8c-15-4-29.3-7.8-40.9-14.5c-11-6.4-21-16.5-31.7-27.3 c-16.3-16.4-32.9-33.2-55.7-39.4c-22.7-6.1-45.7,0.2-67.8,6.2c-14.6,3.9-28.4,7.7-41,7.7c-13.5,0-27.7-3.9-42.8-7.9 C366.9,20.3,351,16,335.2,16c-6.4,0-12.7,0.7-19,2.4c-22.2,6-38.7,22.6-54.8,38.8c-10.9,11-21.2,21.3-32.6,27.8 s-25.4,10.3-40.4,14.3c-22.1,5.9-44.8,11.8-61,28.1c-16,16-22,38.5-27.8,60.5c-4,15.1-7.8,29.4-14.5,41 c-6.4,11-16.5,21.1-27.3,31.8c-16.4,16.2-33.2,32.9-39.3,55.8c-6.1,22.7,0.2,45.8,6.2,68c3.9,14.6,7.7,28.4,7.7,41.1 c0,13.5-3.9,27.6-7.9,42.8c-5.9,22-11.9,44.6-6.1,66.4c6,22.2,22.6,38.8,38.8,54.9c11,10.9,21.3,21.2,27.8,32.6 c6.6,11.4,10.3,25.4,14.3,40.4c5.9,22.2,11.8,44.9,28,61.2c16,16,38.5,22.1,60.4,27.8c15.1,4,29.3,7.9,40.9,14.5 c11,6.4,21,16.5,31.7,27.2c16.3,16.4,33,33.3,55.8,39.4c6.3,1.6,12.8,2.5,19.7,2.5c16.1,0,32.3-4.4,48-8.7 c14.7-4,28.5-7.8,41.1-7.8c13.5,0,27.6,3.9,42.7,7.9c22,5.9,44.5,11.9,66.3,6.2c22.2-6,38.7-22.7,54.8-38.9 c10.9-11,21.2-21.3,32.5-27.8c11.4-6.5,25.4-10.3,40.3-14.3c22.2-5.9,44.9-11.9,61.1-28.1c16-15.9,22-38.5,27.8-60.5 c4-15.1,7.9-29.4,14.5-41c6.4-11,16.4-21,27.1-31.7c16.4-16.3,33.5-33,39.6-55.9C838,511.9,835.8,488.9,825.8,466.7z"></path></svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><img src="images/" alt=""></figure>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget newslatter-widget">
                            <div class="widget-title">
                                <h3>Get Our Sweet News</h3>
                                <svg viewBox="0 0 850.4 410.3">
                                    <path d="M351.6,300.8c45.5,20.8,90.4,42.8,136.4,62.5c23,9.8,43.7,15,68.7,16.8c24.2,1.7,26.9-11.4,47.7-17.2 c36.4-10.2,50.6,30.7,12.4,39.4c-47,10.7-90.1,11.7-135.8-5.3c-43.6-16.2-84-40.4-125.5-61.1c-19.3-9.6-41-21.4-63.2-19.4 c-25.3,2.3-48.4,14.1-74.3,15.3c-33.4,1.5-101.6-4.4-107.8-47.3c-8-55.4,62.8-44,94.4-37.5c27.8,5.7,54.3,16.5,81.9,22 c27.9,5.7,49.2-4.2,74.5-15.3c49.2-21.6,108.5-37,152.6-67.4c-73-44.3-144.1-91.2-222.1-126.4c-68.4-30.9-157.2-64-226-12.7 c-11.1,8.3-20.3,19.6-26,32.2c-6.4,14-2.7,29.4-7.8,42.9C27.4,133.4,16,141,4.9,129.5c-10.1-10.4-2-33.4,2.1-44.6 C28.2,27.4,86.9,0.5,145,0c78.1-0.7,153.1,31.3,222.4,64.4c35.5,16.9,70.1,35.7,103.2,56.8c30.6,19.5,61.9,54.4,100.8,39.3 c68.6-26.4,131.4-75.9,210-57.7c57.6,13.4,99.3,84.7,40.5,125.7c-32.5,22.7-74.6,30.1-113.6,30c-42.6-0.1-77.9-19.1-117-32.7 c-41.5-14.4-84.9,10.2-124.1,24.2C448.9,256.6,351.9,281.1,351.6,300.8z M604.7,191.1c24.8,28.8,71.1,34.9,107.4,34.4 c31.8-0.4,94.3-7.9,110.4-41.2c23.9-49.5-49.1-56-77.9-51.8C695.1,139.9,649,169.4,604.7,191.1z M131.1,283.8 c25.5,27.4,91,30.7,122.6,7.1C212.6,263.8,153.1,259.8,131.1,283.8z"></path>
                                </svg>
                            </div>

                            <!--Newslatter Form-->
                            <div class="newslatter-form">
                                <form method="post" action="#" id="subscribe-form">
                                    <div class="form-group"><div class="response"></div></div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value="" placeholder="Your Email Address" required>
                                        <button type="button" id="subscribe-newslatters" class="theme-btn"><span class="flaticon-note"></span></button>
                                    </div>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyright © 2021. All rights reserved by Dairycious</p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <svg viewBox="0 0 500 500">
        <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5
        c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1
        c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2
        c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7
        c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6
        c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4
        c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5
        c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4
        c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7
        c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
    </svg>
    <span class="fa fa-angle-up"></span>
</div>

<!-- Floating WA -->
<a class="wa-floating" href="https://wa.link/2tfx96" target="blank">
    <img src="images/icons/wa.png" alt="" >
</a>




<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

</body>
</html>