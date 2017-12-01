<?php  
	function resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
		wp_enqueue_style('font-awesom', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	}

	add_action('wp_enqueue_scripts', 'resources');
?>