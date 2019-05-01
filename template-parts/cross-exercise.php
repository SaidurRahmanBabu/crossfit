<?php
  function suite_hotel_feature($atts){
    extract(shortcode_atts(array(
      'section_title' => '',
      //team param group
      'feature_group' => '',
      'icon'          => '',
      'title'         => '',
      'text'          => '',
      'button'        => ''

    ), $atts));

    ob_start();
    ?>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">
              <?php echo esc_html($section_title); ?>
            </h2>
          </div>
        </div>
        <div class="row">

          <?php
            $feature_groups = vc_param_group_parse_atts($feature_group);
            foreach($feature_groups as $feature):
          ?>

          <div class="col-md-4 text-center mb-4">
            <div class="border p-4 text-with-icon">

              <span class="<?php echo esc_attr($feature['icon']); ?>  icon display-4 mb-4 d-block text-primary"></span>

              <h2 class="h5">
                <?php echo esc_html($feature['title']); ?>
              </h2>
              <p>
                <?php echo esc_html($feature['text']); ?>
              </p>
              <p><a href="#">
                <?php echo esc_html($feature['button']); ?>
              </a></p>
            </div>
          </div>

        <?php endforeach; ?>          

        </div>
      </div>
    </div>


  <?php

  return ob_get_clean();
}
add_shortcode('hotel_feature', 'suite_hotel_feature');