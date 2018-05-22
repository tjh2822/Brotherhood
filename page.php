<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/bootsrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 4.0.0
 * @autor 		Babobski
 */
?>
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<div class="page_header">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<h1>
							<?php the_title(); ?>
						</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="col-sm-9">
					<?php the_content(); ?>
					<?php comments_template( '', true ); ?>
				</div>
				<div class="col-sm-3">
					<p> TODO -> Put content here </p>
				</div>
			</div>		
		</div>
		
	
	<?php endwhile; ?>
</div>

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
