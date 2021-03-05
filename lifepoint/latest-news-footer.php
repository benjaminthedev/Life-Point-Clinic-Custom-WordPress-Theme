
<!-- I've removed the latest news section so can be developed later in life when they have blog posts - now they have just the quick links --?



<div class="col-sm-12 col-lg-6 latest-news-footer">

<h3>Latest News</h3>

<?php
// WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'posts_per_page'         => '3',
	'cat' => '1'
);

// The Query
$query = new WP_Query( $args ); ?>

<?php // The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
		
			<h5><?php the_title(); ?></h5>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail-size-small">	
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>	
			<?php endif; ?>


	<?php } 
} else { ?>
	// no posts found
<?php } ?>

<?php

// Restore original Post Data
wp_reset_postdata();
?>
