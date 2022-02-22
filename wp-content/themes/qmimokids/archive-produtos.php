<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>produtos</h2>
                <ol>
                    <li><a href="/">home</a></li>
                    <li>
                        <?php
                        if (url_active()[2] == "") echo url_active()[1];
                        else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
                        ?>
                    </li>
                    <!--<li>
            <?php //if (url_active()[2] != "") echo url_active()[2]; 
            ?>
          </li>-->
                </ol>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="produtos" class="portfolio">
        <div id="grid-produtos" class="container" data-aos="fade-up">
            <?php
            $categories = get_terms('produtos_categories', array('order' => 'DESC'));
            ?>
            <div class="row" data-aos="fade-up" data-aos-delay="100">             
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters" class="portfolio-ul">
                        <a href="/produtos">
                            <li class="filter-active">Todos</li>
                        </a>
                        <?php
                        foreach ($categories as $category) {
                            if ($category->slug != "sem-categoria") { ?>
                                <li data-filter=".filter-<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row grid-produtos portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php foreach ($categories as $category) {
                    if ($category->slug != "sem-categoria") {
                        $args = array(
                            'post_type' => 'produtos',
                            'produtos_categories' => $category->slug,
                            'posts_per_page' => 100
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) {
                            $loop->the_post();
                ?>
                            <div class="produtos-item col-lg-12 portfolio-item filter-<?php echo $category->slug; ?>">
                                <div class="col-lg-4 col-produtos col-produtos1">
                                    <?php if (get_post_meta($post->ID, 'produtos_imagem_1', true) != "") { ?>
                                        <a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" target="_blank">
                                            <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" class="img-fluid img-produtos" title="<?php echo get_the_title() ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-8 col-produtos col-produtos2">
                                    <a href="<?php the_permalink() ?>" class="details-link" title="Link">
                                        <h4><?php echo get_the_title() ?></h4>
                                    </a>
                                </div>
                            </div>
                <?php }
                    }
                } ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->
    <br>
<hr>
</main><!-- End #main -->
<?php get_footer(); ?>