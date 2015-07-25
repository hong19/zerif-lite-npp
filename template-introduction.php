<?php
/*
Template Name: Introduction

This template is created for introduction. 
The contents in this page are static. 
*/


get_header();


$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');

if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):
	include get_template_directory() . "/sections/big_title.php";
endif;

?>
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-9">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$wp_query = new WP_Query( array('post_type' => 'post', 'showposts' => '8', 'paged' => $paged) );

					if( $wp_query->have_posts() ):
					 
						while ($wp_query->have_posts()) : 
						
							$wp_query->the_post();
							get_template_part( 'content', get_post_format() );

						endwhile;

					endif;

					zerif_paging_nav();

					wp_reset_postdata();
					?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

		<div class="sidebar-wrap col-md-3 content-left-wrap">

			<?php get_sidebar(); ?>

		</div><!-- .sidebar-wrap -->


	</div><!-- .container -->


<?php
	
	/* RIBBON WITH BOTTOM BUTTON */
	include get_template_directory() . "/sections/ribbon_with_bottom_button.php";
	
	
	/* ABOUT US */

	$zerif_aboutus_show = get_theme_mod('zerif_aboutus_show');

	if( isset($zerif_aboutus_show) && $zerif_aboutus_show != 1 ):

		include get_template_directory() . "/sections/about_us.php";
	endif;



	/* TESTIMONIALS */

	$zerif_testimonials_show = get_theme_mod('zerif_testimonials_show');

	if( isset($zerif_testimonials_show) && $zerif_testimonials_show != 1 ):

		include get_template_directory() . "/sections/testimonials.php";
	endif;


?>


<?php
get_footer();
?>