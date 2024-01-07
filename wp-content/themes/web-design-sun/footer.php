</main><!-- .content -->
</div><!-- .wrapper -->

<footer class="footer">
	<div class="container">
		<div class="footer__wrap">
			<div class="footer-info">
				<a href="" class="footer-info__logo">
					<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo-black.svg" alt="">
				</a>
				<div class="footer-info__text">
					<p>
						Condimentum adipiscing vel neque dis nam parturient orci at scelerisque neque dis nam
						parturient.
					</p>
				</div>
				<ul class="footer-info-list">
					<li>
						<a href="">
							<i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/footer-info/gps.svg"></i>
							<span>451 Wall Street, UK, London</span>
						</a>
					</li>
					<li>
						<a href="tel:(064) 332-1233">
							<i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/footer-info/phone.svg"></i>
							<span>Phone: (064) 332-1233</span>
						</a>
					</li>
					<li>
						<a href="">
							<i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/footer-info/envelop.svg"></i>
							<span>Fax: (099) 453-1357</span>
						</a>
					</li>
				</ul>
			</div>
			  <?php
/*              if (is_active_sidebar('footer-info')) {
                dynamic_sidebar('footer-info');
              };*/

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