<?php
/*
                                                                                                             
                                                                                                             
            CCCCCCCCCCCCC                                      ffffffffffffffff    iiii                      
         CCC::::::::::::C                                     f::::::::::::::::f  i::::i                     
       CC:::::::::::::::C                                    f::::::::::::::::::f  iiii                      
      C:::::CCCCCCCC::::C                                    f::::::fffffff:::::f                            
     C:::::C       CCCCCC   ooooooooooo   nnnn  nnnnnnnn     f:::::f       ffffffiiiiiii    ggggggggg   ggggg
    C:::::C               oo:::::::::::oo n:::nn::::::::nn   f:::::f             i:::::i   g:::::::::ggg::::g
    C:::::C              o:::::::::::::::on::::::::::::::nn f:::::::ffffff        i::::i  g:::::::::::::::::g
    C:::::C              o:::::ooooo:::::onn:::::::::::::::nf::::::::::::f        i::::i g::::::ggggg::::::gg
    C:::::C              o::::o     o::::o  n:::::nnnn:::::nf::::::::::::f        i::::i g:::::g     g:::::g 
    C:::::C              o::::o     o::::o  n::::n    n::::nf:::::::ffffff        i::::i g:::::g     g:::::g 
    C:::::C              o::::o     o::::o  n::::n    n::::n f:::::f              i::::i g:::::g     g:::::g 
     C:::::C       CCCCCCo::::o     o::::o  n::::n    n::::n f:::::f              i::::i g::::::g    g:::::g 
      C:::::CCCCCCCC::::Co:::::ooooo:::::o  n::::n    n::::nf:::::::f            i::::::ig:::::::ggggg:::::g 
       CC:::::::::::::::Co:::::::::::::::o  n::::n    n::::nf:::::::f            i::::::i g::::::::::::::::g 
         CCC::::::::::::C oo:::::::::::oo   n::::n    n::::nf:::::::f            i::::::i  gg::::::::::::::g 
            CCCCCCCCCCCCC   ooooooooooo     nnnnnn    nnnnnnfffffffff            iiiiiiii    gggggggg::::::g 
                                                                                                     g:::::g 
                                                                                         gggggg      g:::::g 
                                                                                         g:::::gg   gg:::::g 
                                                                                          g::::::ggg:::::::g 
                                                                                           gg:::::::::::::g  
                                                                                             ggg::::::ggg    
                                                                                                gggggg       
*/
        /* 
            888888    db    88""Yb 88     888888      dP"Yb  888888      dP""b8  dP"Yb  88b 88 888888 888888 88b 88 888888 
              88     dPYb   88__dP 88     88__       dP   Yb 88__       dP   `" dP   Yb 88Yb88   88   88__   88Yb88   88   
              88    dP__Yb  88""Yb 88  .o 88""       Yb   dP 88""       Yb      Yb   dP 88 Y88   88   88""   88 Y88   88   
              88   dP""""Yb 88oodP 88ood8 888888      YbodP  88          YboodP  YbodP  88  Y8   88   888888 88  Y8   88   
         */
/**
 *      - General               FIND_GENERAL
 *          .languages          FIND_LANGUAGES
 *          .Emails             FIND_EMAILS
 *          .analytics          FIND_GA
 *          .navigation URLs    FIND_NAV
 *      - Socials               FIND_SOCIALS
 *          .Facebook           FIND_FACEBOOK
 *          .instagram          FIND_INSTAGRAM
 *          .Twitter            FIND_TWITTER
 *      - CSS                   FIND_CSS
 *      - Javascripts           FIND_JS
 *      - Development           FIND_DEV
 *          .variables          FIND_DEV_VARS
 *          
 */





//  FIND_GENERAL
/*
      /$$$$$$                                                   /$$
     /$$__  $$                                                 | $$
    | $$  \__/  /$$$$$$  /$$$$$$$   /$$$$$$   /$$$$$$  /$$$$$$ | $$
    | $$ /$$$$ /$$__  $$| $$__  $$ /$$__  $$ /$$__  $$|____  $$| $$
    | $$|_  $$| $$$$$$$$| $$  \ $$| $$$$$$$$| $$  \__/ /$$$$$$$| $$
    | $$  \ $$| $$_____/| $$  | $$| $$_____/| $$      /$$__  $$| $$
    |  $$$$$$/|  $$$$$$$| $$  | $$|  $$$$$$$| $$     |  $$$$$$$| $$
     \______/  \_______/|__/  |__/ \_______/|__/      \_______/|__/
                                                                   
                                                                   
                                                                   
*/
error_reporting(0);

