<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galaxyr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header">
		<div class="header__content">

			<?php the_custom_logo(); ?>

			<div class="menu__toggle"></div>
			<nav class="nav">
				<?php
				wp_nav_menu( [
					'menu'            => 'menu-1',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					] );
				?>
			</nav>
			<div class="header__action">
				<a href="#" class="fl-button">Free Estimate</a>
				<a class="tel" href="tel: 8 800 125 215 145"><span>8 800</span> 125 215 145</a>
			</div>

		</div>
	</header>
