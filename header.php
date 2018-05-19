<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Un portfolio en ligne">
	<meta name="author" content="Kévin Delcourt">
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">    

        <!-- css minimal pour que le thème s'affiche correctement -->
        <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" > 
        
        <!-- Traitement cookie/var de session pour les couleurs custom -->
        <?php include TEMPLATEPATH.'/includes/custom_color/c_header_load.php'; ?>
        
        
        <?php wp_head(); ?>
    </head>
    
    <body>
        
        
        <?php 
        //On affiche un jumbotron uniquement sur la page d'acceuil
        
        //get_bloginfo( 'wpurl' ) retourne l'addresse de l'acceuil du site sans '/' à la fin
        // get_protocol().$_SERVER['SERVER_NAME'].parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) retourne l'addresse courante sans les paramètres et avec '/' à la fin
        if( get_bloginfo( 'wpurl' ).'/' == get_protocol().$_SERVER['SERVER_NAME'].parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)){ ?>
            
            <div class="jumbotron jumbotron-fluid m-0 px-2">
                <h1 class="display-3 "><a class="text-dark" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
        
        <?php }else{ //Affichage d'une plus petite entête dans les autres pages'?> 
        
            <div class="bg-dark text-light m-0 p-2">
                <h4><a class="text-light display-4" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a> 
                    <small><?php echo get_bloginfo( 'description' ); ?></small>
                </h4>
            </div>

        <?php } ?>
        
        <div class="main bg-secondary text-justify"><!-- Fin dans le footer, encadre le contenu -->
            <div id="main_navbar" class="navbar navbar-expand-md bg-dark navbar-dark sticky-top p-0">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNav" aria-controls="headerNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'best-reloaded' ); ?>">
                    <span class="navbar-toggler-icon"></span><span class="sr-only"><?php esc_html_e( 'Toggle Navigation', 'themeslug' ); ?></span>
                </button>

                <nav class="collapse navbar-collapse" id="headerNav" role="navigation" aria-label="Main Menu">
                    <span class="sr-only"><?php esc_html_e( 'Main Menu', 'themeslug' ); ?></span>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-principal',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </nav>
            
            
            </div>
           