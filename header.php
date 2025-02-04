<?php $url = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER['SERVER_NAME'].'/';
    $pagename= basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dr. Arya's Multispeciality Dental Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpeg">
    <!-- <?php echo $url; ?>css here -->
    <link rel="stylesheet" href="<?php echo $url; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $url; ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/dripicons.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/default.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>css/responsive.css">
</head>

<body>
    <!-- header -->
    <header class="header-area header-three">
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 d-none d-lg-block">
                        <div class="header-cta">
                            <ul>
                                <li>
                                    <a href="mailto:pamidikumar@gmail.com">
                                        <i class="icon fal fa-envelope"></i>
                                        <span>pamidikumar@gmail.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:9059617081">
                                        <i class="icon fal fa-phone"></i>
                                        <span>+91- 9059617081</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-none d-lg-block text-right">
                        <div class="header-social">
                            <span>
                                <a href="https://www.facebook.com/draryadental/" title="Facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/aryasdental/" title="Instagram" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/Draryasdental" title="Twitter" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/dr-hemanth-kumar-pamidi-017b7a65/" title="LinkedIn"
                                    target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.youtube.com/@DrAryasDental" title="Youtube" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>img/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">

                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="<?php echo $url; ?>">Home</a></li>
                                        <li class="has-sub"><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="<?php echo $url; ?>about-us">About Us</a></li>
                                                <li><a href="<?php echo $url; ?>profile">Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub">
                                            <a href="services">Services</a>
                                            <ul>
                                                <li><a href="<?php echo $url; ?>tooth-extraction-procedure-in-as-rao-nagar">Tooth Extraction</a></li>
                                                <li><a href="<?php echo $url; ?>tooth-filling-cost-in-as-rao-nagar">Tooth Filling</a></li>
                                                <li><a href="<?php echo $url; ?>tooth-scaling-cost-in-banjara-hills"> Tooth Scaling</a></li>
                                                <li><a href="<?php echo $url; ?>best-dental-implants-clinic-in-banjara-hills">Dental Implants</a></li>
                                                <li><a href="<?php echo $url; ?>best-orthodontist-in-banjara-hills">Orthodontic Treatments</a></li>
                                                <li><a href="<?php echo $url; ?>laser-dental-treatment-in-ecil">Laser Treatments</a></li>
                                                <li><a href="<?php echo $url; ?>best-root-canal-treatment-in-as-rao-nagar">Root Canal Treatments</a></li>
                                                <li><a href="<?php echo $url; ?>best-zirconia-crowns-in-as-rao-nagar">Tooth Caps</a></li>
                                                <li><a href="<?php echo $url; ?>composite-fillings-in-banjara-hills">Aesthetic Restorations</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo $url; ?>blog">Blogs</a></li>
                                        <li><a href="<?php echo $url; ?>gallery">Gallery</a></li>
                                        <li><a href="<?php echo $url; ?>contact-us">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div
                            class="col-xl-3 col-lg-3 text-right d-none d-lg-block mt-25 mb-25 text-right text-xl-right">
                            <div class="login">
                                <ul>
                                    <li>
                                         <div class="second-header-btn">
                                            <a href="<?php echo $url; ?>book-an-appointment" class="btn">Book Appointment</a>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->