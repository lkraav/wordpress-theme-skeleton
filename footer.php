		</div> <!-- content -->
		<div id="footer">
			<div id="footer-nav-list">
				<?php wp_nav_menu(array(
					'container' => '',
					'menu' => 'FooterNav1',
					'menu_class' => 'footer-nav',
					'depth' => 1
				)); ?>
				<?php wp_nav_menu(array(
					'container' => '',
					'menu' => 'FooterNav2',
					'menu_class' => 'footer-nav',
					'depth' => 1
				)); ?>
				<?php wp_nav_menu(array(
					'container' => '',
					'menu' => 'FooterNav3',
					'menu_class' => 'footer-nav',
					'depth' => 1
				)); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<p class="copyright">(c) MTÜ Stereo-tunnel 2010</p>
	</div> <!-- container -->
	<div class="hide">
	<?php wp_footer(); ?>
	</div>
</body>
</html>
