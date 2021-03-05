<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>





<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

<div class="wrapper" id="full-width-page-wrapper">

<div class="<?php echo esc_attr( $container ); ?>" id="content">    

	<div class="row">

		<div class="col-md-12 content-area" id="primary">

	
	
	
	<div class="four-boxes">
		<?php if( have_rows('four_boxes') ): ?>
		
				<?php while( have_rows('four_boxes') ): the_row(); 

	// vars
	$image = get_sub_field('icon');
	$content = get_sub_field('icon_header');
	$link = get_sub_field('link');

	?>

	<li class="boxes <?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>" >

		<?php if( $link ): ?>
			<a href="<?php echo $link; ?>">
		<?php endif; ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

		<?php if( $link ): ?>
			</a>
		<?php endif; ?>

		<h5><?php echo $content; ?></h5>

		<?php if( $link ): ?>
		
			<a href="<?php echo $link; ?>" class="btn" data-wipe="Read More">
		<?php endif; ?>

			Read More

		<?php if( $link ): ?>
			</a>
			
		<?php endif; ?>
	</li>

<?php endwhile; ?>
</div><!-- end four-boxes -->
<?php endif; ?>



<div class="clearfix"></div>

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">							

							<div class="entry-content">

								<?php the_content(); ?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								) );
								?>

							</div><!-- .entry-content -->


							</article><!-- #post-## -->

						

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->




<div class="left-tri"></div>
<div class="right-tri"></div>

<div class="clearfix"></div>
<section class="how-we-can-help">
<div class="container">

	<div class="row">
	<div class="col-sm-12 col-md-8 col-lg-8 "><?php the_field('left_box'); ?></div>
	<div class="col-sm-12 col-md-4 col-lg-4 "><?php the_field('right_box'); ?></div>
	</div>

</div>
</section>







<?php get_footer(); ?>
