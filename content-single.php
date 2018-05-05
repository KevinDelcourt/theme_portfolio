<!-- Affichage d'un article complet -->
<div class="container my-2">     
    <div class="card">

        <div class="card-header">
            <h2 class="display-4"><?php the_title(); ?></h2>
            <p class="font-weight-light"><?php the_date(); ?> </p>
        </div>

        <div class="card-body">
            <?php the_content(); ?>
        </div>
        
        <div class="card-footer text-right font-weight-light">
            <?php //Affichage des catégories du post si il y en a
                $categories = get_the_category();
                if(!empty($categories)){
                    foreach ($categories as $i => $cat){
                        
                        echo $i > 0 ? " / " : ""; //Pour qu'il n'y ait pas de séparateurs avant le premier lien
                        echo '<a href="'. esc_url( get_category_link( $cat->term_id ) ) .'" class="text-dark">'. $cat->name .'</a>';
                        
                    }
                }
            ?>
        </div>
    </div>
</div>
    
