<?php snippet('header') ?>

<main>

 <!-- hero area start -->
            <div class="blog-details-area blog-details-without-sidebar">
               <div class="blog-details-without-sidebar p-relative d-flex align-items-end pt-170 pb-70">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12">
<div class="blog-details-content z-index-5">
   <span class="blog-details-meta text-black"><?= $page->category()->or('Uncategorized') ?></span>
   <h4 class="blog-details-title tp-text-black tp-char-animation"><?= $page->title() ?></h4>
</div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="container container-1800">
                  <div class="blog-details-thumb-wrap">
                     <div class="row">
                        <div class="col-md-4">
<div class="blog-details-top-meta text-center">
   <?php 
   // Get the author user object from the page's author field
   $author = $page->author()->toUser();
   ?>
   <span><?= $author ? $author->name() : 'Unknown Author' ?></span>
</div>
</div>
<div class="col-md-4">
   <div class="blog-details-top-meta text-center">
      <span><?= $page->date()->toDate('d F, Y') ?></span>
   </div>
</div>
<div class="col-md-4">
   <div class="blog-details-top-meta text-center">
      <?php 
      // Calculate reading time based on average reading speed (e.g., 200 words per minute)
      $wordCount = str_word_count($page->text()->value());
      $readingTime = ceil($wordCount / 200); // Adjust 200 based on the desired average reading speed
      $readingTimeLabel = $readingTime == 1 ? '1 min' : $readingTime . ' mins';
      ?>
      <span><?= $readingTimeLabel ?></span>
   </div>
</div>

                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
<div class="blog-details-thumb">
   <?php if ($heroImage = $page->heroImage()->toFile()): ?>
      <img class="w-100" data-speed=".8" src="<?= $heroImage->url() ?>" alt="<?= $page->title()->esc() ?>">
   <?php else: ?>
      <img class="w-100" data-speed=".8" src="assets/img/inner-blog/blog-details-without-sidebar/default-image.jpg" alt="Default Image">
   <?php endif; ?>
</div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- hero area end -->

            <!-- postbox area start -->
            <section class="postbox__area tp-blog-sidebar-sticky-area pt-120 pb-120">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="postbox__wrapper">
                           <div class="row justify-content-center">
                              <div class="col-xl-8">
                                 <div class="blog-details-top-text tp_fade_bottom">
                                  <div class="blog-details-top-text tp_fade_bottom">


<div class="blog-details-content">
   <?php foreach ($page->text()->toBlocks() as $block): ?>
      <?php switch ($block->type()):
         case 'quote': ?>
            <div class="blog-details-left-content tp_fade_bottom blog-details-blockquote">
               <blockquote>
                  <span class="quote-icon">
                     <svg width="90" height="66" viewBox="0 0 90 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 42.6672C0 27.2282 7.2986 14.2644 21.8957 3.77586C25.3156 1.25862 27.8597 0 29.528 0C30.6957 0 31.2796 0.755172 31.2796 2.26552C31.2796 3.69195 31.0294 4.7408 30.5289 5.41207C30.1118 5.99943 29.5697 6.54483 28.9024 7.04828C28.2351 7.55172 27.5678 8.01322 26.9005 8.43276C26.2332 8.8523 25.4408 9.48161 24.5232 10.3207C16.3488 17.369 12.2616 24.2494 12.2616 30.9621C12.2616 34.5701 13.7213 36.3741 16.6408 36.3741C28.9024 36.3741 35.0332 41.4506 35.0332 51.6034C35.0332 55.5471 33.5317 58.9034 30.5289 61.6724C27.5261 64.3575 24.2313 65.7 20.6445 65.7C14.055 65.7 8.96682 63.1408 5.3801 58.0224C1.79337 52.8201 0 47.7017 0 42.6672ZM55.0919 42.6672C55.0919 26.9764 62.182 14.1385 76.3621 4.15345C79.6986 1.38448 82.2009 0 83.8692 0C85.5374 0 86.3716 0.755172 86.3716 2.26552C86.3716 3.69195 86.1213 4.69885 85.6208 5.28621C85.2038 5.87356 84.6616 6.46092 83.9943 7.04827C83.327 7.55172 82.6597 8.01322 81.9924 8.43276C81.3251 8.8523 80.5744 9.48161 79.7403 10.3207C71.3156 17.8724 67.1033 24.7529 67.1033 30.9621C67.1033 34.5701 68.6464 36.3741 71.7327 36.3741C83.9109 36.3741 90 41.4086 90 51.4776C90 55.3374 88.4986 58.6937 85.4957 61.5465C82.5763 64.3155 79.2815 65.7 75.6114 65.7C69.1886 65.7 64.1422 63.1828 60.472 58.1483C56.8853 53.0299 55.0919 47.8695 55.0919 42.6672Z" fill="#19191A" fill-opacity="0.1"/>
                     </svg>
                  </span>
                  <p><?= $block->text() ?></p>
                  <?php if ($block->citation()->isNotEmpty()): ?>
                     <span class="blockquote-info"><?= $block->citation() ?></span>
                  <?php endif; ?>
               </blockquote>
            </div>
            <?php break; ?>
         
         <?php case 'gallery': ?>
            <div class="blog-details-left-content tp_fade_bottom blog-details-thumb-box">
               <div class="row">
                  <?php foreach ($block->images()->toFiles() as $image): ?>
                     <div class="col-md-6">
                        <div class="blog-details-thumb">
                           <img class="mb-20" src="<?= $image->crop(420, 430)->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
            </div>
            <?php break; ?>

         <?php case 'image': ?>
            <?php if ($image = $block->image()->toFile()): ?>
               <div class="blog-details-left-content tp_fade_bottom blog-details-thumb-box">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="blog-details-thumb">
                           <img class="w-100" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                     </div>
                  </div>
               </div>
            <?php endif; ?>
            <?php break; ?>

         <?php case 'text': ?>
            <div class="blog-details-left-content tp_fade_bottom">
               <p><?= $block->text() ?></p>
            </div>
            <?php break; ?>

         <?php case 'heading': ?>
            <div class="blog-details-left-content tp_fade_bottom">
               <?php if ($block->level()->value() == 'h4'): ?>
                  <h4 class="blog-details-left-title"><?= $block->text() ?></h4>
               <?php else: ?>
                  <<?= $block->level() ?>><?= $block->text() ?></<?= $block->level() ?>>
               <?php endif; ?>
            </div>
            <?php break; ?>

         <?php default: ?>
            <div class="blog-details-left-content tp_fade_bottom">
               <?= $block ?>
            </div>
      <?php endswitch; ?>
   <?php endforeach; ?>
