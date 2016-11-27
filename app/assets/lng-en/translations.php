<?php
/*
        CCCCCCCCCCCCC                                                                                               
     CCC::::::::::::C                                                                                               
   CC:::::::::::::::C                                                                                               
  C:::::CCCCCCCC::::C                                                                                               
 C:::::C       CCCCCC  ooooooooooo     mmmmmmm    mmmmmmm     mmmmmmm    mmmmmmm     ooooooooooo  nnnn  nnnnnnnn    
C:::::C              oo:::::::::::oo mm:::::::m  m:::::::mm mm:::::::m  m:::::::mm oo:::::::::::oon:::nn::::::::nn  
C:::::C             o:::::::::::::::m::::::::::mm::::::::::m::::::::::mm::::::::::o:::::::::::::::n::::::::::::::nn 
C:::::C             o:::::ooooo:::::m::::::::::::::::::::::m::::::::::::::::::::::o:::::ooooo:::::nn:::::::::::::::n
C:::::C             o::::o     o::::m:::::mmm::::::mmm:::::m:::::mmm::::::mmm:::::o::::o     o::::o n:::::nnnn:::::n
C:::::C             o::::o     o::::m::::m   m::::m   m::::m::::m   m::::m   m::::o::::o     o::::o n::::n    n::::n
C:::::C             o::::o     o::::m::::m   m::::m   m::::m::::m   m::::m   m::::o::::o     o::::o n::::n    n::::n
 C:::::C       CCCCCo::::o     o::::m::::m   m::::m   m::::m::::m   m::::m   m::::o::::o     o::::o n::::n    n::::n
  C:::::CCCCCCCC::::o:::::ooooo:::::m::::m   m::::m   m::::m::::m   m::::m   m::::o:::::ooooo:::::o n::::n    n::::n
   CC:::::::::::::::o:::::::::::::::m::::m   m::::m   m::::m::::m   m::::m   m::::o:::::::::::::::o n::::n    n::::n
     CCC::::::::::::Coo:::::::::::oom::::m   m::::m   m::::m::::m   m::::m   m::::moo:::::::::::oo  n::::n    n::::n
        CCCCCCCCCCCCC  ooooooooooo  mmmmmm   mmmmmm   mmmmmmmmmmm   mmmmmm   mmmmmm  ooooooooooo    nnnnnn    nnnnnn
 */
        /* 
          888888    db    88""Yb 88     888888      dP"Yb  888888      dP""b8  dP"Yb  88b 88 888888 888888 88b 88 888888 
            88     dPYb   88__dP 88     88__       dP   Yb 88__       dP   `" dP   Yb 88Yb88   88   88__   88Yb88   88   
            88    dP__Yb  88""Yb 88  .o 88""       Yb   dP 88""       Yb      Yb   dP 88 Y88   88   88""   88 Y88   88   
            88   dP""""Yb 88oodP 88ood8 888888      YbodP  88          YboodP  YbodP  88  Y8   88   888888 88  Y8   88   
         */
/**
 *      - General               FIND_GENERAL
 *      - head                  FIND_HEAD
 *      - Commons               FIND_COMMONS
 *          .header             FIND_HEADER
 *          .navigation         FIND_NAVIGATION
 *          .footer             FIND_FOOTER
 *      - Pages                 FIND_PAGES
 *          .index              FIND_INDEX
 *          .contact            FIND_CONTACT
 *          .404                FIND_404
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
$project__name = 'The Project Name';

$video__noFlash = 'The video cannot be played in your browser.';
$audio__unsupported = 'The sound cannot be played in your browser.';

$listDays = array('', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$listMonths = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');





//  FIND_HEAD
/*
     /$$   /$$                           /$$
    | $$  | $$                          | $$
    | $$  | $$  /$$$$$$   /$$$$$$   /$$$$$$$
    | $$$$$$$$ /$$__  $$ |____  $$ /$$__  $$
    | $$__  $$| $$$$$$$$  /$$$$$$$| $$  | $$
    | $$  | $$| $$_____/ /$$__  $$| $$  | $$
    | $$  | $$|  $$$$$$$|  $$$$$$$|  $$$$$$$
    |__/  |__/ \_______/ \_______/ \_______/
                                            
                                            
                                            
*/
$head__meta__keywords = 'default keywords';
$head__meta__description = 'default description';

$head__title = 'Default title - '.$project__name;





