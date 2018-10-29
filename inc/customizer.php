<?php
// //post support 
// function themename_custom_post_formats_setup(){ 
//     add_post_type_support('page','post-formats');
//     add_post_type_support('my_custom_post_type','post-formats'); 
//     add_theme_support('post-thumbnails');
//     add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );  
// }
// add_action('init','themename_custom_post_formats_setup'); 


//  //Para Registrar logo
//  function themename_custom_logo_setup() {
//     $defaults = array(
//         'height'      => 100,
//         'width'       => 400,
//         'flex-height' => true,
//         'flex-width'  => true,
//         'header-text' => array( 'site-title', 'site-description' ),
//     );
//     add_theme_support( 'custom-logo', $defaults ); 
//  }
//  add_action( 'after_setup_theme', 'themename_custom_logo_setup' ); 


//   //Para Registrar Header
//  /*
//  function themename_custom_header_setup() {
//   $args = array(
//       'default-image'      => get_template_directory_uri() .'/img/default-image.png',
//       'default-text-color' => '000',
//       'header-text'        => false,
//       'width'              => 40,
//       'height'             => 30,
//       'flex-width'         => true,
//       'flex-height'        => true,
//   );
//   add_theme_support( 'custom-header', $args );
// }
// add_action( 'after_setup_theme', 'themename_custom_header_setup' );*/ 


// //Para obtener solo la url de la imagen thumbnail
// function main_image_url($size){
//     global $post; 
//     $image_id = get_post_thumbnail_id($post -> ID);
//     $main_image = wp_get_attachment_image_src($image_id, $size);
//     //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
//     return $main_image[0];
// }
// //Get time ago
// function get_time_ago(){ 
//     return human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' atras';
// }

// //Custom description
//  if(!function_exists('custom_meta_description')):
//     function custom_meta_description(){
//         if(is_home()||is_front_page()){
//             $description = get_bloginfo('description');
//         }else if(is_category()||is_tag()){
//             $description = strip_tags(term_description());
//         }else if(is_single()||is_page()){
//             the_post();
//             $description = htmlentities(get_the_excerpt(),ENT_HTML5,'UTF-8');
//             rewind_posts();
//         }else if(is_author()){
//             $description = get_the_author_meta('description');
//         }else if(is_search()){
//             $description = __('Resultados de la busqueda:','mawt').get_search_query();
//         }else if(is_404()){
//             $description = __('Error 404:No se Encontrado.','mawt').get_bloginfo('description');
//         }else{
//             $description = get_bloginfo('description');
//         }
//         echo $description;
//     }
// endif;    

 

function wpb_customize_register($wp_customize){
    //Showcase section
    $wp_customize -> add_section('showcase',array(
        'title' => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase','wpbootstrap')),
        'priority' => 130
    ));
    
    
    $wp_customize -> add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'../assets/img/banner.jpg',
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
        'label'   => __('Showcase Image', 'wpbootstrap'),
        'section' => 'showcase',
        'setting' => 'showcase_image',
        'priority' => 1
    )) );
    $wp_customize -> add_setting('front_image', array(
        'default' => get_bloginfo('template_directory').'../assets/img/bus.svg',
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'front_image',array(
        'label'   => __('Front Image', 'wpbootstrap'),
        'section' => 'showcase',
        'setting' => 'front_image',
        'priority' => 1
    )) );
    
    
    $wp_customize -> add_setting('showcase_heading', array(
        'default' => _x('Its name of the company','wpbootstrap'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('showcase_heading', array(
        'label'   => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));
    $wp_customize -> add_setting('showcase_description', array(
        'default' => _x('Description de la empresa','wpbootstrap'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('showcase_description', array(
        'label'   => __('Description', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 2
    ));
    $wp_customize -> add_setting('showcase_text', array(
        'default' => _x('Lorem ipsum dolor sit amet, assumenda fugit id a error, incidunt illum nisi, molestiae voluptate repellat ullam veritatis! Eaque ipsum laudantium esse nulla.','wpbootstrap'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('showcase_text', array(
        'label'   => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 3
    ));
    $wp_customize -> add_setting('btn_url', array(
        'default' => _x('http://test.com','wpbootstrap'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('btn_url', array(
        'label'   => __('Button URL', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 4
    ));
    $wp_customize -> add_setting('btn_text', array(
        'default' => _x('Read More','wpbootstrap'),
        'type'    => 'theme_mod'
    ));
    $wp_customize -> add_control('btn_text', array(
        'label'   => __('Button Text', 'wpbootstrap'),
        'section' => 'showcase',
        'priority' => 5
    ));
    }
    add_action('customize_register','wpb_customize_register');


























