/*
 * Fonctions js utilisées par tout le site
 * 
 */

//Création du cookie de validation des cookies dans le site
function createLoC(){    
    setCookie('LORD_OF_THE_COOKIES','OK',700);
    
    $('#alert_cookie').alert('close');
}