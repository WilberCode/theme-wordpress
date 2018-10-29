<?php

include(get_template_directory().'./inc/customizer.php'); //showcase

include(get_template_directory().'./inc/head.php');
include(get_template_directory().'./inc/theme-customizer.php');
function page_styles(){ 
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style('font-title',"https://fonts.googleapis.com/css?family=Audiowide|Lilita+One|Rubik+Mono+One&amp;subset=cyrillic,latin-ext");
    wp_enqueue_style('font-Montserrat',"https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,800,900");
    wp_enqueue_script('font-Awesome-JavaScript',"https://use.fontawesome.com/releases/v5.0.6/js/all.js");
    wp_enqueue_style('font-Awesome-Css',"https://use.fontawesome.com/releases/v5.0.13/css/all.css");
    //wp_enqueue_script('script',get_template_directory_uri().'/ed-grid/js/ed-grid.js',array(),null,true);
    // wp_enqueue_script('script',get_template_directory_uri().'/js/index.js',array(),null,true);
    
    //wp_enqueue_script('bootstrapjs',"https://code.jquery.com/jquery-1.4.1.min.js", array('jquery'),'1.4.1',true);    
     // wp_enqueue_script('ed-grid',get_template_directory_uri().'/ed-grid/js/ed-grid.js',array('ed-grid'),1.1,true);
    // wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',array('script'),1.1,true);
}
add_action('wp_enqueue_scripts', 'page_styles'); 

function front_widgets(){
    register_sidebar(array(
        'name' => __('Services Widget'),
        'id' =>'services_widget',
        'description'   => 'Widget para lista de servicios',
        'before_widget' => '<div class="services__content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="services__title">',
        'after_title'   => '</h1>'
 
    ));
    register_sidebar(array(
        'name' => __('Terminals Widget'),
        'id' =>'terminals_widget',
        'description'   => 'Widget para lista de Terminales',
        'before_widget' => '<div class="terminals__content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 class="terminals__title">',
        'after_title'   => '</h1>'
 
    ));
}
add_action('widgets_init', 'front_widgets');

//Menu
function custom_theme_setup(){ 
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) ); 
    add_theme_support('post-thumbnails');
// register Menu
    register_nav_menus(array(
        'main-menu'=>'Menú Principal'
    )); 

}
add_action('after_setup_theme', 'custom_theme_setup');