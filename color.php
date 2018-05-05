<?php 



$main_light = Color::createRanP(200,255);//blanc
$main_dark = Color::createRanP(0,100);//noir

$light = Color::createRandom();
$secondary = Color::createRandom();
$dark = Color::createRandom();

?>

<style>
/*  */
a{
    color: <?php $dark->printColor() ?>;
}

a:hover{
    color: <?php $main_dark->printColor() ?>;
}

/* Couleurs des hovers */
a.text-light:hover{
    color: <?php $main_dark->printColor() ?> !important;
}

a.text-dark:hover{
    color: <?php $main_light->printColor() ?>!important;
}

.card a.text-dark:hover{
    color: <?php $light->printColor() ?>!important;
}

/* Couleurs des fonds clairs/moyen/sombres */
.bg-light,
.jumbotron,
.menu-item:not(.current-menu-item):hover{
    background-color: <?php $light->printColor() ?> !important;
}

.bg-secondary{
    background-color: <?php $secondary->printColor() ?> !important;
}

.bg-dark,
.page-link:not(.current):hover{
    background-color: <?php $dark->printColor() ?> !important;
}

/* Couleurs des textes clairs/moyens/sombres */
.text-light,
.menu-item:not(.current-menu-item) a{
    color:<?php $light->printColor() ?> !important;
}

.text-secondary,
.current-menu-item a{
    color:<?php $secondary->printColor() ?> !important;
}

.text-dark , 
.jumbotron ,
.menu-item:not(.current-menu-item):hover a{
    color: <?php $dark->printColor() ?> !important;
}

/* Couleurs des bordures, seulement pour la pagination, n'a pas à changer'*/
.page-link{
    border: 1px solid rgba(0,0,0,.125) !important;    
}

/* Couleurs des cards/ A part car c'est là où se trouve le contenu principal*/
.card,
.page-link,
pre{
    color: <?php $main_dark->printColor() ?> !important;
    background-color: <?php $main_light->printColor() ?> !important; 
}
</style>
