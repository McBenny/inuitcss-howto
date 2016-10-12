/*
                                                                                                                               
                                                                                                                               
            GGGGGGGGGGGGG                                                                                              lllllll 
         GGG::::::::::::G                                                                                              l:::::l 
       GG:::::::::::::::G                                                                                              l:::::l 
      G:::::GGGGGGGG::::G                                                                                              l:::::l 
     G:::::G       GGGGGG    eeeeeeeeeeee    nnnn  nnnnnnnn        eeeeeeeeeeee    rrrrr   rrrrrrrrr   aaaaaaaaaaaaa    l::::l 
    G:::::G                ee::::::::::::ee  n:::nn::::::::nn    ee::::::::::::ee  r::::rrr:::::::::r  a::::::::::::a   l::::l 
    G:::::G               e::::::eeeee:::::een::::::::::::::nn  e::::::eeeee:::::eer:::::::::::::::::r aaaaaaaaa:::::a  l::::l 
    G:::::G    GGGGGGGGGGe::::::e     e:::::enn:::::::::::::::ne::::::e     e:::::err::::::rrrrr::::::r         a::::a  l::::l 
    G:::::G    G::::::::Ge:::::::eeeee::::::e  n:::::nnnn:::::ne:::::::eeeee::::::e r:::::r     r:::::r  aaaaaaa:::::a  l::::l 
    G:::::G    GGGGG::::Ge:::::::::::::::::e   n::::n    n::::ne:::::::::::::::::e  r:::::r     rrrrrrraa::::::::::::a  l::::l 
    G:::::G        G::::Ge::::::eeeeeeeeeee    n::::n    n::::ne::::::eeeeeeeeeee   r:::::r           a::::aaaa::::::a  l::::l 
     G:::::G       G::::Ge:::::::e             n::::n    n::::ne:::::::e            r:::::r          a::::a    a:::::a  l::::l 
      G:::::GGGGGGGG::::Ge::::::::e            n::::n    n::::ne::::::::e           r:::::r          a::::a    a:::::a l::::::l
       GG:::::::::::::::G e::::::::eeeeeeee    n::::n    n::::n e::::::::eeeeeeee   r:::::r          a:::::aaaa::::::a l::::::l
         GGG::::::GGG:::G  ee:::::::::::::e    n::::n    n::::n  ee:::::::::::::e   r:::::r           a::::::::::aa:::al::::::l
            GGGGGG   GGGG    eeeeeeeeeeeeee    nnnnnn    nnnnnn    eeeeeeeeeeeeee   rrrrrrr            aaaaaaaaaa  aaaallllllll
                                                                                                                               
                                                                                                                               
                                                                                                                               
                                                                                                                               
                                                                                                                               
                                                                                                                               
                                                                                                                               
*/
        /* 
            888888    db    88""Yb 88     888888      dP"Yb  888888      dP""b8  dP"Yb  88b 88 888888 888888 88b 88 888888 
              88     dPYb   88__dP 88     88__       dP   Yb 88__       dP   `" dP   Yb 88Yb88   88   88__   88Yb88   88   
              88    dP__Yb  88""Yb 88  .o 88""       Yb   dP 88""       Yb      Yb   dP 88 Y88   88   88""   88 Y88   88   
              88   dP""""Yb 88oodP 88ood8 888888      YbodP  88          YboodP  YbodP  88  Y8   88   888888 88  Y8   88   
         */
/**
 *      - Finish design         FIND_DESIGN
 *      - Enhance behaviour     FIND_BEHAVIOUR
 *      
 */

/**
 *  This file is dependent on: jquery
 *  All the elements below are accessible through the _base prefix: _base.nameOfTheElement, ie: _base.translations.fr.close.
 */


