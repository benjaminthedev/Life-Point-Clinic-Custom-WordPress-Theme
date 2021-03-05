<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>




<?php if ( !(is_home() || is_front_page()) ) : ?>
	
<div class="left-tri"></div>
<div class="right-tri"></div>
<div class="clearfix"></div>
<section class="how-we-can-help" id="jump-up">
<div class="container">

	<div class="row">
	<div class="col-sm-12 col-md-8 col-lg-8 "><?php the_field('left_box', 19); ?></div>
	<div class="col-sm-12 col-md-4 col-lg-4 "><?php the_field('right_box', 19); ?></div>
	</div>

</div>
</section>


<?php endif; ?>





<section class="before-footer">
	<div class="paralax-image">
	
<div class="container">	
	<div class="row justify-content-md-center">
	<div class="col-md-auto">	
		<h2>Ready to get started?</h2>
		<p>Call Now <strong class="white">(08) 9259 0689</strong> or request an appointment:</p>

		<a href="#app-form" class="paralax-btn with-icon ">Request an appointment <i class="fa fa-check"></i></a>
	
	</div>
	</div><!-- end row -->
</div><!-- end container -->	
	
	</div>


</section>

<div class="clearfix"></div>

<div class="paralax-left-tri"></div>
<div class="paralax-right-tri"></div>
<div class="clearfix"></div>
<footer>


<div class="container">
<div class="row">



<div class="col-sm-12 col-lg-8">

<aside id="plethora-aboutus-widget-2" class="widget aboutus-widget">

<div class="pl_about_us_widget">

		<p><img src="https://lifepointclinic.com.au/wp-content/uploads/2018/11/Logo_Large-1.png" alt="" class="footer-logo" scale="0"></p>


		<p>At LifePoint Clinic, we are committed to providing every patient with an empowering and positive experience toward mental wellness. </p>


		<p class="contact_detail"><i class="fa fa-phone"></i> <span>(08) 9259 0689</span> / <span>Fax: (08) 9259 0695</span></p>



		<p class="contact_detail"><i class="fa fa-envelope"></i><span> <a href="mailto:mailto:admin@lifepointclinic.com.au">admin@lifepointclinic.com.au </a></span></p>



	
	<p class="contact_detail">
			<i class="fa fa-location-arrow"></i>
			<span>Unit 1/ 73 Apsley Road, Willetton, Western Australia 6155 </span>
	</p>


	<!-- <p class="social">

			<a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
			<a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
			<a href="#" target="_blank" title="Google+"><i class="fab fa-google-plus"></i></a>
			<a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
			<a href="#" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
			<a href="#" target="_blank" title="Skype"><i class="fab fa-skype"></i></a>
			
	</p> -->

	
	
</div>

</aside>

</div>



<div class="col-sm-12 col-lg-4 latest-news-footer">

<h3>Quick Links</h3>
<hr/>

<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>  


</div>






</div><!-- end row -->
</div><!-- end container -->


</footer>

<div class="copyright-section">
<div class="container">
                      <div class="row">
                           <div class="col-sm-6 col-md-6"> 
								Copyright © 2020 All Rights Reserved | Life Point Mental Wellness Clinic                         
							</div>
                           <div class="col-sm-6 col-md-6 text-right">
            					<!-- a free area-->
							<a href="https://lifepointclinic.com.au/privacy-policy/" class="privacy_policy">Privacy Policy</a>	
							</div>
                      </div>
                 </div>
</div>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>