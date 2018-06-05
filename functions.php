<?php

//Pour intégrer bootstrap aux menu de wordpress
require_once TEMPLATEPATH."/includes/general/class-wp-bootstrap-navwalker.php";

//Pour créer un menu supplémentaire dans l'admin pannel
require_once TEMPLATEPATH."/includes/general/functions-custom-settings.php";

//Pour les thèmes personnalisés
require_once TEMPLATEPATH."/includes/custom_color/color_class.php";

//Indique à wordpress de gérer le titre de chaque page de manière intuitive
add_theme_support( 'title-tag' );

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
    mail(get_option('admin_email') , $subject , $message , $headers);
}

//Retourne le protocole du site (pour insérer dans un lien)
function get_protocol(){
    
    //Condition pour être SUR qu'on soit en https
    if((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)){
        return "https://";
    }else{
        return "http://";
    }
}

//Retourne les liens de pagination (utilisé dans index.php et category.php)
//A utiliser dans une boucle wp entre le endwhile et le endif
function get_custom_pagination(){
    
//Liste des arguments pour avoir une liste de pagination correctement mise en forme
    $args = array( 
            'base'               =>  str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),//Pour avoir une bonne syntaxe de page
            'format'             => '?paged=%#%',
            'end_size'           => 2,
            'mid_size'           => 1,
            'prev_next'          => true,
            'prev_text'          => __('«'),
            'next_text'          => __('»'),
            'type'               => 'array'
            ); 

    $link_tab = paginate_links( $args );
    if(!empty($link_tab)){ ?>

        <ul class="pagination justify-content-center ">
            <!-- Création des liens de pagination - on remplace la classe de wordpress par celle de bootstrap -->

                <?php
                foreach($link_tab as $link){
                    echo '<li class="page-item">'.str_replace("page-numbers","page-link text-dark",$link).'</li>';
                }
                ?>          
        </ul>
    <?php } 
}
