<?php
/**
 * The Header template for our theme
 */
$niche_options = get_option('niche_theme_options');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
                <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="container less-padding">
                    <div class="row">
                    <div class="col-md-3 col-sm-3 header-logo">
                        <?php  if ( get_theme_mod( 'niche_logo' ) ) { ?>
							<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'niche_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="img-responsive"></a>
                        <?php } else { ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
									<h3 class="site-title logo-box"><?php bloginfo( 'name' ); ?></h3>
									<span class="site-description"><?php bloginfo( 'description' ); ?></span>
                            </a>
                        <?php }  ?>
                        <div class="navbar-header">
							<button type="button" class="navbar-toggle navbar-toggle-top sort-menu-icon collapsed" 
									data-toggle="collapse" data-target=".navbar-collapse"> 
								<span class="sr-only"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span> 
								<span class="icon-bar"></span>
							</button>
						</div>
                    </div>
                    <div class="col-md-9 col-sm-9 header-menu header-navigation">
						
                        <?php
                        if (has_nav_menu('primary')) {
                            $niche_defaults = array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_class' => 'theme-menu navbar-collapse collapse',
                            'container_id' => 'example-navbar-collapse',
                            'echo' => true,
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                        );
                            wp_nav_menu($niche_defaults);
                        }
                        ?> 
                        
                        
                        
                    </div>    
                </div>
            </div>
        </header>
        <?php if (get_header_image()) { ?>
                <div class="custom-header-img">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php the_title_attribute(); ?>">
                    </a>
                </div>
<?php }     ?>
