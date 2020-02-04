<?php
/*
Template Name: Startseite - Kampagnen
*/
?>

			<?php get_header(); ?>	
			
			
				<?php if ( has_post_thumbnail() ): 
				
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
					$url = $thumb['0']; ?>
				<div class="fullpage parallax" style="background-image:url(<?php echo $url ?>);">
						<div class="introbg parallax fullpage" style="background-image:url(<?php echo $url ?>);"></div>

					
					
					<div class="story-intro">
							<div class="inner">
							<h1><?php the_title(); ?></h1>
							<p><?php the_excerpt(); ?></p>
							
							
				<?php $cta =  get_post_meta( $post->ID, 'kr8mb_page_campaign_cta', true );   
					if (! empty ($cta )){ ?><p class="cta"><?php echo $cta; ?></p><?php } ?>	


							
							</div>
					</div>
					

				</div>
				
								
			<?php endif; ?>
			
			
			<div class="inner wrap clearfix">	
				
				
					<div id="donatenow" class="clearfix">
						<h2>Kommunalwahl</h2>
						<span>15. März 2020</span>
					</div>
					
					
				<div id="getmore">
						<h2>Erfahre mehr</h2>
						
						<div class="sidebar clearfix involvebar" role="complementary">
						<?php dynamic_sidebar('campaigntwo'); ?>
						</div>
						
				</div>	
						
				
			</div>
			

					
					
			
			<div id="teaser" class="parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/lib/images/bg_trees.jpg);">
					<div class="inner wrap clearfix sylvia">
						<div class="josephbeuys">
							<?php dynamic_sidebar('hometeaser'); ?>
						</div>
					</div>
			</div>
			
			
				<section id="content"><div class="inner wrap clearfix">	
			
				
				
				<div id="getinvolved">
					<h2>Werde aktiv</h2>
					
					<div class="sidebar clearfix involvebar" role="complementary">
					<?php dynamic_sidebar('campaignone'); ?>
					</div>
					
				</div>	
			

			<div class="ninecol first clearfix" role="main">
				<div class="responsive-tabs home-tabs">
					
					<h2><span>Aktuelles</span></h2>
					<div class="tab clearfix">
					
						
						<?php wp_reset_query(); ?>

    		
	
							<?php 
								$postsperpage = get_option('posts_per_page');
								$args = array(
								'posts_per_page' => 3,
								'post__in'  => get_option( 'sticky_posts' ),
								'posts_per_page' => $postsperpage,
								'ignore_sticky_posts' => 1
							);
							query_posts($args);
						?>
					    		
    		
    					<?php while ( have_posts() ) : the_post(); ?>
					    	<?php get_template_part( 'content-list', get_post_format() ); ?>
					    <?php endwhile; ?>	
					   
					
					<p><span class="button"><a href="/category/aktuelles/">Mehr Aktuelles...</a></span></p>
			
			
    				</div>
    				<h2><span>Termine</span></h2>
    				<div class="tab clearfix">
	    				
	    				<?php echo do_shortcode('[ics_calendar
url="https://Gruen_Kal_Leser:K61-m!fIk-8327@speicherbegruenung.de/remote.php/dav/calendars/Gruen_Kal_Leser/kreisverband_shared_by_FxGsm?export https://Gruen_Kal_Leser:K61-m!fIk-8327@speicherbegruenung.de/remote.php/dav/calendars/Gruen_Kal_Leser/stadtratsfraktion_shared_by_FxGsm?export"
title="Kreisverband & Stadtratsfraktion"
color="#46962b #ffee00"
view="list"
location="true"
showendtimes="true"
toggle="false"
count="5"
]'); ?>
					</div>
					
					<h2><span>Anträge</span></h2>
    				<div class="tab clearfix">
	    				
						<?php wp_reset_query(); ?>

    		
					    
						<?php 
							$postsperpage = get_option('posts_per_page');		
							query_posts('posts_per_page=15&ignore_sticky_posts=1&category_name=fraktion-antraege'); 
							?>
					    		
    		
    					<?php while ( have_posts() ) : the_post(); ?>
					    	<?php get_template_part( 'content-list', get_post_format() ); ?>
					    <?php endwhile; ?>	
					   
							<p><span class="button"><a href="/category/fraktion-antraege/">Mehr Anträge...</a></span></p>

					</div>
					

					
					
				</div>
			</div>
			<script>jQuery(document).ready(function() { RESPONSIVEUI.responsiveTabs(); }) </script>
			
			<div id="sidebar1" class="sidebar threecol last clearfix homebar" role="complementary">
			<?php dynamic_sidebar('hometwo'); ?>
			</div>
			
				
			</div></section>
			<?php get_footer(); ?>


