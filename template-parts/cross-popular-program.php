<?php
  function suite_events($atts){

    extract(shortcode_atts(array(
      'title'         => '',
      'post_limit'    => '',
      'category_name' => 'Uncategorized'

    ), $atts));

    ob_start();

    ?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">
              <?php echo esc_html($title); ?>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-13 nav-direction-white">
            <div class="nonloop-block-13 owl-carousel">

          <?php
            $args = array(
              'posts_per_page'  => $post_limit,
              'post_status'     => 'publish',
              'post_type'       => 'post',
              'category_name'   => $category_name
            );
            $custom_post = new WP_Query($args);

            while($custom_post->have_posts()) : $custom_post-> the_post();

          ?>

              
              <div class="media-image">
                <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="Image" class="img-fluid">
                <div class="media-image-body">
                  <h2>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <p><?php the_excerpt(); ?></p>
                  <p><a href="<?php the_permalink(); ?>" class="btn btn-primary text-white px-4"><span class="caption">Learn More</span></a></p>
                </div>
              </div>

              <?php endwhile; ?>


            </div>
          </div>
        </div>
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('events', 'suite_events');