</div>


                                 </div>
                                 <div class="blog-details-share-wrap mb-40">
                                    <div class="row">
                                       <div class="col-xl-8">
                                          <div class="blog-details-tag">
                                             <span>
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15.371 9.92961L9.7597 15.5409C9.61433 15.6865 9.44171 15.8019 9.25169 15.8807C9.06168 15.9595 8.858 16 8.6523 16C8.44661 16 8.24293 15.9595 8.05292 15.8807C7.8629 15.8019 7.69027 15.6865 7.54491 15.5409L0.822266 8.82613V1H8.64839L15.371 7.72264C15.6626 8.01591 15.8262 8.41262 15.8262 8.82613C15.8262 9.23964 15.6626 9.63634 15.371 9.92961Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M4.73633 4.91333H4.74467" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
<?php if ($tags = $page->tags()->isNotEmpty()): ?>
   <?php foreach ($page->tags()->split(',') as $tag): ?>
      <a href="<?= url('blog', ['params' => ['tag' => urlencode($tag)]]) ?>"><?= html($tag) ?></a>
   <?php endforeach; ?>
<?php endif; ?>

                                          </div>
                                       </div>
                                       <div class="col-xl-4">
                                          <div class="blog-details-share text-md-end text-start">
                                             <span>
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M11.5004 5.2C12.6602 5.2 13.6004 4.2598 13.6004 3.1C13.6004 1.9402 12.6602 1 11.5004 1C10.3406 1 9.40039 1.9402 9.40039 3.1C9.40039 4.2598 10.3406 5.2 11.5004 5.2Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M3.1 10.0999C4.2598 10.0999 5.2 9.1597 5.2 7.9999C5.2 6.8401 4.2598 5.8999 3.1 5.8999C1.9402 5.8999 1 6.8401 1 7.9999C1 9.1597 1.9402 10.0999 3.1 10.0999Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M11.5004 14.9998C12.6602 14.9998 13.6004 14.0596 13.6004 12.8998C13.6004 11.74 12.6602 10.7998 11.5004 10.7998C10.3406 10.7998 9.40039 11.74 9.40039 12.8998C9.40039 14.0596 10.3406 14.9998 11.5004 14.9998Z" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M4.91211 9.05688L9.69311 11.8429" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M9.68611 4.15674L4.91211 6.94274" stroke="#19191A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             <a href="#">Share Post</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>


                                 <div class="blog-details-author d-flex mb-60">
   <?php 
   // Get the author user object from the page's author field
   $author = $page->author()->toUser(); 

   if ($author && $authorImage = $author->profileImage()->toFile()): ?>
      <div class="blog-details-author-img">
         <img src="<?= $authorImage->url() ?>" alt="<?= $author->name() ?>">
      </div>
   <?php else: ?>
      <div class="blog-details-author-img">
         <img src="assets/img/inner-blog/blog-details/avatar/avatar-1.jpg" alt="Default Author">
      </div>
   <?php endif; ?>

   <div class="blog-details-author-content-wrap">
      <div class="blog-details-author-social text-end">
         <?php if ($author && $author->social()->isNotEmpty()): ?>
            <?php foreach ($author->social()->toStructure() as $social): ?>
               <a href="<?= $social->url() ?>" target="_blank">
                  <?php if ($social->platform() == 'facebook'): ?>
                     <i class="fab fa-facebook-f"></i>
                  <?php elseif ($social->platform() == 'twitter'): ?>
                     <i class="fab fa-twitter"></i>
                  <?php elseif ($social->platform() == 'linkedin'): ?>
                     <i class="fab fa-linkedin-in"></i>
                  <?php elseif ($social->platform() == 'instagram'): ?>
                     <i class="fab fa-instagram"></i>
                  <?php elseif ($social->platform() == 'github'): ?>
                     <i class="fab fa-github"></i>
                  <?php else: ?>
                     <i class="fas fa-link"></i> <!-- Fallback icon -->
                  <?php endif; ?>
               </a>
            <?php endforeach; ?>
         <?php endif; ?>
      </div>
      <div class="blog-details-author-content">
         <h4 class="blog-details-author-title"><?= $author ? $author->name() : 'Unknown Author' ?></h4>
         <p><?= $author ? $author->bio()->or('No bio available.') : 'No bio available.' ?></p>
      </div>
   </div>