//  FIND_VARS
        /*
            Yb    dP    db    88""Yb 88    db    88""Yb 88     888888 .dP"Y8 
             Yb  dP    dPYb   88__dP 88   dPYb   88__dP 88     88__   `Ybo." 
              YbdP    dP__Yb  88"Yb  88  dP__Yb  88""Yb 88  .o 88""   o.`Y8b 
               YP    dP""""Yb 88  Yb 88 dP""""Yb 88oodP 88ood8 888888 8bodP' 
        */
$varSite = array(
    'includes' => 'includes-html',
    'salt' => 'suXeFA6a+?BREQe_eyez-bud3eCuVeTr',
    'robots' => 'index, follow'
);
//  FIND_LANGUAGES
        /*
            88        db    88b 88  dP""b8 88   88    db     dP""b8 888888 .dP"Y8 
            88       dPYb   88Yb88 dP   `" 88   88   dPYb   dP   `" 88__   `Ybo." 
            88  .o  dP__Yb  88 Y88 Yb  "88 Y8   8P  dP__Yb  Yb  "88 88""   o.`Y8b 
            88ood8 dP""""Yb 88  Y8  YboodP `YbodP' dP""""Yb  YboodP 888888 8bodP' 
        */
$languages = array(
    'default' => 'en',
    'active' => 'en',
    'list' => array(
        'ar',
        'cn',
        'de',
        'en',
        'es',
        'fr',
        'it',
        'ja',
        'nl',
        'pt',
        'ru'
    )
);



//  FIND_EMAILS
        /*
            888888 8b    d8    db    88 88     .dP"Y8 
            88__   88b  d88   dPYb   88 88     `Ybo." 
            88""   88YbdP88  dP__Yb  88 88  .o o.`Y8b 
            888888 88 YY 88 dP""""Yb 88 88ood8 8bodP' 
        */
$emails = array(
    'ar' => array(
        'contact' => 'contact@domain.ar'
    ),
    'cn' => array(
        'contact' => 'contact@domain.cn'
    ),
    'de' => array(
        'contact' => 'contact@domain.de'
    ),
    'en' => array(
        'contact' => 'contact@domain.com'
    ),
    'es' => array(
        'contact' => 'contact@domain.es'
    ),
    'fr' => array(
        'contact' => 'contact@domain.fr'
    ),
    'it' => array(
        'contact' => 'contact@domain.it'
    ),
    'ja' => array(
        'contact' => 'contact@domain.ja'
    ),
    'nl' => array(
        'contact' => 'contact@domain.nl'
    ),
    'pt' => array(
        'contact' => 'contact@domain.pt'
    ),
    'ru' => array(
        'contact' => 'contact@domain.ru'
    )
);



//  FIND_GA
        /*
             dP""b8  dP"Yb   dP"Yb   dP""b8 88     888888             db    88b 88    db    88     Yb  dP 888888 88  dP""b8 .dP"Y8 
            dP   `" dP   Yb dP   Yb dP   `" 88     88__   ________   dPYb   88Yb88   dPYb   88      YbdP    88   88 dP   `" `Ybo." 
            Yb  "88 Yb   dP Yb   dP Yb  "88 88  .o 88""   """"""""  dP__Yb  88 Y88  dP__Yb  88  .o   8P     88   88 Yb      o.`Y8b 
             YboodP  YbodP   YbodP   YboodP 88ood8 888888          dP""""Yb 88  Y8 dP""""Yb 88ood8  dP      88   88  YboodP 8bodP' 
        */
$googleAnalytics = array(
    'url' => '//www.google-analytics.com/analytics.js',
    'ua' => 'UA-62153009-1'
);



//  FIND_NAV
        /*
            88b 88    db    Yb    dP 88  dP""b8    db    888888 88  dP"Yb  88b 88     88   88 88""Yb 88     .dP"Y8 
            88Yb88   dPYb    Yb  dP  88 dP   `"   dPYb     88   88 dP   Yb 88Yb88     88   88 88__dP 88     `Ybo." 
            88 Y88  dP__Yb    YbdP   88 Yb  "88  dP__Yb    88   88 Yb   dP 88 Y88     Y8   8P 88"Yb  88  .o o.`Y8b 
            88  Y8 dP""""Yb    YP    88  YboodP dP""""Yb   88   88  YbodP  88  Y8     `YbodP' 88  Yb 88ood8 8bodP' 
        */
$navigation__urls = array(
    'home' => '<i class="fa fa-home" aria-hidden="true"></i>',
    'wrapper' => 'The main wrapper',
    'layout' => 'The layout system',
    'margins' => 'The margins',
    'paddings' => 'The paddings',
    'headings' => 'The headings',
    'hiding' => 'Hiding content',
    'block' => 'Block structure',
    'box' => 'The "box" effect',
    'crop' => 'Cropping feature',
    'ratio' => 'Forcing ratios',
    'media' => 'The "Media" object',
    'flag' => 'The "Flag" object',
    'list-bare' => 'The bare list',
    'list-inline' => 'The inline list',
    'pack' => 'The "Pack" object',
    'table' => 'Table management'
);
$contact__mail = 'contact@domain.com';





