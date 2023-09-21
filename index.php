<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script nonce="9291d937-9031-4df0-8de2-6c8cbccf88df">
        (function(w, d) {
            ! function(U, V, W, X) {
                U[W] = U[W] || {};
                U[W].executed = [];
                U.zaraz = {
                    deferred: [],
                    listeners: []
                };
                U.zaraz.q = [];
                U.zaraz._f = function(Y) {
                    return async function() {
                        var Z = Array.prototype.slice.call(arguments);
                        U.zaraz.q.push({
                            m: Y,
                            a: Z
                        })
                    }
                };
                for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                U.zaraz.init = () => {
                    var ba = V.getElementsByTagName(X)[0],
                        bb = V.createElement(X),
                        bc = V.getElementsByTagName("title")[0];
                    bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                    U[W].x = Math.random();
                    U[W].w = U.screen.width;
                    U[W].h = U.screen.height;
                    U[W].j = U.innerHeight;
                    U[W].e = U.innerWidth;
                    U[W].l = U.location.href;
                    U[W].r = V.referrer;
                    U[W].k = U.screen.colorDepth;
                    U[W].n = V.characterSet;
                    U[W].o = (new Date).getTimezoneOffset();
                    if (U.dataLayer)
                        for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                ...bh[1],
                                ...bi[1]
                            })), {}))) zaraz.set(bg[0], bg[1], {
                            scope: "page"
                        });
                    U[W].q = [];
                    for (; U.zaraz.q.length;) {
                        const bj = U.zaraz.q.shift();
                        U[W].q.push(bj)
                    }
                    bb.defer = !0;
                    for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => {
                        try {
                            U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                        } catch {
                            U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                        }
                    }));
                    bb.referrerPolicy = "origin";
                    bb.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                    ba.parentNode.insertBefore(bb, ba)
                };
                ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between align-items-center flex-sm">
                                    <div class="header-info-left d-flex align-items-center">

                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logo.png" alt></a>
                                        </div>

                                        <form action="#" class="form-box">
                                            <input type="text" name="Search" placeholder="Search book by author or publisher">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                        <ul>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Track Order</a></li>
                                            <li class="shopping-card">
                                                <a href="cart.html"><img src="assets/img/icon/cart.svg" alt></a>
                                            </li>
                                            <li><a href="login.html" class="btn header-btn">Sign in</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12">

                                <div class="logo2">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt></a>
                                </div>

                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="categories.html">Categories</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="book-details.html">book Details</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contect</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="best-selling section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Best Selling Books Ever</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="selling-active">
                            <?php
                            include "admin/db.php";
                            $sel = "SELECT * FROM `pro`";
                            $query = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="properties pb-20">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="single+book.php"><img src="admin/<?php echo $row['image'] ?>" height="auto" width="0%" alt="image"></a>
                                            <!-- <a href="single+book.php"><img src="admin/image/1.jpg" alt="qqq"></a> -->
                                        </div>

                                        <div class="properties-caption">
                                            <h3><a href="book-details.html"><?php echo $row['title'] ?></a></h3>

                                            <p> dddddd</p>
                                            <div class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$<?php echo $row['price'] ?></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area2 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                                    <h2 class="mb-0">Featured This Week</h2>
                                    <a href="#" class="browse-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="services-active">

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt>
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt>
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt>
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt>
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

                        <div class="google-add">
                            <img src="assets/img/gallery/ad.jpg" alt class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding best-selling " style="margin-bottom:120px;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">

                        <div class="section-tittle  mb-40">
                            <h2>most views Published books</h2>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="nav-button">

                <?php
                include_once("./admin/db.php");
                $category_sql = "SELECT * FROM cat  ";
                $resultset = mysqli_query($con, $category_sql) or die("database error:" . mysqli_error($con));
                $active_class = 0;
                $category_html = '';
                $product_html = '';
                while ($row = mysqli_fetch_assoc($resultset)) {
                    $current_tab = "";
                    $current_content = "";
                    if (!$active_class) {
                        $active_class = 1;
                        $current_tab = 'active';
                        $current_content = 'in active';
                    }
                    $category_html .= '<li class="  '  . $current_tab . '"><a  class="nav-link active" href="#' . $row['cat_id'] . '" data-toggle="tab">' .
                        $row['cat_name'] . '</a></li>';
                    $product_html .= '<div id="' . $row["cat_id"] . '" class="tab-pane fade ' . $current_content . '">';
                    $product_sql = "SELECT * FROM pro WHERE cat_id = " . $row["cat_id"]  ;
                    $product_results = mysqli_query($con, $product_sql) or die("database error:" . mysqli_error($con));
                    if (!mysqli_num_rows($product_results)) {
                        $product_html .=  '<br>No product found!';
                    }
                    while ($product = mysqli_fetch_assoc($product_results)) {
                        $product_html .= '<div class="col-md-3 product py-4">';
                        $product_html .=  '<h4>' . $product["title"] . '</h4>';
                        $product_html .=  '<img src="admin/<?php echo " . $row[" image" ]. ">';
                        $product_html .=  '<h4>Price: $' . $product["cat_id"] . '</h4>';
                        $product_html .=  '</div>';
                    }
                    $product_html .=  '<div class="clear_both"></div></div>';
                }
                ?>

                <ul class="nav nav-tabs nav-button">
                    <?php echo $category_html; ?>
                </ul>
                <div class="tab-content" style="float:none;clear:both">
                    <?php echo $product_html; ?>

                </div>

            </div>
        </section>


        <section class="container  " style="float:none;clear:both">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
                        <h2>The History<br> of Phipino</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
                        <h2>Wilma Mumduya</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <h3>Join Newsletter</h3>
                            <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button class="subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="footer-wrappper section-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Book Category</h4>
                                    <ul>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Horror - Thriller</a></li>
                                        <li><a href="#">Love Stories</a></li>
                                        <li><a href="#">Science Fiction</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>&nbsp;</h4>
                                    <ul>
                                        <li><a href="#">Biography</a></li>
                                        <li><a href="#">Astrology</a></li>
                                        <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="#">Software Development</a></li>
                                        <li><a href="#">Ecommerce</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Site Map</h4>
                                    <ul class="mb-20">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: black" target="_blank" rel="nofollow noopener">Colorlib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/price_rangs.js"></script>

    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7fb9bc9aae602963","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>