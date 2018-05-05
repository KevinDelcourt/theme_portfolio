    
    </div><!-- Fin du div .main -->
    
    <footer class="page-footer d-flex justify-content-between p-3 bg-dark text-light">
        <div><!-- Création des liens des champs globaux uniquement si ils ne sont pas vides -->
            <?php 
                output_custom_option('color_custom', 'tint', 'Personnaliser le site');
                output_custom_option('contact', 'at', 'Contact');
                output_custom_option('a_propos', 'info-circle', 'A propos du site');
            ?>
            
        
        </div>
        <div>
            <a href="<?php echo get_bloginfo( 'wpurl' ).'/wp-login' ?>" title="Connexion" class="text-light"><i class="fa fa-user fa-3x fa-fw"></i></a> 
        </div>
    </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
    <?php wp_footer(); ?> 
  </body>
</html>

