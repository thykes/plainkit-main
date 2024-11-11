<!doctype html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
   <meta name="description" content="<?= $site->description()->html() ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Favicon -->
   <link rel="shortcut icon" href="<?= url('assets/img/favicon.png') ?>" type="image/x-icon">

   <!-- CSS Files -->
   <?= css([
      'assets/css/bootstrap.css',
      'assets/css/animate.css',
      'assets/css/swiper-bundle.css',
      'assets/css/slick.css',
      'assets/css/magnific-popup.css',
      'assets/css/font-awesome-pro.css',
      'assets/css/spacing.css',
      'assets/css/custom-animation.css',
      'assets/css/main.css'
   ]) ?>
</head>
<body id="body" class="tp-magic-cursor tp-smooth-scroll">

   <!-- Begin Magic Cursor -->
   <div id="magic-cursor">
      <div id="ball"></div>
   </div>
   <!-- End Magic Cursor -->

   <!-- Preloader -->
   <div id="loading" class="preloader-wrap">
      <div class="preloader-2 text-center">
         <span class="line line-1"></span>
         <span class="line line-2"></span>
         <span class="line line-3"></span>
         <span class="line line-4"></span>
         <span class="line line-5"></span>
         <span class="line line-6"></span>
         <span class="line line-7"></span>
         <span class="line line-8"></span>
         <span class="line line-9"></span>
         <div class="loader-text">Loading...</div>
      </div>
   </div>
   <!-- End Preloader -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- offcanvas area end -->
   <div class="tp-offcanvas-2-area p-relative">
      <div class="tp-offcanvas-2-bg is-left left-box"></div>
      <div class="tp-offcanvas-2-bg is-right right-box d-none d-md-block"></div>
      <div class="tp-offcanvas-2-wrapper">
         <div class="tp-offcanvas-2-left left-box">
            <div class="tp-offcanvas-2-left-wrap d-flex justify-content-between align-items-center">
               <div class="tpoffcanvas__logo">
                  <a class="logo-1" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                  <a class="logo-2" href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
               </div>
               <div class="tp-offcanvas-2-close d-md-none text-end">
                  <button class="tp-offcanvas-2-close-btn tp-offcanvas-2-close-btn">
                     <span class="text">
                        <span>close</span>
                     </span>
                     <span class="d-inline-block">
                        <span>
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="32.621" height="1.00918" transform="matrix(0.704882 0.709325 -0.704882 0.709325 1.0061 0)" fill="currentcolor"/>
                              <rect width="32.621" height="1.00918" transform="matrix(0.704882 -0.709325 0.704882 0.709325 0 23.2842)" fill="currentcolor"/>
                           </svg>
                        </span>
                     </span>
                     
                  </button>
               </div>
            </div>
            <div class="tp-main-menu-mobile menu-hover-active counter-row">
               <nav></nav>
            </div>
         </div>
         <div class="tp-offcanvas-2-right right-box d-none d-md-block p-relative">
            <div class="tp-offcanvas-2-close text-end">
               <button class="tp-offcanvas-2-close-btn">
                  <span class="text">
                     <span>close</span>
                  </span>

                  <span class="d-inline-block">
                     <span>
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path d="M9.80859 9.80762L28.1934 28.1924" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M9.80859 28.1924L28.1934 9.80761" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                  </span>
                  
               </button>
            </div>
            <div class="tp-offcanvas-2-right-inner d-flex flex-column justify-content-between h-100">
               <div class="tpoffcanvas__right-info">
                  <div class="tpoffcanvas__tel">
                     <a href="tel:61404093954">+61404093 954</a>
                  </div>
                  <div class="tpoffcanvas__mail">
                     <a href="mailto:hellocontact@diego.com">
                        hello contact@diego.com</a>
                  </div>
                  <div class="tpoffcanvas__text">
                     <p>If in doubt. reach out.</p>
                  </div>
               </div>
               <div class="tpoffcanvas__social-link">
                  <ul>
                     <li><a href="#">Dribbble</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Linkedin</a></li>
                     <li><a href="#">Behance</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- offcanvas area start -->
 
   <div id="smooth-wrapper">
      <div id="smooth-content">
      
      <header>
   
         <!-- header top area start -->
         <div class="tp-header-2-area tp-header-2-space tp-transparent">
            <div class="container container-1840">
               <div class="row align-items-center">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                     <div class="tp-header-logo">
                        <a class="logo-1" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        <a class="logo-2" href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
                     <div class="tp-header-2-menu-bar text-end text-sm-center">
                        <button class="tp-offcanvas-open-btn">
                           <span></span>
                           <span></span>
                        </button>
                        <div class="d-none">
                           <nav class="tp-main-menu-content">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="index.html">Home</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="index.html">MAIN HOME</a></li>
                                       <li><a href="index-2.html">Fashion STUDIO</a></li>
                                       <li><a href="index-4.html">CREATIVE AGENCY</a></li>
                                       <li><a href="index-3.html">Digital Agency</a></li>
                                       <li><a href="index-5.html">DESIGN STUDIO</a></li>
                                       <li><a href="index-shop.html">Minimal Shop</a></li>
                                       <li><a href="index-9.html">DESIGN STUDIO</a></li>
                                       <li><a href="index-10.html">showcase carousel</a></li>
                                       <li><a href="index-11.html">INTERACTIVE LINKS</a></li>
                                       <li><a href="index-11.html">wrapper slider</a></li>
                                       <li><a href="portfolio-showcase-2.html">showcase parallax</a></li>
                                       <li><a href="index-12.html">horizontal</a></li>
      
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="about-us.html">ABOUT US</a></li>
                                       <li><a href="about-me.html">ABOUT ME</a></li>
                                       <li><a href="team.html">Team Page</a></li>
                                       <li><a href="team-details.html">Team Datails</a></li>
                                       <li><a href="service.html">OUR SERVICES</a></li>
                                       <li><a href="service-details.html">SERVICES DETAILS</a></li>
                                       <li><a href="shop-sidebar.html">Shop Page</a></li>
                                       <li><a href="shop-details.html">shop details one</a></li>
                                       <li><a href="shop-details-2.html">shop details TWO</a></li>
                                       <li><a href="brand.html">OUR CLIENTS</a></li>
                                       <li><a href="faq.html">FAQ Page</a></li>
                                       <li><a href="price.html">Pricing</a></li>
                                       <li><a href="myaccount.html">my account</a></li>
                                       <li><a href="login.html">LogIn</a></li>
                                       <li><a href="register.html">Register</a></li>
                                       <li><a href="cart.html">cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="error.html">ERROR PAGE</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="portfolio-standard.html">Portfolio</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="portfolio-standard.html">Standerd</a></li>
                                       <li><a href="index-10.html">Interactive</a></li>
                                       <li><a href="portfolio-random.html">random</a></li>
                                       <li><a href="portfolio-showcase-2.html">showcase parallax</a></li>
                                       <li><a href="portfolio-masonary.html">Masonry random</a></li>
                                       <li><a href="index-12.html">Vertical Carousel</a></li>
                                       <li><a href="portfolio-wrapper.html">wrapper</a></li>
                                       <li><a href="portfolio-showcase-1.html">horizontal</a></li>
                                       <li><a href="index-9.html">Image Slider</a></li>
                                       <li><a href="index-11.html">wrapper Slider</a></li>
                                       <li><a href="portfolio-showcase-1.html">parallax showcase</a></li>
                                       <li><a href="index-9.html">Perspective Slider</a></li>
                                       <li><a href="portfolio-grid-col-2.html">two-columns</a></li>
                                       <li><a href="portfolio-grid-col-3.html">three-columns</a></li>
                                       <li><a href="portfolio-grid-col-3-fullwidth.html">three-columns Wide</a></li>
                                       <li><a href="portfolio-grid-col-4.html">four-columns</a></li>
                                       <li><a href="portfolio-grid-col-4-fullwidth.html">four-columns Wide</a></li>
                                       <li><a href="portfolio-showcase-2-details.html">Creative</a></li>
                                       <li><a href="portfolio-details-1.html">images Small</a></li>
                                       <li><a href="portfolio-details-2.html">Sliding</a></li>
                                       <li><a href="portfolio-details-comparison.html">Image Comparison</a></li>
                                       <li><a href="portfolio-details-video.html">Video</a></li>
                                       <li><a href="portfolio-custom-light.html">CUSTOM LIGHT</a></li>
                                       <li><a href="portfolio-showcase-details.html">Gallery</a></li>
                                       <li><a href="portfolio-details-3.html">Mockups</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog-list.html">Blog</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="blog-modern.html">Modern</a></li>
                                       <li><a href="blog-classic.html">Classic Sidebar</a></li>
                                       <li><a href="blog-list.html">Minimal List</a></li>
                                       <li><a href="blog-details.html">Post Single</a></li>
                                       <li><a href="blog-details-without-sidebar.html">Post Without Sidebar</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="contact.html">Contact</a>
                                    <ul class="tp-submenu submenu">
                                       <li><a href="contact-2.html">Contact</a></li>
                                       <li><a href="contact.html">Get IN touch</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 d-none d-sm-block">
                     <div class="tp-header-2-btn-box text-end">
                        <div class="tp-header-2-button">
                           <a class="tp-btn-animation" href="contact.html">
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                              <span>Get In Touch</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top area end -->
   
      </header>