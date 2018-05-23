<?php

/* 
 * Partie du header.php qui va regarder si on a créé un cookie de couleur
 * 
 * Si il existe on affecte les données du cookies à des variables de session (si on ne les a pas déjà créées)
 * 
 */

if( isset($_COOKIE['CCOLOR']) ){
     
    if( !isset($_SESSION['C-MODE']) && false){            
       createSessVarC($_COOKIE['CCOLOR']);              
    }  
    include TEMPLATEPATH.'/includes/custom_color/color.php';
}
