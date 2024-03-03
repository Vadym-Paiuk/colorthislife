<?php

use Theme\Inc\Classes\Menu\Footer_Menu_Walker;

?>

</main>

<footer class="footer">
	<div class="container footer-container">
		<div class="footer-row">
			<?php the_custom_logo(); ?>
		</div>
		<div class="footer-row footer-middle">
			<div class="footer-top-menu">
				<?php
				if ( has_nav_menu( 'footer-menu-1' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-menu-1',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				if ( has_nav_menu( 'footer-menu-2' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-menu-2',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				if ( has_nav_menu( 'footer-menu-3' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-menu-3',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-menu">
				<?php
				if ( has_nav_menu( 'footer-menu-4' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-menu-4',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-top-form">
				<h4 class="footer-top-form-title">Stay up to date with our news</h4>
				<form action="">
					<input type="email"
					       class="input"
					       placeholder="E-mail">
					<button type="submit"
					        class="btn">Save
					</button>
				</form>
			</div>
		</div>
		<div class="footer-row footer-bottom">
			<div class="footer-bottom-start">
				<p class="copyright">
					Copyright © 2024 colorthislife. All rights reserved.
				</p>
				<?php
				if ( has_nav_menu( 'footer-privacy-menu' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-privacy-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
			<div class="footer-bottom-end">
				<?php
				if ( has_nav_menu( 'footer-develop-menu' ) ) {
					wp_nav_menu( [
						'theme_location'  => 'footer-develop-menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				}
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>