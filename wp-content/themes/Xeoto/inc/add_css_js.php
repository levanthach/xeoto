<?php 
add_action('wp_enqueue_scripts','p_load_css');
    if(!function_exists('p_load_css')){
        function p_load_css(){
            //rand phien ban css
            $css_ran = rand(1000,10000000);
            wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900');
        	
	        wp_enqueue_style('bootstrap',get_template_directory_uri() . '/assests/css/bootstrap.min.css');
	        wp_enqueue_style('font-awesome',get_template_directory_uri() . '/assests/css/fontawesome-all.min.css');
	        wp_enqueue_style('slick',get_template_directory_uri() . '/assests/css/slick.css');
	        wp_enqueue_style('theme-slick',get_template_directory_uri() . '/assests/css/slick-theme.css'); 
	        wp_enqueue_style('menu-lib',get_template_directory_uri() . '/assests/css/jquery.mmenu.css');
	        wp_enqueue_style('animate',get_template_directory_uri() . '/assests/css/animate.css'); 
	        wp_enqueue_style('lightGallery',get_template_directory_uri() . '/assests/css/lightGallery.css');
	        wp_enqueue_style('lightslider',get_template_directory_uri() . '/assests/css/lightslider.css'); 
	        wp_enqueue_style('menu-position',get_template_directory_uri() . '/assests/css/jquery.mmenu.positioning.css'); 
	        wp_enqueue_style('style-css',get_template_directory_uri() . '/assests/css/style.css'); 
	        wp_enqueue_style('icon',get_template_directory_uri() . '/assests/css/jquery.mmenu.positioning.css');
		}
	}
// load js
add_action('wp_enqueue_scripts', 'p_load_js');
if(!function_exists('p_load_js')){
	function p_load_js() {
		global $wp_scripts,$wp;
        //$js_ran = '1.0';
        $js_ran = rand(1000,100000000);
		wp_enqueue_script('tether', get_template_directory_uri() . '/assests/js/tether.min.js',array('jquery'),'1.0',true);	
		// wp_enqueue_script('jquery', get_template_directory_uri() . '/assests/js/jquery.min.js',array('jquery'),'1.0',true);	
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assests/js/bootstrap.min.js',array('jquery'),'1.0',true);	
		wp_enqueue_script('wowjs', get_template_directory_uri() . '/assests/js/wow.min.js',array('jquery'),'1.0',true);
		wp_enqueue_script('jq-menu', get_template_directory_uri() . '/assests/js/jquery.mmenu.all.js',array('jquery'),'1.0',true);	
		wp_enqueue_script('slick.js', get_template_directory_uri() . '/assests/js/slick.js',array('jquery'),'1.0',true);
		wp_enqueue_script('smotthscroll', get_template_directory_uri() . '/assests/js/smoothscroll.js',array('jquery'),'1.0',true);
		wp_enqueue_script('lightslider', get_template_directory_uri() . '/assests/js/lightslider.js',array('jquery'),'1.0',true);	
		wp_enqueue_script('lightGallery', get_template_directory_uri() . '/assests/js/lightGallery.js',array('jquery'),'1.0',true);
		wp_enqueue_script('main.js', get_template_directory_uri() . '/assests/js/main.js',array('jquery'),$js_ran,true);

	}
}

?>