<header class="banner">

	<button type="button" class="navbar-toggle" data-toggle="offcanvas">
    	<span class="sr-only">Toggle navigation</span>
	</button>

	<?php if ( has_nav_menu('nav_primary') ) : ?>
	    <nav class="navbar-main">
	    	<?php wp_nav_menu(['theme_location' => 'nav_primary', 'menu_class' => 'nav nav-main', 'container' => false] ); ?>
	    </nav>
	<?php endif; ?>
</header>