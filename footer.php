	<footer class="footer">
		<div class="footer__top">
			<div class="footer__content">
				<a class="logo" href="/">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo-w.png" alt="">
				</a>
				<nav class="footer__nav">
					<?php
					wp_nav_menu( [
						'menu'            => 'menu-1',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu menu_footer',
						'menu_id'         => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						] );
					 ?>
				</nav>
				<div class="footer__soc">
					<?php
					wp_nav_menu( [
						'menu'            => 'Socials',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'soc',
						'menu_id'         => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						] );
					 ?>
				</div>

				<div class="footer__action">
					<a href="#" class="fl-button">Free Estimate</a>
					<a class="tel" href="tel: 8 800 125 215 145"><span>8 800</span> 125 215 145</a>
				</div>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__content">
				<a href="/privacy-policy">Privacy policy</a>
				<a href="#">All right reserved</a>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

	</body>
</html>
