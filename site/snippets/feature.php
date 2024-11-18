<!-- blog area start -->
<div class="tp-blog-area pb-70">
   <div class="container container-1775">
      <div class="row">
         <?php
         // Fetch the latest 4 blog posts
         $posts = page('blog')->children()->listed()->sortBy('date', 'desc')->limit(4);
         
         foreach ($posts as $post): ?>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-50">
               <div class="tp-blog-item tp_fade_bottom">
                  <div class="tp-blog-thumb fix p-relative">
                     <a href="<?= $post->url() ?>"> <!-- Make the image clickable -->
                        <?php if ($image = $post->heroImage()->toFile()): ?>
                           <img src="<?= $image->crop(420, 430)->url() ?>" alt="<?= $post->title()->esc() ?>">
                        <?php else: ?>
                           <img src="assets/img/default.jpg" alt="Default Image" style="width: 420px; height: 430px;">
                        <?php endif; ?>
                     </a>
                     <div class="tp-blog-meta">
                        <span><?= $post->date()->toDate('d. M. Y') ?></span>
                     </div>
                  </div>
                  <div class="tp-blog-content">
                     <span><?= $post->category()->or('General') ?></span>
                     <h4 class="tp-blog-title-sm">
                        <a href="<?= $post->url() ?>"><?= $post->title() ?></a>
                     </h4>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>
<!-- blog area end -->
