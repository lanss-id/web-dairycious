<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Diarycious - Smooth & Creamy Yogurt</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
    <header class="main-header">
        <!-- Menu Wave -->
        <div class="menu_wave"></div>

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
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/reseller">Reseller</a></li>
                                    <li class="dropdown current"><a href="{{ url ('/product') }}">Order</a>
                                    <ul>
                                        <li class="current" ><a href="{{ url ('/product') }}">Produk</a></li>
                                        <li><a href="/cara-order">Cara Order</a></li>
                                    </ul>
                                </li>
                                </ul>

                                <ul class="navigation menu-right clearfix">
                                    <li> <a href="{{ url ('/articles') }}">Artikel</a></li>
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/banner/bg-banner.png)">
        <div class="auto-container">
            <h1>Produk</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Produk</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Showcase -->
    <section class="blog-section blog-masonry">
        <div class="auto-container">
            <div class="row justify-content-center">
                @foreach( $produk as $article )
                <!-- News Block -->
                <div class="news-block masonry-item col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box">
                        <div class="image-column">
                            <div class="inner-column">
                                <figure class="image"><img src="assets/admin/assets/media/derma_produk/500/{{$article->image}}" alt=""></figure>
                            </div>
                        </div>
                        <div class="content-column">
                            <div class="inner-column">
                                <h3><a href= "/product/{{$article->id_produk}}">{{ $article->judul }} </a></h3>
                                <ul class="post-info">
                                    <li><span class="icon fa fa-heart"></span> 5 Likes</li>
                                    <li><span class="icon fa fa-bookmark"></span> <a href="/product/{{$article->id_produk}}">{{$article->category}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
                <!-- Styled Pagination -->
                <div class="styled-pagination text-center">
                   {{ $produk->links() }}
                </div>
        
    </section>
    <!-- End Blog Showcase -->

    <!-- Main Footer -->
    <footer class="main-footer style-five">
        <div class="shape_wrapper footer_shape">
            <div class="shape_inner"><div class="overlay"></div></div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="footer-widget social-widget">
                    <ul class="social-icon-three">
                        <li><a href="https://www.facebook.com/dairycious" target="_blank" rel="noopener noreferrer"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="https://wa.link/2tfx96" target="_blank" rel="noopener noreferrer"><span class="fab fa-whatsapp"></span></a></li>
                        <li><a href="https://twitter.com/dairycious_id" target="_blank" rel="noopener noreferrer"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.instagram.com/dairycious.id/" target="_blank" rel="noopener noreferrer"><span class="fab fa-instagram"></span></a></li>                        
                    </ul>
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
    <!-- End Footer -->

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
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>