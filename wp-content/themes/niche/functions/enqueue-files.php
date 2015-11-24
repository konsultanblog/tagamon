<?php

/*
 * niche Enqueue css and js files
 */

function niche_enqueue() {
    wp_enqueue_style('niche-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style('niche-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array());
    wp_enqueue_style('niche-theme-deafult', get_template_directory_uri() . '/css/theme-deafult.css', array());
    wp_enqueue_style('niche-style', get_stylesheet_uri(), array());

    wp_enqueue_script('niche-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
	    wp_enqueue_script('niche-deafult', get_template_directory_uri() . '/js/deafult.js', array('jquery'));
	    	
    if (is_singular())
        wp_enqueue_script("comment-reply");
    
    if(is_page_template('page-template/front-page.php')){
        wp_enqueue_script('niche-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'));
        wp_enqueue_script('niche-homepage', get_template_directory_uri() . '/js/homepage.js', array('jquery'));
    }
    

    
}

add_action('wp_enqueue_scripts', 'niche_enqueue');