</div>


                                 <div class="blog-details-navigation-style mb-120">
                                    <div class="project-details-1-navigation d-flex justify-content-between align-items-center">
                                       <a class="project-details-1-prev" href="blog-details-without-sidebar.html">
                                          <i class="fa-sharp fa-regular fa-arrow-left"></i>
                                          <span>Prev</span>
                                       </a>
                                       <a href="#">
                                          <span>
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="17" cy="3" r="3" fill="#19191A"/>
                                                <circle cx="3" cy="3" r="3" fill="#19191A"/>
                                                <circle cx="3" cy="17" r="3" fill="#19191A"/>
                                                <circle cx="17" cy="17" r="3" fill="#19191A"/>
                                             </svg>
                                          </span>
                                       </a>
                                       <a class="project-details-1-next" href="blog-details-without-sidebar.html">
                                          <span>Next</span>
                                          <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                       </a>
                                    </div>
                                 </div>



                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- postbox area end -->

<?php
// Fetch related posts by matching tags or category
$relatedPosts = $page->siblings()->listed()
    ->filter(function ($post) use ($page) {
        return $post->id() !== $page->id() && (
            count(array_intersect($post->tags()->split(), $page->tags()->split())) > 0 ||
            $post->category() === $page->category()
        );
    })
    ->limit(3);

// If there are not enough related posts, fill with the most recent posts by date
if ($relatedPosts->count() < 3) {
    $remainingCount = 3 - $relatedPosts->count();
    $additionalPosts = $page->siblings()->listed()
        ->not($page)
        ->not($relatedPosts)
        ->sortBy('date', 'desc')
        ->limit($remainingCount);

    $relatedPosts = $relatedPosts->merge($additionalPosts);
}
?>

<div class="blog-details-realated-area grey-bg-2 pt-90 pb-40">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-8">
            <div class="blog-details-realated-title-box text-center mb-50">
               <h3 class="blog-details-realated-title">Related posts</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <?php foreach ($relatedPosts as $related): ?>
            <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
               <div class="tp-blog-item">
                  <div class="tp-blog-thumb fix p-relative">
                     <?php if ($relatedImage = $related->heroImage()->toFile()): ?>
                        <img src="<?= $relatedImage->crop(420, 430)->url() ?>" alt="<?= $related->title()->esc() ?>">
                     <?php endif; ?>
                     <div class="tp-blog-meta">
                        <span><?= $related->date()->toDate('d. M. Y') ?></span>
                     </div>
                  </div>
                  <div class="tp-blog-content">
                     <span><?= $related->category()->or('General') ?></span>
                     <h4 class="tp-blog-title-sm"><a href="<?= $related->url() ?>"><?= $related->title() ?></a></h4>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</div>

</main>

<?php snippet('footer') ?>
