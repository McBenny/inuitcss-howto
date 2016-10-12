/*
                                                                              
                                                                              
    BBBBBBBBBBBBBBBBB                                                         
    B::::::::::::::::B                                                        
    B::::::BBBBBB:::::B                                                       
    BB:::::B     B:::::B                                                      
      B::::B     B:::::B  aaaaaaaaaaaaa      ssssssssss       eeeeeeeeeeee    
      B::::B     B:::::B  a::::::::::::a   ss::::::::::s    ee::::::::::::ee  
      B::::BBBBBB:::::B   aaaaaaaaa:::::ass:::::::::::::s  e::::::eeeee:::::ee
      B:::::::::::::BB             a::::as::::::ssss:::::se::::::e     e:::::e
      B::::BBBBBB:::::B     aaaaaaa:::::a s:::::s  ssssss e:::::::eeeee::::::e
      B::::B     B:::::B  aa::::::::::::a   s::::::s      e:::::::::::::::::e 
      B::::B     B:::::B a::::aaaa::::::a      s::::::s   e::::::eeeeeeeeeee  
      B::::B     B:::::Ba::::a    a:::::assssss   s:::::s e:::::::e           
    BB:::::BBBBBB::::::Ba::::a    a:::::as:::::ssss::::::se::::::::e          
    B:::::::::::::::::B a:::::aaaa::::::as::::::::::::::s  e::::::::eeeeeeee  
    B::::::::::::::::B   a::::::::::aa:::as:::::::::::ss    ee:::::::::::::e  
    BBBBBBBBBBBBBBBBB     aaaaaaaaaa  aaaa sssssssssss        eeeeeeeeeeeeee  
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
*/
        /* 
            888888    db    88""Yb 88     888888      dP"Yb  888888      dP""b8  dP"Yb  88b 88 888888 888888 88b 88 888888 
              88     dPYb   88__dP 88     88__       dP   Yb 88__       dP   `" dP   Yb 88Yb88   88   88__   88Yb88   88   
              88    dP__Yb  88""Yb 88  .o 88""       Yb   dP 88""       Yb      Yb   dP 88 Y88   88   88""   88 Y88   88   
              88   dP""""Yb 88oodP 88ood8 888888      YbodP  88          YboodP  YbodP  88  Y8   88   888888 88  Y8   88   
         */
/**
 *      - Handling environment  FIND_ENV
 *          .Console            FIND_CONSOLE
 *          .Variables          FIND_VARS
 *          .Translations       FIND_TRANSLATIONS
 *      - Responsiveness        FIND_RESPONSIVE
 *      - Public return         FIND_PUBLIC
 *      
 */

/**
 *  This file is dependent on: jquery
 *  All the elements below are accessible through the _base prefix: _base.nameOfTheElement, ie: _base.translations.fr.close.
 */



//  FIND_ENV
/*
     /$$$$$$$$                      /$$                                                                   /$$    
    | $$_____/                     |__/                                                                  | $$    
    | $$       /$$$$$$$  /$$    /$$ /$$  /$$$$$$   /$$$$$$  /$$$$$$$  /$$$$$$/$$$$   /$$$$$$  /$$$$$$$  /$$$$$$  
    | $$$$$   | $$__  $$|  $$  /$$/| $$ /$$__  $$ /$$__  $$| $$__  $$| $$_  $$_  $$ /$$__  $$| $$__  $$|_  $$_/  
    | $$__/   | $$  \ $$ \  $$/$$/ | $$| $$  \__/| $$  \ $$| $$  \ $$| $$ \ $$ \ $$| $$$$$$$$| $$  \ $$  | $$    
    | $$      | $$  | $$  \  $$$/  | $$| $$      | $$  | $$| $$  | $$| $$ | $$ | $$| $$_____/| $$  | $$  | $$ /$$
    | $$$$$$$$| $$  | $$   \  $/   | $$| $$      |  $$$$$$/| $$  | $$| $$ | $$ | $$|  $$$$$$$| $$  | $$  |  $$$$/
    |________/|__/  |__/    \_/    |__/|__/       \______/ |__/  |__/|__/ |__/ |__/ \_______/|__/  |__/   \___/  
                                                                                                                 
                                                                                                                 
                                                                                                                 
*/
//  FIND_CONSOLE
        /*
             dP""b8  dP"Yb  88b 88 .dP"Y8  dP"Yb  88     888888 
            dP   `" dP   Yb 88Yb88 `Ybo." dP   Yb 88     88__   
            Yb      Yb   dP 88 Y88 o.`Y8b Yb   dP 88  .o 88""   
             YboodP  YbodP  88  Y8 8bodP'  YbodP  88ood8 888888 
        */
/**
 * @description Protect window.console method calls, e.g. console is not defined on IE unless dev tools are open, and IE doesn't define console.debug
 * @author [Vinicius Moraes - http://stackoverflow.com/users/2274855/vin%c3%adcius-moraes]  http://stackoverflow.com/questions/3326650/console-is-undefined-error-for-internet-explorer/1691694
 */
