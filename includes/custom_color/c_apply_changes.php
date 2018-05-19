<?php require 'color_class.php';

/* 
 * Exécution du formulaire puis redirection vers la page d'où on vient
 * 
 * C'est mieux de passer par un fichier php à part car sinon les nouvelles variables de session ne seront pas prises en compte
 */
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    
    if(isset($_POST['color-submit'])){ //Changement de couleurs
        //Creation du cookie
        //Structure du cookie -> 1er caractère = mode
        //-> _c1_c2_c3_c4_c5
        // '_' sert de séparateur à la sortie

        if($_POST['c-mode']=='1'){
              $c_value = $_POST['c-mode'].str_replace('#','_',$_POST['c-main']).str_replace('#','_',$_POST['c-sec']).str_replace('#','_',$_POST['c-fond']).str_replace('#','_',$_POST['c-dark']).str_replace('#','_',$_POST['c-light']) ;
        }else{
              $c_value = $_POST['c-mode']."_";
        }
      

        setcookie('CCOLOR',$c_value, time() + (86400 * 30 * 12),'/');

        //On change aussi les variables de session
        createSessVarC($c_value);
        
    }elseif(isset($_POST['color-default'])){ //Retour au défaut : on supprime le cookie
        
         setcookie('CCOLOR','', 0,'/');
         
    }
    
    
    //Redirection vers la page du formulaire
    header("Location: ".$_SERVER['HTTP_REFERER']);
   
}

