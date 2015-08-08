<?php


	$zerif_donation_text = get_theme_mod('zerif_donation_text');


	if( !empty($zerif_donation_text) ):


		echo '<section class="donation">';

			echo '<h2 class="text">';

			echo __($zerif_donation_text,'zerif-lite');

			echo '</h2>';

			echo '<ul class="nav navbar-nav navbar-inner">';


				$zerif_donation_buttonlabel = array();
				$zerif_donation_buttonlink = array();	
				$donation_button_amount = 8;
				for( $i = 1; $i <= $donation_button_amount  ; $i++ ):

					$zerif_donation_buttonlabel[ $i ] = get_theme_mod('zerif_donation_buttonlabel_' . $i);


					$zerif_donation_buttonlink[ $i ] = get_theme_mod('zerif_donation_buttonlink_' . $i);

					if( !empty($zerif_donation_buttonlabel[ $i ]) ):

						echo '<li><div href="' . $zerif_donation_buttonlink[ $i ] . '" class ="btn btn-lightblue btn-circle">';
						 
						echo $zerif_donation_buttonlabel[ $i ];
						 
						echo '</div></li>';
				

					endif;
		
				endfor;

				
			echo '</ul>';


		echo '</section>';	

	endif;


?>