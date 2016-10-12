/* 
                                                                                                                                  
                                                                                                                                  
    HHHHHHHHH     HHHHHHHHH                   lllllll                                                                             
    H:::::::H     H:::::::H                   l:::::l                                                                             
    H:::::::H     H:::::::H                   l:::::l                                                                             
    HH::::::H     H::::::HH                   l:::::l                                                                             
      H:::::H     H:::::H      eeeeeeeeeeee    l::::lppppp   ppppppppp       eeeeeeeeeeee    rrrrr   rrrrrrrrr       ssssssssss   
      H:::::H     H:::::H    ee::::::::::::ee  l::::lp::::ppp:::::::::p    ee::::::::::::ee  r::::rrr:::::::::r    ss::::::::::s  
      H::::::HHHHH::::::H   e::::::eeeee:::::eel::::lp:::::::::::::::::p  e::::::eeeee:::::eer:::::::::::::::::r ss:::::::::::::s 
      H:::::::::::::::::H  e::::::e     e:::::el::::lpp::::::ppppp::::::pe::::::e     e:::::err::::::rrrrr::::::rs::::::ssss:::::s
      H:::::::::::::::::H  e:::::::eeeee::::::el::::l p:::::p     p:::::pe:::::::eeeee::::::e r:::::r     r:::::r s:::::s  ssssss 
      H::::::HHHHH::::::H  e:::::::::::::::::e l::::l p:::::p     p:::::pe:::::::::::::::::e  r:::::r     rrrrrrr   s::::::s      
      H:::::H     H:::::H  e::::::eeeeeeeeeee  l::::l p:::::p     p:::::pe::::::eeeeeeeeeee   r:::::r                  s::::::s   
      H:::::H     H:::::H  e:::::::e           l::::l p:::::p    p::::::pe:::::::e            r:::::r            ssssss   s:::::s 
    HH::::::H     H::::::HHe::::::::e         l::::::lp:::::ppppp:::::::pe::::::::e           r:::::r            s:::::ssss::::::s
    H:::::::H     H:::::::H e::::::::eeeeeeee l::::::lp::::::::::::::::p  e::::::::eeeeeeee   r:::::r            s::::::::::::::s 
    H:::::::H     H:::::::H  ee:::::::::::::e l::::::lp::::::::::::::pp    ee:::::::::::::e   r:::::r             s:::::::::::ss  
    HHHHHHHHH     HHHHHHHHH    eeeeeeeeeeeeee llllllllp::::::pppppppp        eeeeeeeeeeeeee   rrrrrrr              sssssssssss    
                                                      p:::::p                                                                     
                                                      p:::::p                                                                     
                                                     p:::::::p                                                                    
                                                     p:::::::p                                                                    
                                                     p:::::::p                                                                    
                                                     ppppppppp                                                                    
                                                                                                                                  
*/
        /* 
            888888    db    88""Yb 88     888888      dP"Yb  888888      dP""b8  dP"Yb  88b 88 888888 888888 88b 88 888888 
              88     dPYb   88__dP 88     88__       dP   Yb 88__       dP   `" dP   Yb 88Yb88   88   88__   88Yb88   88   
              88    dP__Yb  88""Yb 88  .o 88""       Yb   dP 88""       Yb      Yb   dP 88 Y88   88   88""   88 Y88   88   
              88   dP""""Yb 88oodP 88ood8 888888      YbodP  88          YboodP  YbodP  88  Y8   88   888888 88  Y8   88   
         */
/**
 *      - Find data             FIND_DATA
 *      - Is it a touch Device? FIND_TOUCH
 *      - Hourglass             FIND_HOURGLASS
 *      - Public return         FIND_PUBLIC
 *      
 *      - Extends               FIND_EXTENDS
 *          .get URL vars       FIND_GETURL
 *          .preload images     FIND_PRELOAD
 *          .trim functions     FIND_TRIM
 *      
 */

