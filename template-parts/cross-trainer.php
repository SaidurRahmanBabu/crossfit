<?php
  function cross_trainer($atts, $content=null){

    extract(shortcode_atts(array(
      'title'     => '',
      'name'      => '',
      'button'    => '',
      'bg_image'  => '',
      'image'     => ''

    ), $atts));

    ob_start();

    ?>

    <?php
      $bg_image = wp_get_attachment_image_src($bg_image, 'full');
      if($bg_image):
    ?>
    <div class="site-section bg-bg_image" style="background-image: url(<?php echo esc_attr($bg_image[0]); ?>); background-attachment: fixed; background-size: 100% 100%">

      <?php endif; ?>

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center text-white">
              <?php echo esc_html($title); ?>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">

            <?php
              $image = wp_get_attachment_image_src($image, 'full');
              if($image):
            ?>
            <img src="<?php echo esc_url($image[0]); ?>" alt="bg_image" class="img-fluid rounded-circle w-25 mb-4">

            <?php endif; ?>

            <h2 class="h5 mb-4 text-white">
              <?php echo esc_html($name); ?>
            </h2>

            <?php $contents = wpb_js_remove_wpautop($content); ?>
            <p><?php echo $contents; ?></p>

            <a href="#" class="btn btn-primary text-white">
              <?php echo esc_html($button); ?>
            </a></p>
          </div>
        </div>
      </div>  
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('trainer', 'cross_trainer');