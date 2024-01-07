<?php $featured_products = $args;
	foreach ($featured_products as $item):?>
		<div class="featured-product-row">
			<?php $poster = $item['front-page-featured-product-poster'];
			if (array_filter($poster)):
			  $color = $poster['front-page-featured-product-poster_color-text'];
			  ?>
			<div class="featured-product-poster" style="color: <?php echo $color?>">
			  <?php $img = $poster['front-page-featured-product-poster_img'];
			  if ($img):?>
				  <img src="<?php echo $img['url']?>" class="featured-product-poster__img" alt="<?php echo $img['alt']?>" width="<?php echo $img['width']?>" height="<?php echo $img['height']?>">
			  <?php endif?>
				<div class="featured-product-poster-content">
				  <?php $title = $poster['front-page-featured-product-poster_title'];
				  if ($title):?>
					  <p class="featured-product-poster-content__title">
						<?php echo $title?>
					  </p>
				  <?php endif ?>

                  <?php $description = $poster['front-page-featured-product-poster_description'];
                  if ($description):?>
					  <div class="featured-product-poster-content__description">
                        <?php echo $description?>
					  </div>
                  <?php endif?>

                  <?php $btn = $poster['front-page-featured-product-poster-btn'];
                  if ($btn['btn_link']):?>
					  <a href="<?php echo $btn['btn_link'] ?>" class="featured-product-poster-content__btn" style="color: <?php echo $color?>;">
                        <?php echo $btn['btn_label']?>
					  </a>
                  <?php endif?>
				</div>
			</div>
			<?php endif?>

          <?php
          $category_product = $item['front-page-featured-product_category'];
          $count_products = $item['front-page-featured-product_quantity'];

          $products = wc_get_products(array(
            'product_category_id' => $category_product,
            'limit' => $count_products,
            'status'   => 'publish',
            'orderby' => 'date',
            'order'   => 'DESC',
          ));
          if ($products):?>
			<div class="featured-product-slider">
				<?php foreach ($products as $product):
                  	$image_id = $product->get_image_id()?>
					<div class="featured-product-slider-item card-product">
						<div class="featured-product-slider-item__img card-product-img">
							<img src="<?echo wp_get_attachment_image_src($image_id, 'full')[0]?>">
							<div class="card-product-img-tools">
								<a href="<?php echo esc_url($product->add_to_cart_url())?>" data-product_sku="<?php echo esc_attr($product->get_sku())?>" data-product_id="<?php echo esc_attr($product->get_id())?>"
								   class="card-product-img-tools__cart <?php echo $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : ''?>> product_type_<?php echo esc_attr($product->product_type)?>">
									<i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/cart.svg"></i>
								</a>
								<a href="" class="card-product-img-tools__zoom">
									<i data-svg="<?php echo get_stylesheet_directory_uri()?>/assets/images/icons/search.svg"></i>
								</a>
							</div>
						</div>
						<div class="card-product-content">
							<p class="card-product-content__title">
								<?php echo $product->get_name();?>
							</p>
							<p class="card-product-content__category">
                              <?php
                              $last_category_id = $product->get_category_ids();
                              asort($last_category_id);
							  $last_category_id = end($last_category_id);
                              $last_category = get_term($last_category_id, 'product_cat');
                              echo $last_category->name?>
							</p>
							<div class="card-product-content__price">
								<?php echo get_woocommerce_currency_symbol().' '.wc_price($product->get_price())?>
							</div>
						</div>
					</div>
				<?php endforeach?>
			</div>
          <?php else:
            echo 'There are no products in this category';
          endif?>
		</div>
	<?php endforeach?>