/**
 *  This file is dependent on: jquery
 *  All the elements below are accessible through the _helpers prefix: _helpers.nameOfTheElement, ie: _helpers.translations.fr.close.
 */
var _helpers = function () {


//  FIND_DATA
        /*
            888888 88 88b 88 8888b.      8888b.     db    888888    db    
            88__   88 88Yb88  8I  Yb      8I  Yb   dPYb     88     dPYb   
            88""   88 88 Y88  8I  dY      8I  dY  dP__Yb    88    dP__Yb  
            88     88 88  Y8 8888Y"      8888Y"  dP""""Yb   88   dP""""Yb 
        */
/**
 *  @description This function returns the value of "data-" attribute or the default provided value if not found
 *  @author  [Benoit Adam]
 *  @param   {jQuerySelector} elt         the tag where to find the data attribute
 *  @param   {string}         param       the data attribute to parse
 *  @param   {string}         [byDefault] the default value to return if the data attribute is not found or empty
 *  @returns {string}                     the value of the data attribute found or the default value passed
 */
    var findData = function (elt, param, byDefault) {
        return elt.data(param) !== undefined ? elt.data(param) : byDefault;
    },



//  FIND_TOUCH
        /*
            888888  dP"Yb  88   88  dP""b8 88  88  dP""b8 88        db    .dP"Y8 .dP"Y8 
              88   dP   Yb 88   88 dP   `" 88  88 dP   `" 88       dPYb   `Ybo." `Ybo." 
              88   Yb   dP Y8   8P Yb      888888 Yb      88  .o  dP__Yb  o.`Y8b o.`Y8b 
              88    YbodP  `YbodP'  YboodP 88  88  YboodP 88ood8 dP""""Yb 8bodP' 8bodP' 
        */
/**
 * @description This function adds a 'touch' class in the html tag if a touch device is detected
 * @return {Boolean} [description]
 */
    isTouchDevice = function () {
        try {
            if (!_base.vars.html.hasClass("chrome")) {
                document.createEvent("TouchEvent");
                _base.vars.html.addClass("touch");
                _base.vars.touch = true;
                return true;
            }
        } catch (e) {
            return false;
        }
    },



//  FIND_HOURGLASS
        /*
            88  88  dP"Yb  88   88 88""Yb  dP""b8 88        db    .dP"Y8 .dP"Y8 
            88  88 dP   Yb 88   88 88__dP dP   `" 88       dPYb   `Ybo." `Ybo." 
            888888 Yb   dP Y8   8P 88"Yb  Yb  "88 88  .o  dP__Yb  o.`Y8b o.`Y8b 
            88  88  YbodP  `YbodP' 88  Yb  YboodP 88ood8 dP""""Yb 8bodP' 8bodP' 
        */
    hourGlass = function () {
        $("body").toggleClass("progress");
        if (_base.vars.customData.documentTitle === undefined || _base.vars.customData.documentTitle === "") {
            _base.vars.customData.documentTitle = document.title;
            document.title = _base.translations[_base.vars.pageLng].loading + "...";
        } else {
            document.title = _base.vars.customData.documentTitle;
            _base.vars.customData.documentTitle = "";
        }
        return true;
    };





//  FIND_PUBLIC
        /*
            88""Yb 888888 888888 88   88 88""Yb 88b 88 
            88__dP 88__     88   88   88 88__dP 88Yb88 
            88"Yb  88""     88   Y8   8P 88"Yb  88 Y88 
            88  Yb 888888   88   `YbodP' 88  Yb 88  Y8 
        */
    return {
        findData: findData,
        isTouchDevice: isTouchDevice,
        hourGlass: hourGlass
    };

}();





