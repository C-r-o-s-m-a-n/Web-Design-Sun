<div class="highlighted-offers__wrap">
  <?php $special_offer = $args['special_offer'];
  if (array_filter($special_offer)):?>
	  <div class="highlighted-offers-special">
        <?php $img = $special_offer['front-page-highlighted-offers-special_image'];
        if ($img):?>
			<img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>" width="<?php echo $img['width']?>" height="<?php echo $img['height']?>">
        <?php endif?>

		  <div class="highlighted-offers-special-content">
            <?php $inscription = $special_offer['front-page-highlighted-offers-special_inscription'];
            if ($inscription):?>
				<p class="highlighted-offers-special-content__inscription global-inscription-title">
                  <?php echo $inscription?>
				</p>
            <?php endif ?>

            <?php $title = $special_offer['front-page-highlighted-offers-special_title'];
            if ($title):?>
				<h3 class="highlighted-offers-special-content__title">
                  <?php echo $title?>
				</h3>
            <?php endif ?>

            <?php $under_title = $special_offer['front-page-highlighted-offers-special_under-title'];
            if ($under_title):?>
				<div class="highlighted-offers-special-content__subtitle">
					<p><?php echo $under_title?></p>
				</div>
            <?php endif?>

            <?php $btn = $special_offer['front-page-highlighted-offers-special_btn'];
            if ($btn['btn-link']):?>
				<div class="highlighted-offers-special-content__btn global-btn global-btn--gray">
					<a href="<?php echo $btn['btn-link'] ?>">
                      <?php echo $btn['btn-label'] ?>
					</a>
				</div>
            <?php endif?>
		  </div>
	  </div>
  <?php endif?>

  <?php function create_column_highlighted_offers($title, $cat_products){
    $generate_column = '<div class="highlighted-offers-column-product">';
    if ($title){
      $generate_column .=
        '<p class="highlighted-offers-column-product__title">'
        .$title.
        '</p>';
    };

    $products = wc_get_products(array(
      'product_category_id' => $cat_products,
      'limit' => 3,
      'status'   => 'publish',
      'orderby' => 'date',
      'order'   => 'DESC',
    ));
    if ($products):
      foreach ($products as $product):
        $image_id = $product->get_image_id();
        $generate_column .= '
						<div class="highlighted-offers-column-product-item">
							<div class="highlighted-offers-column-product-item__img">
								<img src="'.wp_get_attachment_image_src($image_id, "full")[0].'">
							</div>
							<div class="highlighted-offers-column-product-item-content">
								<p class="highlighted-offers-column-product-item-content__title">
									'.$product->get_name().'
								</p>
								<div class="highlighted-offers-column-product-item-content__price">
									'.get_woocommerce_currency_symbol().' '.wc_price($product->get_price()).'
								</div>
							</div>
						</div>';
      endforeach?>
    <?php else:
      $generate_column .= '<h2>There are no products in this category</h2>';
    endif;

    //close column
    $generate_column .= '</div>';

    return $generate_column;
  }?>

  <?php
  $title_featured_product = $args['title_featured_product'];
  $category_featured_product = $args['category_featured_product'];

  $title_new_product = $args['title_new_product'];
  $category_new_product = $args['category_new_product'];

  echo create_column_highlighted_offers($title_featured_product, $category_featured_product);
  echo create_column_highlighted_offers($title_new_product, $category_new_product)?>

</div>