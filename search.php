<?php
/**
 * Search results page
 * 
 * Please see /external/bootstrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.0.0
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
	<div class="content">
		<div class="page_header">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<h1><?php echo __('Search Results for', 'wp_babobski'); ?> '<?php echo get_search_query(); ?>'</h1>	
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<ul class="list-unstyled">
				<?php while ( have_posts() ) : the_post(); ?>
				<li class="media">
					<div class="media-body">
						<h2>
						   <a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
							   <?php the_title(); ?>
						   </a>
						</h2>
						<!--<?php the_content(); ?> -->
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
<?php else: ?>
	<div class="page_header">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<h1>
		<?php echo __('No results found for', 'wp_babobski'); ?> '<?php echo get_search_query(); ?>'
	</h1>
					</div>
				</div>
			</div>
		</div>
	
<?php endif; ?>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
