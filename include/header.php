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
  
    <style>
        a{
            text-decoration: none !important;
        }
         
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                                        <form action="#" method="post" class="form-box">
                                            <input type="text" name="cat_name" placeholder="Search book by author or publisher">
                                            <!-- <input type="search" name="submit"> -->
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
                                            <li><a href="index.php" class="text-decoration-none fw-bold"> Home</a></li>
                                            <li><a href="category.php" class="text-decoration-none fw-bold">Categories</a></li>
                                            <li><a href="about.html" class="text-decoration-none fw-bold">About</a></li>
                                            <li><a href="#" class="text-decoration-none fw-bold">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="book-details.html">book Details</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html" class="text-decoration-none fw-bold">Blog</a></li>
                                            <li><a href="contact.html" class="text-decoration-none fw-bold">Contect</a></li>
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