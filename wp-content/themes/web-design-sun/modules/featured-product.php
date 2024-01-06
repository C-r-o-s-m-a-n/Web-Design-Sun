<?php $featured_products = $args;
	foreach ($featured_products as $item):?>
		<div class="featured-product-row">
			<?php $poster = $item['front-page-featured-product-poster'];
			if (array_filter($poster)):?>
			<div class="featured-product-poster">
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
						<div class="featured-product-slider-item__img card-product__img">
							<img src="<?echo wp_get_attachment_image_src($image_id, 'full')[0]?>">
						</div>
						<div class="card-product-content">
							<p class="card-product-content__title">
								<?php echo $product->get_name();?>
							</p>
							<p class="card-product-content__category">
                              <?php print_r($product->get_category_ids());$last_category_id = end($product->get_category_ids());
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

