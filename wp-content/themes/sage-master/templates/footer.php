<footer class="content-info">
  <div class="container">
  	<h2></h2>
  	<div class="row">
  		<form action="form.php">
		  First name: <input type="email" name="email"><br>
		  <input type="submit" value="Submit">
		</form>
  		<ul>
  			<li><a href="#"><img src="">F</a></li>
  			<li><a href="#"><img src="">T</a></li>
  			<li><a href="#"><img src="">I</a></li>
  		</ul>
  	</div>
  </div>
  <div class="container">
  	<ul class="row">
  		<li class="menu-item ">c 
    <?php echo date("Y"); ?> Patch'd All rights reserved
    </li>
    <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['container' => '','theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav', 'items_wrap' => '%3$s']);
        endif;
    ?>
    </ul>
  </div>
</footer>
