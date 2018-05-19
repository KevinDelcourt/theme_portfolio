
//Initialisation des selecteurs de couleur
$(".c-picker").spectrum({
    preferredFormat: "hex" //L'output sera au format #rrggbb
});

//Enable/disable color pickers on radio checks
$('input:radio[name="c-mode"]').change(
    function(){
        
        if ($(this).is(':checked') && $(this).val() === '1') { //si on choisit couleur personnalisée, on active les spectrum
            
            $(".c-picker").spectrum("enable");
            
        }else{
            
            $(".c-picker").spectrum("disable");
            
        }
        
    });
    
    
//Actualiser le morceau de démo à chaque choix de couleur:

$(".c-picker").on('change.spectrum', function(e, tinycolor) { 
    
    var couleur = $("#"+this.id).spectrum("get");//On récupère la couleur dans une variable à part (sinon ç aurait fait une erreur dans setproperty)
    
    switch(this.id){
        case 'c-main':
             
            //On est obligé de changer le css de cette manière là pour pouvoir ajouter l'attribut !important qui est nécessaire vu que bootstrap l'utilise à la base
            $(".demo div.bg-dark").each(function(){
                this.style.setProperty("background-color",couleur,"important");
            });
        
            break;
        case 'c-sec':
            
            $(".demo div.text-light").each(function(){
                this.style.setProperty("color",couleur,"important");
            });
            
            break;
        case 'c-fond':
            
            $(".demo div.bg-secondary").each(function(){
                this.style.setProperty("background-color",couleur,"important");
            });
            
            break;
        case 'c-light':
            
            $(".demo div.card").each(function(){
                this.style.setProperty("background-color",couleur,"important");
            });
            
            break;
        case 'c-dark':
            
            $(".demo div.card").each(function(){
                this.style.setProperty("color",couleur,"important");
            });
            
            break;
    }
    
    

});