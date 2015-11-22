<?php 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

	if ($url != "" ){
		$content = get_the_content();
		if ( is_page(10) ) {
		echo "<div class='splash row front-page'>";
		} else {
		echo "<div class='splash row'>";
		}
		echo "<div class='splash-image'>
				<img src='".$url."' data-src='".$url."' class='splash-image-picture'>
			</div>
			<div class='splash-content'>
				<div class='container'>
					<div class='row'>
						".$content."
					</div>
				</div>
			</div>
		</div>";
	}
		if( have_rows('partner') ):
		    while ( have_rows('partner') ) : the_row();
				$image = get_sub_field('image');
				echo "<div class='container section'>
						<div class='col-xs-0 col-md-2'></div>
						<div class='col-xs-4 col-md-2'>
							<div class='image-cicrle-mask'>
								<img src='".$image['url']."' alt='".$image['alt']."'>
							</div>
						</div>
						<div class='col-xs-8 col-md-6'>
						".get_sub_field('content')."
						</div>
						<div class='col-xs-0 col-md-2'></div>
					  </div>";
		    endwhile;
		else :
		endif;
		if( have_rows('team_member') ):
			$teamArray = array();
			$boardArray = array();
			$ambassadorArray = array();
			$data = get_field('team_member');
			echo "<div class='container section'>";
				foreach ($data as $teamMember) {
					foreach ($teamMember as $teamMemberData) {
						if ($teamMember['category'] == "team"){
							array_push($teamArray, $teamMember);
							break;
						} elseif ($teamMember['category'] == "board"){
							array_push($boardArray, $teamMember);
							break;
						} elseif ($teamMember['category'] == "ambassadors"){
							array_push($ambassadorArray, $teamMember);
							break;
						}
						
					}
				}
				echo "<div class='row text-center'>
					<h1>The Team</h1>
					<div class='col-sm-0 col-md-2'></div>";
					$i = 0;
					foreach ($teamArray as $member) {
						if (count($teamArray) == 6){
							if ($i == 5){
						echo "<div class='col-sm-3 col-md-2'></div>";
							}
						}
						echo "<div class='col-xs-6 col-sm-3 col-md-2'>
								<div class='image-cicrle-mask'>
									<img src='".$member['image']['url']."' alt='".$member['image']['alt']."'>
								</div>
								<h4>".$member['name']."</h4>
								<p>".$member['bio']."</p>
							</div>";
						++$i;
					}
				echo "<div class='col-sm-0 col-md-2'></div>
				</div>
				<div class='row text-center'>
					<h1>patch’d Advisory Board</h1>
					<div class='col-sm-3 col-md-4'></div>";
					foreach ($boardArray as $member) {
					echo "<div class='col-xs-6 col-sm-3 col-md-2'>
							<div class='image-cicrle-mask'>
								<img src='".$member['image']['url']."' alt='".$member['image']['alt']."'>
							</div>
							<h4>".$member['name']."</h4>
							<p>".$member['bio']."</p>
						</div>";
					}		
				echo "<div class='col-sm-0 col-md-2'></div>
				</div>
				<div class='row text-center'>
					<h1>patch’d Advisory Board</h1>
					<div class='col-sm-0 col-md-2 col-md-offset-1'></div>
					<div class='col-xs-3 col-sm-4 col-md-2'></div>";
					foreach ($ambassadorArray as $member) {
					echo "<div class='col-xs-6 col-sm-4 col-md-2'>
							<div class='image-cicrle-mask'>
								<img src='".$member['image']['url']."' alt='".$member['image']['alt']."'>
							</div>
							<h4>".$member['name']."</h4>
							<p>".$member['bio']."</p>
						</div>";
					}
			echo "<div class='col-xs-3 col-sm-4 col-md-2'></div>
				  <div class='col-sm-0 col-md-2'></div>
			</div>";
		else :
		endif;
		if( have_rows('landing_columns') ):
			echo "<div class='container section'>";
		    while ( have_rows('landing_columns') ) : the_row();
		        if( get_row_layout() == 'text' ):
		        	echo "<div class='col-xs-12 col-sm-4'>";
		        	if (get_sub_field('button_option') == false){
		        		echo "<a type='button' target='_blank' href='".get_sub_field('external_link')."' class='btn btn-orange btn-block'>".get_sub_field('button_text')."</a>";	
		        	} else {
		        		echo "<a type='button' href='".get_sub_field('internal_link')."' class='btn btn-orange btn-block'>".get_sub_field('button_text')."</a>";	
		        	}
		        	echo "<div class='section'>".get_sub_field('column_content')."</div>
		        	</div>";
		        elseif( get_row_layout() == 'image' ): 
		        	$image = get_sub_field('image');
		        	echo "<div class='col-xs-12 col-sm-4'>
		        			<img class='hidden-xs landing-phone img-responsive' src='".$image['url']."' alt='".$image['alt']."'>
		        		  </div>";
		        endif;
		    endwhile;
		    echo "</div>";
		else :
		endif;
		if( get_field('orange_infographics_title') ): 
			echo "<div class='row orange text-center section' style='padding-bottom:30px;'><div class='container'>
					<h1>".get_field('orange_infographics_title')."</h1>";
			if( have_rows('orange_infographic') ):
			    while ( have_rows('orange_infographic') ) : the_row();
					$image = get_sub_field('image');
					echo "<div class='col-xs-12 col-sm-4 text-center'>
							<img width='45%' src='".$image['url']."' alt='".$image['alt']."'>
							<h2>".get_sub_field('subtitle')."</h2>
							<p>".get_sub_field('copy')."</p>
						  </div>";
			    endwhile;
			else :
			endif;
			echo "</div></div>";
		endif;
		if( have_rows('column') ):
			echo "<div class='row orange section'><div class='container'><div class='row'>";
		    while ( have_rows('column') ) : the_row();
		    	$icon = get_sub_field('icon');
		    	echo "<div class='heart-infogfx col-xs-12 col-sm-6 col-md-3'>
		    			<div class='col-xs-5'>
		    				<img class='img-responsive center-block' src='".$icon['url']."' alt='".$icon['alt']."'>
		    			</div>
						<div class='col-xs-7'>
							<span class='info-number'>".get_sub_field('number');
							if (get_sub_field('superscript')){
								echo "<sup>".get_sub_field('superscript')."</sup>";
							}
							echo "</span><p>".get_sub_field('copy')."</p>
		    			</div>
		    		  </div>";
		    endwhile;
		    echo "</div></div></div>";
		else :
		endif;
		if( have_rows('bucket') ):
		    while ( have_rows('bucket') ) : the_row();
		        if( get_row_layout() == 'orange_block' ):
					$orange_image = get_sub_field('image');
					echo "<div class='row orange text-center hidden-xs'>
		        			<img class='img-responsive center-block' alt='".$orange_image['alt']."' src='".$orange_image['url']."''>
		        		  </div>
		        		  <div class='flexslider visible-xs'>
						  	<ul class='slides'>";
						  	if( have_rows('slider') ):
						  		while ( have_rows('slider') ) : the_row();
						  			$image = get_sub_field('image');

						  			echo "<li><img class='img-responsive' alt='".$image['alt']."' src='".$image['url']."''></li>";
						  		endwhile;
						  	else :
						  	endif;
						  	echo "</ul>
						  </div>";
		        elseif( get_row_layout() == 'text_block' ): 
		        	$text_block = get_sub_field('content');
		        	echo "<div class='container section'><div class='row'>
		        			<div class='col-xs-0 col-md-2'></div>
		        			<div class='col-xs-12 col-md-8'>";
		        				print_r($text_block);
		        	echo 	"</div>
		        			 <div class='col-xs-0 col-md-2'></div>
		        		  </div></div>";
		        elseif( get_row_layout() == 'full_width_image' ): 
		        	$fw_image = get_sub_field('image');
		        	$fw_content = get_sub_field('content');
					echo "<div class='splash row'>
							<div class='splash-image'>
								<img class='splash-image-picture' src='".$fw_image['url']."' data-src='".$fw_image['url']."' alt='".$fw_image['alt']."'>
							</div>
							<div class='splash-content text-left'>
								<div class='container'>
									<div class='row'>
										<div class='col-xs-2 col-sm-8'></div>
										<div class='col-xs-10 col-sm-4'>
										".$fw_content."
										</div>
									</div>
								</div>
							</div>
						</div>";
		        elseif( get_row_layout() == 'quotes' ):
		        echo "<div class='container'><div class='row text-center'><ul style='list-style:none;'>"; 
		        	if( have_rows('quotes_block') ):
					    while ( have_rows('quotes_block') ) : the_row();
							echo "<li class='col-xs-12 col-md-4'><h2>";
					        the_sub_field('quote');
					        echo "</h2><p>";
					        the_sub_field('source');
					        echo "</p</li>";
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
		        	echo "<div class='container'>
		        			<div class='col-xs-0 col-sm-2'></div>
		        			<div class='col-xs-12 col-sm-8 orange-table'>
		        			<table class='table-responsive text-center' style='width:100%;border:none;'>";
		        	if( have_rows('column') ):
		        		$titleRow = 1;
					    while ( have_rows('column') ) : the_row();
					    	echo "<tr>";
					    	if ($titleRow == 1){
					    		echo "<th><h4><b>";
					    		the_sub_field('left_value');
					    		echo "</b></h4></th><th><h4><b>";
					    		the_sub_field('right_value');
					    		echo "</b></h4></th>";
					    	} else {
					    		echo "<td><h4>";
					    		the_sub_field('left_value');
					    		echo "</h4></td><td><h4>";
					    		the_sub_field('right_value');
					    		echo "</h4></td>";
					    	}
					    	echo "</tr>";
					    	++$titleRow;
					    endwhile;
					else :
					endif;
					echo "</table>
						  </div>
						  <div class='col-xs-0 col-sm-2'></div>
						</div>";
				elseif( get_row_layout() == 'accordion' ):
					echo "<div class='container section'><ul style='padding:0;list-style:none;'>";
					if( have_rows('accordion_container') ):
						$j = 1;
					    while ( have_rows('accordion_container') ) : the_row();
					    	$title = get_sub_field('title');
							echo "<li class='row'>
									<div class='col-xs-0 col-md-2'></div>
									<div class='col-xs-12 col-md-8' style='padding-bottom:30px;'>
									<div class='accordion row' data-toggle='collapse' data-target='#accordion-".$j."'>
										<h2>".$title."</h2>
										<span class='glyphicon glyphicon-menu-down' aria-hidden='true'></span>
									</div>
									<div style='float:left;' id='accordion-".$j."' class='collapse'>";
										print_r(get_sub_field('content'));

					        echo 	"</div></div>
					        		<div class='col-xs-0 col-md-2'></div>
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
		// if( get_field('chip_content') ): 
		// 	$image = get_sub_field('image');
		// 	echo "<div class='row orange section'>
		// 			<div class='container'>
		// 				<div class='col-xs-6'>".
		// 					get_field('chip_content')."
		// 				</div>
		// 				<div class='col-xs-6'>
		// 					<img width='100%' src='".$image['url']."' alt='".$image['alt']."'>
		// 				</div>
		// 			</div>
		// 		  </div>";
		// endif;
		if( get_field('sponsor_logo') ): 
			$image = get_field('sponsor_logo');
			echo "<div class='row blue section text-center'>
					<div class='container'>
						<div class='col-xs-0 col-md-2'></div>
						<div class='col-xs-12 col-md-8'>
							<img class='img-responsive center-block' src='".$image['url']."' alt='".$image['alt']."'>
						</div>
						<div class='col-xs-0 col-md-2'></div>
					</div>
				  </div>
				  <div class='row white section'>
				  	<div class='container'>
				  		<div class='col-xs-2'></div>
						<div class='col-xs-8'>";
							the_field('sponsor_content');
						echo "</div>
						<div class='col-xs-2'></div>
					</div>
				  </div>";
		endif;
		if( have_rows('phone') ):
			echo "<div class='row orange section'>
					<div class='container'>
						<div class='row'>
						<div class='col-xs-1 col-sm-2'></div>
						<div class='col-xs-10 col-sm-8'>";
							the_field('intro');
			echo 		"</div>
						<div class='col-xs-1 col-sm-2'></div></div>
						<div class='row' style='padding-top:20px;'>";
		    while ( have_rows('phone') ) : the_row();
		    	$image = get_sub_field('image');
		    	echo "<div class='phone-outlines col-xs-6 col-sm-3 text-center'>
		    			<img class='img-responsive center-block' src='".$image['url']."' alt='".$image['alt']."'>
		    			<p style='padding-top:10px;'>".get_sub_field('title')."</p>
		    		  </div>";
		    endwhile;
		    echo "</div></div></div>";
		else :
		endif;

	?>
