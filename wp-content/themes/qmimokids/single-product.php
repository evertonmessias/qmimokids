<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?php the_title() ?></h2>
                <ol>
                    <li><a href="/">home</a></li>
                    <li><a href="/shop">shop</a></li>                    
                    <li><?php echo get_the_title(); ?></li>
                </ol>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    <?php
                    $wc_product = new WC_product(get_the_ID());
                    $array_images = $wc_product->get_gallery_image_ids();
                    foreach ($array_images as $image) { ?>
                        <img src="<?php echo wp_get_attachment_url($image); ?>" class="img-fluid img-produtos" title="<?php the_title() ?>"> 
                <?php } ?>
                </div>
            </div>
            <br><br>
            <div class="portfolio-description text-justify">                
                <?php echo get_the_content(); ?>
                <h1>&ensp;</h1>
                <a class='btn-pedido' href="/cart/?add-to-cart=<?php echo get_the_ID(); ?>&quantity=1">Comprar</a>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
<br>
</main><!-- End #main -->
<?php get_footer(); ?>