//  FIND_EXTENDS
/*
     /$$$$$$$$             /$$                               /$$          
    | $$_____/            | $$                              | $$          
    | $$       /$$   /$$ /$$$$$$    /$$$$$$  /$$$$$$$   /$$$$$$$  /$$$$$$$
    | $$$$$   |  $$ /$$/|_  $$_/   /$$__  $$| $$__  $$ /$$__  $$ /$$_____/
    | $$__/    \  $$$$/   | $$    | $$$$$$$$| $$  \ $$| $$  | $$|  $$$$$$ 
    | $$        >$$  $$   | $$ /$$| $$_____/| $$  | $$| $$  | $$ \____  $$
    | $$$$$$$$ /$$/\  $$  |  $$$$/|  $$$$$$$| $$  | $$|  $$$$$$$ /$$$$$$$/
    |________/|__/  \__/   \___/   \_______/|__/  |__/ \_______/|_______/ 
                                                                          
                                                                          
                                                                          
*/
//  FIND_GETURL
        /*
             dP""b8 888888 888888 88   88 88""Yb 88     
            dP   `" 88__     88   88   88 88__dP 88     
            Yb  "88 88""     88   Y8   8P 88"Yb  88  .o 
             YboodP 888888   88   `YbodP' 88  Yb 88ood8 
        */
/*
    This extension of jQuery provides $.getUrlVars() method to get a url variable value.
    // Get object of URL parameters : var allVars = $.getUrlVars();
    // Getting URL var by its name : var byName = $.getUrlVar('name');
    ref : http://jquery-howto.blogspot.com/2009/09/get-url-parameters-values-with-jquery.html
    date : 2011-03-22
*/
$.extend({
    getUrlVars: function () {
                var vars = [],
                hash,
                hashes = window.location.href.slice(window.location.href.indexOf("?") + 1).split("&"),
                i = 0;
                for (i; i < hashes.length; i++) {
                    hash = hashes[i].split("=");
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars;
            },
    getUrlVar:  function (name) {
                return $.getUrlVars()[name];
            }
});



//  FIND_PRELOAD
        /*
            88""Yb 88""Yb 888888 88      dP"Yb     db    8888b.      88 8b    d8  dP""b8 
            88__dP 88__dP 88__   88     dP   Yb   dPYb    8I  Yb     88 88b  d88 dP   `" 
            88"""  88"Yb  88""   88  .o Yb   dP  dP__Yb   8I  dY     88 88YbdP88 Yb  "88 
            88     88  Yb 888888 88ood8  YbodP  dP""""Yb 8888Y"      88 88 YY 88  YboodP 
        */
/*
    This small plug-in provides a preloading of images.
    Usage: $(['img1.jpg', 'img2.jpg', ...]).preload();
    Source: http://stackoverflow.com/questions/476679/preloading-images-with-jquery
*/
$.fn.preload = function() {
    this.each(function(){
        $("<img/>").attr("src", this);
    });
};



//  FIND_TRIM
        /*
            888888 88""Yb 88 8b    d8     888888 88   88 88b 88  dP""b8 888888 88  dP"Yb  88b 88 .dP"Y8 
              88   88__dP 88 88b  d88     88__   88   88 88Yb88 dP   `"   88   88 dP   Yb 88Yb88 `Ybo." 
              88   88"Yb  88 88YbdP88     88""   Y8   8P 88 Y88 Yb        88   88 Yb   dP 88 Y88 o.`Y8b 
              88   88  Yb 88 88 YY 88     88     `YbodP' 88  Y8  YboodP   88   88  YbodP  88  Y8 8bodP' 
        */
/**
 * @desc                    Enhancing of the trim trimLeft and trimRight functions: possibility to pass one or more characters or a POSIX class
 * @param   string      charList    the list of characters or the POSIX character class to trim
 * @return  string              returns the initial string trimmed demanded
 * @author  Benoit ADAM         benoit.adam@gustibus.fr
 * @thanks  Aurelio De Rosa (JSPro)     http://jspro.com/raw-javascript/trimming-strings-in-javascript/
*/
String.prototype.enhancedTrimLeft = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("^[" + charList + "]+"), "");
};
String.prototype.enhancedTrimRight = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("[" + charList + "]+$"), "");
};
String.prototype.enhancedTrim = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.enhancedTrimLeft(charList).enhancedTrimRight(charList);
};
