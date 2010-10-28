		</div> <!-- content -->
		<div id="footer">
			<div id="footer-nav">
				<?php wp_nav_menu(array(
					'container' => '',
					'menu' => 'FooterNav1',
					'menu_class' => 'footer-nav-list',
					'depth' => 1
				)); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div> <!-- container -->
	<div class="hide">
	<?php wp_footer(); ?>
	</div>
</body>
</html>
