<?php
  function suite_about($atts, $content=null){

    extract(shortcode_atts(array(
      'title'     => '',
      'button'    => '',
      'image'     => '',
      'class'     => ''

    ), $atts));

    ob_start();

    ?>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 <?php echo esc_attr($class); ?>">

            <?php
              $image = wp_get_attachment_image_src($image, 'full');
              if($image):
            ?>
              <p class="mb-5">
                <img src="<?php echo esc_url($image[0]); ?>" alt="Image" class="img-fluid">
              </p>

            <?php endif; ?>

          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="site-section-heading mb-3">
              <?php echo esc_html($title); ?>
            </h2>

            <?php $contents = wpb_js_remove_wpautop($content); ?>
            <p><?php echo $contents; ?></p>

            <p>
              <a href="#" class="btn btn-outline-primary py-2 px-4">
                <?php echo esc_html($button); ?>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>


  <?php
  return ob_get_clean();
}
add_shortcode('about', 'suite_about');