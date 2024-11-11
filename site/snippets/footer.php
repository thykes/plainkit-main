<footer>
   <!-- Footer Area Start -->
   <div class="tp-footer-5-area black-bg pt-120 pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="tp-footer-5-content-wrap">
                  <div class="tp-footer-5-title-box">
                     <span class="tp-footer-5-subtitle">Want to <br> Start a Project?</span>
                     <h4 class="tp-footer-5-title footer-big-text">Let's Talk</h4>
                  </div>
                  <div
                     class="tp-footer-5-info d-flex align-items-center justify-content-start justify-content-md-end">
                     <a class="tp-footer-5-mail" href="mailto:<?= $site->email() ?>">
                        <?= $site->email() ?>
                     </a>
                     <a class="tp-footer-5-link" href="#">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 11L11 1" stroke="#19191A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M1 1H11V11" stroke="#19191A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer Area End -->

   <!-- Copyright Area Start -->
   <div class="tp-copyright-5-area tp-copyright-5-style-2 black-bg pb-50">
      <div class="container container-1560">
         <div class="row align-items-center">
            <div class="col-xl-3 col-lg-6 col-md-5 d-none d-xl-block">
               <div class="tp-copyright-5-left-info">
                  <span>
                     <a href="https://www.google.com/maps/@40.1001598,-74.0544407,8.83z?entry=ttu" target="_blank">
                        <?= $site->address()->html() ?>
                     </a>
                  </span>
                  <span>
                     Phone:
                     <a href="tel:<?= $site->phone() ?>"><?= $site->phone() ?></a>
                  </span>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-7">
               <div class="tp-copyright-2-social text-center">
                  <?php foreach ($site->social()->toStructure() as $social): ?>
                  <a href="<?= $social->url() ?>" target="_blank"><?= $social->platform()->html() ?></a>
                  <?php endforeach ?>
               </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-5">
               <div class="tp-copyright-2-left text-center text-md-end">
                  <p>© <?= date('Y') ?> - All Rights Reserved</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Copyright Area End -->
   </footer>

   </div>
   </div>


   <!-- JS Files -->
   <?= js([
      'assets/js/vendor/jquery.js',
      'assets/js/bootstrap-bundle.js',
      'assets/js/gsap.js',
      'assets/js/gsap-scroll-to-plugin.js',
      'assets/js/gsap-scroll-smoother.js',
      'assets/js/gsap-scroll-trigger.js',
      'assets/js/gsap-split-text.js',
      'assets/js/chroma.min.js',
      'assets/js/three.js',
      'assets/js/tween-max.js',
      'assets/js/scroll-magic.js',
      'assets/js/range-slider.js',
      'assets/js/swiper-bundle.js',
      'assets/js/slick.js',
      'assets/js/magnific-popup.js',
      'assets/js/nice-select.js',
      'assets/js/purecounter.js',
      'assets/js/beforeafter.js',
      'assets/js/isotope-pkgd.js',
      'assets/js/imagesloaded-pkgd.js',
      'assets/js/ajax-form.js',
      'assets/js/webgl.js',
      'assets/js/main.js',
      'assets/js/tp-cursor.js'
   ]) ?>

</body>
</html>
