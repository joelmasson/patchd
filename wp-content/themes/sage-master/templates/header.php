<header class="banner">
  <div class="container">
    <nav class="nav-primary navbar navbar-default navbar-fixed-top">
      <div class="row container-fluid">
        <div class="col-xs-4 navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">MENU</a>
        </div>
        <div class="col-xs-4"><a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
        <div class="col-xs-4 dropdown">
          <div class="current-nation dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="">
            <span>AUD</span>
            <span class="caret"></span>
          </div>
          <ul id="nav-nationality" class="dropdown-menu">
            <li>
              <a href="#"><span>UK</span></a>
            </li>
            <li>
              <a href="#"><span>USA</span></a>
            </li>
          </ul>
          <a href="#">
            Shop Patch'd
          </a>
        </div>
      </div>
    </nav>
  </div>
          <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation','container_id' => 'bs-example-navbar-collapse-1', 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav orange']);
        endif;
        ?>
</header>
