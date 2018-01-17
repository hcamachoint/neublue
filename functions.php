<?php
require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
   register_nav_menus(
      array(
         '<strong>primary</strong>'   => __( 'Primary Menu' )
      )
   );
}

if ( function_exists('register_sidebar') ) //Widget Footer Widgets Center
        register_sidebar(array(
            'name' => 'Footer Widgets Center',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));


add_action( 'init', 'register_my_menus' );	//Registra el menu del navbar (wp_bootstrap_navwalker.php)
add_filter( 'show_admin_bar', '__return_false' ); //Oculta la barra del administrador
add_theme_support( 'custom-header' );		//Permite editar el header
remove_filter ('the_content',  'wpautop');	//Remueve el filtro de los <p></p> automaticos
remove_filter ('comment_text', 'wpautop');	//Remueve el filtro de los <p></p> automaticos

function wpbootstrap_scripts()
{
	wp_enqueue_style('bs_css', get_template_directory_uri(). '/css/bootstrap.css');
  wp_enqueue_style('cs_css', get_template_directory_uri(). '/css/neublue.css');

	wp_enqueue_script( 'wpbootstrap-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script( 'wpbootstrap-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
  wp_enqueue_script( 'wpbootstrap-fontawesome', get_template_directory_uri() . '/js/fontawesome-all.js', array(), '1.0.0', true);
	wp_enqueue_script('wpbootstrap-parallax',  get_template_directory_uri() . '/js/parallax.min.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts' );
?>
