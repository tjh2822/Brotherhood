<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation" style="">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="primaryNav">
			<a class="navbar-brand" href="/"><img class="img-responsive" src="/wp-content/themes/Brotherhood/images/navbar_icon.png" style="height:40px;"alt=""></a>
			<?php
			wp_nav_menu( array(
				'menu'          	=> 'primary',
				'theme_location'	=> 'primary',
				'depth'         	=> 2,
				'container'			=> false,
				'menu_class'    	=> 'navbar-nav mr-auto',
				'fallback_cb'   	=> 'bs4navwalker::fallback',
				'walker'         	=> new bs4navwalker())
			
			);
			?>
			<?php get_search_form(); ?>
		</div>
	</nav>
</div>
