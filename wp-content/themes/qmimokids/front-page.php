<?php get_header(); ?>

<?php $categories = get_terms('category', array('order' => 'DESC')); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo get_option('home_input_31'); ?>');" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1><span><?php echo get_option('home_input_1'); ?></span>&emsp;<?php echo get_option('home_input_32'); ?></h1>
  </div>
</section><!-- End Hero -->


<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_81'); ?>" title="<?php echo get_option('home_input_82'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_83'); ?>"><?php echo get_option('home_input_82'); ?></a></h4>
          </div>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_91'); ?>" title="<?php echo get_option('home_input_92'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_93'); ?>"><?php echo get_option('home_input_92'); ?></a></h4>
          </div>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_101'); ?>" title="<?php echo get_option('home_input_102'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_103'); ?>"><?php echo get_option('home_input_102'); ?></a></h4>
          </div>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_111'); ?>" title="<?php echo get_option('home_input_112'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_113'); ?>"><?php echo get_option('home_input_112'); ?></a></h4>
          </div>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_121'); ?>" title="<?php echo get_option('home_input_122'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_123'); ?>"><?php echo get_option('home_input_122'); ?></a></h4>
          </div>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_131'); ?>" title="<?php echo get_option('home_input_132'); ?>"></div>
            <h4 class="title"><a href="<?php echo get_option('home_input_133'); ?>"><?php echo get_option('home_input_132'); ?></a></h4>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Product Section 1 ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
      <?php
      $categories = get_terms('product_cat', array('order' => 'DESC'));
      foreach ($categories as $category) {
        $cat_portfolio[] = $category->slug;
      }
      ?>

      <div class="section-title">
        <h2>Produtos</h2>
      </div>

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
              <img src="<?php echo wp_get_attachment_url( $array_images[0] ); ?>" class="img-fluid" title="<?php echo get_the_title() ?>">
              <div class="portfolio-info">
                <h4><?php the_title() ?></h4>
                <a href="<?php echo wp_get_attachment_url( $array_images[0] ); ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo get_the_title() ?>"><i class="bx bx-search"></i></a>
                <a href="<?php the_permalink() ?>" class="details-link" title="Link"><i class="bx bx-shopping-bag"></i></a>
              </div>
            </div>
        <?php }wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sobre</h2>
      </div>

      <div class="row">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_name' => 'sobre'
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()) {
          $loop->the_post();
        ?>
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" title="<?php echo get_the_title(); ?>">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-justify" data-aos="fade-up" data-aos-delay="100">
            <br>
            <?php the_content(); ?>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Product Section 2 ======= -->
  <section class="gallery section-bg">
    <div class="container" data-aos="fade-up">

      <?php
      $categories = get_terms('product_cat', array('order' => 'DESC'));
      ?>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

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

              <div class="swiper-slide">
                <a class="gallery-lightbox" href="<?php echo wp_get_attachment_url( $array_images[0] ); ?>">
                  <img src="<?php echo wp_get_attachment_url( $array_images[0] ); ?>" class="img-fluid" alt="">
                </a>
                <p><?php echo get_the_title() ?></p>
                <a href="<?php the_permalink() ?>" class="btn-link" title="Link">Leia mais</a>
              </div>
          <?php }
          } ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contato</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Endereço</h3>
            <p><?php echo get_option('home_input_16'); ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>E-mail</h3>
            <p><a target="_blank" href="mailto:<?php echo get_option('home_input_15'); ?>"><?php echo get_option('home_input_15'); ?></a></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>WhatsApp</h3>
            <p><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=DomVille"><?php echo get_option('home_input_14'); ?></a></p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="<?php echo get_option('home_input_17'); ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <?php echo do_shortcode('[wpforms id="5"]'); ?>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php get_footer(); ?>