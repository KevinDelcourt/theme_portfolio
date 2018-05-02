
<?php get_header(); ?>
    
<div class="container-fluid p-2">
    <div class="row">
           
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                
            <div class='col-xl-3 col-lg-4 col-md-6 col-sm-12 my-2'>
                <div class="bg-light p-3" style="height:100%;">
                    <h2 ><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="font-weight-light"><?php the_date(); ?> </p>

                        <?php the_excerpt(); ?>

                </div>
             </div>
                
               
            <?php endwhile; ?>
    </div>
   
        <?php 
            
            $big=9999999999;
            $args = array(
                    'base'               =>  str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
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
    
        <ul class="pagination justify-content-center ">
            <!-- Création des liens de pagination  -->
            
                <?php
                foreach($link_tab as $link){
                    echo '<li class="page-item">'.str_replace("page-numbers","page-link text-dark",$link).'</li>';
                }
                ?>          
        </ul>

            <?php } endif; ?>
        
    
        
</div>

        
<?php get_footer(); ?>
