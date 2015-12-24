<footer class="content-info">
  <div class="orange section">
    <div class="container">
      <div class="row">
        <div class="col-xs-0 col-sm-2"></div>
        <div class="col-xs-12 col-sm-8">
           <div>
              <h2 id="newsletter-headline"><?php the_field('sign_up_message', 'option'); ?></h2>
              <div id="newsletter-form">
                <span class="glyphicon glyphicon-envelope"></span>
                <?php echo do_shortcode('[mc4wp_form]'); ?>
              <a class="circle"><span class="glyphicon glyphicon-chevron-right"></span></a>
              </div>
            <ul class="social-nav">
              <li style="padding-top: 4px;"><a href="https://instagram.com/getpatchd/]" target="_blank"><img  width="22" src="/patchd/wp-content/themes/sage-master/assets/images/instagram.svg"></a></li>
              <li><a href="https://www.facebook.com/getpatchd]" target="_blank"><img  width="16" src="/patchd/wp-content/themes/sage-master/assets/images/facebook.svg"></a></li>
              <li style="padding-top: 4px;"><a href="https://twitter.com/getpatchd]" target="_blank"><img  width="25" src="/patchd/wp-content/themes/sage-master/assets/images/twitter.svg"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-0 col-sm-2"></div>
        <div class="col-xs-12 text-center">
          <h1><?php echo get_bloginfo( 'description' ); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="white">
    <div class="container">
      <ul class="row footer-nav">
        <li class="menu-item">ⓒ <?php echo date("Y"); ?> patch'd All rights reserved</li>
      <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(['container' => '','theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav', 'items_wrap' => '%3$s']);
          endif;
      ?>
      </ul>
    </div>
  </div>
</footer>
