
            <footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

					<p class="pull-right">
                    <span class="small">Made with love by <a href="http://twitter.com/simplyjojoo" title="Joanna" target="_blank">Joanna</a></span></p>
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
        <script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.countdown.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.instagram.min.js"></script>
        <script>
            function createPhotoElement(photo) {
                var innerHtml = jQuery('<img>')
                    .addClass('instagram-image')
                    .attr('src', photo.images.standard_resolution.url);

                innerHtml = jQuery('<a>')
                    .attr('target', '_blank')
                    .attr('href', photo.link)
                    .append(innerHtml);

                return jQuery('<div>')
                    .addClass('instagram-placeholder')
                    .attr('id', photo.id)
                    .append(innerHtml);
            }
            
            function didLoadInstagram(event, response) {
                var that = this;

                jQuery.each(response.data, function(i, photo) {
                    jQuery(that).append(createPhotoElement(photo));
                });
            }

            jQuery(document).ready(function() {
                var clientId = 'cd83ca49779d456bb35cc7549d41cfdc';

                jQuery('.instagram').on('didLoadInstagram', didLoadInstagram);
                jQuery('.instagram').instagram({
                    hash: 'TheWeeknd',
                    count: 100,
                    clientId: clientId
                });

            });
        </script>
        <script>
            jQuery(function() {
                jQuery('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = jQuery(this.hash);
                        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            jQuery('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
                //Set the carousel options
                jQuery('#quote-carousel').carousel({
                    pause: true,
                    interval: 4000,
                });
            });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45993369-2', 'auto');
          ga('send', 'pageview');
        </script>


	</body>

</html>