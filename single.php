
<?php get_header(); ?>
       
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                get_template_part( 'content-single' ); //Affichage d'un article seul

            endwhile; endif; 
        ?>
        
<?php get_footer(); 
