<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Yahirtech! - Software, manuals and activators</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!--==================== Preloader Start ====================-->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->
    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->
    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->
    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->
    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="assets/images/logo/logo.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">
                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item">
                        <a href="?p=home" class="nav-menu__link">Home</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="?p=shop&c=software" class="nav-menu__link">Software</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="?p=shop&c=manuals" class="nav-menu__link">Manuals</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="?p=shop&c=meta" class="nav-menu__link">Meta Files</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="?p=blog" class="nav-menu__link">Blog</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="?p=contact" class="nav-menu__link">Contact</a>
                    </li>
                </ul>
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">

                    <a href="?p=user&do=signup" class="btn btn-main pill">
                        <span class="icon-left icon">
                            <img src="assets/images/icons/user.svg" alt="">
                        </span>Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <!-- ==================== Header Start Here ==================== -->
    <header class="header">
        <div class="container container-full">
            <nav class="header-inner flx-between">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="index.html" class="link">
                        <img src="assets/images/logo/logo.png" alt="Logo">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flx-align ">
                        <li class="nav-menu__item">
                            <a href="?p=home" class="nav-menu__link">Home</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="?p=shop&c=software" class="nav-menu__link">Software</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="?p=shop&c=manuals" class="nav-menu__link">Manuals</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="?p=shop&c=meta" class="nav-menu__link">Meta Files</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="?p=blog" class="nav-menu__link">Blog</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="?p=contact" class="nav-menu__link">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="header-right flx-align">
                    <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">
                        <a href="register.html" class="btn btn-main pill">
                            <span class="icon-left icon">
                                <img src="assets/images/icons/user.svg" alt="">
                            </span>Sign Up
                        </a>
                    </div>
                    <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- ==================== Header End Here ==================== -->
    <?php if (isset($_GET['p']) && !isset($_GET['id'])): ?>
        <!-- ======================== Breadcrumb one Section Start ===================== -->
        <section class="breadcrumb breadcrumb-one padding-y-60 section-bg position-relative z-index-1 overflow-hidden">

            <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">

            <img src="assets/images/shapes/element-moon3.png" alt="" class="element one">
            <img src="assets/images/shapes/element-moon1.png" alt="" class="element three">

            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="breadcrumb-one-content">
                            <h3 class="breadcrumb-one-content__title text-center mb-3 text-capitalize">Software, Manuals and
                                Activators</h3>
                            <p class="breadcrumb-one-content__desc text-center text-black-three">Explore the best premium
                                programs and manuals available for sale. Our collection is carefully selected. Find and get
                                personalized support.</p>

                            <form action="#" class="search-box">
                                <input type="text" class="common-input common-input--lg pill shadow-sm"
                                    placeholder="Search software, manuals &amp; more...">
                                <button type="submit" class="btn btn-main btn-icon icon border-0">
                                    <img src="assets/images/icons/search.svg" alt="">
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================== Breadcrumb one Section End ===================== -->
    <?php endif; ?>