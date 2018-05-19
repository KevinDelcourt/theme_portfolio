<?php /* Template Name: Menu de personnalisation */?>

<?php get_header();?>

<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/includes/custom_color/spectrum/spectrum.css" >

<div class="container-fluid m-0 p-4">
    
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

              <div class="container">     
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-4"><?php the_title(); ?></h2>
                        
                    </div>

                    <div class="card-body row">
                        
                        <div class="col-md-4">
                            
                            <?php the_content();?>

                            <form id="color-form" method="post" action="<?php echo get_bloginfo( 'template_directory' );?>/includes/custom_color/c_apply_changes.php">




                                <div class="form-group">    
                                    <label>Option d'affichage </label><br>

                                    <div class="form-check">    
                                        <input checked class="form-check-input" type="radio" name="c-mode" id='c-m-1' value="1">
                                        <label class="form-check-label" for="c-m-1"> Couleur personnalisée </label>
                                    </div>

                                    <div class="form-check">   
                                        <input class="form-check-input" type="radio" name="c-mode" id="c-m-2" value="2">
                                        <label class="form-check-label" for="c-m-2"> 
                                            Aléatoire 
                                            <i><span class="small info-mark" title="Les couleurs du thème changeront à chaque changement de page de manière complètement aléatoire">?</span></i> 
                                        
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="c-mode" id="c-m-3" value="3">
                                        <label class="form-check-label" for="c-m-3"> 
                                            Aléatoire pondéré
                                            <i><span class="small info-mark" title="Les couleurs changeront aléatoirement à chaque changement de page tout en gardant l'ensemble lisible">?</span></i>
                                            
                                        </label>

                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="c-main">Couleur principale: </label><br>
                                    <input type="text" class="form-control c-picker" name="c-main" id="c-main" value="<?php if(isset($dark)){$dark->printColor();}else{echo "#343a40";} ?>">

                                </div>

                                <div class="form-group">

                                    <label for="c-sec">Couleur secondaire: </label><br>
                                    <input type="text" class="form-control c-picker" name="c-sec" id="c-sec" value="<?php if(isset($light)){$light->printColor();}else{echo "#f8f9fa";} ?>">

                                </div>

                                <div class="form-group">

                                    <label for="c-fond">Couleur du fond: </label><br>
                                    <input type="text" class="form-control c-picker" name="c-fond" id="c-fond" value="<?php if(isset($secondary)){$secondary->printColor();}else{echo "#6c757d";} ?>">

                                </div>

                                <div class="form-group">

                                    <label for="c-dark">Couleur du texte: </label><br>
                                    <input type="text" class="form-control c-picker" name="c-dark" id="c-dark" value="<?php if(isset($main_dark)){$main_dark->printColor();}else{echo "#212529";} ?>">

                                </div>

                                <div class="form-group">

                                    <label for="c-light">Couleur des articles: </label><br>
                                    <input type="text" class="form-control c-picker" name="c-light" id="c-light" value="<?php if(isset($main_light)){$main_light->printColor();}else{echo "#ffffff";} ?>">

                                </div>


                                <input type="submit" name="color-submit" id="color-submit" value="Appliquer"> <input type="submit" name="color-default" id="color-default" value="Valeur par défaut">
                            </form>
                            
                        </div>
                        
                        <div class="col-md-8 d-none d-md-block demo my-4">
                            
                            <!-- Page de présentation -->
                            <?php include TEMPLATEPATH."/includes/custom_color/demo.php" ?>
                           
                        </div>
                                
                    </div>
                </div>
            </div> 

        <?php  endwhile; endif;    ?>
        
    
        
</div>

     
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/includes/custom_color/spectrum/spectrum.js"></script>
<script src="<?php echo get_bloginfo( 'template_directory' );?>/includes/custom_color/colorpicker_init.js"></script>  