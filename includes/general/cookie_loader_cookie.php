<?php

/* 
 * Partie du header.php qui va regarder si on a créé un cookie de validation des cookies
 * 
 * Si il n'existe pas on va créer un div d'info
 * 
 */

//Un cookie pour les valider tous
if( !isset($_COOKIE['LORD_OF_THE_COOKIES']) ){
     
    if($_COOKIE['LORD_OF_THE_COOKIES'] != 'OK'){ ?>

<div class="row fixed-bottom px-4">
    
    <div class="alert alert-success col-lg-4 " id='alert_cookie'>
        Ce site utilise des cookies pour personnaliser votre expérience de navigation. En continuant sur le site vous acceptez les cookies.
        <button type="button" class="btn btn-success" onclick=createLoC()>OK</button>
    </div>
</div>

<?php
    } 
}
