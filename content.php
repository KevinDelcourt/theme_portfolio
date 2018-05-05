
<!-- Résumé d' un article -->
<div class=' col-xl-4 col-md-6 col-sm-12 my-2'>
    <div class=" card" style="height:100%;">
        
        <div class="card-header">
            <h4><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p class="font-weight-light"><?php the_date(); ?> </p>
        </div>


        <div class="card-body ">
            <?php the_excerpt(); ?>
        </div>

        <div class="card-footer text-right">
            <small><a class="text-dark" href="<?php the_permalink(); ?>">Lire la suite</a></small>
        </div>
        
    </div>
 </div>
    
