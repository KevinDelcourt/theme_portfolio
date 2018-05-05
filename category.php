
<?php get_header(); ?>
   
<!-- Page d'affichage d'une catégorie -->

<!-- On affiche la catégorie en cours et sa description  -->
<div class="jumbotron jumbotron-fluid m-0">
    <div class="container">
        <h1><?php echo single_cat_title(); ?></h1>
        <p><?php echo category_description(); ?></p>
    </div>
        
</div>
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
