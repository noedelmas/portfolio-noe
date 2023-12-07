<?php 

/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );

?>
<?php
add_theme_support( 'post-thumbnails' );

// Création du CPT Apprennant

function apprenants2_register_post_types(){

  // CPT Apprenants
  $labels_apprenants2 = array(

    'name' => 'apprenants2',
    'all items' => 'Tous les apprenants2', // Nom affiché dans le sous-menu
    'singular_name' => 'Apprenants2',
    'add_new_item' => 'Ajouter un apprenant2',
    'edit _item' => 'Modifier apprenants2',
    'menu_name' => 'Apprenants2'

  );

  $args = array(


    'labels' => $labels_apprenants2,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-customizer'

  );

  register_post_type( 'apprenants2', $args );

  // Déclaration de la Taxonomie1
  $labels_apprenants2 = array(

    'name' => 'competences',
    'new_item_name' =>'Nom du nouveau Projet',
    'parent_item' => 'Type de projet parent',
    
  );
  
  $args = array(

    'labels' => $labels_apprenants2,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => false,

  );



  register_taxonomy( 'competences', 'apprenants2', $args );

  $labels_apprenants2 = array(

    'name' => 'Promotion',
    'new_item_name' =>'Nom du nouveau Projet',
    'parent_item' => 'Type de projet parent',
  );
  $args = array(

    'labels' => $labels_apprenants2,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,

  );
  register_taxonomy( 'Promotion', 'apprenants2', $args );

  $labels_apprenants2 = array(

    'name' => 'Formation',
    'new_item_name' =>'Nom du nouveau Projet',
    'parent_item' => 'Type de projet parent',
  );
  $args = array(

    'labels' => $labels_apprenants2,
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,

  );
  register_taxonomy( 'Formation', 'apprenants2', $args );

}
add_action( 'init', 'apprenants2_register_post_types' ); //Le hook init lance la fonction
