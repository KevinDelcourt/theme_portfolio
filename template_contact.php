<?php /* Template Name: Formulaire de contact */?>

<?php get_header(); ?>
    
<?php 
//Action du formulaire
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    
    //Si l'utilisateur n'a pas rempli de nom on utilise son mail pour le désigner
    $subject = (!empty($_POST['contact-nom'])? $_POST['contact-nom'] : $_POST['contact-mail'])." vous a envoyé un message!" ;
    
    //On met l'addresse IP de l'utilisateur dans le message (c'est pas exact à 100% mais ça peut être utile)
    $message = $_POST['contact-message']." - Envoyé depuis ".$_SERVER['REMOTE_ADDR'];
    
    mail_admin($_POST['contact-mail'],$subject,$message);
}
?>

<div class="container-fluid m-0 p-4">
    
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

              <div class="container">     
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-4"><?php the_title(); ?></h2>
                        
                    </div>

                    <div class="card-body">
                            <?php the_content(); ?>
                        
                        <form id="contact-form" method="post" action="">
                            
                            <div class="form-group">
                                
                                <label for="contact-mail">Nom / Prenom / Pseudo</label>
                                <input type="text" class="form-control" name="contact-nom" id="contact-nom">

                            </div>
                            <div class="form-group">
                                
                                <label for="contact-mail">Email*</label>
                                <input required type="email" class="form-control" name="contact-mail" id="contact-mail" placeholder="nom@example.com">

                            </div>
                            <div class="form-group">
                                
                                <label for="exampleFormControlTextarea1">Message*</label>
                                <textarea required class="form-control" name="contact-message" id="contact-message" rows="8"></textarea>
                                
                            </div>
                            
                            <i>* Champs obligatoires</i><br><br>
                            <!-- Penser à intégrer recaptcha quand ce sera en ligne-->
                            <input type="submit" id="contact-submit" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div> 

        <?php  endwhile; endif;    ?>
        
    
        
</div>

        
<?php get_footer(); ?>