//  FIND_SOCIALS
/*
      /$$$$$$                      /$$           /$$          
     /$$__  $$                    |__/          | $$          
    | $$  \__/  /$$$$$$   /$$$$$$$ /$$  /$$$$$$ | $$  /$$$$$$$
    |  $$$$$$  /$$__  $$ /$$_____/| $$ |____  $$| $$ /$$_____/
     \____  $$| $$  \ $$| $$      | $$  /$$$$$$$| $$|  $$$$$$ 
     /$$  \ $$| $$  | $$| $$      | $$ /$$__  $$| $$ \____  $$
    |  $$$$$$/|  $$$$$$/|  $$$$$$$| $$|  $$$$$$$| $$ /$$$$$$$/
     \______/  \______/  \_______/|__/ \_______/|__/|_______/ 
                                                              
                                                              
                                                              
*/
$socials = array(
//  FIND_FACEBOOK
        /*
            888888    db     dP""b8 888888 88""Yb  dP"Yb   dP"Yb  88  dP 
            88__     dPYb   dP   `" 88__   88__dP dP   Yb dP   Yb 88odP  
            88""    dP__Yb  Yb      88""   88""Yb Yb   dP Yb   dP 88"Yb  
            88     dP""""Yb  YboodP 888888 88oodP  YbodP   YbodP  88  Yb 
        */
    'facebook' => array(
        'appId' => '130680013681440',
        'title' => 'The title',
        'type' => '',
        'url' => '',
        'img' => '',
        'siteName' => 'Name of the site',
        'admin' => '123456'
    ),



//  FIND_INSTAGRAM
        /*
            88 88b 88 .dP"Y8 888888    db     dP""b8 88""Yb    db    8b    d8 
            88 88Yb88 `Ybo."   88     dPYb   dP   `" 88__dP   dPYb   88b  d88 
            88 88 Y88 o.`Y8b   88    dP__Yb  Yb  "88 88"Yb   dP__Yb  88YbdP88 
            88 88  Y8 8bodP'   88   dP""""Yb  YboodP 88  Yb dP""""Yb 88 YY 88 
        */
    'instagram' => array(
        'client_id' => '96b797d00ead490f8a471e7663ded25d',
        'username' => 'elvis',
        'tagname' => 'galah'
    ),



//  FIND_TWITTER
        /*
            888888 Yb        dP 88 888888 888888 888888 88""Yb 
              88    Yb  db  dP  88   88     88   88__   88__dP 
              88     YbdPYbdP   88   88     88   88""   88"Yb  
              88      YP  YP    88   88     88   888888 88  Yb 
        */
    'twitter' => array(
        'screen-name' => 'McBennyDev',
        'widget-id' => '628202967171264512'
    )
);





//  FIND_CSS
/*
      /$$$$$$   /$$$$$$   /$$$$$$ 
     /$$__  $$ /$$__  $$ /$$__  $$
    | $$  \__/| $$  \__/| $$  \__/
    | $$      |  $$$$$$ |  $$$$$$ 
    | $$       \____  $$ \____  $$
    | $$    $$ /$$  \ $$ /$$  \ $$
    |  $$$$$$/|  $$$$$$/|  $$$$$$/
     \______/  \______/  \______/ 
                                  
                                  
                                  
*/
/**
 *      These variables contain the paths to the css files.
 *      - $head__css__list      all the files to include everywhere
 *      - $head__css__prepend   this variable shall be place and filled in top
 *                              of any page template wherever you need to
 *                              include CSS files BEFORE the inclusion of the
 *                              default files
 *      - $head__css__append    this variable shall be place and filled in top
 *                              of any page template wherever you need to
 *                              include CSS files AFTER the inclusion of the
 *                              default files
 *
 *      Each value is an array containing:
 *          - "path": the path to the CSS file -required-,
 *          - "media": the target media, defaults to 'screen' -optional-.
 */
$head__css__prepend = array(
    'dev' => array(
        'path' => $path.'/css/font-awesome.min.css',
        'media' => 'screen'
    ),
    'prod' => array(
        'path' => $path.'/css/font-awesome.min.css',
        'media' => 'screen'
    )
);
$head__css__list = array(
    'dev' => array(
        'path' => $path.'/css/main.css',
        'media' => 'screen'
    ),
    'prod' => array(
        'path' => $path.'/css/main.min.css',
        'media' => 'screen'
    )
);
$head__css__append = array();





