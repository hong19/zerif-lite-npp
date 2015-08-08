<?php


	$zerif_blueribbon_text = 1;


	if( !empty($zerif_blueribbon_text) ):


		echo '<section class="donation">';

			echo '<h2 class="text">捐款</h2>';

			echo '<ul class="nav navbar-nav navbar-inner">';

				$ary_amount = array( "200", "500", "1000", "5000", "其他");

				foreach( $ary_amount as $amount ){
					echo '<li><div href="#" class ="btn btn-lightblue btn-circle">' . $amount . '</div></li>';
				}

			echo '</ul>';


		echo '</section>';	

	endif;


?>