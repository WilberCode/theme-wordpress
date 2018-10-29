<?php
 
// Para activar widgets y menu
function my_register_sidebars() { 
    register_sidebar( array(
      'name'          => __( 'Primary Sidebar', 'theme_name' ),
      'id'            => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));   
    } 
  add_action( 'widgets_init', 'my_register_sidebars' );

  
  //Activar Menu
  function menus(){ 
     register_nav_menus(array(
      'main-menu'=>'Menú Principal'
     ));  
     register_nav_menus(array(
      'popular-news'=>'Popular News'
     ));  
  }
  add_action('after_setup_theme', 'menus');