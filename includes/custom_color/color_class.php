<?php

/* 
 * Une classe couleur avec 3 attribut r g b et toutes les méthodes qui permettent d'intéragir avec.
 */

class Color{
    
    protected $r,$g,$b; //Les variables des 3 couleurs primaires
    
    public function __construct($red , $green , $blue) {//Constructeur par défaut
        $this->r = $red ; $this->g = $green ; $this->b = $blue ;
    }
    
    //Créer une couleur aléatoire
    //utilisation: $var = Color::createRandom()
    public static function createRandom(){
        $instance = new self(0,0,0);
        
        $instance->set_rgb(mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
        
        return $instance;
    }
    
    //Créer une couleur aléatoire de manière pondérée
    //Example si $min = 200 et $max = 255 la couleur sera obligatoirement claire
    public static function createRanP($min,$max){
        $instance = new self(0,0,0);
        
        $instance->set_rgb(mt_rand($min,$max),mt_rand($min,$max),mt_rand($min,$max));
        
        return $instance;
    }
    
    //Le texte d'une couleur à mettre dnas du css
    public function printColor(){
        echo 'rgb('.$this->r.','.$this->g.','.$this->b.')';
    }
    
    //fonctions set 
    public function set_r($value){
        if( is_int($value)){
            $this->r = $value;
        }
    }
    
    public function set_g($value){
        if( is_int($value)){
            $this->r = $value;
        }
    }
    
    public function set_b($value){
        if( is_int($value)){
            $this->r = $value;
        }
    }
    
    //set des 3 valeurs en une méthode
    public function set_rgb($red,$green,$blue){
        if( is_int($red)&&is_int($green)&&is_int($blue) ){
            $this->r = $red;
            $this->g = $green;
            $this->b = $blue;
        }
    }
    
    //fonctions get
    public function get_r(){
        return $this->r;
    }
    
    public function get_g(){
        return $this->g;
    }
    
    public function get_b(){
        return $this->b;
    }
     
}