var customFunctions = function () {


//  FIND_DESIGN
/*
      /$$$$$$  /$$           /$$           /$$       /$$$$$$$                      /$$                    
     /$$__  $$|__/          |__/          | $$      | $$__  $$                    |__/                    
    | $$  \__/ /$$ /$$$$$$$  /$$  /$$$$$$$| $$$$$$$ | $$  \ $$  /$$$$$$   /$$$$$$$ /$$  /$$$$$$  /$$$$$$$ 
    | $$$$    | $$| $$__  $$| $$ /$$_____/| $$__  $$| $$  | $$ /$$__  $$ /$$_____/| $$ /$$__  $$| $$__  $$
    | $$_/    | $$| $$  \ $$| $$|  $$$$$$ | $$  \ $$| $$  | $$| $$$$$$$$|  $$$$$$ | $$| $$  \ $$| $$  \ $$
    | $$      | $$| $$  | $$| $$ \____  $$| $$  | $$| $$  | $$| $$_____/ \____  $$| $$| $$  | $$| $$  | $$
    | $$      | $$| $$  | $$| $$ /$$$$$$$/| $$  | $$| $$$$$$$/|  $$$$$$$ /$$$$$$$/| $$|  $$$$$$$| $$  | $$
    |__/      |__/|__/  |__/|__/|_______/ |__/  |__/|_______/  \_______/|_______/ |__/ \____  $$|__/  |__/
                                                                                       /$$  \ $$          
                                                                                      |  $$$$$$/          
                                                                                       \______/           
*/
/*
    This function finishes design
    var "design" is a generic brick to insert into the dom to obtain additional elements only required to achieve design effects.
*/
    var finishDesign = function () {
        var design = "<span class=\"design\" />";

//      _functions.sizesEgalizer(".teasers", ".teasers__item");

        return true;
    }



//  FIND_BEHAVIOUR
/*
     /$$$$$$$$           /$$                                                     /$$$$$$$            /$$                            /$$                              
    | $$_____/          | $$                                                    | $$__  $$          | $$                           |__/                              
    | $$       /$$$$$$$ | $$$$$$$   /$$$$$$  /$$$$$$$   /$$$$$$$  /$$$$$$       | $$  \ $$  /$$$$$$ | $$$$$$$   /$$$$$$  /$$    /$$ /$$  /$$$$$$  /$$   /$$  /$$$$$$ 
    | $$$$$   | $$__  $$| $$__  $$ |____  $$| $$__  $$ /$$_____/ /$$__  $$      | $$$$$$$  /$$__  $$| $$__  $$ |____  $$|  $$  /$$/| $$ /$$__  $$| $$  | $$ /$$__  $$
    | $$__/   | $$  \ $$| $$  \ $$  /$$$$$$$| $$  \ $$| $$      | $$$$$$$$      | $$__  $$| $$$$$$$$| $$  \ $$  /$$$$$$$ \  $$/$$/ | $$| $$  \ $$| $$  | $$| $$  \__/
    | $$      | $$  | $$| $$  | $$ /$$__  $$| $$  | $$| $$      | $$_____/      | $$  \ $$| $$_____/| $$  | $$ /$$__  $$  \  $$$/  | $$| $$  | $$| $$  | $$| $$      
    | $$$$$$$$| $$  | $$| $$  | $$|  $$$$$$$| $$  | $$|  $$$$$$$|  $$$$$$$      | $$$$$$$/|  $$$$$$$| $$  | $$|  $$$$$$$   \  $/   | $$|  $$$$$$/|  $$$$$$/| $$      
    |________/|__/  |__/|__/  |__/ \_______/|__/  |__/ \_______/ \_______/      |_______/  \_______/|__/  |__/ \_______/    \_/    |__/ \______/  \______/ |__/      
                                                                                                                                                                     
                                                                                                                                                                     
                                                                                                                                                                     
*/
/*
    This function intercepts natural behaviour to enhance user experience
*/
    enhanceBehaviour = function () {

//      _functions.enlargeClick("nav > ul > li");

        return true;
    };



// Public elements :
    return {
        finishDesign: finishDesign,
        enhanceBehaviour: enhanceBehaviour
    };
}();



$(window).on("load", function () {
    // _base.responsiveness();
    // customFunctions.finishDesign();
    // _functions.scrollToElt();
});