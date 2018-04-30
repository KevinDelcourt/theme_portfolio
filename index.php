
<?php get_header(); ?>
    
<div class="container-fluid bg-secondary p-2">
    <div class="row">
           <!-- Boucle wordpress: la variable n sert à afficher les articles 2 par 2 et 4 par 4 pour que ce soit responsive dans bootstrap-->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                
        
            <div class='col-xl-3 col-md-6 col-sm-12 my-2'>
                <div class="bg-light p-3" style="height:100%;">
                    <h2 class="card-title"><a class="text-body" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="font-weight-light"><?php the_date(); ?> </p>

                        <?php the_excerpt(); ?>

                </div>
             </div>
                
               
            <?php endwhile; ?>
    </div>
   
        <?php 
            
        
            $args = array(
                    'base'               => $_SERVER['PHP_SELF'].'%_%',
                    'format'             => '?paged=%#%',
                    'end_size'           => 2,
                    'mid_size'           => 1,
                    'prev_next'          => true,
                    'prev_text'          => __('«'),
                    'next_text'          => __('»'),
                    'type'               => 'array'
                    
                    ); 
            
            $link_tab = paginate_links( $args );
            if(!empty($link_tab)){
            ?>
    
        <ul class="pagination justify-content-center">
            <!-- Création des liens de pagination  -->
            
                <?php
                foreach($link_tab as $link){
                    echo '<li class="page-item">'.str_replace("page-numbers","page-link text-body",$link).'</li>';
                }
                ?>          
        </ul>

            <?php } endif; ?>
        
    
        
</div>

        
<?php get_footer(); ?>
