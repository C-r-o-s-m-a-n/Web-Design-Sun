
<?php
class Footer_info_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      'footer_info_widget',
      'Footer info block',
      array( 'description' => 'Block with information in footer' )
    );
  }

  public function widget( $args, $instance ) {
  	$widget_id = $args['widget_id'];
    echo $args['before_widget'];
    echo $widget_id;
    $text = get_field('footer-info-block_description', $widget_id);
    var_dump($text);
    echo $text;
    echo $args['after_widget'];
  }

  // Виведення форми віджета на сторінці віджетів у панелі керування WordPress
  public function form($instance) {
    $image_url = !empty($instance['image_url']) ? esc_url($instance['image_url']) : '';
    $description = !empty($instance['description']) ? esc_textarea($instance['description']) : '';
    $title = !empty($instance[ 'title' ]) ? esc_textarea($instance[ 'title' ]) : '';
    ?>
	  <p>
		  <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
		  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	  </p>

	  <p>
		  <label for="<?php echo $this->get_field_id('image_url'); ?>">Картинка:</label>
		  <input class="widefat" id="<?php echo $this->get_field_id('image_url'); ?>" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo $image_url; ?>" />
		  <button class="button button-primary custom-media-button" onclick="openMediaUploader(this); return false;">Вибрати зображення</button>
	  </p>

	  <p>
		  <label for="<?php echo $this->get_field_id('description'); ?>">Опис:</label>
		  <textarea class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>"><?php echo $description; ?></textarea>
	  </p>

    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}

function footer_info_widget_load() {
  register_widget( 'Footer_info_widget' );
}
add_action( 'widgets_init', 'footer_info_widget_load' );