//  FIND_JS
/*
        /$$$$$                                                             /$$             /$$             
       |__  $$                                                            |__/            | $$             
          | $$  /$$$$$$  /$$    /$$ /$$$$$$   /$$$$$$$  /$$$$$$$  /$$$$$$  /$$  /$$$$$$  /$$$$$$   /$$$$$$$
          | $$ |____  $$|  $$  /$$/|____  $$ /$$_____/ /$$_____/ /$$__  $$| $$ /$$__  $$|_  $$_/  /$$_____/
     /$$  | $$  /$$$$$$$ \  $$/$$/  /$$$$$$$|  $$$$$$ | $$      | $$  \__/| $$| $$  \ $$  | $$   |  $$$$$$ 
    | $$  | $$ /$$__  $$  \  $$$/  /$$__  $$ \____  $$| $$      | $$      | $$| $$  | $$  | $$ /$$\____  $$
    |  $$$$$$/|  $$$$$$$   \  $/  |  $$$$$$$ /$$$$$$$/|  $$$$$$$| $$      | $$| $$$$$$$/  |  $$$$//$$$$$$$/
     \______/  \_______/    \_/    \_______/|_______/  \_______/|__/      |__/| $$____/    \___/ |_______/ 
                                                                              | $$                         
                                                                              | $$                         
                                                                              |__/                         
*/
/**
 *      These variables contain the paths to the javascripts files.
 *      - $foot__js__list       all the files to include everywhere
 *      - $foot__js__prepend    this variable shall be place and filled in top
 *                              of any page template wherever you need to
 *                              include javascript files BEFORE the inclusion of
 *                              the default files
 *      - $foot__js__append     this variable shall be place and filled in top
 *                              of any page template wherever you need to
 *                              include javascript files AFTER the inclusion of
 *                              the default files
 */
$foot__js__prepend = array();
$foot__js__list = array(
    'dev' => array(
      $path.'/scripts/vendors.js',
      $path.'/scripts/main.js'
    ),
    'prod' => array(
      $path.'/scripts/vendors.min.js',
      $path.'/scripts/main.min.js'
    )
);
$foot__js__append = array();





//  FIND_DEV
/*
     /$$$$$$$                                /$$                                                         /$$    
    | $$__  $$                              | $$                                                        | $$    
    | $$  \ $$  /$$$$$$  /$$    /$$ /$$$$$$ | $$  /$$$$$$   /$$$$$$  /$$$$$$/$$$$   /$$$$$$  /$$$$$$$  /$$$$$$  
    | $$  | $$ /$$__  $$|  $$  /$$//$$__  $$| $$ /$$__  $$ /$$__  $$| $$_  $$_  $$ /$$__  $$| $$__  $$|_  $$_/  
    | $$  | $$| $$$$$$$$ \  $$/$$/| $$$$$$$$| $$| $$  \ $$| $$  \ $$| $$ \ $$ \ $$| $$$$$$$$| $$  \ $$  | $$    
    | $$  | $$| $$_____/  \  $$$/ | $$_____/| $$| $$  | $$| $$  | $$| $$ | $$ | $$| $$_____/| $$  | $$  | $$ /$$
    | $$$$$$$/|  $$$$$$$   \  $/  |  $$$$$$$| $$|  $$$$$$/| $$$$$$$/| $$ | $$ | $$|  $$$$$$$| $$  | $$  |  $$$$/
    |_______/  \_______/    \_/    \_______/|__/ \______/ | $$____/ |__/ |__/ |__/ \_______/|__/  |__/   \___/  
                                                          | $$                                                  
                                                          | $$                                                  
                                                          |__/                                                  
*/
//  FIND_DEV_VARS
        /*
            Yb    dP    db    88""Yb 88    db    88""Yb 88     888888 .dP"Y8 
             Yb  dP    dPYb   88__dP 88   dPYb   88__dP 88     88__   `Ybo." 
              YbdP    dP__Yb  88"Yb  88  dP__Yb  88""Yb 88  .o 88""   o.`Y8b 
               YP    dP""""Yb 88  Yb 88 dP""""Yb 88oodP 88ood8 888888 8bodP' 
        */
$devvars = array(
    'dev' => true,                          // Set to true to call minified styles and js
    'log' => '',
    'pageList' => array(
        array(
            'name' => 'Home page',
            'url' => './index.php',
            'desk' => 1,
            'mob' => 0
        ),
        array(
            'name' => '404',
            'url' => './404.php',
            'desk' => 0,
            'mob' => 0
        )
    )
);

/**
 * If in dev mode, different settings:
 */
if ($devvars['dev'] === true) {
    error_reporting(E_ALL);
    $varSite['robots'] = 'noindex, nofollow';
}