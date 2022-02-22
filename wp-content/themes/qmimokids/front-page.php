<?php get_header(); ?>

<?php $categories = get_terms('category', array('order' => 'DESC')); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo get_option('home_input_31'); ?>')top right;" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1><span class="rosa">Q</span>mimo <span class="marrom">Kids</span></h1>
    <h2>&ensp;</h2>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Sobre Nós</a>
      <a href="<?php echo get_option('home_input_33'); ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Assista ao Vídeo <i class="icofont-play-alt-2"></i></a>
    </div>
  </div>
</section><!-- End Hero -->


<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <?php
        $bloco_link1 = explode(',', get_option('home_input_8'));
        $bloco_link2 = explode(',', get_option('home_input_9'));
        $bloco_link3 = explode(',', get_option('home_input_10'));
        $bloco_link4 = explode(',', get_option('home_input_11'));
        $bloco_link5 = explode(',', get_option('home_input_12'));
        $bloco_link6 = explode(',', get_option('home_input_13'));
        $bloco_links = array($bloco_link1, $bloco_link2, $bloco_link3, $bloco_link4, $bloco_link5, $bloco_link6);
        foreach ($bloco_links as $bloco) {
          if ($bloco[0] != "" && $bloco[1] != "" && $bloco[2] != "") {
        ?>
            <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx <?php echo $bloco[0]; ?>"></i></div>
                <h4 class="title"><a href="<?php echo $bloco[2]; ?>"><?php echo $bloco[1]; ?></a></h4>
              </div>
            </div>
        <?php
          }
        } ?>
      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="portfolio" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Produtos</h2>
      </div>

      <?php
      $categories = get_terms('produtos_categories', array('order' => 'DESC'));
      ?>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

          <?php foreach ($categories as $category) {
            $args = array(
              'post_type' => 'produtos',
              'produtos_categories' => $category->slug,
              'posts_per_page' => 100
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
              $loop->the_post();
          ?>

              <div class="swiper-slide">
                <a class="gallery-lightbox" href="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>">
                  <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" class="img-fluid" alt="">
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

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sobre</h2>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
          <img src="<?php echo get_option('home_input_6'); ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <?php echo get_option('home_input_7'); ?>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
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
            <p><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=qmimokids"><?php echo get_option('home_input_14'); ?></a></p>
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