<?php
function niche_options_init(){
 register_setting( 'niche_options', 'niche_theme_options','niche_options_validate');
} 
add_action( 'admin_init', 'niche_options_init' );
function niche_framework_load_scripts(){
	wp_enqueue_media();
	wp_enqueue_style( 'niche_framework', get_template_directory_uri(). '/theme-options/css/theme-option_framework.css' ,false, '1.0.0');	
}
add_action( 'admin_enqueue_scripts', 'niche_framework_load_scripts' );
function niche_framework_menu_settings() {
	$niche_menu = array(
				'page_title' => __( 'Niche Options', 'niche'),
				'menu_title' => __('Niche Pro Features', 'niche'),
				'capability' => 'edit_theme_options',
				'menu_slug' => 'niche_framework',
				'callback' => 'niche_framework_page'
				);
	return apply_filters( 'niche_framework_menu', $niche_menu );
}
add_action( 'admin_menu', 'niche_options_add_page' ); 
function niche_options_add_page() {
	$niche_menu = niche_framework_menu_settings();
   	add_theme_page($niche_menu['page_title'],$niche_menu['menu_title'],$niche_menu['capability'],$niche_menu['menu_slug'],$niche_menu['callback']);
} 
function niche_framework_page(){ 
		global $select_options; 
		if ( ! isset( $_REQUEST['settings-updated'] ) ) 
		$_REQUEST['settings-updated'] = false;		

?>
<div class="theme-option-themes">
	<form method="post" action="options.php" id="form-option" class="theme_option_ft">
  <div class="theme-option-header">
    <div class="logo">
       <?php
		$niche_image=get_template_directory_uri().'/theme-options/images/logo.png';
		echo "<a href='http://fasterthemes.com/' target='_blank'><img src='".$niche_image."' alt='fasterthemes' /></a>";
		?>
    </div>
  </div>
  <div class="theme-option-details">
    <div class="theme-option-options">
      <div class="right-box">
        <div class="nav-tab-wrapper">
          <ul>
            <li><a id="options-group-1-tab" class="nav-tab basicsettings-tab" title="<?php _e('PRO Theme Features','niche'); ?>" href="#options-group-1"><?php _e('PRO Theme Features','niche'); ?></a></li>
          </ul>  
        </div>
      </div>
      <div class="right-box-bg"></div>
      <div class="postbox left-box"> 
        <!--======================== F I N A L - - T H E M E - - O P T I O N ===================-->
          <?php settings_fields( 'niche_options' );  
		$niche_options = get_option( 'niche_theme_options' );
		 ?>
          <div id="options-group-1" class="group theme-option-inner-tabs"> 
				<div class="niche-pro-header">
              <h2 class="niche-pro-logo">Niche PRO</h2>
              <a href="http://nichepro.fasterthemes.com/" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/theme-options/images/niche-buy-now.png" class="niche-pro-buynow" /></a>  
              </div>
          	<img src="<?php echo get_template_directory_uri(); ?>/theme-options/images/niche-pro-features.png" class="niche-pro-image" />
		  </div>
      </div>
     </div>
	</div>
   </form>    
</div>
<?php } ?>