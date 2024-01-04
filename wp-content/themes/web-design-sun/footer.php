</main><!-- .content -->
</div><!-- .wrapper -->

<footer class="footer">
	<div class="container">
		<div class="footer__wrap">
			<div class="footer-info">
				<a href="" class="footer-info__logo">
					<img src="images/logo-black.svg" alt="">
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
							<i data-svg="images/icons/search.svg"></i>
							<span>451 Wall Street, UK, London</span>
						</a>
					</li>
					<li>
						<a href="">
							<i data-svg="images/icons/search.svg"></i>
							<span>451 Wall Street, UK, London</span>
						</a>
					</li>
					<li>
						<a href="">
							<i data-svg="images/icons/search.svg"></i>
							<span>451 Wall Street, UK, London</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-recent-post">
				<h3 class="footer-recent-post__title footer__title-block">
					RECENT POSTS
				</h3>
				<div class="footer-recent-post-item">
					<div class="footer-recent-post-item__img">
						<img src="images/blog-img-1.jpg" alt="">
					</div>
					<div class="footer-recent-post-item-content">
						<p class="footer-recent-post-item-content__title">
							A companion for extra sleeping
						</p>
						<div class="footer-recent-post-item-content__date">
							July 23, 2016
						</div>
					</div>
				</div>
				<div class="footer-recent-post-item">
					<div class="footer-recent-post-item__img">
						<img src="images/blog-img-1.jpg" alt="">
					</div>
					<div class="footer-recent-post-item-content">
						<p class="footer-recent-post-item-content__title">
							A companion for extra sleeping
						</p>
						<div class="footer-recent-post-item-content__date">
							July 23, 2016
						</div>
					</div>
				</div>
			</div>
			<?php if(is_active_sidebar('footer-our-stores')){
				dynamic_sidebar('footer-our-stores');
			}?>
			<!--<div class="footer-nav">
				<p class="footer-nav__title footer__title-block">OUR STORES</p>
				<ul class="footer-nav-list">
					<li>New York</li>
					<li>New York</li>
					<li>New York</li>
					<li>New York</li>
				</ul>
			</div>-->
			<div class="footer-nav">
				<p class="footer-nav__title footer__title-block">OUR STORES</p>
				<ul class="footer-nav-list">
					<li>New York</li>
					<li>New York</li>
					<li>New York</li>
					<li>New York</li>
				</ul>
			</div>
		</div>
	</div>
</footer><!-- .footer -->
<?php wp_footer()?>
</body>
</html>