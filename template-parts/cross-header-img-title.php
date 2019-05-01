<?php
  function suite_header($atts){

    extract(shortcode_atts(array(
      'title'     => '',
      'sub_title' => '',
      'image'     => ''

    ), $atts));

    ob_start();

    ?>

    <?php
      $image = wp_get_attachment_image_src($image);
      if($image):
    ?>


    <div class="site-blocks-cover inner-page" style="background-image: url(<?php echo esc_attr($image[0]); ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    	
    	<?php endif; ?>
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1>
          	<?php echo esc_html($sub_title); ?>
          </h1>
          <span class="caption d-block text-white">
          	<?php echo esc_html($title); ?>
          </span>
        </div>
      </div>
    </div> 


  <?php
  return ob_get_clean();
}
add_shortcode('header', 'suite_header'); 