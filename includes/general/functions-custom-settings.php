<?php
//Include de functions.php
//Création d'un menu d'options personnalisées dans le panneau d'admin avec des champs modifiables

// Menu de règlages personnalisé dans le panneau d'admin wordpress
function custom_settings_add_menu() {
  add_menu_page( 'Options du thème', 'Options du thème', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}


// Page des options perso
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Options du thème</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

//Fonctions des options persos
function setting_contact() { ?>
  <input type="text" name="contact" id="contact" value="<?php echo get_option( 'contact' ); ?>" />
<?php }

function setting_a_propos() { ?>
  <input type="text" name="a_propos" id="a_propos" value="<?php echo get_option( 'a_propos' ); ?>" />
<?php }

function setting_color_custom() { ?>
  <input type="text" name="color_custom" id="color_custom" value="<?php echo get_option( 'color_custom' ); ?>" />
<?php }

function custom_settings_page_setup() {
    
  add_settings_section( 'section', 'Règlages', null, 'theme-options' );
  
  add_settings_field( 'contact', 'URL page contact', 'setting_contact', 'theme-options', 'section' );
  add_settings_field( 'a_propos', 'URL page à propos', 'setting_a_propos', 'theme-options', 'section' );
  add_settings_field( 'color_custom', 'URL page choix couleur', 'setting_color_custom', 'theme-options', 'section' );



  register_setting('section', 'contact');
  register_setting('section', 'a_propos');
  register_setting('section', 'color_custom');
}

//Enregistrement du menu
add_action( 'admin_menu', 'custom_settings_add_menu' );
add_action( 'admin_init', 'custom_settings_page_setup' );

//Fonction d'output des champs globaux sous la forme d'un lien avec une icone front_awesome 
//Sert à simplifier le code

//$option : nom de l'option dans wp
//$icon : nom de l'icone frontawesome
//$title : texte secondaire du lien
function output_custom_option($option,$icon,$title){
    
    if( get_option( $option ) != ""){ 
        
        echo '<a href="'.get_option( $option ).'" title="'.$title.'" class="text-light"><i class="fa fa-'.$icon.' fa-3x fa-fw"></i></a>';
    }
            
}