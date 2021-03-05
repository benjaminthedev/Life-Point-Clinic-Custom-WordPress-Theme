<?php
/**
 * Template Name: Our Practitioners
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			

			<div
				class="col-md-12 content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
               
               
                   <h1 class="entry-title">
                    <?php the_title(); ?>
                   </h1>


                <!--  -->


                <?php if( have_rows('practitioners') ): ?>

	            <ul class="doctors">

	<?php while( have_rows('practitioners') ): the_row(); 

		// vars
		$image = get_sub_field('doctor_headshot');
		$name = get_sub_field('name');
		$title = get_sub_field('title');
		$addtional_text = get_sub_field('addtional_text');	
		$text_excerpt = get_sub_field('text_excerpt');	

		?>

		<li class="doctor">
            
            <img src="<?php echo $image; ?>" alt="LifePoint Mental Wellness Clinic Doctors" />
			
            <h3 class="doctor_title">
				<?php echo $name; ?>
			</h3
			
			>
			<p class="doctor_title">
            	<?php echo $title; ?>
			</p>

			<hr />
			
			<div class="additional_text_preview">
				<?php echo $text_excerpt; ?>
			</div>	

			<div class="hideme">
				<?php echo $addtional_text; ?>
			</div>	    


			<!-- <?php if( $addtional_text ): ?>
				<button class="read-more-btn-doc">Read More</button>		
				<a class="showBtn">BUTTON</a>
			<?php endif; ?>	 -->












		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>










                <!--  -->














						<?php //get_template_part( 'loop-templates/content', 'page' ); ?>

						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>




<style>

.showBtn {
  display: block;
  border: 1px solid red;
  width: 300px;
  margin-bottom: 30px;
}
/* .hideme {
  display: none;  
} */



ul.doctors {
    display: flex;
}

li.doctor {
    list-style: none;
	margin: 10px;
	min-width: 320px;
    max-width: 340px;
}

li.doctor img {
   height: 150px;
    width: 170px;
	clear: both;
	border: 3px solid #8daa2e;
	border-radius: 150px;
    margin: 0 auto;
	margin-bottom: 20px;
    display: block;

}

h3.doctor_title {
	text-align: center;
	color: #8daa2e;
}

p.doctor_title {
    text-align: center;
}

.additional_text {
    text-align: center;
}

.additional_text ul li {
    text-align: start;
}

.additional_text{
	display: none;
}

a.slider-btn.read-more-btn-doc.GoNow {
    display: none;
}


.additional_text.ShowNow {
    display: block;
    margin-top: 20px;
}

@media only screen and (max-width: 768px) {
  ul.doctors {
    display: flex;
    margin-left: -20px;
    flex-direction: column;
}
}


</style>




 <script>
      jQuery(document).ready(function(){

		console.log('are we ready?');




        // jQuery('.read-more-btn-doc').click(function() {
		
		// if (jQuery(this).hasClass('active')) {    
		// 	jQuery(this).removeClass('active');
		// 	jQuery('.additional_text').slideUp();
		// } else {
		// 	jQuery('.additional_text').slideUp();
		// 	jQuery('.read-more-btn-doc').removeClass('active');
		// 	jQuery(this).addClass('active');
		// 	jQuery(this).next().filter('.additional_text').slideDown();
		// }
		// });
		

		jQuery('.showBtn').click(function() {
  //jQuery('.hideme').show();  
  if (jQuery(this).hasClass('active')) {    
    jQuery(this).removeClass('active');
	jQuery('.hideme').addClass('showMe');
	jQuery('.hideme').removeClass('hideMe');
  } else {
    jQuery('.hideme').slideUp();
    jQuery('.showBtn').removeClass('active');
	jQuery(this).addClass('active');
	jQuery('.hideme').removeClass('showMe');
    jQuery(this).next().filter('.hideme').show();
  }
});
	
        
		
		
		
		
      });
   </script>