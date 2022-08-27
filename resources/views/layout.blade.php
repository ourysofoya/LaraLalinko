<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Simpeten Business</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
 
    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
        * Template Name: Vesperr - v4.7.0
        * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <img src="/img/LOGO.jpg" alt="Notre LOGO" class="logo"
                    style="height:50px; width: 60px; align-items: baseline;" />
                <!-- <h1><a href="index.html">Ets Simpeten Business</a></h1> -->
                <h1><a href="index.html">Ets Simpeten Business</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
                    <li><a class="nav-link scrollto" href="{{route('features')}}">Shops</a></li>
                    <li><a class="nav-link scrollto " href="{{route('portfolio')}}">Gallerie</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                    <li class="dropdown"><a href="#"><span>Download</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/documents/BIOGLOW_BROCHURE.pdf" target="_blank">Dabur Products</a></li>
                            <li class="dropdown"><a href="#"><span>Scion Products</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="/documents/CL_BROCHURE.pdf" target="_blank">Creation Lamis</a>
                                    </li>
                                    <li><a href="/documents/DC_BROCHURE.pdf">Dorall Collection</a></li>
                                    <li><a href="/documents/JPD_BROCHURE.pdf">Jean Paul Dupond</a></li>
                                    <li><a href="/documents/PC_BROCHURE.pdf">Paris Collection</a></li>
                                    <li><a href="/documents/EAD_BROCHURE.pdf">Others</a></li>
                                </ul>
                            </li>
                            <li><a href="/documents/brochure-3.pdf" target="_blank">Acropole Products</a></li>
                            <li><a href="/documents/brochure-4.pdf" target="_blank">SSG Products</a></li>
                            <li><a href="/documents/brochure-5.pdf" target="_blank">Swiss Arabian Products</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{route('team')}}">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
                    <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    @yield ('contenu')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                    <div class="col-lg-6 text-lg-left text-center">
                            <div class="copyright">
                                &copy; Copyright <strong>SOBAT GROUP</strong>. All Rights Reserved
                            </div>
                                <div class="credits">
                                    <!-- All the links in the footer should remain intact. -->
                                    <!-- You can delete the links only if you purchased the pro version. -->
                                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                                    Designed by <a href="https://bootstrapmade.com/">SOBAT TECHNOLOGIE</a>
                                </div>
                   
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#hero" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/vendor/purecounter/purecounter.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>


</body>

</html>