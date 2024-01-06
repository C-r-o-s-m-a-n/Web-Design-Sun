<?php get_header();
$acf_fields = get_fields();
?>
	<section class="section section-front-page-welcome" style="background-image: url('<?php echo $acf_fields['front-page-welcome_background']?>')">
		<div class="container">
			<div class="front-page-welcome-content">
              <?php $inscription = $acf_fields['front-page-welcome'];
              if ($inscription):?>
				  <div class="front-page-welcome-content__inscription">
                    <?php echo $acf_fields['front-page-welcome'] ?>
				  </div>
              <?php endif ?>

              <?php $title = $acf_fields['front-page-welcome_title'];
              if ($title):?>
				  <h2 class="front-page-welcome-content__title">
                    <?php echo $title?>
				  </h2>
              <?php endif ?>

              <?php $description = $acf_fields['front-page-welcome_descriotion'];
              if ($description):?>
				  <div class="front-page-welcome-content__description">
                    <?php echo $description?>
				  </div>
              <?php endif ?>

				<div class="front-page-welcome-content__btns global-double-buttons">
                  <?php $first_btn = $acf_fields['front-page-welcome-first-btn'];
                  if ($first_btn['front-page-welcome-btn_link']):?>
					  <div class="global-btn global-btn--white">
						  <a href="<?php echo $first_btn['front-page-welcome-btn_link']?>">
							<?php echo $first_btn['front-page-welcome-btn_label']?>
						  </a>
					  </div>
                  <?php endif ?>

                  <?php $second_btn = $acf_fields['front-page-welcome-second-btn'];
                  if ($second_btn['front-page-welcome-btn_link']):?>
					  <div class="global-btn global-btn--outline">
						  <a href="<?php echo $second_btn['front-page-welcome-btn_link']?>">
                            <?php echo $second_btn['front-page-welcome-btn_label']?>
						  </a>
					  </div>
                  <?php endif ?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-front-page-about-store">
		<div class="container">
			<div class="front-page-about-store__wrap">
				<?php $img = $acf_fields['front-page-about-store_img'];
					if ($img):?>
					<div class="front-page-about-store__img">
						<img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" width="<?php echo $img['width']?>" height="<?php echo $img['height']?>">
					</div>
				<?php endif?>
				<div class="front-page-about-store-content">
                  <?php $inscription = $acf_fields['front-page-about-store_inscription'];
                  if ($inscription):?>
					  <div class="front-page-about-store-content__inscription global-inscription-title">
                        <?php echo $inscription ?>
					  </div>
                  <?php endif ?>

                  <?php $title = $acf_fields['front-page-about-store-title'];
                  if ($title && array_filter($title)):?>
					  <h3 class="front-page-about-store-content__title global-title">
                        <?php echo $title['big'] ?>
						  <span><?php echo $title['smaller-text'] ?></span>
					  </h3>
                  <?php endif ?>

                  <?php $description = $acf_fields['front-page-about-store_description'];
                  if ($description):?>
					  <div class="front-page-about-store-content__text">
                        <?php echo $description ?>
					  </div>
                  <?php endif ?>

                  <?php $first_btn = $acf_fields['front-page-about-store-first-btn'];
                  if ($first_btn['front-page-about-store-btn_link']):?>
					  <div class="global-btn global-btn--white">
						  <a href="<?php echo $first_btn['front-page-about-store-btn_link'] ?>">
                            <?php echo $first_btn['front-page-about-store-btn_label'] ?>
						  </a>
					  </div>
                  <?php endif ?>

					<div class="front-page-about-store-content__btns global-double-buttons">
                      <?php $first_btn = $acf_fields['front-page-about-store-first-btn'];
                      if ($first_btn['front-page-about-store-btn_link']):?>
						  <div class="global-btn global-btn--gray">
							  <a href="<?php echo $first_btn['front-page-about-store-btn_link'] ?>">
                                <?php echo $first_btn['front-page-about-store-btn_label'] ?>
							  </a>
						  </div>
                      <?php endif ?>

                      <?php $second_btn = $acf_fields['front-page-about-store-second-btn'];
                      if ($second_btn['front-page-about-store-btn_link']):?>
						  <div class="global-btn global-btn--outline global-btn--outline-black">
							  <a href="<?php echo $second_btn['front-page-about-store-btn_link'] ?>">
                                <?php echo $second_btn['front-page-about-store-btn_label'] ?>
							  </a>
						  </div>
                      <?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-featured-product">
		<div class="container">
			<div class="featured-product-title">
			  <?php $inscription = $acf_fields['front-page-featured-product_inscription'];
			  if ($inscription):?>
				  <p class="featured-product-title__inscription global-inscription-title">
					<?php echo $inscription ?>
				  </p>
			  <?php endif ?>

              <?php $title = $acf_fields['front-page-featured-product_title'];
              if ($title):?>
				  <h3 class="featured-product-title__title">
                    <?php echo $title?>
				  </h3>
              <?php endif ?>

              <?php $under_title = $acf_fields['front-page-featured-product_under-title'];
              if ($under_title):?>
				  <p class="featured-product-title__bottom-inscription">
                    <?php echo $under_title?>
				  </p>
              <?php endif ?>
			</div>

			<?php $featured_products = $acf_fields['front-page-featured-product'];
			if(array_filter($featured_products)){
				get_template_part('modules/featured-product', null, $featured_products);
			}?>
		</div>
	</section>

	<section class="section-front-page-special-offer">
		<div class="container">
			<div class="front-page-special-offer__wrap">
				<?php $img = $acf_fields['front-page-special-offer_image'];
				if ($img):?>
					<div class="front-page-special-offer__img">
						<img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" width="<?php echo $img['width']?>" height="<?php echo $img['height']?>">
					</div>
				<?php endif?>

				<div class="front-page-special-offer-content">
				  <?php $inscription = $acf_fields['front-page-special-offer_inscription'];
				  if ($inscription):?>
					  <p class="front-page-special-offer-content__inscription global-inscription-title">
                        <?php echo $inscription?>
					  </p>
				  <?php endif ?>

                  <?php $title = $acf_fields['front-page-special-offer-title'];
                  if ($title && array_filter($title)):?>
					  <h3 class="front-page-special-offer-content__title global-title">
                        <?php echo $title['big'] ?>
						  <span><?php echo $title['smaller-text'] ?></span>
					  </h3>
                  <?php endif ?>

                  <?php $btn = $acf_fields['front-page-special-offer-btn'];
                  if ($btn['front-page-special-offer-btn_link']):?>
					  <div class="front-page-special-offer-content__btn global-btn global-btn--gray">
						  <a href="<?php echo $btn['front-page-special-offer-btn_link'] ?>">
                            <?php echo $btn['front-page-special-offer-btn_label']?>
						  </a>
					  </div>
                  <?php endif?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-front-page-discount">
		<div class="container">
			<div class="front-page-discount__wrap">
				<div class="front-page-discount-content">
				  <?php $title = $acf_fields['front-page-discount-title'];
				  if ($title && array_filter($title)):?>
					  <h3 class="front-page-discount-content__title global-title">
                        <?php echo $title['big'] ?>
						  <span><?php echo $title['smaller-text'] ?></span>
					  </h3>
				  <?php endif ?>

                  <?php $description = $acf_fields['front-page-discount_description'];
                  if ($description):?>
					  <div class="front-page-discount-content__description">
                        <?php echo $description?>
					  </div>
                  <?php endif ?>

                  <?php
				  $list_group = $acf_fields['front-page-discount-list'];
				  $list_items = $list_group['front-page-discount-list-item'];
                  if (array_filter($list_items)):
					$icon = $list_group['front-page-discount-list_icon']?>
					  <ul class="front-page-discount-content-list">
						<?php foreach ($list_items as $item):?>
							<li>
								<i data-svg="<?php echo $icon?>"></i>
								<span><?php echo $item['item']?></span>
							</li>
						<?php endforeach?>
					  </ul>
                  <?php endif ?>

					<div class="front-page-discount-content__btns global-double-buttons">
                      <?php $first_btn = $acf_fields['front-page-discount-first-btn'];
                      if ($first_btn['btn-link']):?>
						  <div class="global-btn global-btn--gray">
							  <a href="<?php echo $first_btn['btn-link']?>">
                                <?php echo $first_btn['btn-label']?>
							  </a>
						  </div>
                      <?php endif?>

                      <?php $second_btn = $acf_fields['front-page-discount-second-btn'];
                      if ($second_btn['btn-link']):?>
						  <div class="global-btn global-btn--outline-black">
							  <a href="<?php echo $second_btn['btn-link']?>">
                                <?php echo $second_btn['btn-label']?>
							  </a>
						  </div>
                      <?php endif?>
					</div>
				</div>

				<?php $img = $acf_fields['front-page-discount_img'];
				if ($img):?>
				  <div class="front-page-discount__img">
					  <img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" width="<?php echo $img['width']?>" height="<?php echo $img['height']?>">
				  </div>
				<?php endif?>
			</div>
		</div>
	</section>

	<section class="section-highlighted-offers">
		<div class="container">
			<?php
            $special_offer = $acf_fields['front-page-highlighted-offers-special'];

            $title_featured_product = $acf_fields['front-page-highlighted-offers_featured-title'];
            $category_featured_product = $acf_fields['front-page-highlighted-offers_featured'];

            $title_new_product = $acf_fields['front-page-highlighted-offers_new-title'];
            $category_new_product = $acf_fields['front-page-highlighted-offers_new'];

			get_template_part('modules/highlighted-offers', null, array(
				'special_offer' => $special_offer,
				'title_featured_product' => $title_featured_product,
				'category_featured_product' => $category_featured_product,
				'title_new_product' => $title_new_product,
				'category_new_product' => $category_new_product,
			));?>
		</div>
	</section>

	<section class="section-front-page-blog">
		<div class="container">
			<div class="featured-product-title">
              <?php $inscription = $acf_fields['front-page-blog_inscription'];
              if ($inscription):?>
				  <p class="featured-product-title__inscription global-inscription-title">
					<?php echo $inscription?>
				  </p>
              <?php endif ?>

              <?php $title = $acf_fields['front-page-blog_title'];
              if ($title):?>
				  <h3 class="featured-product-title__title">
					  <?php echo $title?>
				  </h3>
              <?php endif ?>

              <?php $under_title = $acf_fields['front-page-blog_under-title'];
              if ($under_title):?>
				  <p class="featured-product-title__bottom-inscription">
                    <?php echo $under_title?>
				  </p>
              <?php endif ?>
			</div>
			<?php $blog_posts = $acf_fields['front-page-blog_selected-posts'];
			if (!$blog_posts){
				$args = array(
					'cat' => 31,
					'posts_per_page' => 6
				);
              	$blog_posts = get_posts($args);
			}

            if ($blog_posts):?>
				<div class="front-page-blog-slider">
				  <?php foreach ($blog_posts as $post) :
					setup_postdata($post)?>
					  <div class="front-page-blog-slider-item">
						  <div class="front-page-blog-slider-item-img">
						  	<?php the_post_thumbnail('full');

							$post_date = get_the_date();
							$date_parts = explode(' ', explode(',', $post_date)[0]);
							$day = $date_parts[1];
							$month = date('M', strtotime($date_parts[0]))?>
							  <div class="front-page-blog-slider-item-img__date">
                                <?php echo $day?>
								  <span><?php echo $month?></span>
							  </div>
							  <div class="front-page-blog-slider-item-img__category">
								  <?php
								  $category_post = array_slice(get_the_category($post->ID), -1)[0];
								  echo $category_post->name?>
							  </div>
						  </div>
						  <div class="front-page-blog-slider-item-content">
							  <?php the_title('<p class="front-page-blog-slider-item-content__title">','</p>')?>

							  <div class="front-page-blog-slider-item-content__author">
								  <?php
                                  $author_id = $post->post_author;
                                  $author_name = get_the_author_meta('display_name', $author_id);
                                  $author_avatar = get_avatar($author_id, 20)?>
								  <span>Posted by</span>
                                	<?php echo $author_avatar?>
								  <span><?php echo $author_name?></span>
							  </div>
							  <div class="front-page-blog-slider-item-content__excerpt">
								  <?php the_excerpt()?>
							  </div>
							  <a href="<?php the_permalink($post->ID)?>" class="front-page-blog-slider-item-content__read-more">
								 <?php echo $acf_fields['front-page-blog_read-more']?>
							  </a>
						  </div>
					  </div>
				  <?php endforeach;
				  wp_reset_postdata()?>
				</div>
            <?php else :
              echo 'Posts not found';
            endif;
			?>
		</div>
	</section>

<?php get_footer();