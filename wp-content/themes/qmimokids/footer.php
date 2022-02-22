 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-4 col-md-6 footer-contact">
		<h3><?php echo get_option('home_input_1'); ?><span>.</span></h3>
		<p>
		<p><?php echo get_option('home_input_16'); ?></p>
		  <strong>Fone:</strong> <?php echo get_option('home_input_14'); ?><br>
		  <strong>E-Mail:</strong> <?php echo get_option('home_input_15'); ?><br>
		</p>
	  </div>

	  <div class="col-lg-4 col-md-6 footer-links">
		<h4>Links</h4>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Produtos</a></li>
		</ul>
	  </div>

	  <div class="col-lg-4 col-md-6 footer-links">
		<h4>Social</h4>		
		<div class="social-links mt-3">		 
		  <a target="_blank" href="<?php echo get_option('home_input_18'); ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
		  <a target="_blank" href="<?php echo get_option('home_input_19'); ?>" class="instagram"><i class="bx bxl-instagram"></i></a>		  
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
	<strong><span><a href="/wp-admin"><?php echo get_option('home_input_1'); ?></a></span></strong>. Todos os direitos reservados.
  </div>
  <div class="credits">
	<!-- All the links in the footer should remain intact. -->
	<!-- You can delete the links only if you purchased the pro version. -->
	<!-- Licensing information: https://bootstrapmade.com/license/ -->
	<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
	Designed by <a target="_blank" href="https://portfolio.evertonm.com/">EvM</a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo SITEPATH; ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/counterup/counterup.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/aos/aos.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo SITEPATH; ?>assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>