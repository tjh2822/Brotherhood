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

<!-- the header -->
<?php BsWp::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<!-- title, content + more-->
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
					<!-- Page Content-->
					<?php the_content(); ?>
					<?php comments_template( '', true ); ?>
				</div>
				<div class="col-sm-3">
					<!-- Widget Area-->
					<?php
					/**
					 * Register our sidebars and widgetized areas.
					 *
					 */
					function arphabet_widgets_init() {

						register_sidebar( array(
							'name'          => 'Home right sidebar',
							'id'            => 'home_right_1',
							'before_widget' => '<div>',
							'after_widget'  => '</div>',
							'before_title'  => '<h2 class="rounded">',
							'after_title'   => '</h2>',
						) );

					}
					add_action( 'widgets_init', 'arphabet_widgets_init' );
					?>
				</div>
			</div>		
		</div>
		
	
	<?php endwhile; ?>
</div>

<!-- the footer -->

<?php BsWp::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
