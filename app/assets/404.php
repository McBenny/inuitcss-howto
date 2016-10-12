<?php
$path = '.';
$dev = isset($_GET['dev']) && $_GET['dev'] == 1 ? true : false;

require($path.'/config.php');

require($path.'/lng-'.$languages['active'].'/translations.php');

include ($path.'/'.$varSite['includes'].'/head__html.php');

$head__title = '404';

include ($path.'/'.$varSite['includes'].'/head__head.php');
?>

<body id="top">

    <div class="p404">
        <header>
            <h1 class="article__title">404</h1>
        </header>
        <div class="layout__item">
            <div class="lede">
                <p><?php echo $p404__text; ?></p>
            </div>
            <ul class="p404__links">
                <li class="links__item"><a href="#pagePrev" class="links__item--link jsHook goBack"><?php echo $p404__back; ?></a></li>
                <li class="links__item"><a href="#home" class="links__item--link"><?php echo $p404__home; ?></a></li>
            </ul>
        </div>
    </div>

    <?php include ($path.'/'.$varSite['includes'].'/foot__javascripts.php'); ?>
</body>
</html>
