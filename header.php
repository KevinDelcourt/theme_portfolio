<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Un portfolio en ligne">
	<meta name="author" content="Kévin Delcourt">
        
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">    
        <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" > 
        
        <?php wp_head(); ?>
    </head>
    
    <body>
        
        <div class="jumbotron m-0">
            <h1 class="display-3 "><a class="text-dark" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p><?php echo get_bloginfo( 'description' ); ?></p>
        </div>
        
        

        
        
        <div class="main bg-secondary text-justify"><!-- Fin dans le footer, encadre le contenu -->
            <div id="main_navbar" class="navbar navbar-expand-md bg-dark navbar-dark sticky-top ">
            
            <a class="navbar-brand" href="#"></a>

               
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