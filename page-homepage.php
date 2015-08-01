<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

                            <div id="about">

                            <div id="clock" class="clock"></div>
                            <script type="text/javascript">
                                jQuery(function ($) {
                                    $('#clock').countdown('2015/08/28', function(event) {
                                        var $this = $(this).html(event.strftime(''

                                        + '<span>%-D</span> days '
                                        + '<span>%H</span> hr '
                                        + '<span>%M</span> min '
                                        + '<span>%S</span> sec'));
                                    });
                                });
                            </script>

                            </div>

							<!--<div class="jumbotron"></div>-->
						
						</header>

						<section class="row post_content">

							<div class="col-sm-12">

                                <div id="tracks">
								    <?php the_content(); ?>
                                </div>

                                <div class="instagram">
                                    <h4 id="links">Beauty Behind The Madness</h4>
                                </div>

							</div>

						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>