(function () {
    var method,
        methods = [
            "assert", "clear", "count", "debug", "dir", "dirxml", "error",
            "exception", "group", "groupCollapsed", "groupEnd", "info", "log",
            "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd",
            "timeStamp", "trace", "warn"
        ],
        length = methods.length,
        noop = function () {
            return true;
        },
        console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

// Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());



var _base = function () {



//  FIND_VARS
        /*
            Yb    dP    db    88""Yb 88    db    88""Yb 88     888888 .dP"Y8 
             Yb  dP    dPYb   88__dP 88   dPYb   88__dP 88     88__   `Ybo." 
              YbdP    dP__Yb  88"Yb  88  dP__Yb  88""Yb 88  .o 88""   o.`Y8b 
               YP    dP""""Yb 88  Yb 88 dP""""Yb 88oodP 88ood8 888888 8bodP' 
        */
/**
 * html: a shortcut to access DOM
 * customData: a var where you can store any var you need, push any content inside and retrieve it elsewhere
 * pageLng: the language of the page from the HTML lang attribute or "default"
 * @type {[type]}
 */
    var vars = {
        html: $("html"),
        customData: {},
        pageLng: $("html").attr("lang") !== undefined && $("html").attr("lang") !== "" ? $("html").attr("lang") : "default",
        touch: false,
        width: {
            "palm": [0, 720],
            "lap": [720, 1024],
            "portable": [0, 1024],
            "lap-and-up": [720, 10000],
            "desk": [1024, 10000]
        },
        socials: {
            instagram: {
                client_id: '',
                tagname: '',
                count: 20
            }
        }
    },



//  FIND_TRANSLATIONS
        /*
            888888 88""Yb    db    88b 88 .dP"Y8 88        db    888888 88  dP"Yb  88b 88 .dP"Y8 
              88   88__dP   dPYb   88Yb88 `Ybo." 88       dPYb     88   88 dP   Yb 88Yb88 `Ybo." 
              88   88"Yb   dP__Yb  88 Y88 o.`Y8b 88  .o  dP__Yb    88   88 Yb   dP 88 Y88 o.`Y8b 
              88   88  Yb dP""""Yb 88  Y8 8bodP' 88ood8 dP""""Yb   88   88  YbodP  88  Y8 8bodP' 
        */
    translations = {
        default: {
            close: "close",
            loading: "loading"
        },
        en: {
            close: "close",
            loading: "loading"
        },
        fr: {
            close: "fermer",
            loading: "chargement en cours"
        }
    };



//  FIND_RESPONSIVE
/*
    88""Yb 888888 .dP"Y8 88""Yb  dP"Yb  88b 88 .dP"Y8 88 Yb    dP 888888 88b 88 888888 .dP"Y8 .dP"Y8
    88__dP 88__   `Ybo." 88__dP dP   Yb 88Yb88 `Ybo." 88  Yb  dP  88__   88Yb88 88__   `Ybo." `Ybo."
    88"Yb  88""   o.`Y8b 88"""  Yb   dP 88 Y88 o.`Y8b 88   YbdP   88""   88 Y88 88""   o.`Y8b o.`Y8b
    88  Yb 888888 8bodP' 88      YbodP  88  Y8 8bodP' 88    YP    888888 88  Y8 888888 8bodP' 8bodP'
*/
    responsiveness = function () {
        var winW = $(window).width(),
            winWTmp = winW;
            sector = null,
            sectorTmp = '',
            detectWidth = function () {
                winWTmp = $(window).width();
                if (winWTmp !== winW || sectorTmp === '') {
                    winW = winWTmp;
                    if (winW >= vars.widths.palm[0] && winW < vars.widths.palm[1]) {
                        sectorTmp = 'palm';
                    }
                    if (winW >= vars.widths.lap[0] && winW < vars.widths.lap[1]) {
                        sectorTmp = 'lap';
                    }
                    if (winW >= vars.widths.desk[0]) {
                        sectorTmp = 'desk';
                    }
                }
                if (sectorTmp !== sector) {
                    sector = sectorTmp;
                    $(document).trigger(sector + '-enter');
                }
            };
        if (sector === null) {
            detectWidth();
            if (winW < vars.widths.desk[0]) {
                if (winW < vars.widths.lap[0]) {
                    sector = 'palm';
                } else {
                    sector = 'lap';
                }
            }
        }
        $(window).resize(detectWidth);
    };





//  FIND_PUBLIC
        /*
            88""Yb 888888 888888 88   88 88""Yb 88b 88 
            88__dP 88__     88   88   88 88__dP 88Yb88 
            88"Yb  88""     88   Y8   8P 88"Yb  88 Y88 
            88  Yb 888888   88   `YbodP' 88  Yb 88  Y8 
        */
    return {
        vars: vars,
        translations: translations,
        responsiveness: responsiveness
    };
}();