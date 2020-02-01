
<div id="main" class="ninecol first clearfix" role="main">


					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						    

					    <?php if ( has_post_thumbnail() ): ?>
							<div class="postimg">
								
									<?php the_post_thumbnail('titelbild');  ?>								<?php 
									$imgexc = get_post(get_post_thumbnail_id())->post_excerpt;
									if ($imgexc != "") {
										?><p class="wp-caption-text"><a href="<?php echo $url ?>" class="fancybox" title="<?php echo $imgexc;?>"><i class="fa fa-picture-o"></i> <?php echo $imgexc;?></a></p><?php 
									} ?>
									
							</div>
							<?php endif; ?>
						
						    <header class="article-header">
							    
							    
							    							
							    <h1 class="h1"><?php the_title(); ?></h1>
							     <?php $amt =  get_post_meta( $post->ID, 'kr8mb_pers_pos_amt', true );   
								if (! empty ($amt )){ ?><h2 class="h2"><?php echo $amt; ?></h2><?php } ?>
								
								<?php $listenplatz =  get_post_meta( $post->ID, 'kr8mb_pers_pos_listenplatz', true );
								if (! empty ($listenplatz )){ ?><div class="placeonlist"><span>Liste 2 Platz <?php echo (int)$listenplatz; ?></span></div><?php } ?>
								
						    </header>
					

										
										<section class="entry-content clearfix">
											
											<?php $wahlkreis =  get_post_meta( $post->ID, 'kr8mb_pers_pos_wahlkreis', true ); 
												if (! empty ($wahlkreis )){ ?><p class="short wahlkreis"><?php echo $wahlkreis; ?></p>
											<?php } ?>
											
											<div class="socialprofile">
											
												
											<?php $www =  get_post_meta( $post->ID, 'kr8mb_pers_contact_www', true );   
												if (! empty ($www )){ ?><a href="<?php echo $www; ?>"><span class="fa fa-globe"></span></a><?php } ?>	
												
											<?php $email =  get_post_meta( $post->ID, 'kr8mb_pers_contact_email', true );   
												if (! empty ($email )){ ?><a href="mailto:<?php echo $email; ?>"><span class="fa fa-envelope"></span></a><?php } ?>
													
											
											<?php $facebook =  get_post_meta( $post->ID, 'kr8mb_pers_contact_facebook', true );   
												if (! empty ($facebook )){ ?><a href="<?php echo $facebook; ?>"><span class="fa fa-facebook"></span></a><?php } ?>
											
											<?php $twitter =  get_post_meta( $post->ID, 'kr8mb_pers_contact_twitter', true );   
												if (! empty ($twitter )){ ?><a href="https://twitter.com/<?php echo $twitter; ?>"><span class="fa fa-twitter"></span></a><?php } ?>

											<?php $instagram =  get_post_meta( $post->ID, 'kr8mb_pers_contact_instagram', true );
												if (! empty ($instagram )){ ?><a href="<?php echo $instagram; ?>"><span class="fa fa-instagram"></span></a><?php } ?>
											
											</div>
											
											
											<?php $excerpt = get_post_meta( $post->ID, 'kr8mb_pers_excerpt', true ); if (! empty ($excerpt )) { 
												if (strpos($excerpt, "\n") > 0) {
													echo '<ul class="intro">';
													foreach(explode("\n", $excerpt) as $entry){
														echo '<li>'.trim($entry).'</li>';
													}
													echo '</ul>';
												} else {
													echo '<p class="intro">'.$excerpt.'</p>';
												}
											} ?>

										
											<?php $anschrift =  get_post_meta( $post->ID, 'kr8mb_pers_contact_anschrift', true );   
												if (! empty ($anschrift )){ ?><div class="anschrift"><?php echo wpautop( $anschrift, $br = 1 ); ?></div><?php } ?>

											<?php  $motivation =  get_post_meta( $post->ID, 'kr8mb_pers_motivation', true );
												if (! empty ($motivation )){ ?><blockquote class="motivation"><?php echo $motivation; ?></blockquote><?php } ?>
											
											<div class="person content">
												<?php the_content(); ?>
											</div>
											
											
										</section>
										

						    

							
						   
						   
						    </article> 

</div>