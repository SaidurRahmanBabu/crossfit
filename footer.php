
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <?php dynamic_sidebar('footer_about'); ?>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">
                  <?php _e('Quick Menu', 'crossfit'); ?>
                </h3>
                  <?php
                    if(is_active_sidebar('footer_menu_one')){
                      dynamic_sidebar('footer_menu_one');
                    }
                  ?>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">
                  <?php _e('Program', 'crossfit'); ?>
                </h3>
                  <?php
                    if(is_active_sidebar('footer_menu_two')){
                      dynamic_sidebar('footer_menu_two');
                    }
                  ?>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            
            <?php
              if(is_active_sidebar('footer_licence')){
                dynamic_sidebar('footer_licence');
              }
            ?>  
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  
  <?php wp_footer(); ?>
  </body>
</html>