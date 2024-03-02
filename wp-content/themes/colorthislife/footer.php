</main>

<footer class="footer">
	<div class="container footer-top">
		<div class="footer-top-info">
			<div class="footer-top-logo">
				<?php the_custom_logo(); ?>
				<p class="footer-top-logo-description">
					<?php _e( 'מכון דוידסון לחינוך מדעי ליד מכון ויצמן למדע (ע"ר)', THEME_TEXT_DOMAIN ); ?>
				</p>
			</div>
			<div class="footer-top-subscribe">
				<h4 class="footer-top-subscribe-title">
					<?php _e( 'הצטרפו לניוזלטר', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<form action=""
				      class="footer-top-subscribe-form">
				
				</form>
			</div>
			<div class="footer-top-socials">
				<h4 class="footer-top-socials-title">
					<?php _e( 'עקבו אחרינו', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<div class="footer-top-socials-list">
					<a href="">
						<img src=""
						     alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="footer-top-menu-list">
			<div class="footer-top-menu">
				<h4 class="footer-top-menu-title">
					<?php _e( 'לבקר', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<?php
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
				?>
			</div>
			<div class="footer-top-menu">
				<h4 class="footer-top-menu-title">
					<?php _e( 'ללמוד', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<?php
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
				?>
			</div>
			<div class="footer-top-menu">
				<h4 class="footer-top-menu-title">
					<?php _e( 'לקרוא ולחוות', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<?php
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
				?>
			</div>
			<div class="footer-top-menu">
				<h4 class="footer-top-menu-title">
					<?php _e( 'המכון / מנהלה', THEME_TEXT_DOMAIN ); ?>
				</h4>
				<?php
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
				?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-start">
				<?php
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
				?>
			</div>
			<div class="footer-bottom-end">
				<?php
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
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>