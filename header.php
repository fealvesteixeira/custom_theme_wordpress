<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Theme
 * @since Theme  1.0
 */
?>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<nav class="navbar" role="navigation" id="slide-nav">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display-->
				<div class="row navbar-header">
					<button type="button" class="navbar-toggle collapsed" id="btn-toggle" data-toggle="collapse" data-target="#Top" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse menu">

					<?php

					wp_nav_menu( array(
						'theme_location' 	=> 'Top',
						'container' 		=> false,
						'container_class' 	=> 'collapse navbar-collapse',
						'container_id'    	=> 'bs-example-navbar-collapse-1 ',
						'menu_class'      	=> 'nav navbar-nav',
						'menu_id'         	=> '',
						'echo'            	=> true,
						'fallback_cb'     	=> 'wp_page_menu',
						'before'          	=> '',
						'after'           	=> '',
						'link_before'     	=> '',
						'link_after'      	=> '',
						'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           	=> 0,
						'walker'          	=> ''
					));
					?>
				</div>

			</div>
		</nav>
	</div>
</div>
