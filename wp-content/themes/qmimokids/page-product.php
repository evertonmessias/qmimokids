<?php get_header(); ?>
<main id="main" class="ppage" data-aos="fade-up">
   <!-- ======= Breadcrumbs ======= -->
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2 class="page-title"><?php the_title() ?></h2>
            <ol>
               <li><a href="/">home</a></li>
               <li>
                  <?php
                  if (url_active()[2] == "") echo url_active()[1];
                  else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
                  ?>
               </li>
               <li>
                  <?php
                  if (url_active()[2] != "") echo url_active()[2];
                  ?>
               </li>
            </ol>
         </div>
      </div>
   </section><!-- End Breadcrumbs -->
     <!-- ======= Product Section 1 ======= -->
  <section id="product" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
      <?php
      $categories = get_terms('product_cat', array('order' => 'DESC'));
      foreach ($categories as $category) {
        $cat_portfolio[] = $category->slug;
      }
      ?>
      
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">

          <ul id="portfolio-flters">
            <?php
            foreach ($categories as $category) { ?>
              <li data-filter=".filter-<?php echo $category->slug; ?>" <?php if ($cat_portfolio[0] == $category->slug) echo "class='filter-active'"; ?>><?php echo $category->name; ?></li>
            <?php
            } ?>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($categories as $category) {
          $args = array(
            'post_type' => 'product',
            'product_cat' => $category->slug,
            'posts_per_page' => 100
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()) {
            $loop->the_post();
            $wc_product = new WC_product(get_the_ID());
            $array_images = $wc_product->get_gallery_image_ids();
        ?>
            <div class="col-lg-4 portfolio-item filter-<?php echo $category->slug; ?>">
              <img src="<?php echo wp_get_attachment_url($array_images[0]); ?>" class="img-fluid" title="<?php echo get_the_title() ?>">
              <div class="portfolio-info">
                <a href="<?php the_permalink() ?>"><h4><?php the_title() ?></h4></a>
                <a href="<?php echo wp_get_attachment_url($array_images[0]); ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo get_the_title() ?>"><i class="bx bx-search"></i></a>
                <a href="<?php the_permalink() ?>" class="details-link" title="Link"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
        <?php }
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section><!-- End Portfolio Section -->
</main><!-- End #main -->
<?php get_footer(); ?>