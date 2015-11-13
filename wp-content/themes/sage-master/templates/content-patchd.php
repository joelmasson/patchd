<div class="container">
	<div class="row">
		<div class='col-xs-0 col-md-3'></div>
		<div class='col-xs-12 col-md-6'>
		<?php $content = get_the_content();
			  echo $content;
		?>
		</div><div class='col-xs-0 col-md-3'></div>
	</div>
</div>

	
	<?php
		if( have_rows('bucket') ):
		    while ( have_rows('bucket') ) : the_row();
		        if( get_row_layout() == 'orange_block' ):
					$orange_image = get_sub_field('image');
					echo "<div class='col-xs-12 orange text-center'>
		        			<img alt='".$orange_image['alt']."' src='".$orange_image['url']."''>
		        		  </div>";
		        elseif( get_row_layout() == 'text_block' ): 
		        	$text_block = get_sub_field('content');
		        	echo "<div class='container'><div class='row'>
		        			<div class='col-xs-0 col-md-3'></div>
		        			<div class='col-xs-12 col-md-6'>";
		        				print_r($text_block);
		        	echo 	"</div>
		        			 <div class='col-xs-0 col-md-3'></div>
		        		  </div></div>";
		        elseif( get_row_layout() == 'full_width_image' ): 
		        	$fw_image = get_sub_field('image');
		        	$fw_content = get_sub_field('content');
		        	echo "<div class='col-xs-12 fw-image' style='background-image:url(". $fw_image['url'].");min-height:200px'>";
		        	print_r($fw_content);
		        	echo"</div>";
		        elseif( get_row_layout() == 'quotes' ):
		        echo "<div class='container'><div class='row'><ul>"; 
		        	if( have_rows('quotes_block') ):
					    while ( have_rows('quotes_block') ) : the_row();
							echo "<li class='col-xs-12 col-md-4'><h2>";
					        the_sub_field('quote');
					        echo "</h2><h6>";
					        the_sub_field('source');
					        echo "</h6></li>";
					    endwhile;
					else :
					endif;
					echo "</ul></div></div>";
				elseif( get_row_layout() == 'triple_bs' ):
				echo "<div class='col-xs-12 orange text-center'>
	        			<img alt='".$orange_image['alt']."' src='".$orange_image['url']."''>
	        		  </div>"; 
		        	$fw_image = get_sub_field('image');
		        	$fw_content = get_sub_field('content');
		        	echo "<div class='triple_bs'>";
		        	print_r($fw_image);
		        	print_r($fw_content);
		        	echo"</div>";
		        elseif( get_row_layout() == '3/4_width_image' ): 
		        	$tf_image = get_sub_field('image');
		        	echo "<div class='container'><div class='row'>
		        			<div class='col-xs-12'><img src='".$tf_image['url']."' alt='".$tf_image['alt']."'></div>
		        		  </div></div>";
		        elseif( get_row_layout() == 'table' ): 
		        	echo "<table style='width:100%''>";
		        	if( have_rows('column') ):
		        		$titleRow = 1;
					    while ( have_rows('column') ) : the_row();
					    	echo "<tr>";
					    	if ($titleRow == 1){
					    		echo "<th>";
					    		the_sub_field('left_value');
					    		echo "</th><th>";
					    		the_sub_field('left_value');
					    		echo "</th>";
					    	} else {
					    		echo "<td>";
					    		the_sub_field('left_value');
					    		echo "</td><td>";
					    		the_sub_field('left_value');
					    		echo "</td>";
					    	}
					    	echo "</tr>";
					    	++$titleRow;
					    endwhile;
					else :
					endif;
					echo "</table>";
				elseif( get_row_layout() == 'accordion' ):
					echo "<div class='container'><ul class='row'>";
					if( have_rows('accordion_container') ):
						$j = 1;
					    while ( have_rows('accordion_container') ) : the_row();
					    	$title = get_sub_field('title');
							echo "<li>
									<div class='accordion' data-toggle='collapse' data-target='#accordion-".$j."'>
										<h2>".$title."</h2>
									</div>
									<div id='accordion-".$j."' class='collapse'>";
										print_r(get_sub_field('content'));

					        echo 	"</div>
					        	</li>";
					        ++$j;
					    endwhile;
					else :
					endif;
					echo "</ul></div>";
		        endif;
		    endwhile;
		else :
		endif;
	?>
