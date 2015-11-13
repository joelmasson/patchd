<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class="splash" style="background-image:url(<?php echo $url; ?>)">
	<h1>
	<?php $content = get_the_content();
		  echo $content;
	?>
	</h1>
</div>
<div class="container white-section">
	<div class="row">
	<?php
		if( have_rows('hero_columns') ):
		    while ( have_rows('hero_columns') ) : the_row();

		        if( get_row_layout() == 'text_column' ):
					$buttonText = get_sub_field('button_text');
					$buttonUrl = get_sub_field('button_link');

		        	echo "<div class='col-xs-4'>
		        			<a class='btn-default' href='".$buttonUrl."'>".$buttonText."</a>";

		        		if( have_rows('section') ):
						    while ( have_rows('section') ) : the_row();
								$headline = get_sub_field('headline');
								$paragraph = get_sub_field('paragraph');
								$link = get_sub_field('link');
								$link_text = get_sub_field('link_text');
						        
						        echo "<h3>".$headline."</h3>
						        	 <p>".$paragraph."</p>";

						       	if($link != ""){
						       		echo "<a herf='".$link."'>".$link_text."</a>";
						       	} else {}
						    endwhile;
						else :
						endif;
		        	echo "</div>";
		        elseif( get_row_layout() == 'hero_image' ): 
		        	$file = get_sub_field('hero_image');
		        	echo "<div class='col-xs-4'>
		        		  	<img src='".$file['url']."' alt='".$file['alt']."'>
		        		  </div>";
		        endif;
		    endwhile;
		else :
		endif;
	?>
	</div>
</div>
<div class="container orange-section">
	<div class="row">
       <?php 
        if( have_rows('icon_column') ):
		    while ( have_rows('icon_column') ) : the_row();
				$headline = get_sub_field('headline');
				$paragraph = get_sub_field('paragraph');
				$link = get_sub_field('link');
				$linkText = get_sub_field('link_text');
				$icon = get_sub_field('icon');
		        
		        echo 
		             "<div class='col-xs-4'>
		             <img src='".$icon['url']."' alt='".$icon['alt']."'>
		        	 <h3>".$headline."</h3>
		        	 <p>".$paragraph."</p>
		        	 </div>";

		       	if($link != ""){
		       		echo "<a herf='".$link."'>".$linkText."</a>";
		       	} else {}
		    endwhile;
		else :
		endif;
	?>
	</div>
</div>
<?php 
	$secondImage = get_field('second_image');
?>
<div class="container orange-section" style="background-image:url(<?php echo $secondImage['url']; ?>)">
	<div>
		<h3><? the_field('second_image_headline'); ?></h3>
		<p><? the_field('second_image_paragraph'); ?></p>
		<a href="<?php the_field('second_image_link');?>"><? the_field('second_image_link_Text'); ?></a>
	</div>
</div>
<div class="container orange-section">
	<div class="col-xs-6">
		<h3><? the_field('ani_headline'); ?></h3>
		<p><? the_field('ani_paragraph'); ?></p>
		<a href="<?php the_field('ani_link'); ?>"><? the_field('ani_link_text'); ?></a>
	</div>
	<div class="col-xs-6">
		ICON
	</div>
</div>
<div class="container">
	<?php 
        if( have_rows('sponsor') ):
		    while ( have_rows('sponsor') ) : the_row();
				$logo = get_sub_field('logo');
				$logoLink = get_sub_field('logo_link');
				$headline = get_sub_field('headline');
				$paragraph = get_sub_field('paragraph');
				$link = get_sub_field('link');
				$linkText = get_sub_field('link_text');

		        echo 
		             "<div class='row'>
			             <div class='col-xs-12 blue-section'>
			             	<a href='".$logoLink."'><img src='".$logo['url']."' alt='".$logo['alt']."'></a>
			             </div>
			         </div>
			         <div class='row'>
			             <div class='col-xs-12 white-section'>
			        	 	<h3>".$headline."</h3>
			        	 	<p>".$paragraph."</p>
			        	 	<a href=".$link.">".$linkText."</a>
			        	 </div>
			        </div>";
		    endwhile;
		else :
		endif;
	?>
</div>