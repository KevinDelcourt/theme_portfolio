<?php

//Pour intégrer bootstrap aux menu de wordpress
require_once TEMPLATEPATH."/includes/general/class-wp-bootstrap-navwalker.php";

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
 
//Fonction d'envoi de mail à l'admin du site
function mail_admin( $from_email , $subject , $message ){
    
    $headers = "Reply-to: $from_email";
    
    $subject = "MAIL AUTO: ".$subject;
    
    $message = "Message de $from_email: ".$message;
    
    echo get_option('admin_email')."<br>";
    echo $subject."<br>";
    echo $message."<br>";
    echo $headers."<br>";
    //mail(get_option('admin_email') , $subject , $message , $headers);
}

