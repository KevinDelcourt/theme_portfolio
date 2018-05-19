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
    
    //Créer une couleur à partir d'une chaîne de type 'ffcc22'
    public static function createFromHex($hex){
        $instance = new self(0,0,0);
        
        $instance->set_r( hexdec(substr($hex, 0, 2)) );
        $instance->set_g( hexdec(substr($hex, 2, 2)) );
        $instance->set_b( hexdec(substr($hex, 4, 2)) );
        
        return $instance;
    }
    
    //Le texte d'une couleur à mettre dnas du css
    public function printColor(){
        echo  sprintf("#%02x%02x%02x", $this->r, $this->g, $this->b); //Output: #rrggbb en hex
        
    }
    
    //fonctions set 
    public function set_r($value){
        if( is_int($value)){
            $this->r = $value;
        }
    }
    
    public function set_g($value){
        if( is_int($value)){
            $this->g = $value;
        }
    }
    
    public function set_b($value){
        if( is_int($value)){
            $this->b = $value;
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


//Fonctions utilitaires

//Règle les variables de session à partir de la de la valeur du cookie CCOLOR
function createSessVarC($c_value){
     //Decodage du cookie
        $c_data = explode('_', $c_value );
        foreach($c_data as $n => $data){
            switch ($n){
                case 0://Mode
                    $_SESSION['C-MODE'] = $data; break;
                case 1:
                    $_SESSION['C-MAIN'] = Color::createFromHex($data);break;
                case 2:
                    $_SESSION['C-SEC'] = Color::createFromHex($data);break;
                case 3:
                    $_SESSION['C-FOND'] = Color::createFromHex($data);break;
                case 4:
                    $_SESSION['C-DARK'] = Color::createFromHex($data);break;
                case 5:
                    $_SESSION['C-LIGHT'] = Color::createFromHex($data);break;
            }             
        }      
}