<?php

//Pour intégrer bootstrap aux menu de wordpress
require_once TEMPLATEPATH."/class-wp-bootstrap-navwalker.php";

//Déclaration des menus
function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal' ),
      'menu-footer' => __('Menu Pied de Page')
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 


