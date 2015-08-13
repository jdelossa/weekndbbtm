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
								<div class="carousel slide" data-ride="carousel" id="quote-carousel">
										<!-- Bottom Carousel Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
											<li data-target="#quote-carousel" data-slide-to="1"></li>
											<li data-target="#quote-carousel" data-slide-to="2"></li>
										</ol>

										<!-- Carousel Slides / Quotes -->
										<div class="carousel-inner">

											<!-- Quote 1 -->
											<div class="item active">
												<blockquote>
													<div class="row">
														<div class="col-sm-3 text-center">
															<img class="img-circle" src="http://theweekndbbtm.com/wp-content/uploads/2015/08/thumbnail-weeknd-nyt.jpg" style="width: 100px;height:100px;">
														</div>
														<div class="col-sm-9">
															<p>It’s about me being who I am and stepping out of my comfort zone to try to feel something else besides what I’ve been feeling the past four years, ups and downs.</p>
															<small>The Weeknd, <a href="http://www.nytimes.com/2015/08/02/magazine/can-the-weeknd-turn-himself-into-the-biggest-pop-star-in-the-world.html" target="_blank">The New York Times</a></small>
														</div>
													</div>
												</blockquote>
											</div>
											<!-- Quote 2 -->
											<div class="item">
												<blockquote>
													<div class="row">
														<div class="col-sm-3 text-center">
															<img class="img-circle" src="http://theweekndbbtm.com/wp-content/uploads/2015/08/the-weeknd-coachella-thumbnail.jpg" style="width: 100px;height:100px;">
														</div>
														<div class="col-sm-9">
															<p>It's so hard to imagine that we've come this far, but it seems all the hard work has paid off.</p>
															<small>The Weeknd, <a href="http://www.billboard.com/articles/columns/chart-beat/6656857/the-weeknd-celebrates-first-hot-100-no-1-all-the-hard-work-has">Billboard</a></small>
														</div>
													</div>
												</blockquote>
											</div>
											<!-- Quote 3 -->
											<div class="item">
												<blockquote>
													<div class="row">
														<div class="col-sm-3 text-center">
															<img class="img-circle" src="http://theweekndbbtm.com/wp-content/uploads/2015/08/weeknd-billboard-thumbnail.png" style="width: 100px;height:100px;">
														</div>
														<div class="col-sm-9">
															<p>I'm excited for the world to hear the full body of work and experience the vision ... Thank you to Billboard for the endless support and to the fans for staying engaged.</p>
															<small>The Weeknd, <a href="http://www.billboard.com/articles/columns/chart-beat/6656857/the-weeknd-celebrates-first-hot-100-no-1-all-the-hard-work-has">Billboard</a></small>
														</div>
													</div>
												</blockquote>
											</div>
										</div>
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