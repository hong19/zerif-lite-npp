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
				for( $btn_idx = 1; $btn_idx <= $donation_button_amount  ; $btn_idx++ ):

					$zerif_donation_buttonlabel[ $btn_idx ] = get_theme_mod('zerif_donation_buttonlabel_' . $btn_idx);


					$zerif_donation_buttonlink[ $btn_idx ] = get_theme_mod('zerif_donation_buttonlink_' . $btn_idx);

					if( !empty($zerif_donation_buttonlabel[ $btn_idx ]) ):

						echo '<li><div href="' . $zerif_donation_buttonlink[ $btn_idx ] . '" class ="btn btn-lightblue btn-circle">';
						 
						echo $zerif_donation_buttonlabel[ $btn_idx ];
						 
						echo '</div></li>';
				

					endif;
		
				endfor;

				
			 echo '</ul>';

			

		echo '</section>';	

	endif;


?>