//  FIND_COMMONS
/*
      /$$$$$$                                                                     
     /$$__  $$                                                                    
    | $$  \__/  /$$$$$$  /$$$$$$/$$$$  /$$$$$$/$$$$   /$$$$$$  /$$$$$$$   /$$$$$$$
    | $$       /$$__  $$| $$_  $$_  $$| $$_  $$_  $$ /$$__  $$| $$__  $$ /$$_____/
    | $$      | $$  \ $$| $$ \ $$ \ $$| $$ \ $$ \ $$| $$  \ $$| $$  \ $$|  $$$$$$ 
    | $$    $$| $$  | $$| $$ | $$ | $$| $$ | $$ | $$| $$  | $$| $$  | $$ \____  $$
    |  $$$$$$/|  $$$$$$/| $$ | $$ | $$| $$ | $$ | $$|  $$$$$$/| $$  | $$ /$$$$$$$/
     \______/  \______/ |__/ |__/ |__/|__/ |__/ |__/ \______/ |__/  |__/|_______/ 
                                                                                  
                                                                                  
                                                                                  
*/
//  FIND_HEADER
        /*
            88  88 888888    db    8888b.  888888 88""Yb 
            88  88 88__     dPYb    8I  Yb 88__   88__dP 
            888888 88""    dP__Yb   8I  dY 88""   88"Yb  
            88  88 888888 dP""""Yb 8888Y"  888888 88  Yb 
        */
$header__menu = 'Menu';
$backHome = 'Back to the homepage';



        /*
            88b 88    db    Yb    dP 88  dP""b8    db    888888 88  dP"Yb  88b 88 
            88Yb88   dPYb    Yb  dP  88 dP   `"   dPYb     88   88 dP   Yb 88Yb88 
            88 Y88  dP__Yb    YbdP   88 Yb  "88  dP__Yb    88   88 Yb   dP 88 Y88 
            88  Y8 dP""""Yb    YP    88  YboodP dP""""Yb   88   88  YbodP  88  Y8 
        */
$navigation__texts = array(
  'products' => 'Our Products',
  'services' => 'Our Services',
  'contact' => 'Contacts'
);
$navigation__search = 'Search';
$contact__title = 'Contact us';
$contact__btn = 'Contact us';



//  FIND_FOOTER
        /*
            888888  dP"Yb   dP"Yb  888888 888888 88""Yb 
            88__   dP   Yb dP   Yb   88   88__   88__dP 
            88""   Yb   dP Yb   dP   88   88""   88"Yb  
            88      YbodP   YbodP    88   888888 88  Yb 
        */
$footer__back_to_top = 'Back to the top of the page';
$footer__text = array(
    'tel' => 'Tel.',
    'fax' => 'Fax.'
);





//  FIND_PAGES
/*
     /$$$$$$$                                        
    | $$__  $$                                       
    | $$  \ $$ /$$$$$$   /$$$$$$   /$$$$$$   /$$$$$$$
    | $$$$$$$/|____  $$ /$$__  $$ /$$__  $$ /$$_____/
    | $$____/  /$$$$$$$| $$  \ $$| $$$$$$$$|  $$$$$$ 
    | $$      /$$__  $$| $$  | $$| $$_____/ \____  $$
    | $$     |  $$$$$$$|  $$$$$$$|  $$$$$$$ /$$$$$$$/
    |__/      \_______/ \____  $$ \_______/|_______/ 
                        /$$  \ $$                    
                       |  $$$$$$/                    
                        \______/                     
*/
//  FIND_INDEX
        /*
            88 88b 88 8888b.  888888 Yb  dP 
            88 88Yb88  8I  Yb 88__    YbdP  
            88 88 Y88  8I  dY 88""    dPYb  
            88 88  Y8 8888Y"  888888 dP  Yb 
        */



//  FIND_CONTACT
        /*
             dP""b8  dP"Yb  88b 88 888888    db     dP""b8 888888 
            dP   `" dP   Yb 88Yb88   88     dPYb   dP   `"   88   
            Yb      Yb   dP 88 Y88   88    dP__Yb  Yb        88   
             YboodP  YbodP  88  Y8   88   dP""""Yb  YboodP   88   
        */



//  FIND_404
        /*
              dP88   dP"Yb    dP88  
             dP 88  dP   Yb  dP 88  
            d888888 Yb   dP d888888 
                88   YbodP      88  
        */
$p404__text = 'Too bad. This page doesn\'t exist anymore.';
$p404__back = 'Back to the previous page';
$p404__home = 'Homepage';
