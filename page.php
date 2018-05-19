
<?php get_header(); ?>
    

     
        <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="container my-2">     
                    <div class="card">

                        <div class="card-header">
                            <h2 class="display-4"><?php the_title(); ?></h2>
                            <p class="font-weight-light"><?php the_date(); ?> </p>
                        </div>

                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>

                    </div>
                </div>
        <?php  endwhile; endif; ?>
           

        
<?php get_footer(); 
