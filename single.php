
<?php get_header(); ?>
    
<div class="container-fluid bg-secondary m-0 p-4">
    
        
        <?php 
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                
                
                
                get_template_part( 'content', get_post_format() );
                
                
               
                
            endwhile; endif;
           
        ?>
        
    
        
</div>

        
<?php get_footer(); ?>
