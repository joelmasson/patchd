<?php 

//echo $_SERVER['SERVER_NAME'];

?>


<header class="banner">
  <nav class="nav-primary navbar navbar-default navbar-fixed-top row">
    <div class="container">
      <div id="myModal" class="modal fade orange" role="navigation">
        <div class="container">
          <div class="modalHeader row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
              <a class="brand" href="<?= esc_url(home_url('/')); ?>">
                <div class="site-logo"></div>
                <span class="sr-only"><?php bloginfo('name'); ?></span>
              </a>
            </div>
            <div class="col-xs-4"></div>
          </div>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'row', 'menu_class' => 'navbar-nav']);
        endif;
        ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 navbar-header">
          <div id="nav-icon2" data-toggle="modal" data-target="#myModal">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span class="sr-only">Toggle navigation</span>
          </div>
          <a class="navbar-brand hidden-xs" class="navbar-toggle collapsed" data-toggle="modal" data-target="#myModal" aria-expanded="false"><h6 style="font-size:20px;font-weight:100;">Menu</h6></a>
        </div>
        <div class="col-xs-4">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <div class="site-logo"></div>
            <span class="sr-only"><?php bloginfo('name'); ?></span>
          </a>
        </div>
        <div class="col-xs-4 dropdown">
          <a class="pull-right" href="#">
            <h6 style="font-size:20px;font-weight:100;">Shop <span class="hidden-xs">Patch'd</span></h6>
          </a>
          <div class="current-nation dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="pull-left hidden-xs" src="/patchd/wp-content/themes/sage-master/assets/images/flag-aus.svg">
            <div>
              <span>AUD</span>
              <span class="glyphicon glyphicon-chevron-down" data-unicode="e114"></span>
            </div>
          </div>
          <ul id="nav-nationality" class="dropdown-menu">
            <li>
              <a href="#">
                <img src="/patchd/wp-content/themes/sage-master/assets/images/flag-uk.svg">
                <span>UK</span>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/patchd/wp-content/themes/sage-master/assets/images/flag-us.svg">
                <span>USA</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
