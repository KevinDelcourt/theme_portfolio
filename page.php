
<?php get_header(); ?>
    
<div class="container-fluid m-0 py-4 px-auto">
     
        <?php 
        
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                
                get_template_part( 'content', get_post_format() );
                
            endwhile; endif;
           
        ?>
           
</div>
        
<?php get_footer(); 
