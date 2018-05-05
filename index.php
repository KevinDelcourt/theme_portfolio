
<?php get_header(); ?>
   
<!-- Page d'acceuil  -->
<div class="container p-2">   
    <div class="row ">
           
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                
            get_template_part( 'content' ); //Affichage d'un résumé d'article
                       
        endwhile; ?>
    </div>
    <?php 
    get_custom_pagination();
    endif;?>
        

</div>

        
<?php get_footer(); 
