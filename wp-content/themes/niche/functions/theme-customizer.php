<?php
function niche_theme_customizer( $wp_customize ) {
    /* sections */
    $wp_customize->add_section( 'niche_basic_section' , array(
    'title'       => __( 'Basic Settings', 'niche' ),
    'priority'    => 30,
	'capability'     => 'edit_theme_options',
	) );
        
	$wp_customize->add_section( 'niche_social_icons_section', array(
		'title'          => __( 'Social Settings','niche'),
		'priority'       => 35,
		'capability'     => 'edit_theme_options',
	) );
	
	$wp_customize->add_panel( 'home_id', array(
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Home Page Settings','niche'),
		'description'    => '',
		'priority'    => 30,
	) );
	$wp_customize->add_section( 'niche_silder_section' , array(
		'title'       => __( 'Slider Section', 'niche' ),
		'priority'    => 30,
		'panel'  => 'home_id',
		'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_section( 'niche_perfection_section' , array(
		'title'       => __( 'Our path to Perfection', 'niche' ),
		'priority'    => 30,
		'panel'  => 'home_id',
		'capability'     => 'edit_theme_options',
	) );
    $wp_customize->add_section( 'niche_blog_section' , array(
		'title'       => __( 'Blog Section', 'niche' ),
		'priority'    => 30,
		'panel'  => 'home_id',
		'capability'     => 'edit_theme_options',
	) );
	

	/* basic section */
	/*theme logo*/
	$wp_customize->add_setting( 'niche_logo' ,array(
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
		)
	 );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'niche_logo', array(
		'label'    => __( 'Logo (Recommended size 220 x 120)', 'niche' ),
		'section'  => 'niche_basic_section',
		'settings' => 'niche_logo',
	) ) );
	
	
	// breadcrumbs
	$wp_customize->add_setting( 'niche_breadcrumbs_image_bg',array(
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
		)
	 );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'niche_breadcrumbs_image_bg', array(
    'label'    => __( 'Breadcrumbs Backgroung Image (Recommended Size : 1350px * 200px)', 'niche' ),
    'section'  => 'niche_basic_section',
    'settings' => 'niche_breadcrumbs_image_bg',
	) ) );
	
	

	// blog title
	$wp_customize->add_setting( 'niche_blogtitle', array(
            'default'        => ' ',
            'sanitize_callback' => 'esc_attr',
			'capability'     => 'edit_theme_options',
        ) );
   $wp_customize->add_control( 'niche_blogtitle', array(
		'label'   => __('Blog Title','niche'),
		'section' => 'niche_basic_section',
		'type'    => 'text',
        ) );
        

	// copyright
	$wp_customize->add_setting( 'copyright_text', array(
		'default'        => '',
		'sanitize_callback' => 'esc_html',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'copyright_text', array(
		'label'   => __('Copyright text','niche'),
		'section' => 'niche_basic_section',
		'type'    => 'text'
	) );


	// Social Section
	$wp_customize->add_setting( 'twitter_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'twitter_setting', array(
		'label'   => __('Twitter URL','niche'),
		'section' => 'niche_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'facebook_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'facebook_setting', array(
		'label'   => __('Facebook URL','niche'),
		'section' => 'niche_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'youtube_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'youtube_setting', array(
		'label'   => __('YouTube URL','niche'),
		'section' => 'niche_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'pinterest_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'pinterest_setting', array(
		'label'   => __('Pinterest URL','niche'),
		'section' => 'niche_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );
	
	$wp_customize->add_setting( 'rss_setting', array(
		'default'        => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'rss_setting', array(
		'label'   => __('RSS Feed URL','niche'),
		'section' => 'niche_social_icons_section',
		'type'    => 'text',
		'priority' => 1
	) );   

	// home page	
	$wp_customize->add_setting( 'niche_metaslider', array(
            'default'        => '',
            'sanitize_callback' => 'absint',
			'capability'     => 'edit_theme_options',
        ) );
    $wp_customize->add_control( 'niche_metaslider', array(
			'label'   => __('Meta Slider Id','niche'),
            'section' => 'niche_silder_section',
            'type'    => 'number',
           
        ) );  
        
   //Our path to Perfection
	$wp_customize->add_setting( 'niche_perfectiontitle', array(
		'default'        => '',
		'sanitize_callback' => 'esc_attr',
		'capability'     => 'edit_theme_options',
	) );
    $wp_customize->add_control( 'niche_perfectiontitle', array(
		'label'   => __('Perfection Title','niche'),
		'section' => 'niche_perfection_section',
		'type'    => 'text',
    ) );
	
	 $wp_customize->add_setting( 'niche_perfectioninfo', array(
		'default'        => '',
		'sanitize_callback' => 'esc_textarea',
		'capability'     => 'edit_theme_options',
	) );
    $wp_customize->add_control( 'niche_perfectioninfo', array(
		'label'   => __('Perfection Info','niche'),
        'section' => 'niche_perfection_section',
        'type'    => 'textarea',
   ) );
   $wp_customize->add_setting( 'niche_perfection_image',array(
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'niche_perfection_image', array(
			'label'    => __( 'Image (Recommended size 500 x 500)', 'niche' ),
			'section'  => 'niche_perfection_section',
			'settings' => 'niche_perfection_image',
		) 
	) );
   
	$wp_customize->add_setting( 'niche_perfection_image_bg',array(
		'sanitize_callback' => 'esc_url_raw',
		'capability'     => 'edit_theme_options',
		)
	);
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'niche_perfection_image_bg', array(
			'label'    => __( 'Background Image (Recommended size 1280 x 853)', 'niche' ),
			'section'  => 'niche_perfection_section',
			'settings' => 'niche_perfection_image_bg',
		) 
	) );
       
        
     //Blog Section
	$wp_customize->add_setting( 'niche_blog-title', array(
		'default'        => '',
		'sanitize_callback' => 'esc_attr',
		'capability'     => 'edit_theme_options',
	) );
    
    $wp_customize->add_control( 'niche_blog-title', array(
		'label'   => __('Blog Title','niche'),
        'section' => 'niche_blog_section',
        'type'    => 'text'
    ) );
		
	$wp_customize->add_setting( 'niche_bloginfo', array(
		'default'        => '',
		'sanitize_callback' => 'esc_textarea',
		'capability'     => 'edit_theme_options',
	) );
    
    $wp_customize->add_control( 'niche_bloginfo', array(
		'label'   => __('Blog Info','niche'),
        'section' => 'niche_blog_section',
        'type'    => 'textarea',
    ) );
        
	$niche_args = array(
	'posts_per_page'=> -1,
	'meta_query' => array(
						array(
						'key' => '_thumbnail_id',
						'compare' => 'EXISTS'
							),
						)
					);  
	$niche_post = new WP_Query( $niche_args );
	$niche_cat_id=array();
	while($niche_post->have_posts()){
	$niche_post->the_post();
	$niche_post_categories = wp_get_post_categories( get_the_id());
	foreach($niche_post_categories as $niche_post_category)
		$niche_cat_id[]=$niche_post_category;
	}
	
	$niche_cat_id=array_unique($niche_cat_id);
	$niche_args = array(
	'orderby' => 'name',
	'parent' => 0,
	'include'=>$niche_cat_id,
	
	);
	$niche_cats=array();$i = 0;
	$niche_categories = get_categories($niche_args); 
	  foreach ($niche_categories as $niche_category) {
		  if($i==0){
			$niche_default = $niche_category->term_id;
			$i++;
		}
		$niche_cats[$niche_category->term_id] =  $niche_category->cat_name;
	  }        
      
	 $wp_customize->add_setting( 'niche_blogcategory', array(
		'default'        => $niche_default,
		'sanitize_callback' => 'esc_attr',
		'capability'     => 'edit_theme_options',
				
	) );
    
    $wp_customize->add_control( 'niche_blogcategory', array(
			'label'   => __('Select Category','niche'),
            'section' => 'niche_blog_section',
            'type'    => 'select',
            'choices' => $niche_cats,
        ) );
                
	$wp_customize->add_setting( 'niche_metaslider', array(
            'default'        => '',
            'sanitize_callback' => 'absint',
			'capability'     => 'edit_theme_options',
        ) );
    
    $wp_customize->add_control( 'niche_metaslider', array(
			'label'   => __('Meta Slider Id','niche'),
            'section' => 'niche_silder_section',
            'type'    => 'number',
           
        ) );           

            
}
add_action( 'customize_register', 'niche_theme_customizer' );

?>
