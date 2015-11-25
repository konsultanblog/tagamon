<footer>
	<?php if (is_active_sidebar('footer-1') || 
				 is_active_sidebar('footer-2')  || 
				 is_active_sidebar('footer-3')  || 
				 is_active_sidebar('footer-4') ) { ?> 
	<div  class="main-footer">
		<div class="container less-padding">
			<div class="col-md-12 footer-row2 ">
					<div class="row footer-main">
						<?php if (is_active_sidebar('footer-1')) { ?> 
						<div class="col-md-3 col-sm-6">
									<?php dynamic_sidebar('footer-1'); ?>
						</div>    
						 <?php }
						 if (is_active_sidebar('footer-2')) { ?> 
						<div class="col-md-3 col-sm-6">    
									<?php dynamic_sidebar('footer-2'); ?>
						</div>  
						<?php } 
						 if (is_active_sidebar('footer-3')) { ?> 
						<div class="col-md-3 col-sm-6">    
									<?php dynamic_sidebar('footer-3'); ?>
						</div>
						<?php } 
						if (is_active_sidebar('footer-4')) { ?> 
						<div class="col-md-3 col-sm-6">    
									<?php dynamic_sidebar('footer-4'); ?>
						</div>
						<?php } ?>
					</div>
			</div>		
		</div>
    </div>	
    <?php } ?>
    
   <div class="col-md-12 footer-row3">
		<div class="container less-padding">
			<div class="col-md-12 footer-bottom">
				<div class="row">
					<div class="col-md-6 col-sm-6 copyright-text">
					    <p>
						<?php
/*						printf( __( 'Powered by %1$s and %2$s ', 'niche' ), '<a href="http://wordpress.org" target="_blank">WordPress</a>', '<a href="http://fasterthemes.com/wordpress-themes/niche" target="_blank">Niche</a>' ); 
*/
						
						 $niche_copyright_check = get_theme_mod( 'copyright_text' );
							if( $niche_copyright_check != '' ) {
								 echo esc_html( get_theme_mod('copyright_text', '') );   } 
						 ?>
						</p>
					</div>
					
					<?php
						$niche_facebook_check = get_theme_mod('facebook_setting');
						$niche_twitter_check = get_theme_mod( 'twitter_setting' );
						$niche_rss_check = get_theme_mod( 'rss_setting' );
						$niche_pinterest_check = get_theme_mod( 'pinterest_setting' );
						$niche_youtube_check = get_theme_mod( 'youtube_setting' );
					
						if(!empty($niche_facebook_check) || 
							!empty($niche_twitter_check) || 
							!empty($niche_rss_check) || 
							!empty($niche_pinterest_check) || 
							!empty($niche_youtube_check)) { ?>
					<div class="col-md-6 col-sm-6 footer-sociallink">
					   <ul class="social-links">
							<?php if(!empty($niche_facebook_check)) { ?>
								<li> <a href="<?php echo esc_url($niche_facebook_check); ?>"> <i class="fa fa-facebook"></i> </a> </li>
							<?php }
								if(!empty($niche_twitter_check)) { ?>
								<li> <a href="<?php echo esc_url($niche_twitter_check); ?>" > <i class="fa fa-twitter"></i> </a> </li>
							<?php } 
								if(!empty($niche_youtube_check)) { ?>
								<li> <a href="<?php esc_url($niche_youtube_check); ?>"> <i class="fa fa-youtube"></i> </a> </li>
							<?php } 
								if(!empty($niche_rss_check)) {  ?>
								<li> <a href="<?php echo esc_url($niche_rss_check); ?>"> <i class="fa fa-rss"></i> </a> </li>
							<?php } 
								if(!empty($niche_pinterest_check)) {  ?>
								<li> <a href="<?php echo  esc_url($niche_pinterest_check); ?>"> <i class="fa fa-pinterest"></i> </a> </li>
							<?php } ?>
					</div>
					<?php } ?>
				</div>  
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<?php include('analitics.php'); ?>
</body>
</html>


