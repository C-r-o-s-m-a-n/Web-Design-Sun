</main><!-- .content -->
</div><!-- .wrapper -->

<footer class="footer">
	<div class="container">
		<div class="footer__wrap">
			  <?php
              if (is_active_sidebar('footer-info')) {
                dynamic_sidebar('footer-info');
              };

              if (is_active_sidebar('recent-posts')) {
                dynamic_sidebar('recent-posts');
              };

			  if (is_active_sidebar('our-stores')) {
				dynamic_sidebar('our-stores');
			  };

			  if (is_active_sidebar('useful-links')) {
				dynamic_sidebar('useful-links');
			  } ?>
		</div>
	</div>
</footer><!-- .footer -->
<?php wp_footer()?>
</body>
</html>