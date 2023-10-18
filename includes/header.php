<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Home | The Praetors';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="images/favicon.svg" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <script>
      (function(w,d,t,r,u)
      {
        var f,n,i;
        w[u]=w[u]||[],f=function()
        {
          var o={ti:"355018866", enableAutoSpaTracking: true}; 
          o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") 
        },
        n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function()
        {
          var s=this.readyState;
          s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)
        },
        i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)
      })
      (window,document,"script","//bat.bing.com/bat.js","uetq");
    </script>

</head>

<body>

    <!-- Navbar Start -->
    <header class="main-haeder">
        <nav class="navbar sl-navbar navbar-expand-lg ">
            <div class="container container-navbar">
                <a class="navbar-brand" href="index"><img class="img-fluid" src="images/logo.svg" alt></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sl-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">ABOUT US</a>
                        </li>
                        <li class="nav-item" id="service">
                            <a class="nav-link drop" href="javascript:;">SERVICES</a>
                            <div class="dropdown-cus">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-11 col-xl-11 col-xxl-10">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">mobile app development</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" href="hybrid-mobile-development">Hybrid Mobile Application
                                                                    Development</a></li>
                                                            <li><a class="text-capitalize" href="flutter-app-development">Flutter App Development</a></li>
                                                            <li><a class="text-capitalize" href="react-native-development">React Native App Development</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="cross-platform-development">Cross-Platform App
                                                                    Development</a></li>
                                                            <li><a class="text-capitalize" href="ios-app-development">iOS App Development</a></li>
                                                            <li><a class="text-capitalize" href="android-app-development">Android App Development</a></li>
                                                            <li><a class="text-capitalize" href="ar-vr-app-development">AR/VR App Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">software development</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" href="desktop-software-development">Desktop Software Development</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="javascript:;">SAAS Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">CRM Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">ERP Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Learning Management System
                                                                    Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Finance Management System
                                                                    Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">HRMS Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">IoT Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">game development</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" href="hyper-casual-development">Hyper-Casual Game Development</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="javascript:;">iOS Game Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Android Game Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">3D Game Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Console Game Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">PC Game Development</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Play-to-Earn Game Development</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="javascript:;">AR/VR Game Development</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">business consultancy</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" class="text-capitalize" href="business-plan">Business plan creation</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Pitch-Deck creation</a></li>
                                                            <li><a class="text-capitalize" href="market-research-report.php">Market Research and Report</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="investment-rounds.php">Investment Rounds</a></li>
                                                            <li><a class="text-capitalize" href="complete-startup-consultancy.php">Complete Startup consultancy</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">web development</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" href="progressive-web-development">Progressive Web App (PWA)
                                                                    Development</a></li>
                                                            <li><a class="text-capitalize" href="webportal.php">Web Portals</a></li>
                                                            <li><a class="text-capitalize" href="ecommerce-development.php">E-Commerce Development</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="market-placement.php">Marketplace Developmen</a></li>
                                                            <li><a class="text-capitalize" href="3d-environment-design.php">3D Environment Design and
                                                                    Development</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="content">
                                                        <h2><a href="javascript:;">devops</a></h2>
                                                        <ul>
                                                            <li><a class="text-capitalize" href="app-maintenance">App Maintenance</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">Server Maintenance</a></li>
                                                            <li><a class="text-capitalize" href="javascript:;">AWS Services</a>
                                                            </li>
                                                            <li><a class="text-capitalize" href="javascript:;">Google Cloud Services</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="casestudies">CASE STUDIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">CONTACT US</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 side-btn-nav">
                        <li>
                            <a class="nav-link" href="tel:(855) 772-6090" >(855) 772-6090 <img class="img-fluid"
                                    src="images/small-arrow-right.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->