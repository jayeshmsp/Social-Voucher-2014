<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</section><!-- #main -->
<div class="overlay">
    <section id="pop-contact" class="pop">
      <a href="" class="btn-close"></a>
      <div class="clearfix">
        <div class="pop-text">
          <h2 class="light">Contact us</h2>
          <div class="light">We would love to hear from you:</div>
          <div><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pic-contact.png" alt="" /></div>
        </div>
        <div class="pop-form contact_form_popup">
            <?php echo do_shortcode('[contact-form-7 id="15" title="Contact Us"]'); ?>
        </div>
      </div>
    </section>
    
    <!--Video Password Prompt-->
    
    <section id="pop-video" class="pop">
    <a href="" class="btn-close"></a>
      <div class="clearfix">
    <h2 class="light" style="color:#f49723;">Enter Password</h2>
        <div class="pop-text">
          <div class="light">Enter the Password:</div>
        </div>
        <div class="pop-form">
          <div class="form-fld">
            <label class="hide">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password:" />
          </div>
        </div>
         <div class="form-btn"><input type="submit" name="btn-send" id="btn-send-vidpass" value="Submit" /></div>
         <div id="error_message"></div>
      </div>
    </section>
    
    <!--End Video Password-->
    
    
    <!-- For Displaying career page in popup -->
    
    <section id="pop-careers" class="pop">
    <a href="" class="btn-close"></a>
      <div class="clearfix">
        <div class="pop-text">
            <?php 
            
                $page_id='16';
                $page_data = get_page( $page_id );
                echo apply_filters('the_content', $page_data->post_content);

            ?>
        </div>
      </div>
    </section>
    <!--Video Player-->
    <section id="pop-view" class="pop">
    <a href="" class="vid btn-close"></a>
      <div class="clearfix">
        <div class="pop-text">
                    
		  <!--video id="investor-video" preload="auto" style="margin: auto;">
            <source src="images/social-voucher-video.mp4" type="video/mp4">
  
            Your browser does not support HTML5 video.
          </video>-->
          
          <div id="jp_container_1" class="jp-video jp-video-360p" role="application" aria-label="media player">
				<div class="jp-type-single">
					<div id="jquery_jplayer_1" class="jp-jplayer"></div>
					<!--Controls-->
					<div class="jp-gui">
			<div class="jp-video-play">
				<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
			</div>
			<div class="jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-controls-holder">
					<div class="jp-controls">
						<button class="jp-play" role="button" tabindex="0">play</button>
						<button class="jp-stop" role="button" tabindex="0">stop</button>
					</div>
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">mute</button>
						<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
					</div>
					<div class="jp-toggles">
						<button class="jp-repeat" role="button" tabindex="0">repeat</button>
						<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
					</div>
				</div>
				<div class="jp-details">
					<div class="jp-title" aria-label="title">&nbsp;</div>
				</div>
			</div>
		</div>
					<!--End Controls-->
					
				</div>
          </div>
          
        </div>
      </div>  
    </section>
    
    <!--End Video-->
    
    <section id="pop-share" class="pop">
      <a href="" class="btn-close"></a>
      <div class="pop-top">
        <h2 class="light">Great!</h2>
        <div>You are #<span id="number"></span> on our waiting list </div>
      </div>
      <div class="pop-bottom">
        <h3>Use this unique link to invite friends <br />to jump the queue with you</h3>
        <div id="share-link"></div>
        <div id="share-btns">
          <a href="#" target="_blank" id="fb-share" alt="facebbok"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fb.png" alt="Share it" /></a>
          <a href="#" target="_blank" id="tweet-share"  alt="twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-tweet.png" alt="Tweet it" /></a>
        </div>
        <div>Mmm... You have <span id="referrals">0</span> referrals.</div>
            </div>
        </section>
    </div>
</div>
		<footer>
			<?php get_sidebar( 'main' ); ?>
		</footer><!-- #colophon -->
    
  <!-- Custom Code by MSP Team -->
    
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bower_components/jquery-ui/ui/jquery-ui.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bower_components/video.js/video.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bower_components/BigVideo/lib/bigvideo.js"></script>
  
  <!-- End Custom Code by MSP Team -->

	<?php wp_footer(); ?>
</body>
</html>