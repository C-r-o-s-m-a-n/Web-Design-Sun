<?php
if(!defined('ABSPATH')){
  exit;
}

class Recent_post_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      'recent_post_widget',
      'Recent post',
      array( 'description' => 'list of recent post' )
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    echo $args['before_widget'];

    if ( ! empty( $title ) )
      echo $args['before_title'] . $title . $args['after_title'];

    $query_post = new WP_Query(array(
      'post_type'      => 'post',
      'posts_per_page' =>  2,
      'orderby'        => 'date',
      'order'          => 'DESC',
    ));
    if( $query_post->have_posts() ):?>
	<?php while( $query_post->have_posts() ): $query_post->the_post()?>
	  <div class="footer-recent-post-item">
		<div class="footer-recent-post-item__img">
		  <?php the_post_thumbnail('full')?>
		</div>
		<div class="footer-recent-post-item-content">
		  <a href="<?php the_permalink() ?>" class="footer-recent-post-item-content__title">
			<?php the_title() ?>
		  </a>
		  <div class="footer-recent-post-item-content__date">
			<?php $post_date = get_the_date();
			$date_parts = explode(' ', $post_date);
			$year = $date_parts[2];
            $month = $date_parts[0];
			$day = $date_parts[1];?>
			  <?php echo $month.' '.$day.' '.$year?>
		  </div>
		</div>
	  </div>
	  <?php endwhile;
	  endif;
    wp_reset_postdata();

    echo $args['after_widget'];
  }

  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}

function recent_post_widget_load() {
  register_widget( 'Recent_post_widget' );
}
add_action( 'widgets_init', 'recent_post_widget_load' );


